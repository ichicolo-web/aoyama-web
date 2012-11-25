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
<link type="text/css" rel="stylesheet" href="css/base.css" media="all" charset="utf-8" />
<link type="text/css" rel="stylesheet" href="css/violin_student.css" media="all" charset="utf-8" />
<script type='text/javascript' src='js/jquery-1.8.2.min.js'></script>
<script type='text/javascript' src='js/hdm.js'></script>

<?php
require_once("admin/init.php");
init();
$link = mysql_connect('localhost', 'root', 'root');
$db_selected = mysql_select_db('update', $link);
mysql_set_charset('utf-8');
$result = mysql_query('SELECT id,date,file,writer,title,description FROM posts ORDER BY id DESC LIMIT 3');
$close_flag = mysql_close($link);
?>

</head>
<body class="index">
<div class="wrapper">
  <div class="contents">
    <? require_once 'partials/header.php'; ?>
      <div class="main_title">
        <div>
          <img src="images/base/violin.png" width="38" height="35" alt="バイオリンアイコン" /><span>青山英里香バイオリン教室</span>
        </div>          
      </div><!-- /title -->
      <div class="big_box">
        <div class="box_left">
          <div class="menu_left">
            <ul>
              <li class="navi005 selected" onclick="window.hdm.violin.toggle(4)"><img src="images/base/treble-clef.png" width="10" height="20" alt="音符" /><span>生徒様用</span></li>
            </ul>
          </div><!-- /menu_left -->
        </div><!-- /box_left -->
        <div class="box_right">
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
            print('<img src="admin/images/upload/'.$row['file'].'" />');
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
</html>
