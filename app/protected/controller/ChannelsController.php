<?php

class ChannelsController extends DooController {

	function show_channels() {
		require 'lib/ast_ari_channels.php';
		
		$data['title'] = 'CHANNELS';
		$data['content'] = 'CHANNELS:';
		
		$data['rootUrl'] = Doo::conf()->APP_URL;
				
		$data['channels'] = ari_get_channels();

		//Simply load and render the template
		$this->renderc('channels-view', $data);
	}

	function view_channel() {
		require 'lib/ast_ari_channels.php';
		
		$data['title'] = 'CHANNEL';
		$data['content'] = 'CHANNEL:';
		
		$data['rootUrl'] = Doo::conf()->APP_URL;
		
		$cid = $this->params['cid'];
		
		$data['channel'] = ari_get_channel($cid);

		//Simply load and render the template
		$this->renderc('channel-view', $data);

	}

}
?>