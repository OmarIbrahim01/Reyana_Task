<?php

try {
	$dsn = "mysql:host=localhost;dbname=task;";
	$user = "root";
	$password = "";
	$db = new PDO($dsn, $user, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exeption $e) {
	echo "Unable to connent";
	//echo $e->getMessage();
	exit;
}