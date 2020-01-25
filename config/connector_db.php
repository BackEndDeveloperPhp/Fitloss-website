<?php
// connection with datebase

try {
    $connection = new PDO ('mysql: host=127.0.0.1; dbname=fitloss', 'root', '');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_OBJ);
} catch (PDOException $e) {
  echo $e->getMessage();
  die();
}



 ?>
