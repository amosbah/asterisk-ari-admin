<?php

//TODO: Error handling
function ari_get_endpoints()
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://0.0.0.0:8088/ari/endpoints?api_key=asterisk:pwd");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $endp_arr = json_decode(curl_exec($ch));
    //var_dump($endp_arr);
    /*foreach ($endp_arr as $endp) {
      //var_dump($endp);
      echo $endp->{'resource'} . '     ' . $endp->{'technology'} . '     ' . $endp->{'state'} . '     ';
      if (count($endp->{'channel_ids'}) == 0) {
	echo 'channels=0';
      }
      else {
	foreach($endp->{'channel_ids'} as $channel_id) {
	  echo $channel_id . ' ';
	}
      
      }
      echo "\r\n";
    }*/
    curl_close($ch);
    return $endp_arr;
}

function ari_get_endpoint_by_tech($tech)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://0.0.0.0:8088/ari/endpoints?api_key=asterisk:pwd");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $endp_arr = json_decode(curl_exec($ch));
    //var_dump($endp_arr);
    foreach ($endp_arr as $endp) {
      //var_dump($endp);
      echo $endp->{'resource'} . '     ' . $endp->{'technology'} . '     ' . $endp->{'state'} . '     ';
      if (count($endp->{'channel_ids'}) == 0) {
	echo 'channels=0';
      }
      else {
	foreach($endp->{'channel_ids'} as $channel_id) {
	  echo $channel_id . ' ';
	}
      
      }
      echo "\r\n";
    }
    curl_close($ch);
    return $endp_arr;
}

function ari_get_endpoint($tech, $resource)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://0.0.0.0:8088/ari/endpoints/" .$tech . "/" . $resource ."?api_key=asterisk:pwd");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $endp = json_decode(curl_exec($ch));
    //var_dump($endp);

      /*echo $endp->{'resource'} . '     ' . $endp->{'technology'} . '     ' . $endp->{'state'} . '     ';
      if (count($endp->{'channel_ids'}) == 0) {
        echo 'channels=0';
      }
      else {
        foreach($endp->{'channel_ids'} as $channel_id) {
          echo $channel_id . ' ';
        }

      }*/

    curl_close($ch);
    return $endp;
}

?>
