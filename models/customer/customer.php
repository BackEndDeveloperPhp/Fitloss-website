<?php


function insertCustomer($username, $skill, $content, $nova_putanja_bigImage_zaBazu, $nova_putanja_thumbImage_zaBazu ){
  global $connection;
  $query ="INSERT INTO customer (username, skill, content, bigImage, thumbImage) VALUES (:username, :skill, :content, :bigImage, :thumbImage)";
  $pripadeQuery = $connection->prepare($query);
  $pripadeQuery->bindParam(":username",$username);
  $pripadeQuery->bindParam(":skill",$skill);
  $pripadeQuery->bindParam(":content",$content);
  $pripadeQuery->bindParam(":bigImage",$nova_putanja_bigImage_zaBazu);
  $pripadeQuery->bindParam(":thumbImage",$nova_putanja_thumbImage_zaBazu);
  return $pripadeQuery->execute();
}


function viewCustomer(){
  global $connection;
  $query = "SELECT * FROM customer";
  $pripadeQuery = $connection->query($query);
  return $pripadeQuery->fetchAll();
}

function deleteCustomer($id){
  global $connection;
  $query = "DELETE FROM customer WHERE id=:id";
  $pripadeQuery = $connection->prepare($query);
  $pripadeQuery->bindParam(":id", $id);
  return $pripadeQuery->execute();
}





 ?>
