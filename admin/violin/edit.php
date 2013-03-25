<?php
require_once (dirname(__FILE__).'/../../lib/EM/Init.php');
require_once (dirname(__FILE__).'/../../lib/EM/Db.php');
require_once (dirname(__FILE__).'/../../lib/EM/FileUpload.php');
Init();
fileUpload();

$date = date('Y.m.d');
$edit = $_POST['edit'];
$sql = 'SELECT * FROM posts where id ='.$edit;
$result = mysql_query($sql);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>バイオリン教室  編集</title>
<meta content="" name="keywords" />
<meta content="" name="description" />
<meta name="robots" content="noindex,nofollow">
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link type="text/css" rel="stylesheet" href="/css/common.css" media="all" charset="utf-8" />
<link type="text/css" rel="stylesheet" href="/css/admin.css" media="all" charset="utf-8" />
</head>
<body class="admin">
  <div class="content">
    <div class="input_space">
    <h1>バイオリン教室  編集</h1>
    <? while($row = mysql_fetch_assoc($result)): ?>
    <form action="edit_confirm.php" method="post" enctype="multipart/form-data">
      <p>タイトル（20文字以内）</p>
        <input value="<?= $row['title'] ?>" class="title" type="text" name="title" size="30" maxlength="20" />
      <p>本文</p>
        <textarea class="description" name="description" rows="4" cols="40"><?= ereg_replace ("<br />","\n",$row['description']) ?></textarea>
      <p>書いた人</p>
        <select class="writer" name="writer">
          <option value="Shunichi">Shunichi</option>
        </select>
      <p>写真を選択する<span style="color: red;">※変更する必要がある場合のみ</span></p>
      <input class="file" type="file" size="68px" name="upload_file" />
      <input type="hidden" name="date" value="<?= $date ?>">
      <input type="hidden" name="id" value="<?= $edit ?>">
      <input class="submit" type="submit" value="更新する" />
      <input class="reset" type="button" value="戻る" onclick="javascript:history.back();">
    </form>
    <? endwhile; ?>
    </div><!-- /input_space -->
  </div><!-- /content -->
</body>
</html>
