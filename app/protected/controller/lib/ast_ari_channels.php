<?php


function ari_get_channels()
{
    $ari_host = "0.0.0.0";
    $ari_port = "8088";
    $ari_prefix = "";
    $ari_user = "asterisk";
    $ari_pwd = "pwd";
    $url = "http://" . $ari_host . ":" . $ari_port . $ari_prefix . "/ari/channels?api_key=" . $ari_user . ":" . $ari_pwd;
    //var_dump($url);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $ch_arr = json_decode(curl_exec($ch));
    //var_dump($ch_arr);
    /*foreach ($ch_arr as $chan) {
      //var_dump($chan);
      echo $chan->{'id'} . '     ' . $chan->{'name'} . '     ' . $chan->{'creationtime'} . '     ' . $chan->{'caller'}->{'number'} . '     ' . $chan->{'connected'}->{'number'};
      echo "\r\n";
    }*/
    curl_close($ch);
    return $ch_arr;
}

function ari_get_channel($cid)
{
    $ari_host = "0.0.0.0";
    $ari_port = "8088";
    $ari_prefix = "";
    $ari_user = "asterisk";
    $ari_pwd = "pwd";
    $url = "http://" . $ari_host . ":" . $ari_port . $ari_prefix . "/ari/channels/" . $cid ."?api_key=" . $ari_user . ":" . $ari_pwd;
    //var_dump($url);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $chan = json_decode(curl_exec($ch));
    //var_dump($chan);
    //echo $chan->{'id'} . ' ' . $chan->{'name'} . ' ' . $chan->{'creationtime'} . ' ' . $chan->{'caller'}->{'number'} . ' ' . $chan->{'connected'}->{'number'};
    //echo "\r\n";
    curl_close($ch);
    return $chan;
}

function ari_get_channel_variable($id, $variable)
{
}

//ari_get_channel(1516005301.9);

?>
