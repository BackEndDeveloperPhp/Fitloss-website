<?php session_start();
require_once "config/connector_db.php";
require_once "config/env.php";
require_once "models/user/register_user.php";
// file for register users

$error = [];
global $connection;
if (isset($_POST['btnRegister'])) {


      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $password = $_POST['password'];
      $repassword = $_POST['rePassword'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $dateOfBirth = $_POST['dateOfBirth'];



// CHECK FIRST NAME
  if (!empty($_POST['firstName'])) {
    if (!preg_match("/^[A-z]{3,20}$/", $firstName)) {
      $error[] ="- REg izraz za first nema niste prosli<br>";
    }
  }else {
      $error[] ="- Morate popuniti polje first name<br>";
  }


//CHECK LAST NAME
if (!empty($_POST['lastName'])) {
    if (!preg_match("/^[A-z]{3,30}$/", $lastName)) {
      $error[] = "- Characters must be letters<br>";
    }
}else {
    $error[] ="- Morate popuniti polje last name<br>";
}





// CHECK USERNAME IN DATEBASE
if (!empty($_POST['username'])) {
  if (preg_match("/^[A-z]{3,30}$/", $_POST['username'])) {
      $username = $_POST['username'];
// Check username in datebase (duplicate)
    $PripadeUpit=  checkUsernameinDatebase($username);
      if ($PripadeUpit->rowCount()) {
        $error[] ="- Username vec postoji u bazi izaberite drugi<br>";
      }
  }else {
    $error[] ="- REgularni izraz za username nije dobar<br>";
  }

}else {
  $error[] ="- Morate popuniti username polje<br>";
}




// CHECK PASSWORD
if (!empty($_POST['password'])) {

}else {
  $error[] ="- Morate popuniti password polje<br>";
}

// CHECK REPASSWORD
if (!empty($_POST['rePassword'])) {

}else {
  $error[] ="- Morate popuniti Repassword polje<br>";
}





//poklapanje pass i repassword

if (!empty($_POST['password']) &&  !empty($_POST['rePassword'])){
  if ($_POST['password'] == $_POST['rePassword']) {
    $password = crypt($_POST['password'], $salt);
  }else {
      $error[] ="Vase lozinke se ne poklapaju. Moraju biti jednake!<Br>";
  }

}


// CHECK EMAIL
if (!empty($_POST['email'])) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      // CHECK EMAIL IN DATEBASE (duplicate)
      $PripadeUpit = checkEmailinDatebase($email);
        if ($PripadeUpit->rowCount()) {
          $error[] ="- Email vec postoji u bazi izaberite drugi<br>";
        }

    }else {
        $error[] ="- REg izraz za email nema niste prosli<br>";
    }
    }else {
      $error[] ="- Morate popuniti polje email<br>";
    }

//check dateOfBirth
if (empty($_POST['dateOfBirth'])) {
  $error[] ="- Morate popuniti polje date of Birth<br>";
  }





  // CHECK $err
  if (count($error) === 0) {
    if (insertUser($firstName, $lastName, $password, $username, $email, $dateOfBirth)) {
    // echo "Uspesno";
    header("Location: index.php?page=home");

  }
  }else {
    $_SESSION['errorRegister'] = implode(" ", $error);

    header("Location: index.php?page=register");
  }




}else {
  header("Location: ./../index.php?page=register");

}
