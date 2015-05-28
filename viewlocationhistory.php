<?php
	
	require 'connect.php';

	$username = $_POST['name'];
	//$password = $_POST['password'];

	$rows = $database->getRow('location', 'username', $username);
	die(json_encode($rows));
?>