<?php

require 'connect.php';

$lat = $_POST['lat'];
$lon = $_POST['lon'];
$name = $_POST['name'];

$settings = array(
	'username' => $name,
	'latitude' => $lat,
	'longitude' => $lon
	);
$database -> insertRow('location',$settings);

?>