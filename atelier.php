<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=9" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<title>Haus-de-musik（ハウスデムジカ）Shunichiのアトリエ</title>
<meta content="バイオリン,ピアノ,教室,横浜,追浜" name="keywords" />
<meta content="" name="description" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="icon" href="image/base/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="image/base/favicon.ico" type="image/x-icon" />
<link type="text/css" rel="stylesheet" href="/css/base.css" media="all" charset="utf-8" />
<link type="text/css" rel="stylesheet" href="/css/atelier.css" media="all" charset="utf-8" />
<script type='text/javascript' src='/js/jquery-1.8.2.min.js'></script>
<script type='text/javascript' src='/js/hdm.js'></script>
<script type='text/javascript' src='/js/hdm/selected.js'></script>

<?php
require_once("admin/atelier/init.php");
require_once("paging.php");
init();
?>

</head>
<body class="index">
<div class="wrapper">
  <div class="contents">
    <? require_once 'partials/header.php'; ?>
      <div class="main_title">
        <div>
         <span>Shunichiのアトリエ</span>
         <a class="album" href="album.php">フォトアルバムへ</a>
        </div>          
      </div><!-- /title -->
      <div class="big_box">
        <div class="box_left">
          <div class="menu_left">
            <ul>
              <li class="navi005 selected"><img src="/images/base/treble-clef.png" width="10" height="20" alt="音符" /><a href="/">トップページへ戻る</a></li>
            </ul>
          </div><!-- /menu_left -->
        </div><!-- /box_left -->
        <div class="box_right">
          <?= $pagelink ?>
          <?php
          while ($row = mysql_fetch_assoc($result)) {
            print('<div class="article">');
            print('<div class="tag">');
            print('<span>');
            print($row['date']);
            print('</span>');
            print('<span>');
            print('  posted by '.$row['writer']);
            print('</span>');
            print('</div>');
            print('<div class="left">');
            print('<img src="/admin/atelier/images/upload/'.$row['file'].'" />');
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
        </div><!-- /box_right -->
      </div><!-- /big_box -->
  <? require_once 'partials/footer.php'; ?> 
  </div><!-- /contents -->
</div><!-- /wrapper -->
</body>
