<?php
require_once (dirname(__FILE__).'/../../lib/EM/Init.php');
require_once (dirname(__FILE__).'/../../lib/EM/FileUpload.php');
Init();
if(isset($_POST["title"])){$_SESSION["title"] = $_POST["title"];}
if(isset($_POST["description"])){$_SESSION["description"] = $_POST["description"];}
if(isset($_POST["writer"])){$_SESSION["writer"] = $_POST["writer"];}
if(isset($_POST["upload_file"])){$_SESSION["upload_file"] = $_POST["upload_file"];}
if(isset($_POST["date"])){$_SESSION["date"] = $_POST["date"];}
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
  header("Location: index.php");
  exit();
}
$view_title = htmlspecialchars($_SESSION["title"],ENT_QUOTES);
$view_writer = htmlspecialchars($_SESSION["writer"],ENT_QUOTES);
$view_date = htmlspecialchars($_SESSION["date"],ENT_QUOTES);
$check_description = htmlspecialchars($_SESSION["description"],ENT_QUOTES);
$view_description = nl2br($check_description);
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>投稿内容確認</title><D-1>
<link type="text/css" rel="stylesheet" href="/css/common.css" media="all" charset="utf-8" />
<link type="text/css" rel="stylesheet" href="/css/confirm.css" media="all" charset="utf-8" />

</head>
<body class="confirm">
<div class="content">
<div class="input_space">
<h1>投稿内容確認</h1>
<form action="/lib/EM/Insert.php" method="post">
<div class="log">
  <div class="tag">
  <span><?= $view_date ?></span>
    <span> posted by <?= $view_writer ?></span>
  </div>
  <div class="left">
    <img src="images/upload/<?= fileUpload(); ?>" />
  </div>
  <div class="right">
  <p class="title">
    <?= $view_title ?>
  </p>
  <p class="description">
    <?= $view_description ?>
  </p>
  </div>
</div>
<div class="submit">
<input type="hidden" name="check_date" value="<?= $view_date ?>">
<input type="hidden" name="check_writer" value="<?= $view_writer ?>">
<input type="hidden" name="check_file" value="<?= fileUpload(); ?>">
<input type="hidden" name="check_title" value="<?= $view_title ?>">
<input type="hidden" name="check_description" value="<?= $check_description ?>">
<input type="hidden" name="db" value="atelier">
<input type="submit" value="書き込む">
<input type="button" value="戻る" onclick="javascript:history.back();">
</div>
</form>
</div>
</div>
</body>
</html>
