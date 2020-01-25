<?php

  function thumbImage($bigImage, $thumbImage, $newWidth, $newHeight){

    // primer : image/slika.jpg

    $podaciSlika = explode(".",$bigImage);

    $ekstenzija = $podaciSlika[1]; // "jbg" itd

    //Provera da li je ekstenzija jpg/jpeg
    // ne gleda da li je veliko ili malo slovo  - case insensitive

    if (preg_match('/jpg|jpeg/i', $ekstenzija)) {

        //imagecreatefromjpeg kreira novu sliku od originalne koa se nalazi u bigImage
        // nOva slika za sada je ista kao orignalna


        $nova_slika = imagecreatefromjpeg($bigImage);
    }

    // proverava da li je ekstenzija png

    if (preg_match('/png/i', $ekstenzija)) {
    $nova_slika = imagecreatefromjpeg($bigImage);
    }

    // Preuzimanje sisirne i visine nove slike - isto kao i na originalnoj

    $width_original = imageSX($nova_slika);
    $height_original = imageSY($nova_slika);


    // Skaliranje slike

    if ($width_original > $height_original) {

        $tmp_width = $newWidth;
        $tmp_height = $height_original * ($newHeight / $height_original);

        //$new_height/$height vraca procentualno razliku nove i stare visine - za koliko smanjujemo sliku
    }


  if ($width_original < $height_original) {
    $tmp_width = $width_original * ($newWidth / $width_original);
    $tmp_width = $newWidth;
  }


  if ($width_original == $height_original) {
    $tmp_width = $newWidth;
    $tmp_height = $newHeight;
  }

  // Slika se dobija kao rezultat metode
  $izlaznaSlika = imagecreatetruecolor($tmp_width, $tmp_height);

    imagecopyresampled($izlaznaSlika, $nova_slika,
    0,0,0,0,
    $tmp_width, $tmp_height,
    $width_original, $height_original);

    if (preg_match("/png/i", $ekstenzija)) {
      imagepng($izlaznaSlika, $thumbImage);
    }else {
      imagejpeg($izlaznaSlika, $thumbImage);
    }
    // imagedestroy($izlaznaSlika);
    // imagedestroy($nova_slika);

  }



  function make_thumb($src, $dest, $desired_width) {

      /* read the source image */
      $source_image = imagecreatefromjpeg($src);
      $width = imagesx($source_image);
      $height = imagesy($source_image);

      /* find the "desired height" of this thumbnail, relative to the desired width  */
      $desired_height = floor($height * ($desired_width / $width));

      /* create a new, "virtual" image */
      $virtual_image = imagecreatetruecolor($desired_width, $desired_height);

      /* copy source image at a resized size */
      imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);

      /* create the physical thumbnail image to its destination */
      imagejpeg($virtual_image, $dest);
  }



 ?>
