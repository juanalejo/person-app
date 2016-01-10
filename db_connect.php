<?php

//Connecting to the DBServer using env. variables
$service = json_decode($_ENV['VCAP_SERVICES'], true);

$dbname = $service['cleardb'][0]['credentials']['name'];
$hostname = $service['cleardb'][0]['credentials']['hostname'];
$user = $service['cleardb'][0]['credentials']['username'];
$password = $service['cleardb'][0]['credentials']['password'];
$port = $service['cleardb'][0]['credentials']['port'];

$connection = mysqli_connect($hostname, $user, $password, $dbname, $port);

//Error logging
if (mysqli_connect_errno())
{
	error_log("Error connecting to the DB Server: "."$hostname"." "); 
	die("Error connecting to the DB Server: ".mysqli_connect_error());	
}

?>


