<?php

class BridgesController extends DooController {

	function show_bridges() {
		require 'lib/ast_ari_bridges.php';
		
		$data['title'] = 'BRIDGES';
		$data['content'] = 'BRIDGES:';
		
		$data['rootUrl'] = Doo::conf()->APP_URL;
				
		$data['bridges'] = ari_get_bridges();

		//Simply load and render the template
		$this->renderc('bridges-view', $data);

	}

	function view_bridge() {
		require 'lib/ast_ari_bridges.php';
		
		$data['title'] = 'BRIDGE';
		$data['content'] = 'BRIDGE:';
		
		$data['rootUrl'] = Doo::conf()->APP_URL;
		
		$bid = $this->params['bid'];
		
		$data['bridge'] = ari_get_bridge($bid);

		//Simply load and render the template
		$this->renderc('bridge-view', $data);

	}

}
?>