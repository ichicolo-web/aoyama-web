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
<title>Haus-de-musik（ハウスデムジカ）ピアノ生徒用ページ</title>
<meta content="バイオリン,ピアノ,教室,横浜,追浜" name="keywords" />
<meta content="" name="description" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="icon" href="image/base/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="image/base/favicon.ico" type="image/x-icon" />
<link type="text/css" rel="stylesheet" href="/css/base.css" media="all" charset="utf-8" />
<link type="text/css" rel="stylesheet" href="/css/atelier.css" media="all" charset="utf-8" />
<link href="/css/lightbox.css" rel="stylesheet" />
<link media="only screen and (max-device-width: 480px)" href="css/iphone.css" type="text/css" rel="stylesheet" />
<script type='text/javascript' src='/js/jquery-1.8.2.min.js'></script>
<script type='text/javascript' src='/js/hdm.js'></script>
<script type='text/javascript' src='/js/hdm/selected.js'></script>
<script src="/js/lightbox/jquery-1.7.2.min.js"></script>
<script src="/js/lightbox/lightbox.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37288195-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body class="index">
<div class="wrapper">
  <div class="contents">
    <? require_once 'partials/header.php'; ?>
      <div class="main_title">
        <div>
         <img src="/images/base/piano.png" width="27" height="35" alt="バイオリンアイコン" /><span>青山由貴子ピアノ教室</span>
         <a class="album" href="/piano_album.php"><p class="big_title">フォトアルバムへ</p>※写真を拡大してご覧になれます。</a>
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
        <div class="box_right">
          <div class="pagination">
            <?= $pagelink ?>
          </div><!-- /pagination -->
          <? while($row = mysql_fetch_assoc($result)): ?>
            <div class="article">
            <div class="tag">
            <span>
            <?= $row['date'] ?>
            </span>
            <span>
              posted by <?= $row['writer'] ?>
            </span>
            </div>
            <div class="left">
            <a href="/admin/piano/images/<?= $row['file'] ?>" rel="lightbox[roadtrip]" title="<?= $row['file'] ?>">
            <img src="/admin/piano/images/upload/<?= $row['file'] ?>" />
            <br />
            <br />
            <?= $row['title'] ?>
            </a>
            </div>
            <div class="right">
            <p class="title">
            <?= $row['title'] ?>
            </p>
            <p class="description">
            <?= $row['description'] ?>
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
