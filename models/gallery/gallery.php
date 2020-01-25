<?php

function insertGallery($bigImage, $thumbImage){
  global $connection;
  $query = "INSERT INTO gallery (bigImage, thumbImage) VALUES (:bigImage, :thumbImage)";
  $pripadeQuery = $connection->prepare($query);

  $pripadeQuery->bindParam(":bigImage",$bigImage);
  $pripadeQuery->bindParam(":thumbImage",$thumbImage);
  $rez = $pripadeQuery->execute();
  return $rez;
}

function viewGallery(){
  global $connection;
  $query = "SELECT * FROM gallery";
  $pripadeQuery = $connection->query($query);
  return $pripadeQuery->fetchAll();
}

function deleteGallery($id){
  global $connection;
  $query = "DELETE FROM gallery WHERE id=:id";
  $pripadeQuery = $connection->prepare($query);
  $pripadeQuery->bindParam(":id", $id);
  return $pripadeQuery->execute();
}



 ?>
