<?php


function insertCourse($heading, $content, $price, $availableSeats, $overviews, $benifits, $nova_putanja_bigImage_zaBazu, $nova_putanja_thumbImage_zaBazu ){
  global $connection;
  $query ="INSERT INTO courses (heading, content, price, availableSeats, overviews, benifits, bigImage, thumbImage) VALUES (:heading, :content, :price, :availableSeats, :overviews, :benifits, :bigImage, :thumbImage)";
  $pripadeQuery = $connection->prepare($query);
  $pripadeQuery->bindParam(":heading",$heading);
  $pripadeQuery->bindParam(":content",$content);
  $pripadeQuery->bindParam(":price",$price);
  $pripadeQuery->bindParam(":availableSeats",$availableSeats);
  $pripadeQuery->bindParam(":overviews", $overviews);
  $pripadeQuery->bindParam(":benifits", $benifits);
  $pripadeQuery->bindParam(":bigImage",$nova_putanja_bigImage_zaBazu);
  $pripadeQuery->bindParam(":thumbImage",$nova_putanja_thumbImage_zaBazu);
  return $pripadeQuery->execute();
}


function viewCourse(){
  global $connection;
  $query = "SELECT * FROM courses";
  $pripadeQuery = $connection->query($query);
  return $pripadeQuery->fetchAll();
}

function deleteCourse($id){
  global $connection;
  $query = "DELETE FROM courses WHERE id=:id";
  $pripadeQuery = $connection->prepare($query);
  $pripadeQuery->bindParam(":id", $id);
  return $pripadeQuery->execute();
}



function catchCourseId($id){
  global $connection;
  $query = "SELECT * FROM courses WHERE id = :id";

    $pripadeQuery = $connection->prepare($query);
    $pripadeQuery->bindParam(":id", $id);

    $pripadeQuery->execute();
  $result =   $pripadeQuery->fetchAll();
  return $result;
}

 ?>
