<?php
require_once (dirname(__FILE__).'/lib/EM/Init.php');
require_once (dirname(__FILE__).'/lib/EM/Db.php');
require_once (dirname(__FILE__).'/lib/EM/PagingAlbum.php');
Init();
?>

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
<link media="only screen and (max-device-width: 480px)" href="css/iphone.css" type="text/css" rel="stylesheet" />
<script type='text/javascript' src='/js/jquery-1.8.2.min.js'></script>
<script type='text/javascript' src='/js/hdm.js'></script>
<script type='text/javascript' src='/js/hdm/selected.js'></script>
<script src="/js/lightbox/jquery-1.7.2.min.js"></script>
<script src="/js/lightbox/lightbox.js"></script>

</head>
<body class="index">
<div class="wrapper">
  <div class="contents">
    <? require_once 'partials/header.php'; ?>
      <div class="main_title">
        <div>
         <span>Shunichiのアトリエ フォトアルバム</span>
         <a class="album" href="atelier.php"><p class="big_title">写真の説明はこちら</p></a>
        </div>
      </div><!-- /title -->
      <div class="big_box">
        <div class="box_left">
          <div class="menu_left">
            <ul>
              <li class="navi005 selected"><img src="/images/base/treble-clef.png" width="10" height="20" alt="音符" /><a href="/atelier.php">写真の詳細へ</a></li>
            </ul>
          </div><!-- /menu_left -->
        </div><!-- /box_left -->
        <div class="box_right">
          <div class="pagination">
            <?= $pagelink ?>
          </div><!-- /pagination -->
          <p class="notice">クリックする事で写真を拡大してご覧になれます。</p>
            <div class="imageRow">
  		      	<div class="single">
              <? while($row = mysql_fetch_assoc($result)): if ($row['file'] === '') { $display = 'style="display:none;"'; } else { $display = 'style="display:block;"'; } ?>
              <div class="left" <?= $display ?>>
                <a href="/admin/atelier/images/<?= $row['file'] ?>" rel="lightbox[roadtrip]" title="<?= $row['file'] ?>">
                <img src="/admin/atelier/images/upload/<?= $row['file'] ?>" />
                <br />
                <br />
                <?= $row['title'] ?>
                </a>
              </div>
              <? endwhile; ?>
              </div><!-- /single -->
            </div><!-- /imageRow -->
        </div><!-- /box_right -->
      </div><!-- /big_box -->
  <? require_once 'partials/footer.php'; ?> 
  </div><!-- /contents -->
</div><!-- /wrapper -->
</body>
