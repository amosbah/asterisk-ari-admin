<?php

class PjSIPController extends DooController {

	function new_transport() {
	
		$data['title'] = 'New PjSIP Transport';
		
		$data['rootUrl'] = Doo::conf()->APP_URL;

		$this->renderc('pjsip-new-transport', $data);

	}
	
	function show_transport() {
	
		$data['title'] = 'PjSIP Transport';
		
		$data['rootUrl'] = Doo::conf()->APP_URL;

		$this->renderc('pjsip-show-transport', $data);

	}

}
?>