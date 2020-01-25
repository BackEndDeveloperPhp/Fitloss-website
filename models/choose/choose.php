<?php

function insertChooseContent($heading, $content, $nova_putanja_bigImage, $nova_putanja_thumbImage){
    global $connection;
    $query = "INSERT INTO choose_us (heading, content, bigImage, thumbImage) VALUES (:heading, :content, :bigImage, :thumbImage )";
    $pripadeQuery = $connection->prepare($query);

    $pripadeQuery->bindParam(":heading", $heading);
    $pripadeQuery->bindParam(":content", $content);
    $pripadeQuery->bindParam(":bigImage", $nova_putanja_bigImage);
    $pripadeQuery->bindParam(":thumbImage", $nova_putanja_thumbImage);
    $rez = $pripadeQuery->execute();
    return $rez;
}



  function chooseUs(){

    global $connection;

    $query = "SELECT * FROM choose_us";
    $pripateQuery = $connection->query($query);
    $rez = $pripateQuery->fetchAll();
  return $rez ;
}

function deleteChoose($id){
  global $connection;
  $query = "DELETE FROM choose_us WHERE id=:id";
  $pripadeQuery = $connection->prepare($query);
  $pripadeQuery->bindParam(":id", $id);
  return $pripadeQuery->execute();
}


function listChooseUs(){
  global $connection;
  $query = "SELECT * FROM choose_us";
  $pripadeQuery = $connection->query($query);
  return $pripadeQuery->fetchAll();
}

  ?>
