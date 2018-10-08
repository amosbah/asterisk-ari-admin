<?php

require_once __DIR__ . '/lib/vendor/autoload.php';

use Supervisor\Configuration\Configuration;
use Supervisor\Configuration\Section\Supervisord;
use Supervisor\Configuration\Section\Program;
use Indigo\Ini\Renderer;
use Supervisor\Configuration\Writer\IniFileWriter;

require __DIR__ . '/lib/SupervisorClient.php';
use SupervisorClient\SupervisorClient;

use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;

class AppsController extends DooController {

	function show_apps() {
		$data['title'] = 'APPS';
		$data['content'] = 'APPS:';
		
		$data['rootUrl'] = Doo::conf()->APP_URL;
		
		$data['apps'] = Doo::db()->find('Apps');
		$data['stt'] = array();
		foreach ($data['apps'] as $app) {
              //TODO: Optimize
		      $data['stt'][$app->{'filename'}] = $this->__get_app_status($app->{'filename'});
		}
		
		//Simply load and render the template
		$this->renderc('apps-view', $data);
	}

	function show_app() {
		$appid = $this->params['appid'];

		$data['title'] = 'APP:';
		
		$data['rootUrl'] = Doo::conf()->APP_URL;
		
		Doo::loadModel('Apps');
		$apps_obj = new Apps;
		$app_data = $apps_obj->viewAppItem($appid);
		
		foreach ($app_data as $app) {
		      $data["id"] = $app["id"];
		      $data["name"] = $app["name"];
		      $data["description"] = $app["description"];
		      $data["filename"] = $app["filename"];
		      $data["command"] = $app["command"];
		      $data["creation_date"] = $app["creation_date"];
		      $data["context"] = $app["context"];
		      $data["extension"] = $app["extension"];
		      $data["status"] = $this->__get_app_status($data["filename"]);
		}
		
		$this->renderc('app-view', $data);

	}
	
	/*function show_app() {
		$appid = $this->params['appid'];

		$data['title'] = 'APP:';
		
		$data['rootUrl'] = Doo::conf()->APP_URL;
		
		Doo::loadModel('Apps');
		$apps_obj = new Apps;
		$apps_obj->id = $appid;
		
		Doo::db()->find( $apps_obj, array('limit'=>1) );
		
		$data["id"] = $apps_obj->id;
		$data["name"] = $apps_obj->name;
		$data["description"] = $apps_obj->description;
		$data["filename"] = $apps_obj->filename;
		$data["command"] = $apps_obj->command;
		$data["creation_date"] = $apps_obj->creation_date;
		$data["context"] = $apps_obj->context;
		$data["extension"] = $apps_obj->extension;
		$data["status"] = $this->__get_app_status($data["filename"]);

		
		$this->renderc('app-view', $data);

	}*/
	
	function add_app_get() {
		$data['title'] = 'ADD APP';
		$data['content'] = 'ADD APP:';
		
		$data['rootUrl'] = Doo::conf()->APP_URL;

		//Simply load and render the template
		$this->renderc('new-app', $data);
	}
	
	function __add_app_supervisor($dir,$pname,$command) {
	    $config = new Configuration;
	    $renderer = new Renderer;
	    
	    $properties = array('directory' => $dir, 'command' => $command, 'autostart' => 'false', 'autorestart' => 'false', 'redirect_stderr' => 'true');

	    $section = new Program($pname, $properties);
	    $config->addSection($section);
	    
	    $adapter = new Local(Doo::conf()->SUPERVISOR_CNF_FLD);
	    $filesystem = new Filesystem($adapter);
	    
	    $writer = new IniFileWriter($filesystem,$pname.'.conf');
	    
	    $writer->write($config);
	    $this->__reload_supervisord();
	}
	
	function __reload_supervisord() {
		shell_exec(Doo::conf()->SUPERVISORCTL_BIN . ' --username=' .Doo::conf()->SUPERVISOR_USR. ' --password=' .Doo::conf()->SUPERVISOR_PWD. ' reread');
		
		shell_exec(Doo::conf()->SUPERVISORCTL_BIN . ' --username=' .Doo::conf()->SUPERVISOR_USR. ' --password=' .Doo::conf()->SUPERVISOR_PWD. ' update');
	}
	
