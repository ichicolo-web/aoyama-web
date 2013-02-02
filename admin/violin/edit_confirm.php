<?php
require_once (dirname(__FILE__).'/../../lib/EM/Init.php');
require_once (dirname(__FILE__).'/../../lib/EM/FileUpload.php');
Init();
fileUpload();

$id = $_POST["id"];
$title = $_POST["title"];
$description = $_POST["description"];
$writer = $_POST["writer"];
$upload_file = $_POST["upload_file"];
$date = $_POST["date"];

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

?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>編集内容確認</title>
<link type="text/css" rel="stylesheet" href="/css/common.css" media="all" charset="utf-8" />
<link type="text/css" rel="stylesheet" href="/css/confirm.css" media="all" charset="utf-8" />
</head>
<body class="confirm">
<div class="content">
<div class="input_space">
<h1>編集内容確認</h1>
<form action="/lib/EM/Update.php" method="post">
<div class="log">
  <div class="tag">
    <span><?= $date ?></span>
    <span> posted by <?= $writer ?></span>
  </div>
  <div class="left">
    <img src="images/upload/<?= fileUpload(); ?>" />
  </div>
  <div class="right">
  <p class="title">
    <?= $title ?>
  </p>
  <p class="description">
    <?= $description ?>
  </p>
  </div>
</div>
<div class="submit">
<input type="hidden" name="check_id" value="<?= $id ?>">
<input type="hidden" name="check_date" value="<?= $date ?>">
<input type="hidden" name="check_writer" value="<?= $writer ?>">
<input type="hidden" name="check_file" value="<?= fileUpload(); ?>">
<input type="hidden" name="check_title" value="<?= $title ?>">
<input type="hidden" name="check_description" value="<?= $description ?>">
<input type="hidden" name="db" value="posts">
<input type="submit" value="書き込む">
<input type="button" value="戻る" onclick="javascript:history.back();">
</div>
</form>
</div>
</div>
</body>
</html>
