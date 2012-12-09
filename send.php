<?php
require_once("init.php");
init();
$_SESSION = array();
if (ini_get("session.use_cookies")) {
  $params = session_get_cookie_params();
  setcookie(session_name(), '', time() - 42000,
    $params["path"], $params["domain"],
    $params["secure"], $params["httponly"]
  );
}
session_destroy();

$name = htmlspecialchars($_POST["name"],ENT_QUOTES);
$address = htmlspecialchars($_POST["address"],ENT_QUOTES);
$email = htmlspecialchars($_POST["email"],ENT_QUOTES);
$confirm_email = htmlspecialchars($_POST["confirm_email"],ENT_QUOTES);
$tel = htmlspecialchars($_POST["tel"],ENT_QUOTES);
$description = htmlspecialchars($_POST["description"],ENT_QUOTES);

$to="sevens67@gmail.com";
$title="お問い合わせがありました。";
$all="
  お名前：$name
  住所：$address
  E-mailアドレス：$email
  電話番号：$tel
  お問い合わせ内容：$description";
if(mb_send_mail($to,$title,$all,"FROM:$email")){
  $caution="メールを送信いたしました。<br />
    このたびはお問い合わせいただき、誠にありがとうございました。<br /><br /><br />
    <a class='back' href='contact.php'>お問い合わせページに戻る</a>";
}
else{
  $caution="メールの送信に失敗しました。<br />
    再度お問い合わせいただくか、お電話にてご連絡ください。<br /><br />";
}

//返信用
$reply_title="お問い合わせありがとうございます。";
$reply_all="このメールは自動送信です。
  このたびはお問い合わせいただき、誠にありがとうございます。
  今一度ご入力内容をご確認いただきますようよろしくお願いいたします。
  お名前：$name
  住所：$address
  E-mailアドレス：$email
  電話番号：$tel
  お問い合わせ内容：$description
  改めてご連絡させていただきますので今しばらくお待ちいただきますようよろしくお願いいたします。";
mb_send_mail($email,$reply_title,$reply_all,"FROM:$to");

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
          <span>送信確認</span>
        </div>          
      </div><!-- /title -->
      <p class="caution"><?= $caution ?></p>
  <? require_once 'partials/footer.php'; ?> 
  </div><!-- /contents -->
</div><!-- /wrapper -->
</body>
</html>
