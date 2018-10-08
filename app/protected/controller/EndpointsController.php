<?php

class EndpointsController extends DooController {

	function show_endpoints() {
		require 'lib/ast_ari_endpoints.php';
		
		$data['title'] = 'ENDPOINTS';
		$data['content'] = 'ENDPOINTS:';
		
		$data['rootUrl'] = Doo::conf()->APP_URL;
		
		$data['endpoints'] = ari_get_endpoints();

		//Simply load and render the template
		$this->renderc('endpoints-view', $data);

	}
	
	function view_endpoint() {
		require 'lib/ast_ari_endpoints.php';
		
		$data['title'] = 'ENDPOINT';
		$data['content'] = 'ENDPOINT:';
		
		$data['rootUrl'] = Doo::conf()->APP_URL;
		
		$tech = $this->params['tech'];
		$resource = $this->params['resource'];
		
		$data['endpoint'] = ari_get_endpoint($tech, $resource);

		//Simply load and render the template
		$this->renderc('endpoint-view', $data);

	}

}
?>