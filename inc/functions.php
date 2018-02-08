<?php
include("connection.php");

function addUser($full_name, $username, $password, $email, $address, $phone){
  global $db;
  try{
    $query = 'INSERT INTO users (full_name, username, password, email, address, phone) VALUES (:full_name, :username, :password, :email, :address, :phone)';
    $stmt = $db->prepare($query);
    $stmt->bindParam(':full_name', $full_name);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':phone', $phone);
    return $stmt->execute();
  }catch(Exception $e){
    throw $e;
  }
}


function getLastUser(){
  global $db;
  try{
    $query = 'SELECT * FROM users ORDER BY id DESC LIMIT 1;';
    $stmt = $db->prepare($query);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }catch(Exception $e){
    throw $e;
  }
}





