<?php


function ari_get_bridges()
{
    $ari_host = "0.0.0.0";
    $ari_port = "8088";
    $ari_prefix = "";
    $ari_user = "asterisk";
    $ari_pwd = "pwd";
    $url = "http://" . $ari_host . ":" . $ari_port . $ari_prefix . "/ari/bridges?api_key=" . $ari_user . ":" . $ari_pwd;
    //var_dump($url);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $br_arr = json_decode(curl_exec($ch));
    //var_dump($br_arr);
    /*foreach ($br_arr as $bridge) {
      //var_dump($bridge);
      //echo $chan->{'id'} . '     ' . $chan->{'name'} . '     ' . $chan->{'creationtime'} . '     ' . $chan->{'caller'}->{'number'} . '     ' . $chan->{'connected'}->{'number'};
      echo "\r\n";
    }*/
    curl_close($ch);
    return $br_arr;
}

function ari_get_bridge($bid)
{
    $ari_host = "0.0.0.0";
    $ari_port = "8088";
    $ari_prefix = "";
    $ari_user = "asterisk";
    $ari_pwd = "pwd";
    $url = "http://" . $ari_host . ":" . $ari_port . $ari_prefix . "/ari/bridges/" . $bid ."?api_key=" . $ari_user . ":" . $ari_pwd;
    //var_dump($url);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $bridge = json_decode(curl_exec($ch));
    //var_dump($bridge);
    //echo $chan->{'id'} . ' ' . $chan->{'name'} . ' ' . $chan->{'creationtime'} . ' ' . $chan->{'caller'}->{'number'} . ' ' . $chan->{'connected'}->{'number'};
    echo "\r\n";
    curl_close($ch);
    return $bridge;
}

//ari_get_bridges();
//ari_get_bridge('60e96bef-eb8a-4cab-aea3-97e77c0a0599');
?>
