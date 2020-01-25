<?php

function listPost(){
  global $connection;
  $query = "SELECT p.id , p.heading, p.content , p.quotes , p.bigImage, p.thumbImage, p.date , u.username FROM post p INNER JOIN user u ON p.idUser = u.id ";
  return $pripadeQuery = $connection->query($query)->fetchAll();
}

function listCategoryPost(){
  global $connection;
  $query = "SELECT c.name FROM post p INNER JOIN post_categoryp pc on p.id = pc.idPost INNER JOIN categoryp c ON pc.idCategory = c.id";
  return $pripadeQuery = $connection->query($query)->fetchAll();
}

function listCategory(){
  global $connection;
    $query = "SELECT * FROM categoryp";
    return $pripadeQuery = $connection->query($query)->fetchAll();
}

function deletePost($id){
  global $connection;
  $query = "DELETE FROM post WHERE id=:id";
  $pripadeQuery = $connection->prepare($query);
  $pripadeQuery->bindParam(":id", $id);
  return $pripadeQuery->execute();
}


function insertPost($heading, $content, $quotes, $nova_putanja_bigImage, $nova_putanja_thumbImage, $idUser ){
    global $connection;
    $query = "INSERT INTO post (heading, content, quotes, bigImage, thumbImage, idUser) VALUES (:heading, :content, :quotes, :bigImage, :thumbImage, :idUser )";
    $pripadeQuery = $connection->prepare($query);

    $pripadeQuery->bindParam(":heading", $heading);
    $pripadeQuery->bindParam(":content", $content);
    $pripadeQuery->bindParam(":quotes", $quotes);
    $pripadeQuery->bindParam(":bigImage", $nova_putanja_bigImage);
    $pripadeQuery->bindParam(":thumbImage", $nova_putanja_thumbImage);
    $pripadeQuery->bindParam(":idUser", $idUser);
    $rez = $pripadeQuery->execute();
    return $rez;
}


function updatePost($heading, $content,$datum, $quotes, $nova_putanja_bigImage, $nova_putanja_thumbImage, $idUser,$idPost ){
    global $connection;
    $query = "UPDATE post SET
    heading = :heading,
    content = :content,
    quotes = :quotes,
    bigImage = :bigImage,
    date = :date,
    thumbImage = :thumbImage,
    idUser = :idUser
    WHERE id = :idPost";
    $pripadeQuery = $connection->prepare($query);

    $pripadeQuery->bindParam(":heading", $heading);
    $pripadeQuery->bindParam(":content", $content);
    $pripadeQuery->bindParam(":quotes", $quotes);
    $pripadeQuery->bindParam(":bigImage", $nova_putanja_bigImage);
    $pripadeQuery->bindParam(":thumbImage", $nova_putanja_thumbImage);
    $pripadeQuery->bindParam(":idUser", $idUser);
    $pripadeQuery->bindParam(":date", $datum);
    $pripadeQuery->bindParam(":idPost", $idPost);
    $rez = $pripadeQuery->execute();
    return $rez;
}



function dohvatiPostId($idPost){
  global $connection;
  $query = "SELECT p.id AS idPost, p.heading, p.content , p.quotes, p.date, p.bigImage, p.idUser FROM post p WHERE id = :id";

    $pripadeQuery = $connection->prepare($query);
    $pripadeQuery->bindParam(":id", $idPost);

    $pripadeQuery->execute();
  $result = $pripadeQuery->fetch();
  return $result;
}

function postId($idPost){
  global $connection;
  $query = "SELECT p.id AS idPost, p.heading, p.content , p.quotes, p.date, p.bigImage, p.idUser FROM post p WHERE id = :id";

    $pripadeQuery = $connection->prepare($query);
    $pripadeQuery->bindParam(":id", $idPost);

    $pripadeQuery->execute();
  $result = $pripadeQuery->fetchAll();
  return $result;
}


// obrada vremena i datuma
function obradiDatum($datumVreme) {
				//Prvo moraju datum i vreme da se razbiju u posebne promenljive
				//2019-08-30 18:49:51
				$nizDvaDela = explode(" ",$datumVreme); // [ "2019-08-30", "18:49:51"]
				$godineMesecDan = explode("-", $nizDvaDela[0]);
				$satMinutSekund = explode(":", $nizDvaDela[1]);
				$godine = $godineMesecDan[0];
				$mesec = $godineMesecDan[1];
				$datum = $godineMesecDan[2];

				$sat = $satMinutSekund[0];
				$minut = $satMinutSekund[1];
				$sekund = $satMinutSekund[2];
				//mktime pravi broj sekundi
				$brojSekundi = mktime($sat, $minut, $sekund, $mesec,$datum,$godine);

				//date pravi datum kakav treba
				$datum = date("d-m-Y", $brojSekundi); //string
				return $datum; // "30-08-2019"
			}


function dohvatiPostoveZaKategoriju($idKategorija) {
        global $connection;

        $query = "SELECT p.id AS idPost, p.heading, p.content, p.quotes, p.date,u.username, p.bigImage, p.thumbImage FROM post p INNER JOIN user u ON p.idUser = u.id INNER JOIN post_categoryp pc ON p.id = pc.idPost INNER JOIN categoryp c ON pc.idCategory = c.id
        WHERE pc.idCategory = :id";

        $pripremljenUpit = $connection->prepare($query);
        $pripremljenUpit->bindParam(":id", $idKategorija);

        $pripremljenUpit->execute();
        $result = $pripremljenUpit->fetchAll();
        return $result;
      }




 ?>
