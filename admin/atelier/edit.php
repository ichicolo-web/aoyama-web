<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shunichiのアトリエ 編集</title>
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
$edit = $_POST['edit'];
$link = mysql_connect('sddb0040086768.cgidb', 'sd_dba_ODI4MzQ2', 'XahJtrWz');
$db_selected = mysql_select_db('sddb0040086768', $link);
//$link = mysql_connect('localhost', 'root', 'root');
//$db_selected = mysql_select_db('update', $link);
mysql_set_charset('utf-8');
$result = mysql_query('SELECT * FROM atelier where id ='.$edit);
$close_flag = mysql_close($link);
?>
</head>
<body class="admin">
  <div class="content">
    <div class="input_space">
    <h1>Shunishiのアトリエ 編集</h1>
<?php
while ($row = mysql_fetch_assoc($result)) {
print('<form action="edit_confirm.php" method="post" enctype="multipart/form-data">');
print('<p>タイトル（20文字以内）</p>');
print('<input value="'.$row['title'].'" class="title" type="text" name="title" size="30" maxlength="20" />');
print('<p>本文</p>');
print('<textarea class="description" name="description" rows="4" cols="40">'.$row['description'].'</textarea>');
print('<p>書いた人</p>');
print('<select class="writer" name="writer">');
print('<option value="Shunichi">Shunichi</option>');
print('</select>');
print('<p>写真を選択する<span style="color: red;">※変更する必要がある場合のみ</span></p>');
print('<input class="file" type="file" size="68px" name="upload_file" />');
print('<input type="hidden" name="date" value="'.$date.'">');
print('<input type="hidden" name="id" value="'.$edit.'">');
print('<input class="submit" type="submit" value="更新する" />');
print('<input class="reset" type="button" value="戻る" onclick="javascript:history.back();">');
print('</form>');
} 
?>
    </div><!-- /input_space -->
  </div><!-- /content -->
</body>
</html>
