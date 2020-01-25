<?php

require_once "./../config/connector_db.php";
require_once "./../models/blog/post.php";

$status = 500;
$data = null;

  if (isset($_GET['id'])) {
      $post = dohvatiPostId($_GET['id']);
      if (isset($post)) {
        // header("Location: ../admin.php?page=post");
        $data = json_encode($post);
        $status = 201;
      }

  }

  http_response_code($status);
  echo $data;

 ?>
