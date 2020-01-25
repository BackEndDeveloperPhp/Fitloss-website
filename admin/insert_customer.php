<?php session_start();
require_once "./../config/connector_db.php";
require_once "./../models/customer/customer.php";
require_once "./../models/utils/utility.php";



$error = [];

if (isset($_POST['btnCustomer'])) {

  $username = $_POST['username'];
  $skill = $_POST['skill'];
  $content = $_POST['content'];
  $image = $_FILES['image'];



  // CHECK HEADING
  if (!empty($_POST['username'])) {
    // if (!preg_match("/^[A-z0-9 -_\.]{1,250}$/", $username)) {
    //   $error[] ="- Regularni izraz za naslov nije dobar.<br>";
    // }
  }else {
      $error[] = "- Morate popuniti polje za naslov.<br>";

  }



  // CHECK CONTENT
  if (!empty($_POST['content'])) {
    // if (!preg_match("/^[A-z0-9 -?<>!*'_\.]{1,4000}$/", $content)) {
    //   $error[] = "- Regularni izraz za sadrzaj nije dobar.<br>";
    // }
  }else {
    $error[] = "- Morate popuniti polje za sadrzaj.<br>";

  }


    // CHECK skill
    if (!empty($_POST['skill'])) {
      // if (!preg_match("/^[A-z0-9 -?<>!*'_\.]{1,4000}$/", $content)) {
      //   $error[] = "- Regularni izraz za sadrzaj nije dobar.<br>";
      // }
    }else {
      $error[] = "- Morate popuniti polje za skill.<br>";

    }




  $name_file = $image['name'];
  $type_file = $image['type'];
  $size_file = $image['size'];

  $tmp_name = $image['tmp_name'];




          // Allowed image extensions

          $extensions = array("jpg","jpeg","png","gif");

          if (in_array($type_file, $extensions)) {
            $error[] = "- Ekstenzija slike nije dobra.<br>";
          }

          // maksimalna velicina fajla

          if ($size_file > 3000000) { // 3.000.00B - 3MB
            $error[] = "- Slika mora biti manja od 3MB.<br>";
        }

        $naziv_fajla = time().$name_file;
        // pravi ime slike od tajmstempa npr 1231231232
        $nova_putanja_bigImage = "./../img/upload_images/big_image/".$naziv_fajla;
        $nova_putanja_thumbImage = "./../img/upload_images/thumb_image/".$naziv_fajla;

        $nova_putanja_bigImage_zaBazu = "img/upload_images/big_image/".$naziv_fajla;
        $nova_putanja_thumbImage_zaBazu = "img/upload_images/thumb_image/".$naziv_fajla;



        // CHECK $err
        if (count($error) === 0) {


          if (move_uploaded_file($tmp_name, $nova_putanja_bigImage )) {



            // thumbImage($nova_putanja_bigImage, $nova_putanja_thumbImage, 80, 80);

            make_thumb($nova_putanja_bigImage, $nova_putanja_thumbImage,20,20);


            // upis posta u bazu
                  if (insertCustomer($username, $skill, $content , $nova_putanja_bigImage_zaBazu, $nova_putanja_thumbImage_zaBazu )) {
                  // echo "Uspesno";
                  header("Location: ./../admin.php?page=customer");


          }
          }else {
            $error[] = "- Morate uneti sliku.<br>";
            $_SESSION['errorMessage'] = implode(" ", $error);

            header("Location:./../admin.php?page=custome");
          }

          }else {

          $_SESSION['errorMessage'] = implode(" ", $error);

          header("Location:./../admin.php?page=custome");
        }











}
