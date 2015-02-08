<?php
require_once (dirname(__FILE__).'/lib/EM/Init.php');
require_once (dirname(__FILE__).'/lib/EM/Db.php');
Init();

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
$category = htmlspecialchars($_POST["category"],ENT_QUOTES);
$description = htmlspecialchars($_POST["description"],ENT_QUOTES);

$to="yukiko.aoyama.piano@ezweb.ne.jp";
//$to="kobito0826@gmail.com";
$title="Message From haus-de-musik-aoyama.com";
$all="
  お名前：$name
  住所：$address
  E-mailアドレス：$email
  電話番号：$tel
  カテゴリー：$category
  お問い合わせ内容：$description";

$header = "MIME-Version: 1.0\n"
  . "Content-Transfer-Encoding: 7bit\n"
  . "Content-Type: text/plain; charset=ISO-2022-JP\n"
  . "Message-Id: <" . md5(uniqid(microtime())) . "@ezweb.ne.jp/>\n"
  . "From: Haus-de-musik<yukiko.aoyama.piano@ezweb.ne.jp>\n";
$subject= mb_encode_mimeheader('Message From haus-de-musik-aoyama.com', 'ISO-2022-JP-MS');

mb_internal_encoding('UTF-8');

if (mail($to, $title, mb_convert_encoding($all, 'ISO-2022-JP-MS'), $header)) {
  $caution="メールを送信いたしました。<br />
    このたびはお問い合わせいただき、誠にありがとうございました。<br /><br /><br />
    <a class='back' href='contact.php'>お問い合わせページに戻る</a>";
}
else{
  $caution="メールの送信に失敗しました。<br />
    再度お問い合わせいただくか、お電話にてご連絡ください。<br /><br />";
}

$sql = 'INSERT INTO contacts (name,address,email,tel,category,description) VALUES ("' .$name. '","' .$address. '","' .$email. '","' .$tel. '","' .$category. '","' .$description. '")';

//echo $sql;

mysql_query($sql, $link);

$reply_title="お問い合わせありがとうございます。";
$reply_all="このメールは自動送信です。
  このたびはお問い合わせいただき、誠にありがとうございます。
  今一度ご入力内容をご確認いただきますようよろしくお願いいたします。
  お名前：$name
  住所：$address
  E-mailアドレス：$email
  電話番号：$tel
  カテゴリー：$category
  お問い合わせ内容：$description
  改めてご連絡させていただきますので今しばらくお待ちいただきますようよろしくお願いいたします。";
mail($email, $reply_title, mb_convert_encoding($reply_all, 'ISO-2022-JP-MS'), $header);
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
<link rel="icon" href="/image/base/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="/image/base/favicon.ico" type="image/x-icon" />
<link type="text/css" rel="stylesheet" href="/css/base.css" media="all" charset="utf-8" />
<link type="text/css" rel="stylesheet" href="/css/contact.css" media="all" charset="utf-8" />
<script type='text/javascript' src='/js/jquery-1.8.2.min.js'></script>
<script type='text/javascript' src='/js/hdm/selected.js'></script>
</head>
<body class="contact">
<div class="wrapper">
  <div class="contents">
    <? require_once 'partials/header.php'; ?>
      <div class="title">
        <div>
          <img src="/images/base/violin.png" width="38" height="35" alt="バイオリン" />
          <img src="/images/base/piano.png" width="27" height="35" alt="ピアノ" />
          <span>送信確認</span>
        </div>          
      </div><!-- /title -->
      <p class="caution"><?= $caution ?></p>
  <? require_once 'partials/footer.php'; ?> 
  </div><!-- /contents -->
</div><!-- /wrapper -->
</body>
</html>
