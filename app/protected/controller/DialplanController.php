<?php

class DialplanController extends DooController {

	function show_dialplan() {
		require 'lib/ast_cli_dialplan.php';
		
		$data['title'] = 'DIALPLAN';
		$data['content'] = 'DIALPLAN:';
		
		$data['rootUrl'] = Doo::conf()->APP_URL;
		
		$data['contexts'] = Doo::db()->find('AstConfig');

				
		//$data['contexts'] = cli_get_contexts();

		//Simply load and render the template
		$this->renderc('dialplan-view', $data);
	}
	
	function show_context() {
		require 'lib/ast_cli_dialplan.php';
		
		$data['title'] = 'CONTEXT';
		$data['content'] = 'CONTEXT:';
		
		$data['rootUrl'] = Doo::conf()->APP_URL;
		
		$context = $this->params['context'];
				
		$data['context'] = cli_get_context($context);

		//Simply load and render the template
		$this->renderc('dialplan-view-context', $data);
	}

}
?>
