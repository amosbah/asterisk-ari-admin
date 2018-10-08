<?php

class ExampleController extends DooController {

	function example() {
		require 'lib/ast_cli_dialplan.php';
		
		$data['title'] = 'EXAMPLE';
		$data['content'] = 'EXAMPLE:';
		
		$data['rootUrl'] = Doo::conf()->APP_URL;
				
		$data['contexts'] = cli_get_contexts();

		//Simply load and render the template
		$this->renderc('example', $data);
	}

}
?>