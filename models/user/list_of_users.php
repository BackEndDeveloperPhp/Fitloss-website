<?php
// list of users

function listOfUser(){
  global $connection;
  $query = "SELECT * FROM user";
  $user = $connection->query($query);
  $rez = $user->fetchAll();
  return $rez;
};


//register users - username



 ?>
