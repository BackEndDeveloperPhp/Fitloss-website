<?php

function insertAboutContent($heading, $content, $nova_putanja_bigImage, $nova_putanja_thumbImage){
    global $connection;
    $query = "INSERT INTO about_content (heading, content, bigImage, thumbImage) VALUES (:heading, :content, :bigImage, :thumbImage )";
    $pripadeQuery = $connection->prepare($query);

    $pripadeQuery->bindParam(":heading", $heading);
    $pripadeQuery->bindParam(":content", $content);
    $pripadeQuery->bindParam(":bigImage", $nova_putanja_bigImage);
    $pripadeQuery->bindParam(":thumbImage", $nova_putanja_thumbImage);
    $rez = $pripadeQuery->execute();
    return $rez;
}

function viewAboutContent(){
  global $connection;
  $query = "SELECT * FROM about_content";
  $pripadeQuery= $connection->query($query);
  return $pripadeQuery->fetchAll();
}

function deleteAbout($id){
  global $connection;
  $query = "DELETE FROM about_content WHERE id=:id";
  $pripadeQuery = $connection->prepare($query);
  $pripadeQuery->bindParam(":id", $id);
  return $pripadeQuery->execute();
}


 ?>
