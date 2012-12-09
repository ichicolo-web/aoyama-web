<?php
require_once("init.php");
init();
$error_message = $_SESSION["error_message"];
if($_SESSION["name"]) {
  $name = $_SESSION["name"];
} else {
  $name = "";
}
if($_SESSION["address"]) {
  $address = $_SESSION["address"];
} else {
  $address = "";
}
if($_SESSION["email"]) {
  $email = $_SESSION["email"];
} else {
  $email = "";
}
if($_SESSION["confirm_email"]) {
  $confirm_email = $_SESSION["confirm_email"];
} else {
  $confirm_email = "";
}
if($_SESSION["tel"]) {
  $tel = $_SESSION["tel"];
} else {
  $tel = "";
}
if($_SESSION["description"]) {
  $description = $_SESSION["description"];
} else {
  $description = "";
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
          <span>お問い合わせ</span>
        </div>          
      </div><!-- /title -->
<?= $error_message ?>
    <form action="confirm.php" method="post">
    <p class="title">メールでのお問い合わせは、下記フォームからお願い致します。</p>
      <p>お名前<span>(必須)</span></p>
      <input placeholder="全角漢字でご入力ください。" class="name" type="text" name="name" size="30" maxlength="15" value="<?= $name ?>" />
      <p>ご住所</p>
      <input placeholder="全角でご入力ください。" class="address" type="text" name="address" size="30" maxlength="50" value="<?= $address ?>" />
      <p>E-mailアドレス<span>(必須)</span></p>
      <input placeholder="半角英数字でご入力ください。" class="email" type="text" name="email" size="30" maxlength="30" value="<?= $email ?>" />
      <p>E-mailアドレス確認用<span>(必須)</span></p>
      <input placeholder="半角英数字でご入力ください。" class="confirm_email" type="text" name="confirm_email" size="30" maxlength="30" value="<?= $confirm_email ?>" />
      <p>電話番号</p>
      <input placeholder="半角数字ハイフン無しでご入力ください。" class="tel" type="text" name="tel" size="30" maxlength="15" value="<?= $tel ?>" />
      <p>お問い合わせ内容<span>(必須)</span></p>
      <textarea placeholder="お問い合わせ内容をご入力ください。" class="description" name="description" rows="4" cols="40"><?= $description ?></textarea>
      <input type="hidden" name="date" value="<?= $date ?>">
      <br />
      <input class="submit" type="submit" value="問い合わせ内容確認" />
      <input type="reset" value="リセット" />
    </form>
  <? require_once 'partials/footer.php'; ?> 
  </div><!-- /contents -->
</div><!-- /wrapper -->
</body>
</html>

<?php
$_SESSION = array();
if (ini_get("session.use_cookies")) {
  $params = session_get_cookie_params();
  setcookie(session_name(), '', time() - 42000,
    $params["path"], $params["domain"],
    $params["secure"], $params["httponly"]
  );
}
session_destroy();
?>
