<?php session_start();
require_once "config/connector_db.php";
require_once "config/env.php";
require_once "models/user/register_user.php";

$errors = [];
if (isset($_POST['btnLogin'])) {
  // echo "klick";

  $username = $_POST['username'];
  $password = crypt($_POST['password'], $salt);



  if (!empty($username)){

  } else {
    $errors[] = " Morate popuniti polje username";
  }


  if (!empty($_POST['password'])) {

  }else {
      $errors[] = " Morate popuniti polje password";
  }


  // CHECK $err
  if (count($errors) === 0) {

    $query = "SELECT *, u.id AS userId FROM user u INNER JOIN role r ON u.idRole = r.id WHERE u.username = :username AND u.password = :password ";
    $PripadeUpit = $connection->prepare($query);
    $PripadeUpit->bindParam(":username", $username);
    $PripadeUpit->bindParam(":password", $password);

    try {
      $PripadeUpit->execute();

    } catch (PDOException $e) {
      header("Location: index.php?page=login");
    }

    $user = $PripadeUpit->fetch();

    if (!isset($user)) {
          $_SESSION['ERROR_MESSAGE'] = "NIJE USPELO LOGOVANJE";
          header("Location: index.php?page=login");

    }else {

      $_SESSION['user']->id = $user->userId;
      $_SESSION['user']->username = $user->username;
      $_SESSION['user']->email = $user->email;
      $_SESSION['user']->idRole = $user->idRole;
      var_dump($_SESSION['user']);
          if ($user->name === "administrator") {
          header("Location: admin.php?page=home");
        }elseif ($user->name === "user") {

          header("Location: user.php?page=home");

        }
        else {
          $_SESSION['ERROR_MESSAGE'] = "NIJE USPELO LOGOVANJE";
          header("Location: index.php?page=home");
        }

    }

  }else {
    $_SESSION['errorLogin'] = implode("<br>", $errors);

    header("Location: index.php?page=login");
  }


  }























 ?>
