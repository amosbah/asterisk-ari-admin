<?php
require './ast_cli_dialplan.php';

$contexts = cli_get_contexts();

foreach ($contexts as $context) {
  foreach ($context as $key => $value) {
      echo '=================================================================================================';
      echo "\r\n";
      echo $key;
      echo "\r\n";
      print_r($value);
      echo "\r\n";
      echo "\r\n";
  }
}

//print_r($contexts);

?>
