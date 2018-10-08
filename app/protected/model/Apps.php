<?php
Doo::loadModel('base/AppsBase');

class Apps extends AppsBase{
	public function viewAppItem($appid) {
	    $where = 'id = ' . $appid ;
	    $options['where'] = $where;
	    $options['select'] = '*';
	    $options['asArray'] = true;
	    return $result = Doo::db()->find($this, $options);
	}
}