<?php

require __DIR__ .'/../inc/functions.php';

$full_name = $_POST['full_name'];
$username = $_POST['username'];
$hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];




try {
	$newUser = addUser($full_name, $username, $hashed_password, $email, $address, $phone);
	$id = getLastUser()['id'];
	
	
	header("Location:../show.php?=".$id);
}catch(Exception $e){
	echo $e;
}