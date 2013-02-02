<?php

require_once (dirname(__FILE__).'/../../lib/EM/Init.php');
require_once (dirname(__FILE__).'/../../lib/EM/Db.php');
Init();

$sql = 'SELECT * FROM atelier ORDER BY id DESC';
$sth = $pdo->prepare($sql);
$sth->execute();
$date = date('Y.m.d');
$error_message = $_SESSION["error_message"];
$_SESSION["error_message"] = "";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shunichiのアトリエ 管理ページ</title>
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
    <h1>Shunichiのアトリエ 管理ページ</h1>
      <div class="error"><?= $error_message ?></div>
        <form action="confirm.php" method="post" enctype="multipart/form-data">
          <p>タイトル（20文字以内）</p>
          <input placeholder="ここにタイトルを入力してください。" class="title" type="text" name="title" size="30" maxlength="20" />
          <p>本文</p>
          <textarea placeholder="ここに本文を入力してください。" class="description" name="description" rows="4" cols="40"></textarea>
          <p>書いた人</p>
          <select class="writer" name="writer">
            <option value="Shunichi">Shunichi</option>
          </select>
          <p>写真を選択する</p>
          <input class="file" type="file" size="68px" name="upload_file" />
          <input type="hidden" name="date" value="<?= $date ?>">
          <input class="submit" type="submit" value="更新する" />
          <input class="reset" type="reset" value="リセット" />
        </form>
    </div><!-- /input_space -->
    <? while($row = $sth->fetchObject()): ?>
    <p class="detail_item_right"><?= @$purpose->name ?>&emsp;<?= @$purpose->note ?></p>
      <div class="log">
        <div class="tag">
          <span>
          <?= $row->date ?>
          </span>
          <span>
          posted by <?= $row->writer ?>
          </span>
          <form action="/lib/EM/Delete.php" class="delete" method="post" onsubmit="return confirm('<?= $row->title ?>を削除して宜しいですか？')">
            <input type="hidden" name="delete" value="<?= $row->id ?>" />
            <input type="hidden" name="db" value="atelier">
            <input type="submit" value="削除する" />
          </form>
          <form action="edit.php" class="delete" method="post">
            <input type="hidden" name="edit" value="<?= $row->id ?>" />
            <input type="submit" value="編集する" />
          </form>
          <form action="/lib/EM/Down.php" class="delete" method="post" onsubmit="return confirm('<?= $row->title ?>を下に移動して宜しいですか？')">
            <input type="hidden" name="down" value="<?= $row->id ?>" />
            <input type="hidden" name="db" value="atelier">
            <input type="submit" value="下へ" />
          </form>
          <form action="/lib/EM/Up.php" class="delete" method="post" onsubmit="return confirm('<?= $row->title ?>を上に移動して宜しいですか？')">
            <input type="hidden" name="up" value="<?= $row->id ?>" />
            <input type="hidden" name="db" value="atelier">
            <input type="submit" value="上へ" />
          </form>
        </div>
        <div class="left">
          <img src="images/upload/<?= $row->file ?>" />
        </div>
        <div class="right">
          <p class="title">
          <?= $row->title ?>
          </p>
          <p class="description">
          <?= $row->description ?>
          </p>
        </div>
      </div>
    <? endwhile; ?>
<a class ="view" href="/atelier.php" target="_blank">サイトで確認する</a>
  </div><!-- /content -->
</body>
</html>
