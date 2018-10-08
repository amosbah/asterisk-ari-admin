<?php

require './SupervisorClient.php';
use SupervisorClient\SupervisorClient;

/*function test($configFile, SupervisorClient $supervisorClient) {
    print "> Testing $configFile\n";
    exec('killall supervisord >/dev/null 2>&1');

    $command = "supervisord -c $configFile";
    exec($command, $output, $return_val);
    if ($return_val !== 0) {
        print "✘ Could not execute `$command`\n";
        return;
    }

    $success = true;
    for ($i=0; $i<2; $i++) {
        $success &= $supervisorClient->getAllProcessInfo()[0]['name'] === 'cat';
    }
    print ($success ? '✔ Test passed' : '✘ Test failed') . "\n";
}*/

$supervisor = new SupervisorClient('unix:///tmp/supervisor.sock');

echo $supervisor->getAPIVersion();
echo "\r\n";
echo "\r\n";

echo $supervisor->getSupervisorVersion();
echo "\r\n";
echo "\r\n";

echo $supervisor->getSupervisorVersion();
echo "\r\n";
echo "\r\n";

echo $supervisor->getState()['statecode'];
echo "\r\n";
echo "\r\n";

echo $supervisor->getState()['statename'];
echo "\r\n";
echo "\r\n";

echo $supervisor->getPID();
echo "\r\n";
echo "\r\n";

var_dump($supervisor->listMethods());
echo "\r\n";
echo "\r\n";

var_dump($supervisor->getAllProcessInfo());
echo "\r\n";
echo "\r\n";

var_dump($supervisor->restart());
echo "\r\n";
echo "\r\n";

//var_dump($supervisor->startProcess('bearerbox'));
echo "\r\n";
echo "\r\n";


/*test('unix-http-server-without-password.conf', $supervisor);

$supervisor = new SupervisorClient('unix:///tmp/supervisor.sock');
$supervisor->setAuth('user', 'password');
test('unix-http-server-with-password.conf', $supervisor);

$supervisor = new SupervisorClient('localhost', 9001);
test('inet-http-server-without-password.conf', $supervisor);

$supervisor = new SupervisorClient('localhost', 9001);
$supervisor->setAuth('user', 'password');
test('inet-http-server-with-password.conf', $supervisor);*/
