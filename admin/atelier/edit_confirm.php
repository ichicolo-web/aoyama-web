<?php
require_once("init.php");

init();

$id = $_POST["id"];
$title = $_POST["title"];
$description = $_POST["description"];
$writer = $_POST["writer"];
$upload_file = $_POST["upload_file"];
$date = $_POST["date"];

$link = mysql_connect('localhost', 'root', 'root');
$db_selected = mysql_select_db('update', $link);
mysql_set_charset('utf-8');
$result = mysql_query('SELECT file FROM atelier where id ='.$id);
$row = mysql_fetch_assoc($result);
$close_flag = mysql_close($link);

$file_name = $_FILES["upload_file"]["name"];
if ($file_name == "") {
  $file_name = $row['file'];
}
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
  $file = "<img src=\"images/upload/".$confirm_filename."\">";
}
$error = 0;
if($_POST["title"] == "") {
  $error = 1;
  $error_message .="タイトルを入力してください。<br>";
}
if($_POST["description"] == "") {
  $error = 1;
  $error_message .="本文を入力してください。<br>";
}
if($error == 1) {
  $_SESSION["error_message"] = $error_message;
  header("Location: edit.php");
exit();
}
$view_title = htmlspecialchars($_SESSION["title"],ENT_QUOTES);
$view_writer = htmlspecialchars($_SESSION["writer"],ENT_QUOTES);
$view_date = htmlspecialchars($_SESSION["date"],ENT_QUOTES);
$check_description = htmlspecialchars($_SESSION["description"],ENT_QUOTES);
$view_description = nl2br($check_description);

print <<<EOF
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>編集内容確認</title>
<link type="text/css" rel="stylesheet" href="css/common.css" media="all" charset="utf-8" />
<link type="text/css" rel="stylesheet" href="css/confirm.css" media="all" charset="utf-8" />
</head>
<body class="confirm">
<div class="content">
<div class="input_space">
<h1>編集内容確認</h1>
<form action="edit_db.php" method="post">
<div class="log">
  <div class="tag">
    <span>$date</span>
    <span> posted by $writer</span>
  </div>
  <div class="left">
    $file 
  </div>
  <div class="right">
  <p class="title">
    $title
  </p>
  <p class="description">
  $description
  </p>
  </div>
</div>
<div class="submit">
<input type="hidden" name="check_id" value="{$id}">
<input type="hidden" name="check_date" value="{$date}">
<input type="hidden" name="check_writer" value="{$writer}">
<input type="hidden" name="check_file" value="{$file_name}">
<input type="hidden" name="check_title" value="{$title}">
<input type="hidden" name="check_description" value="{$description}">
<input type="submit" value="書き込む">
<input type="button" value="戻る" onclick="javascript:history.back();">
</div>
</form>
</div>
</div>
</body>
</html>
EOF;
?> 
