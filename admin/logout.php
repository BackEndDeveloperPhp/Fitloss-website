<?php session_start();

if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
  header("Location: ./../index.php?page=login");
}else {
header("Location: ./../index.php?page=login");
}

 ?>
