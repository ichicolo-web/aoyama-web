<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>バイオリン教室 管理ページ</title>
<meta content="" name="keywords" />
<meta content="" name="description" />
<meta name="robots" content="noindex,nofollow">
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link type="text/css" rel="stylesheet" href="css/common.css" media="all" charset="utf-8" />
<link type="text/css" rel="stylesheet" href="css/admin.css" media="all" charset="utf-8" />
<?php
require_once("init.php");
init();
$date = date('Y.m.d');
$error_message = $_SESSION["error_message"];
$_SESSION["error_message"] = "";

$link = mysql_connect('localhost', 'root', 'root');
$db_selected = mysql_select_db('update', $link);
mysql_set_charset('utf-8');
$result = mysql_query('SELECT id,date,file,writer,title,description FROM posts ORDER BY id DESC LIMIT 3');
$close_flag = mysql_close($link);
?>
</head>
<body class="admin">
  <div class="content">
    <div class="input_space">
    <h1>バイオリン教室 管理ページ</h1>
      <div class="error"><?= $error_message ?></div>
        <form action="confirm.php" method="post" enctype="multipart/form-data">
          <p>タイトル（20文字以内）</p>
          <input placeholder="ここにタイトルを入力してください。" class="title" type="text" name="title" size="30" maxlength="20" />
          <p>本文</p>
          <textarea placeholder="ここに本文を入力してください。" class="description" name="description" rows="4" cols="40"></textarea>
          <p>書いた人</p>
          <select class="writer" name="writer">
            <option value="青山英里香">青山英里香</option>
            <option value="青山由貴子">青山由貴子</option>
          </select>
          <p>写真を選択する</p>
          <input class="file" type="file" size="68px" name="upload_file" />
          <input type="hidden" name="date" value="<?= $date ?>">
          <input class="submit" type="submit" value="更新する" />
          <input class="reset" type="reset" value="リセット" />
        </form>
    </div><!-- /input_space -->
        <form action="delete.php" class="delete" method="post" enctype="multipart/form-data">IDナンバーを入力して記事を削除：
          <input placeholder="入力" type="text" name="delete" size="10" maxlength="4" />
          <input type="submit" value="削除する" />
        </form>
<a class ="view" href="../../violin_student.php" target="_blank">サイトで確認する</a>
<?php
while ($row = mysql_fetch_assoc($result)) {
  print('<div class="log">');
  print('<div class="tag">');
  print('<span>');
  print($row['date']);
  print('</span>');
  print('<span>');
  print('  posted by '.$row['writer']);
  print('</span>');
  print('<span class="id">');
  print($row['id']);
  print('</span>');
  print('</div>');
  print('<div class="left">');
  print('<img src="images/upload/'.$row['file'].'" />');
  print('</div>');
  print('<div class="right">');
  print('<p class="title">');
  print($row['title']);
  print('</p>');
  print('<p class="description">');
  print($row['description']);
  print('</p>');
  print('</div>');
  print('</div>');
} 
?>
  </div><!-- /content -->
</body>
</html>
