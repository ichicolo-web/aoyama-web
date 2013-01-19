<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=9" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<title>Haus-de-musik（ハウスデムジカ）Shunichiのアトリエ フォトアルバム</title>
<meta content="バイオリン,ピアノ,教室,横浜,追浜" name="keywords" />
<meta content="" name="description" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="icon" href="image/base/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="image/base/favicon.ico" type="image/x-icon" />
<link type="text/css" rel="stylesheet" href="/css/base.css" media="all" charset="utf-8" />
<link type="text/css" rel="stylesheet" href="/css/album.css" media="all" charset="utf-8" />
<link href="/css/lightbox.css" rel="stylesheet" />
<script type='text/javascript' src='/js/jquery-1.8.2.min.js'></script>
<script type='text/javascript' src='/js/hdm.js'></script>
<script type='text/javascript' src='/js/hdm/selected.js'></script>
<script src="/js/lightbox/jquery-1.7.2.min.js"></script>
<script src="/js/lightbox/lightbox.js"></script>

<?php
require_once("admin/atelier/init.php");
init();
$link = mysql_connect('sddb0040086768.cgidb', 'sd_dba_ODI4MzQ2', 'XahJtrWz');
$db_selected = mysql_select_db('sddb0040086768', $link);
//$link = mysql_connect('localhost', 'root', 'root');
//$db_selected = mysql_select_db('update', $link);
mysql_set_charset('utf-8');
$result = mysql_query('SELECT id,date,file,writer,title,description FROM atelier ORDER BY id DESC');
$close_flag = mysql_close($link);
?>

</head>
<body class="index">
<div class="wrapper">
  <div class="contents">
    <? require_once 'partials/header.php'; ?>
      <div class="main_title">
        <div>
         <span>Shunichiのアトリエ フォトアルバム</span>
        </div>
      </div><!-- /title -->
      <div class="big_box">
        <div class="box_left">
          <div class="menu_left">
            <ul>
              <li class="navi005 selected><img src="/images/base/treble-clef.png" width="10" height="20" alt="音符" /><a href="/atelier.php">掲示板に戻る</a></li>
            </ul>
          </div><!-- /menu_left -->
        </div><!-- /box_left -->
        <div class="box_right">
          <p class="notice">クリックする事で写真を拡大してご覧になれます。</p>
            <div class="imageRow">
  		      	<div class="single">
          <?php
          while ($row = mysql_fetch_assoc($result)) {
            if ($row['file'] === '') {
              $display = 'style="display:none;"';
            } else {
              $display = 'style="display:block;"';
            }
            print('<div class="left"' .$display.'>');
            print('<a href="/admin/atelier/images/'.$row['file'].'" rel="lightbox[roadtrip]" title="'.$row['title'].'">');
            print('<img src="/admin/atelier/images/upload/'.$row['file'].'" />');
            print('<br />');
            print('<br />');
            print($row['title']);
            print('</a>');
            print('</div>');
          } 
          ?>
              </div><!-- /single -->
            </div><!-- /imageRow -->
        </div><!-- /box_right -->
      </div><!-- /big_box -->
  <? require_once 'partials/footer.php'; ?> 
  </div><!-- /contents -->
</div><!-- /wrapper -->
</body>
