<?php

class CdrController extends DooController {
	
	public $siteName = 'My Super Site';

    function getStuff(){
        echo 'Super stuffs!';
    }

    function view_cdr() {
		require 'lib/csv_to_array.php';
		$data['title'] = 'CDR';
		$data['content'] = 'CALL DETAIL RECORDS:';
		
		$data['rootUrl'] = Doo::conf()->APP_URL;

		//Simply load and render the template
		$this->renderc('cdr-view', $data);

		//If you want View to access Controller properties and method
		//$this->renderc('cdr-view', $data, true);
    }
	
	function view_cdr_item() {
		require 'lib/seconds_to_time.php';
		$uid = $this->params['uid'];
        $seq = $this->params['seq'];

		$data['title'] = 'CDR: ' . $uid . '/' . $seq;
		
		$data['rootUrl'] = Doo::conf()->APP_URL;
		
		Doo::loadModel('Cdr');
        $cdr_obj = new Cdr;
        $cdr_data = $cdr_obj->viewCdrItem($uid, $seq);
		
		foreach ($cdr_data as $cdr) {
            $data["src"] = $cdr["src"];
			$data["dst"] = $cdr["dst"];
			$data["dcontext"] = $cdr["dcontext"];
			$data["clid"] = $cdr["clid"];
			$data["channel"] = $cdr["channel"];
			$data["dstchannel"] = $cdr["dstchannel"];
			$data["lastapp"] = $cdr["lastapp"];
			$data["lastdata"] = $cdr["lastdata"];
			$data["start"] = $cdr["start"];
			$data["answer"] = $cdr["answer"];
			$data["end"] = $cdr["end"] ;
			$data["duration"] = secondsToTime($cdr["duration"]);
			$data["billsec"] = secondsToTime($cdr["billsec"]);
			$data["disposition"] = $cdr["disposition"];
			$data["amaflags"] = $cdr["amaflags"];
			$data["uniqueid"] = $cdr["uniqueid"];
			$data["linkedid"] = $cdr["linkedid"];
			$data["sequence"] = $cdr["sequence"];
        }
		
		$this->renderc('cdr-view-item', $data);

		//echo 'CDR: ' . $uid . '/' . $seq . '------->' . $cdr_data[0]["start"];
    }

}

?>