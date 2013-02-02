<?php
require_once (dirname(__FILE__).'/lib/EM/Init.php');
require_once (dirname(__FILE__).'/lib/EM/Db.php');
require_once (dirname(__FILE__).'/lib/EM/PagingPiano.php');
Init();
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
<link type="text/css" rel="stylesheet" href="/css/base.css" media="all" charset="utf-8" />
<link type="text/css" rel="stylesheet" href="/css/violin_student.css" media="all" charset="utf-8" />
<script type='text/javascript' src='/js/jquery-1.8.2.min.js'></script>
<script type='text/javascript' src='/js/hdm.js'></script>
<script type='text/javascript' src='/js/hdm/selected.js'></script>
</head>
<body class="index">
<div class="wrapper">
  <div class="contents">
    <? require_once 'partials/header.php'; ?>
      <div class="main_title">
        <div>
          <img src="/images/base/piano.png" width="27" height="35" alt="バイオリンアイコン" /><span>青山由貴子ピアノ教室</span>
        </div>          
      </div><!-- /title -->
      <div class="big_box">
        <div class="box_left">
          <div class="menu_left">
            <ul>
              <li class="navi005 selected" onclick="window.hdm.violin.toggle(4)"><img src="/images/base/treble-clef.png" width="10" height="20" alt="音符" /><span>生徒様用</span></li>
            </ul>
          </div><!-- /menu_left -->
        </div><!-- /box_left -->
          <div class="pagination">
            <?= $pagelink ?>
          </div><!-- /pagination -->
        <div class="box_right">
          <? while($row = $sth->fetchObject()): ?>
            <div class="article">
            <div class="tag">
            <span>
            <?= $row->date ?>
            </span>
            <span>
              posted by <?= $row->writer ?>
            </span>
            </div>
            <div class="left">
            <img src="/admin/piano/images/upload/<?= $row->file ?>" />
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
        </div><!-- /box_right -->
      </div><!-- /big_box -->
  <? require_once 'partials/footer.php'; ?> 
  </div><!-- /contents -->
</div><!-- /wrapper -->
</body>
</html>
