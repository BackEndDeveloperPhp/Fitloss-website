<?php
require_once "./../config/connector_db.php";
require_once "./../models/gallery/gallery.php";



$status = 500;
  if (isset($_GET['id'])) {

      $result = deleteGallery($_GET['id']);
      if ($result) {
        // header("Location: ../admin.php?page=post");
        $status = 201;
      }

  }

  http_response_code($status);

 ?>
