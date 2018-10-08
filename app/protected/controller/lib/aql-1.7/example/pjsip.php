<?php
/*
 * This is Test demo script for AQL
*/
error_reporting(E_ALL);
require("../inc/aql.php");

$a = new aql();

$setok = $a->set('basedir','/etc/asterisk');
if (!$setok) {
    echo __LINE__.' '.$a->get_error();
}

$query = <<< EOF
select * from pjsip.conf
EOF;
$result = $a->query($query);

if ($result == false) {
    echo $a->get_error();
} else {
    echo "AQL LANGUAGE : $query\n";
    echo 'record sections: '.$a->get_affected_rows();
    echo "\n";
    print_r($result);
}

?>
