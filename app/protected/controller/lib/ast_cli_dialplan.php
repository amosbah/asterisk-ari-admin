<?php

//TODO: Error handling

function cli_get_context($context)
{
      $output = shell_exec('/usr/sbin/asterisk -x "dialplan show ' .$context. '"');
      
      $lines = explode(PHP_EOL, $output);

      return $lines;
}

function cli_get_contexts()
{
      $output = shell_exec('/usr/sbin/asterisk -x "dialplan show"');

      $lines = explode(PHP_EOL, $output);
      $contexts = array();

      foreach ($lines as $line) {
	if (stripos($line,"[ Context ") !== FALSE) {
	      $line_arr = explode(" ",$line);
	      $contexts[trim($line_arr[2],"'")] = trim($line_arr[5],"'");
	      //echo trim($line_arr[2],"'") . '     ' . trim($line_arr[5],"'");
	      //echo "\r\n";
	}  
      }
      return $contexts;
}

?>
