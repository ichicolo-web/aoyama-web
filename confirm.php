<?php
require_once("init.php");
init();
if(isset($_POST["name"])){$_SESSION["name"] = $_POST["name"];}
if(isset($_POST["address"])){$_SESSION["address"] = $_POST["address"];}
if(isset($_POST["email"])){$_SESSION["email"] = $_POST["email"];}
if(isset($_POST["confirm_email"])){$_SESSION["confirm_email"] = $_POST["confirm_email"];}
if(isset($_POST["tel"])){$_SESSION["tel"] = $_POST["tel"];}
if(isset($_POST["description"])){$_SESSION["description"] = $_POST["description"];}
$name = htmlspecialchars($_POST["name"],ENT_QUOTES);
$address = htmlspecialchars($_POST["address"],ENT_QUOTES);
$email = htmlspecialchars($_POST["email"],ENT_QUOTES);
$confirm_email = htmlspecialchars($_POST["confirm_email"],ENT_QUOTES);
$tel = htmlspecialchars($_POST["tel"],ENT_QUOTES);
$description = htmlspecialchars($_POST["description"],ENT_QUOTES);
$error = 0;
if($name == "") {
  $error = 1;
  $error_message .="名前を入力してください。<br>";
}
if($email == "") {
  $error = 1;
  $error_message .="E-mailアドレスを入力してください。<br>";
}

if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)) {
  $error = 0;
} else {
  $error = 1;
  $error_message .="E-mailアドレスが不正です。<br>";
}

if($confirm_email == "") {
  $error = 1;
  $error_message .="確認用E-mailアドレスを入力してください。<br>";
}

if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $confirm_email)) {
  $error = 0;
} else {
  $error = 1;
  $error_message .="確認用E-mailアドレスが不正です。<br>";
}

if($email != $confirm_email){		
  $error = 1;
  $error_message .="メールアドレスが一致していません。<br>";
}
if($description == "") {
  $error = 1;
  $error_message .="お問い合わせ内容を入力してください。<br>";
}
if($error == 1) {
  $_SESSION["error_message"] = $error_message;
  header("Location: contact.php");
  exit();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=9" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<title>Haus-de-musik（ハウスデムジカ）</title>
<meta content="バイオリン,ピアノ,教室,横浜,追浜" name="keywords" />
<meta content="" name="description" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="icon" href="image/base/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="image/base/favicon.ico" type="image/x-icon" />
<link type="text/css" rel="stylesheet" href="css/base.css" media="all" charset="utf-8" />
<link type="text/css" rel="stylesheet" href="css/contact.css" media="all" charset="utf-8" />
</head>
<body class="contact">
<div class="wrapper">
  <div class="contents">
    <? require_once 'partials/header.php'; ?>
      <div class="title">
        <div>
          <img src="images/base/violin.png" width="38" height="35" alt="バイオリン" />
          <img src="images/base/piano.png" width="27" height="35" alt="ピアノ" />
          <span>お問い合わせ内容確認</span>
        </div>          
      </div><!-- /title -->
    <form action="send.php" method="post">
    <p class="title">入力頂いた内容をご確認頂き、問題が無ければ送信下さい。</p>
    <p>お名前：<?= $name ?></p>
    <p>ご住所：<?= $address ?></p>
    <p>E-mailアドレス：<?= $email ?></p>
    <p>E-mailアドレス確認用：<?= $confirm_email ?></p>
    <p>電話番号：<?= $tel ?></p>
    <p>お問い合わせ内容：<?= $description ?></p>
    <br />
    <input type="submit" value="送信する" />
    <input type="button" onclick="self.history.back()" value="入力画面に戻る" />
    <input type="hidden" value="<?= $name ?>" name="name"/>
    <input type="hidden" value="<?= $address ?>" name="address"/>
    <input type="hidden" value="<?= $email ?>" name="email"/>
    <input type="hidden" value="<?= $confirm_email ?>" name="confirm_email"/>
    <input type="hidden" value="<?= $tel ?>" name="tel"/>
    <input type="hidden" value="<?= $description ?>" name="description"/>
    </form>
  <? require_once 'partials/footer.php'; ?> 
  </div><!-- /contents -->
</div><!-- /wrapper -->
</body>
</html>
