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
<link type="text/css" rel="stylesheet" href="css/piano.css" media="all" charset="utf-8" />
<script type='text/javascript' src='js/jquery-1.8.2.min.js'></script>
<script type='text/javascript' src='js/hdm.js'></script>
<script type='text/javascript' src='js/hdm/violin.js'></script>
</head>
<body class="index">
<div class="wrapper">
  <div class="contents">
    <? require_once 'partials/header.php'; ?>
      <div class="title">
        <div>
          <img src="images/base/piano.png" width="27" height="35" alt="バイオリンアイコン" /><span>青山由貴子ピアノ教室</span>
        </div>          
      </div><!-- /title -->
      <div class="big_box">
        <div class="box_left">
          <div class="menu_left">
            <ul>
              <li class="navi001 selected" onclick="window.hdm.violin.toggle(1)"><img src="images/base/treble-clef.png" width="10" height="20" alt="音符" /><span>はじめに</span></li>
              <li class="navi002" onclick="window.hdm.violin.toggle(2)"><img src="images/base/treble-clef.png" width="10" height="20" alt="音符" /><span>レッスン料</span></li>
              <li class="navi003" onclick="window.hdm.violin.toggle(3)"><img src="images/base/treble-clef.png" width="10" height="20" alt="音符" /><span>プロフィール</span></li>
              <li class="navi004" onclick="window.hdm.violin.toggle(4)"><img src="images/base/treble-clef.png" width="10" height="20" alt="音符" /><span>演奏依頼</span></li>
            </ul>
          </div><!-- /menu_left -->
        </div><!-- /box_left -->
        <div class="box_main">
          <div class="box001">
          <div class="box_right">
            <p class="obi"><b>ご挨拶</b></p>
          </div><!-- /box_right -->
          <div class="cb"></div>
            <div class="sentence01">
              <p>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
            </div><!-- /sentence01 -->
            </div><!-- /box001 -->
          <div class="box002">
          <div class="box_right">
            <p class="obi">レッスン料</p>
          </div>
          <div class="cb"></div>
          <br />
          <ul>
          	<li>【横須賀/横浜教室】</li>
            <li>毎週水曜日のみ</li>
            <li>所在地：横須賀市湘南鷹取３丁目</li>
            <li>最寄り駅：京浜急行「追浜駅」</li>
            <li>追浜駅より「湘南鷹取循環」または「鷹取一丁目」バスに乗車</li>
            <li>「鷹取中学校前」下車徒歩５分</li>
            <li>内川橋ー安浦利用の場合は「追浜一丁目」のバス停下車徒歩７分</li>
            <li>お車の方は駐車場スペースあり</li>
          </ul>
          
          <table border="1" cellpadding="0" cellspacing="0">
              <th colspan="2">レッスン料金&nbsp;(月謝制　年４５回程度) </th>
            <tr>
              <td>幼稚園</td>
              <td>30分/6,000円</td>
            </tr>
            <tr>
              <td>小学1，2年生</td>
              <td>30分/7,000円</td>
            </tr>
            <tr>
              <td>小学3～5年生</td>
              <td>45分/8,000円</td>
            </tr>
            <tr>
              <td>小学6年生～</td>
              <td>60分/9,000円</td>
            </tr>
            <tr>
              <td colspan="2">兄弟割引あり&nbsp;-1,000円</td>
            </tr>
        </table>
        <div class="sentence02">
          <p>４歳ぐらいから大人の方まで。<br />
"情操教育の一貫として" と考えていらっしゃるお家のお子様、"趣味として生涯弾いていたい"とお考えの方が中心です。<br />
やや専門的にハノン、エチュード、J.S.Bach、曲(ソナタ、ロマン派など)、毎週４，５冊こなして来られる方、曲を２，３曲練習して来られる方、学校の合唱コンクール、式の伴奏曲を携えて来られる方、さまざまです。<br />
ディズニーランドのあの曲！となりのトトロなどのジブリの曲etc、お楽しみの曲や連弾を交えながら、"歌う心を大切に！継続は力なり！"をモットーにレッスンしております。もちろん、ちょっとしたソルフェージュ、楽典の勉強も取り入れます。希望者とは横須賀小中学校作曲課題、テスト勉強も行っております。

ピアノを通じて、人生が豊かで幸せなものになっていただけたら・・・・・と願っております。
          </p>
        </div><!-- /sentence02 -->
            </div><!-- /box002 -->
          <div class="box003">
        <div class="box_right">
          <p class="obi">プロフィール</p>
        </div>
        <div class="cb"></div>
        <div class="sentence03">
          <div class="sentence03_left">
          <p><img src="images/piano/yukiko.jpg" width="160" height="213" />
          </p>
          </div>
          	<div class="sentence03_right">
          	<ul>
            	<li><span>【青山由貴子】</span></li>
                
                <li>東京杉並区に生まれる。４歳よりヤマハ音楽教室に通う。</li>
                <li>その後『窓ぎわのトットちゃん』で有名な小学校の校長先生のお嬢様である本間みさを先生にピアノを師事。</li>
                <li>NHK「ピアノのおけいこ」出演をきっかけに弘中孝、久保陽子先生御夫妻にも師事する。</li>
                <li>ヤマハ講師資格を取得。大学卒業と同時にヤマハ音楽教室幼児科ジュニア科のシステム講師となり、ピアノ教室も始める。</li>
                <li>また、高校時代より室内楽や合唱伴奏を始め、コールアミカル、ヴォーチェ・ムジカーレなど数々の合唱団の伴奏にあたり現在に至る。ピアノ講師歴２９年。</li>
        </ul>

        </ul>
        </div>
        </div><!-- /sentence03 -->
            </div><!-- /box003 -->
      </div><!-- /box_main -->
    </div><!-- /big_box -->
  <? require_once 'partials/footer.php'; ?> 
  </div><!-- /contents -->
</div><!-- /wrapper -->
</body>
</html>
