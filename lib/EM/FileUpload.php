<?php

/*
 ** init 
 */
function fileUpload() {
  $file_name = $_FILES["upload_file"]["name"];
  $pos = strrpos( $file_name, '\\' );
  if($pos === false) {
    $confirm_filename = htmlspecialchars($file_name);
  } else {
    $confirm_filename = substr( $file_name, $pos+1 );
  }
  $file_size = $_FILES["upload_file"]["size"];
  $file_type = $_FILES["upload_file"]["type"];
  $file_tmp = $_FILES["upload_file"]["tmp_name"];
  move_uploaded_file($file_tmp, "images/".$confirm_filename);
  $img = file_get_contents("images/".$confirm_filename);
  $im = imagecreatefromstring($img);
  $XX = imagesx($im);
  $YY = imagesy($im);
  $Xa = $XX / 145 ;
  $Ya = $YY / 175 ; 
  if($Xa >= $Ya){
  $X2 = 145;
  $Y2 = intval((145 / $XX) * $YY) ;
  } else {
  $Y2 = 175;
  $X2 = intval((175 / $YY) * $XX) ;
  }
  $output = imagecreatetruecolor($X2, $Y2);
  imagecopyresampled($output, $im, 0, 0, 0, 0, $X2, $Y2, $XX, $YY);
  imagejpeg($output ,"images/upload/".$confirm_filename);
  
  if (strrpos($confirm_filename, ".") === false) {
    $file = "";
  } else {
    $file = $confirm_filename;
  }
  return $file;
}