	function __add_app_dialplan($context,$extension,$name) {
	    	Doo::loadModel('AstConfig');

		$config = new AstConfig;
		$config->filename = 'extensions.conf';
		$config->category = $context;
		$config->var_name = 'exten';
		$config->var_val = $extension . ',1,Stasis(' .$name. ')';

		//The result is the last inserted Id
		$result = Doo::db()->insert( $config );
	}
	
	function __reload_asterisk() {
		$output = shell_exec('/usr/sbin/asterisk -x "core reload"');
	}
	
	function __get_app_status($appname) {
        $supervisor = new SupervisorClient('127.0.0.1', 9001);
        $supervisor->setAuth(Doo::conf()->SUPERVISOR_USR, Doo::conf()->SUPERVISOR_PWD);
        $supervisor->setTimeout(10000);  // microseconds
        $processInfo = $supervisor->getProcessInfo($appname);
        $state = $processInfo["statename"];
        
		/*$status = 'UNKNOWN_00';
		$output = shell_exec(Doo::conf()->SUPERVISORCTL_BIN . ' --username=' .Doo::conf()->SUPERVISOR_USR. ' --password=' .Doo::conf()->SUPERVISOR_PWD. ' status ' .$appname);
		if ( (stripos($output,$appname)!== false) && (stripos($output,'No such process')===false) ) {
		    $data = preg_split('/\s+/', $output);
		    $status = $data[1];
		}
		else {
		    $status = 'UNKNOWN';
		}*/
		
		return $state;
	}
	
