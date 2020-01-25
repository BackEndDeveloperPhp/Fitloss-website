<?php

function insertUser($firstName, $lastName, $password, $username, $email, $dateOfBirth){
  global $connection;
  $query = "INSERT INTO user (firstName, lastName, username, password, email, dateOfBirth, idRole) VALUES (:firstName, :lastName, :username, :password, :email, :dateOfBirth, 2)";
  $PripadeUpit = $connection->prepare($query);
  $PripadeUpit->bindParam(":firstName", $firstName,PDO::PARAM_STR);
  $PripadeUpit->bindParam(":lastName", $lastName,PDO::PARAM_STR);
  $PripadeUpit->bindParam(":password", $password);
  $PripadeUpit->bindParam(":username", $username);
  $PripadeUpit->bindParam(":email", $email);
  $PripadeUpit->bindParam(":dateOfBirth", $dateOfBirth);

  $result = $PripadeUpit->execute();
  return $result; // true ili false
}



function checkUsernameinDatebase($username){
  global $connection;
  $query = "SELECT * FROM user WHERE username = :username";
  $PripadeUpit = $connection->prepare($query);
  $PripadeUpit->execute(array(
    ':username' => $username
  ));
  return $PripadeUpit;
}


function checkEmailInDatebase($email){
  global $connection;
  $query = "SELECT * FROM user WHERE email = :email";
  $PripadeUpit = $connection->prepare($query);
  $PripadeUpit->execute(array(
    ':email' => $email
  ));
  return $PripadeUpit;
}


function checkPasswordInDatebase($password){
  global $connection;
  $query = "SELECT * FROM user WHERE password = :password";
  $PripadeUpit = $connection->prepare($query);
  $PripadeUpit->execute(array(
    ':password' => $password
  ));
  return $PripadeUpit;
}




 ?>
