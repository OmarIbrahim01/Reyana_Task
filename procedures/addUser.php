<?php

require __DIR__ .'/../inc/functions.php';

$full_name = $_POST['full_name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];



try {
	$newUser = addUser($full_name, $username, $password, $email, $address, $phone);
	$id = getLastUser()['id'];
	
	
	header("Location:../show.php?=".$id);
}catch(Exception $e){
	echo $e;
}