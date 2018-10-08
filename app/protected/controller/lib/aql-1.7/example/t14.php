<?php
error_reporting(E_ALL);
require("../inc/aql.php");

function insert_keyvalue($bdir, $cfile, $section, $key, $value) {
	$a = new aql();

	$setok = $a->set('basedir',$bdir);
	if (!$setok) {
	    echo __LINE__.' '.$a->get_error();
	}


	//$result = $a->query("insert into t14.conf set callerid=\"'99' <99>\",section='555'");
	$result = $a->query("insert into " . $cfile . " set " . $key . "=" . $value . ",section=" . $section);


	if ($result == false) {
	    echo $a->get_error();
	} else {
	    echo 'affected_rows :'.$a->get_affected_rows()."\n";
	}
}

insert_keyvalue('./','t14.conf','777','callerid','777');

?>