	function add_app_post() {
		$time = time();
		
		$name = $_POST["name"];
		$description = $_POST["description"];
		//$command = str_replace($_FILES["fileToUpload"]["name"],$time . '_' . basename($_FILES["fileToUpload"]["name"]),$_POST["command"]);
		//$context = $_POST["context"];
		//$command = 'node ' . $time . '_' . basename($_FILES["fileToUpload"]["name"]);
        $command = $time . '_' . basename($_FILES["fileToUpload"]["name"]);
		$context = 'apps';
		$extension = mt_rand(7000,99999);
		$filename = $time . '_' . basename($_FILES["fileToUpload"]["name"]);
		
		if (($name == "") || ($command == "") || ($context == "") || ($extension == "") || ($filename == "") ) {
		    return Doo::conf()->APP_URL . 'apps';
		}
		
		// TODO: Check if extension already exists in context "apps"

		//$target_dir = Doo::conf()->APP_URL . 'global/apps/';

		$target_dir = Doo::conf()->SITE_PATH . 'global/apps/' . $time . '_' . $name;
		mkdir($target_dir, 0777);
		$target_file = $target_dir . '/' . $time . '_' . basename($_FILES["fileToUpload"]["name"]);
		
		$uploadOk = 1;
		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
			echo "Sorry, there was an error uploading your file.";
		    }
		}
		
		Doo::loadModel('Apps');

		$app = new Apps;
		$app->name = $name;
		$app->description = $description;
		$app->filename = $filename;
		$app->command = $command;
		//$app->creation_date = $time;
		$app->context = $context;
		$app->extension = $extension;

		//The result is the last inserted Id
		$result = Doo::db()->insert( $app );
		
		$this->__add_app_supervisor($target_dir,$filename,$command);
		$this->__add_app_dialplan($context,$extension,$name);
		$this->__reload_asterisk();
		
		return Doo::conf()->APP_URL . 'apps';

	}
	
	function start_app() {
		
		$appid = $this->params['appid'];
		
		$data['title'] = 'APP:';
		
		$data['rootUrl'] = Doo::conf()->APP_URL;
		
		Doo::loadModel('Apps');
		$apps_obj = new Apps;
		$app_data = $apps_obj->viewAppItem($appid);
		
		foreach ($app_data as $app) {
		      $data["id"] = $app["id"];
		      $data["name"] = $app["name"];
		      $data["description"] = $app["description"];
		      $data["filename"] = $app["filename"];
		      $data["command"] = $app["command"];
		      $data["creation_date"] = $app["creation_date"];
		      $data["context"] = $app["context"];
		      $data["extension"] = $app["extension"];
		      $data["status"] = $this->__get_app_status($data["filename"]);
		}
		if ($data["status"] !== 'RUNNING' && $data["status"] !== 'STARTING') {
                $supervisor = new SupervisorClient('127.0.0.1', 9001);
                $supervisor->setAuth(Doo::conf()->SUPERVISOR_USR, Doo::conf()->SUPERVISOR_PWD);
                $supervisor->setTimeout(10000);  // microseconds
                
                try {
                    $supervisor->startProcess($data["filename"], false);
                }
                catch(Exception $e) {
                    echo 'Message: ' .$e->getMessage();
                }

                /*shell_exec(Doo::conf()->SUPERVISORCTL_BIN . ' --username=' .Doo::conf()->SUPERVISOR_USR. ' --password=' .Doo::conf()->SUPERVISOR_PWD. ' start ' .$data["filename"]);*/
		}
		return Doo::conf()->APP_URL . 'apps/view/' . $appid;
	}
	
	function stop_app() {
	      	$appid = $this->params['appid'];
		
		$data['title'] = 'APP:';
		
		$data['rootUrl'] = Doo::conf()->APP_URL;
		
		Doo::loadModel('Apps');
		$apps_obj = new Apps;
		$app_data = $apps_obj->viewAppItem($appid);
		
		foreach ($app_data as $app) {
		      $data["id"] = $app["id"];
		      $data["name"] = $app["name"];
		      $data["description"] = $app["description"];
		      $data["filename"] = $app["filename"];
		      $data["command"] = $app["command"];
		      $data["creation_date"] = $app["creation_date"];
		      $data["context"] = $app["context"];
		      $data["extension"] = $app["extension"];
		      $data["status"] = $this->__get_app_status($data["filename"]);
		}
        if ($data["status"] !== 'STOPPED') {
                $supervisor = new SupervisorClient('127.0.0.1', 9001);
                $supervisor->setAuth(Doo::conf()->SUPERVISOR_USR, Doo::conf()->SUPERVISOR_PWD);
                $supervisor->setTimeout(10000);  // microseconds
                
                try {
                    $supervisor->stopProcess($data["filename"], false);
                }
                catch(Exception $e) {
                    echo 'Message: ' .$e->getMessage();
                }

                /*shell_exec(Doo::conf()->SUPERVISORCTL_BIN . ' --username=' .Doo::conf()->SUPERVISOR_USR. ' --password=' .Doo::conf()->SUPERVISOR_PWD. ' stop ' .$data["filename"]);*/
		}

		return Doo::conf()->APP_URL . 'apps/view/' . $appid;
	}
	
	function restart_app() {
		$appid = $this->params['appid'];
		
		$data['title'] = 'APP:';
		
		$data['rootUrl'] = Doo::conf()->APP_URL;
		
		Doo::loadModel('Apps');
		$apps_obj = new Apps;
		$app_data = $apps_obj->viewAppItem($appid);
		
		foreach ($app_data as $app) {
		      $data["id"] = $app["id"];
		      $data["name"] = $app["name"];
		      $data["description"] = $app["description"];
		      $data["filename"] = $app["filename"];
		      $data["command"] = $app["command"];
		      $data["creation_date"] = $app["creation_date"];
		      $data["context"] = $app["context"];
		      $data["extension"] = $app["extension"];
		      $data["status"] = $this->__get_app_status($data["filename"]);
		}
		/*shell_exec(Doo::conf()->SUPERVISORCTL_BIN . ' --username=' .Doo::conf()->SUPERVISOR_USR. ' --password=' .Doo::conf()->SUPERVISOR_PWD. ' stop ' .$data["filename"]);
		
		shell_exec(Doo::conf()->SUPERVISORCTL_BIN . ' --username=' .Doo::conf()->SUPERVISOR_USR. ' --password=' .Doo::conf()->SUPERVISOR_PWD. ' start ' .$data["filename"]);*/
		
        //if ($data["status"] !== 'STOPPED') {
                $supervisor = new SupervisorClient('127.0.0.1', 9001);
                $supervisor->setAuth(Doo::conf()->SUPERVISOR_USR, Doo::conf()->SUPERVISOR_PWD);
                $supervisor->setTimeout(10000);  // microseconds
                
                try {
                    $supervisor->stopProcess($data["filename"], true);
                }
                catch(Exception $e) {
                    echo 'Message: ' .$e->getMessage();
                }

                /*shell_exec(Doo::conf()->SUPERVISORCTL_BIN . ' --username=' .Doo::conf()->SUPERVISOR_USR. ' --password=' .Doo::conf()->SUPERVISOR_PWD. ' stop ' .$data["filename"]);*/
		//}
        //if ($data["status"] !== 'RUNNING') {
                $supervisor = new SupervisorClient('127.0.0.1', 9001);
                $supervisor->setAuth(Doo::conf()->SUPERVISOR_USR, Doo::conf()->SUPERVISOR_PWD);
                $supervisor->setTimeout(10000);  // microseconds
                
                try {
                    $supervisor->startProcess($data["filename"], false);
                }
                catch(Exception $e) {
                    echo 'Message: ' .$e->getMessage();
                }

                /*shell_exec(Doo::conf()->SUPERVISORCTL_BIN . ' --username=' .Doo::conf()->SUPERVISOR_USR. ' --password=' .Doo::conf()->SUPERVISOR_PWD. ' start ' .$data["filename"]);*/
		//}

		return Doo::conf()->APP_URL . 'apps/view/' . $appid;
	}
	
	function delete_app() {
		$appid = $this->params['appid'];
		
		Doo::loadModel('Apps');
		$apps_obj = new Apps;
		$apps_obj->id = $appid;
		$app = Doo::db()->find( $apps_obj, array('limit'=>1) );
		
		shell_exec(Doo::conf()->SUPERVISORCTL_BIN . ' --username=' .Doo::conf()->SUPERVISOR_USR. ' --password=' .Doo::conf()->SUPERVISOR_PWD. ' stop ' .$app->filename);
		if (file_exists(Doo::conf()->SUPERVISOR_CNF_FLD .$app->filename. '.conf'))
		{
		  unlink(Doo::conf()->SUPERVISOR_CNF_FLD .$app->filename. '.conf');
		}
		
		$this->__reload_supervisord();
		
		//rmdir(Doo::conf()->APPS_PATH .$app->filename);
		
		Doo::loadModel('AstConfig');
		$config_obj = new AstConfig;
		$config_obj->var_val = $app->extension . ',1,Stasis(' .$app->name. ')';
		$config = Doo::db()->find( $config_obj, array('limit'=>1) );
		Doo::db()->delete( $config_obj );
		
		Doo::db()->delete( $apps_obj );


		return Doo::conf()->APP_URL . 'apps';
	}
	
	function edit_app() {
	}
	
    function tail_app() {
		$appid = $this->params['appid'];

		$data['title'] = 'APP:';
		
		$data['rootUrl'] = Doo::conf()->APP_URL;
		
		Doo::loadModel('Apps');
		$apps_obj = new Apps;
		$app_data = $apps_obj->viewAppItem($appid);
		
		foreach ($app_data as $app) {
		      $data["id"] = $app["id"];
		      $data["name"] = $app["name"];
		      $data["description"] = $app["description"];
		      $data["filename"] = $app["filename"];
		      $data["command"] = $app["command"];
		      $data["creation_date"] = $app["creation_date"];
		      $data["context"] = $app["context"];
		      $data["extension"] = $app["extension"];
		      $data["status"] = $this->__get_app_status($data["filename"]);
		}
		
		$this->renderc('app-tail', $data);

	}

}
?>
