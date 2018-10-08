<?php
Doo::loadModel('base/CdrBase');

class Cdr extends CdrBase{
	public function viewCdrItem($uid, $seq) {
	    $where = 'uniqueid = ' . $uid . 'AND sequence = ' .$seq ;
	    $options['where'] = $where;
	    $options['select'] = '*';
	    $options['asArray'] = true;
	    return $result = Doo::db()->find($this, $options);
	}
}