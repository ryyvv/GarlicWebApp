<?php 
require './vendor/autoload.php';



use Kreait\Firebase\Factory;
use Kreait\Firebase\Exception\Auth\FailedToVerifyToken;

$factory = (new Factory)
    ->withServiceAccount('./app/config/nicer.json')
    ->withDatabaseUri('https://nicer-garlic-app-default-rtdb.firebaseio.com');

$auth = $factory->createAuth();
$realtimeDatabase = $factory->createDatabase();
$cloudMessaging = $factory->createMessaging();
$remoteConfig = $factory->createRemoteConfig();
$cloudStorage = $factory->createStorage();


?>
