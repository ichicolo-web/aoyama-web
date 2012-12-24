<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=9" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<title>Haus-de-musik（ハウスデムジカ）| 演奏依頼</title>
<meta content="バイオリン,ピアノ,教室,横浜,追浜" name="keywords" />
<meta content="" name="description" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="icon" href="image/base/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="image/base/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" title="使用不可にしてブラウザーでプレビュー : /css/base.css" type="text/css" media="all" charset="utf-8" />
<style type="text/css" media="all">



* {
    margin: 0;
    padding: 0;
}

html>/**/body {
	font-size: 12px; /* Except IE */
	color:#40281d;
}

* + html body {  
	/*font-family: "メイリオ","Meiryo"; */
	/* メイリオが適応されるブラウザではメイリオ表示 */
}

h1, h2, h3, h4, h5, h6, strong, em {
  font-size: 100%;
  font-weight: normal;
  font-style: normal;
  line-height:1em;
  margin: 0;
}

img {
	border: 0 none;
	color:#40281d;
}

li{
	list-style-type: none;	
}

a {
	color:#40281d;
	text-decoration: none;
}

a:visited {
	color:#40281d;
	text-decoration: none;
} 
a:hover {
	color: #cc9593;
	text-decoration: none;
}
.border_dotted:hover{
	border-bottom: 1px #cc9593 dotted;
}
html {
	overflow-y:scroll;
}

.clearfix:after {
  content: ".";  /* 新しい要素を作る */
  display: block;  /* ブロックレベル要素に */
  clear: both;
  height: 0;
  visibility: hidden;
}

.clearfix {
  min-height: 1px;
}

* html .clearfix {
  height: 1px;
  /*¥*//*/
  height: auto;
  overflow: hidden;
  /**/
}

body {
	width: 100%;
	height: 100%;
	position: relative;
	top: 0px;
	left: 0px;
	font-size: 75%;	
	background-position: top center;
	background-color: #ffffff;
	font-family: verdana,"ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",Osaka,"ＭＳ Ｐゴシック","MS PGothic",Sans-Serif; 
	line-height: 1.4;  
	color: #40281d;
	background-image: url(images/base/lyonnette.png);
}

.contents {
	width: 950px;
	height: auto;
	position: relative;
	margin: 0 auto;
    background-color: #ffffff;
    overflow:hidden;
}
.contents02 {
	width: 700px;
	height: auto;
	position: relative;
	margin: 0 auto;
  background-color: #ffffff;
}

.header {
	width: 950px;
	height: 155px;
	position: relative;
	margin: 0 auto;
  border-bottom: solid 3px #300203;
   background: url("images/base/header_background.jpg") no-repeat;
}

.header div {
	width: 900px;
	height: 70px;
  padding: 45px 25px 0;
}

.header div h1 {
  float: left;
}

.header div p {
	margin: 10px 0 0 30px;
	float:left;
}

.header div address {
  float: right;
}

.header div address a {
  text-decoration: underline;
}

.header ul.gnavi {
	width: 900px;
	height: 40px;
  padding: 0 25px;
  font-size: 1.15em;
  font-weight: bold;
}

.header ul.gnavi li {
  float: left;
  border-right: solid 2px #300203;
  padding: 0 15px;
}

.header ul.gnavi li.selected {
  background-color: #cc9593;
}

.header ul.gnavi li.selected a:hover{
  color: #300203;
}

.header ul.gnavi li.last {
  border: none;
}

.footer {
	width: 900px;
	height: 44px;
  padding: 20px 25px 0;
  background: url("images/base/footer_background.jpg") no-repeat;
  color: #ffffff;
  float: left;
}

.footer p {
  float: left;
}

.footer ul {
  float: right;
}

.footer ul li {
  float: left;
  margin: 0 0 0 15px;
}

.footer ul li a {
  color: #ffffff;
}

.footer ul li a:hover {
  text-decoration: underline;
}


</style>
<link rel="stylesheet" title="使用不可にしてブラウザーでプレビュー : /css/request.css" type="text/css" media="all" charset="utf-8" />
<style type="text/css" media="all">


/* CSS Document */

/* はじめにページ */
.inner{
	width:950px;
	height:auto;
}

.big_box{
	width:950px;
	height:auto;
  float:left;
  background-color:#ffffff;
}

.box_left{
	width:auto;
	height:200px;
	position:relative;
	float:left;
}

.title{
	width:200px;
	height:40px;
	margin:20px 0 0 20px;
}

.title div img {
	float:left;
  	clear:both;
}

.title div{
  height: 50px;
  padding: 0 0 0 25px;
}

.title div span {
  font-size: 1.3em;
  font-weight: bold;
  margin: 10px 0 0 10px;
  float:left;
}

.menu_left{
	width:200px;
	height:auto;
	margin: 0 0 20px 20px;
	float:left;
}

.menu_left img {
	float:left;
  clear:both;
}

.menu_left ul {
  height: 50px;
  padding: 0 0 0 25px;
}

.menu_left li{
  padding:10px 0 0 10px;
  cursor:pointer;
}

.menu_left li span {
  font-size: 1.3em;
  font-weight: bold;
  margin: 0 0 0 0px;
  padding:10px 0 0 10px;
  color:#963;
}

.menu_left li.selected span{
	color: #cc9593;
}

.box_main{
	width:720px;
	height:auto;
	margin-top:-40px;
	float:right;
}

.box_right{
	width:700px;
	height:30px;
	float:right;
	margin:10px 20px 0 0;
	background-image:url(images/base/title_background.jpg);
}

.box_right .obi{
	width:700px;
	height:30px;
	color:#FFF;
	margin:8px 0 0 30px;
	font-weight:bold;
}

.box001,
.box002,
.box003,
.box004{
	min-height:400px;
}
.box002,
.box003,
.box004{
	display:none;
}
.sentence01{
	width:700px;
	height:auto;
}
.sentence01 p{
	width:700px;
	height:auto;
	margin:20px 20px 20px 0;
	word-wrap:break-all;
}
.sentence02{
	width:700px;
	min-height:400px;
	height:auto;
}
.sentence02 p{
	width:700px;
	height:auto;
	margin:20px 20px 20px 0;
	word-wrap:break-all;
}
.sentence02 table{
	text-align:center;
}
.sentence03{
	width:700px;
	height:auto;
}
.sentence03 li{
	margin:0 20px 0 0;
	word-wrap:break-all;
}
.sentence03_left {
	float:left;
}
.sentence03_right {
	width:470px;
	margin:20px 20px 20px 0;
	word-wrap:break-all;
	float:right;
}
.sentence03 span {
  font-size: 1.3em;
  font-weight: bold;
}
.sentence03 img{
	float:left;
	margin:10px 0 0 0;
}
.sentence04{
	width:700px;
	height:auto;
}
.sentence04 p{
	width:700px;
	height:auto;
	margin:10px 20px 10px 0;
	word-wrap:break-all;
}
.cb{
	clear:both;
}
/* はじめにページ終わり */

/* 料金ページ */
table{
	width:300px;
	border:#999 solid 1px;
	margin:10px 0 0 0;
}
/* 料金ページ終わり */
.photo_box{
	width:720px;
	text-align:center;
}
.photo_box table{
	text-decoration:none;
	text-align:center;
	border:none;
	vertical-align:bottom;
}
.photo_box table td{
	padding:5px 0 10px 0;
	text-align:center;
	vertical-align:bottom;
}
.request{
		width:700px;
	min-height:400px;
	height:auto;
}
.request_sentence{
	padding:30px 10px 0px 10px;
	min-height:400px;
}
.quartet{
	float:right;
	margin:20px 20px 0 0;
	padding:0 0 0 10px;
}

.button{
	width:200px;
	height:auto;
	margin:0 auto 30px auto;
}


</style>
<link rel="stylesheet" title="使用不可にしてブラウザーでプレビュー : css/lightbox.css" />
<style type="text/css">

/* line 6, ../sass/lightbox.sass */
#lightboxOverlay {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 9999;
  background-color: black;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=85);
  opacity: 0.85;
  display: none;
}

/* line 15, ../sass/lightbox.sass */
#lightbox {
  position: absolute;
  left: 0;
  width: 100%;
  z-index: 10000;
  text-align: center;
  line-height: 0;
  font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
  font-weight: normal;
}
/* line 24, ../sass/lightbox.sass */
#lightbox img {
  width: auto;
  height: auto;
}
/* line 27, ../sass/lightbox.sass */
#lightbox a img {
  border: none;
}

/* line 30, ../sass/lightbox.sass */
.lb-outerContainer {
  position: relative;
  background-color: white;
  *zoom: 1;
  width: 250px;
  height: 250px;
  margin: 0 auto;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  -o-border-radius: 4px;
  border-radius: 4px;
}
/* line 38, ../../../../.rvm/gems/ruby-1.9.2-p290/gems/compass-0.12.1/frameworks/compass/stylesheets/compass/utilities/general/_clearfix.scss */
.lb-outerContainer:after {
  content: "";
  display: table;
  clear: both;
}

/* line 39, ../sass/lightbox.sass */
.lb-container {
  padding: 10px;
}

/* line 42, ../sass/lightbox.sass */
.lb-loader {
  position: absolute;
  top: 40%;
  left: 0%;
  height: 25%;
  width: 100%;
  text-align: center;
  line-height: 0;
}

/* line 51, ../sass/lightbox.sass */
.lb-nav {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: 10;
}

/* line 59, ../sass/lightbox.sass */
.lb-container > .nav {
  left: 0;
}

/* line 62, ../sass/lightbox.sass */
.lb-nav a {
  outline: none;
}

/* line 65, ../sass/lightbox.sass */
.lb-prev, .lb-next {
  width: 49%;
  height: 100%;
  background-image: url("data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7");
  /* Trick IE into showing hover */
  display: block;
}

/* line 72, ../sass/lightbox.sass */
.lb-prev {
  left: 0;
  float: left;
}

/* line 76, ../sass/lightbox.sass */
.lb-next {
  right: 0;
  float: right;
}

/* line 81, ../sass/lightbox.sass */
.lb-prev:hover {
  background: url(images/lightbox/prev.png) left 48% no-repeat;
}

/* line 85, ../sass/lightbox.sass */
.lb-next:hover {
  background: url(images/lightbox/next.png) right 48% no-repeat;
}

/* line 88, ../sass/lightbox.sass */
.lb-dataContainer {
  margin: 0 auto;
  padding-top: 5px;
  *zoom: 1;
  width: 100%;
  -moz-border-radius-bottomleft: 4px;
  -webkit-border-bottom-left-radius: 4px;
  -ms-border-bottom-left-radius: 4px;
  -o-border-bottom-left-radius: 4px;
  border-bottom-left-radius: 4px;
  -moz-border-radius-bottomright: 4px;
  -webkit-border-bottom-right-radius: 4px;
  -ms-border-bottom-right-radius: 4px;
  -o-border-bottom-right-radius: 4px;
  border-bottom-right-radius: 4px;
}
/* line 38, ../../../../.rvm/gems/ruby-1.9.2-p290/gems/compass-0.12.1/frameworks/compass/stylesheets/compass/utilities/general/_clearfix.scss */
.lb-dataContainer:after {
  content: "";
  display: table;
  clear: both;
}

/* line 95, ../sass/lightbox.sass */
.lb-data {
  padding: 0 10px;
  color: #bbbbbb;
}
/* line 98, ../sass/lightbox.sass */
.lb-data .lb-details {
  width: 85%;
  float: left;
  text-align: left;
  line-height: 1.1em;
}
/* line 103, ../sass/lightbox.sass */
.lb-data .lb-caption {
  font-size: 13px;
  font-weight: bold;
  line-height: 1em;
}
/* line 107, ../sass/lightbox.sass */
.lb-data .lb-number {
  display: block;
  clear: left;
  padding-bottom: 1em;
  font-size: 11px;
}
/* line 112, ../sass/lightbox.sass */
.lb-data .lb-close {
  width: 35px;
  float: right;
  padding-bottom: 0.7em;
  outline: none;
}
/* line 117, ../sass/lightbox.sass */
.lb-data .lb-close:hover {
  cursor: pointer;
}

.imageRow .single a {
  float: left;
  display: block;
  background: rgba(255, 255, 255, 0.1);
  padding: 7px;
  line-height: 1em;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  -o-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.5);
  -moz-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.5);
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.5);
  margin-right: 20px;
  -webkit-transition: all 0.2s ease-out;
  -moz-transition: all 0.2s ease-out;
  -ms-transition: all 0.2s ease-out;
  -o-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
}
/* line 332, ../sass/screen.sass */
.imageRow .single a img {
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  -o-border-radius: 4px;
  border-radius: 4px;
  border: 1px solid rgba(0, 0, 0, 0.3);
}
/* line 335, ../sass/screen.sass */
.imageRow .single a:hover {
  background-color: #FADD92;
  color:#000;
}
/* line 337, ../sass/screen.sass */
.imageRow .set {
  float: left;
  background: rgba(255, 255, 255, 0.1);
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  -o-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.5);
  -moz-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.5);
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.5);
  -webkit-transition: all 0.2s ease-out;
  -moz-transition: all 0.2s ease-out;
  -ms-transition: all 0.2s ease-out;
  -o-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
}
/* line 343, ../sass/screen.sass */
.imageRow .set:hover {
  background: rgba(255, 255, 255, 0.2);
}
/* line 346, ../sass/screen.sass */
.imageRow .set .single a {
  background: none;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  -o-border-radius: 0;
  border-radius: 0;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  margin-right: 0;
}
/* line 351, ../sass/screen.sass */
.imageRow .set .single a:hover {
  background-color: #8ad459;
  -webkit-box-shadow: 0 -1px 0 0 rgba(255, 255, 255, 0.2), 0 1px 4px 0 rgba(0, 0, 0, 0.5);
  -moz-box-shadow: 0 -1px 0 0 rgba(255, 255, 255, 0.2), 0 1px 4px 0 rgba(0, 0, 0, 0.5);
  box-shadow: 0 -1px 0 0 rgba(255, 255, 255, 0.2), 0 1px 4px 0 rgba(0, 0, 0, 0.5);
}
/* line 355, ../sass/screen.sass */
.imageRow .set .single.first a {
  -moz-border-radius-topleft: 4px;
  -webkit-border-top-left-radius: 4px;
  -ms-border-top-left-radius: 4px;
  -o-border-top-left-radius: 4px;
  border-top-left-radius: 4px;
  -moz-border-radius-bottomleft: 4px;
  -webkit-border-bottom-left-radius: 4px;
  -ms-border-bottom-left-radius: 4px;
  -o-border-bottom-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
/* line 358, ../sass/screen.sass */
.imageRow .set .single.last a {
  -moz-border-radius-topright: 4px;
  -webkit-border-top-right-radius: 4px;
  -ms-border-top-right-radius: 4px;
  -o-border-top-right-radius: 4px;
  border-top-right-radius: 4px;
  -moz-border-radius-bottomright: 4px;
  -webkit-border-bottom-right-radius: 4px;
  -ms-border-bottom-right-radius: 4px;
  -o-border-bottom-right-radius: 4px;
  border-bottom-right-radius: 4px;
}


</style>
<script type='text/javascript' src='js/jquery-1.8.2.min.js'></script>
<script type='text/javascript' src='js/hdm.js'></script>
<script type='text/javascript' src='js/hdm/violin.js'></script>
<script src="js/lightbox/jquery-1.7.2.min.js"></script>
<script src="js/lightbox/lightbox.js"></script>
<script type='text/javascript' src='js/hdm/selected.js'></script>
</head>
<body class="index">
<div class="wrapper">
  <div class="contents">
    <? require_once 'partials/header.php'; ?>
      <div class="inner">
      <div class="title">
        <div>
          <img src="images/base/violin.png" width="38" height="35" alt="バイオリンアイコン" /><span>演奏依頼</span>
        </div>          
      </div><!-- /title -->
      <div class="big_box">
        <div class="box_left">
          <div class="menu_left">
            <ul>

              <li class="navi001 selected" onclick="window.hdm.violin.toggle(1); window.hdm.selected.start();"><img src="images/base/treble-clef.png" width="10" height="20" alt="音符" /><span>HOME</span></li>
              <li class="navi002" onclick="window.hdm.violin.toggle(2); window.hdm.selected.start();"><img src="images/base/treble-clef.png" width="10" height="20" alt="音符" /><span>演奏履歴</span></li>
              <li class="navi003" onclick="window.hdm.violin.toggle(3); window.hdm.selected.start();"><img src="images/base/treble-clef.png" width="10" height="20" alt="音符" /><span>コンサート動画</span></li>

            </ul>
          </div><!-- /menu_left -->
        </div><!-- /box_left -->
        <div class="box_main">
          <div class="box001">
          <div class="box_right">
            <p class="obi"><b>プロの演奏をお探しの方</b></p>
          </div><!-- /box_right -->
          <div class="cb"></div>
            <div class="request">
                	
                	<div class="quartet"><img src="images/violin/djiyanru01.jpg" />
                    </div>

              <p class="request_sentence">
              <b>プロの演奏家をお探しの方はHaus-de-musik Aoyamaへ！</b><br /><br />
プロの演奏家の出張演奏いたしています。<br />
                桐朋、芸大卒などの音楽仲間と伺えたら・・・と思っています。<br />
                演奏に対しては厳しく鍛えられ、きちんとした気持ちで臨むことを学んできた仲間ばかりですので、安心してお任せください。<br />
                <br />
                新曲も含め、あらゆるジャンル(クラシック、ポピュラー、日本の曲、アニメソング、童謡、ジャズ、タンゴなど)の曲に、楽譜を入手後、数日で本番に臨めます。<br />
                (すでに、クラシック、ポップス、映画音楽、ゲーム音楽、ロック、タンゴ、日本の曲、童謡、ディズニーやジブリの曲など、100曲以上のレパートリーがあります。)<br />
                <br />
                楽器の構成はバイオリンソロ(ピアノ伴奏付)、バイオリンデュオ、弦楽トリオ、ピアノトリオ、弦楽四重奏＝ストリングカルテット、ピアノカルテットなど対応が可能です。<br />
                <br />
                学校、幼稚園などの音楽／鑑賞教室、レクチャーコンサート、会社、ホテル、レストラン、ショッピングモール、公園、植物館、美術館などのイベント演奏。<br />
                結婚式、披露宴のウェルカム演奏やBGM、お誕生日などのサプライズ演奏、老人ホーム、病院などのボランティア演奏、オーケストラ、バンド、アンサンブルのエキストラ・・・など。<br />
                <br />
                演奏時間、構成などはご希望に合わせますのでご相談ください。<br />
                大切な場の雰囲気にふさわしい演奏となるよう、様々なレパートリーの中から選曲いたします。リクエストがある場合には、どうぞお気軽にお問い合わせください。<br />
                <br />
                各種パーティー、宴会、レセプションに多数の出演実績があり、様々な著名アーティストのレコーディング、コンサートの<br />
バックミュージシャンとしての参加経験多数。<br />
                <br />
                スタジオやコンサートホール、レコーディング、ライブハウス、レストラン、大使館、迎賓館、公園、ドームなど出演多数。<br /><br />
                演奏料金は時間・編成・場所・その他により異なってきますので、お電話、メールでお問い合わせ下さい。<br />
(ご希望に応じてお見積もりなども承っています。)<br /><br />
 					<img src="images/request/request01.jpg" />
                    <img src="images/request/request02.jpg" />

<div align="center" style="padding-bottom:30px;"><a href="contact.php"><img src="images/violin/request_button.jpg" width="200" height="30" /></a></div>
</p>

</div><!-- /request -->
            </div><!-- /box001 -->
            
            <div class="box002">
          <div class="box_right">
            <p class="obi">いままでの演奏履歴</p>
          </div><!-- /box_right -->
          <div class="cb"></div>
            <div class="request">
                	
                	<div class="quartet"><img src="images/violin/string_quartet.jpg" />
                    </div>

              <p class="request_sentence">
              <b>ご依頼がありましたら、どこでもお伺いいたします。</b><br /><br />
これまでに演奏依頼を受けて、下記のようなイベント（場所）で<br />演奏しましたので、一部公演名も含め記載しておきます。<br />
編成はストリングス、弦楽カルテット、ピアノカルテット、ソロ等様々です。<br /><br />
東京国際フォーラム/札幌・東京・大阪・福岡ドーム/幕張メッセ東京駅＆駅ビル/仙川駅夜桜コンサート神代植物園/蘆花恒春園「かやぶきコンサート」/京成バラ園/鶴岡八幡宮奉納ライブコンサート/岐阜南宮大社/ザ・ノースカントリーゴルフクラブ/トレージャーガーデン/新宿御苑 等<br /><br />
実篤記念館「文学コンサート」/豊島区アウルスポット会館記念コンサート/仙川劇場オープニングリレーコンサート/NHK文化センター青山教室「ヨーロッパ音楽散歩」/スペイン国営セルバンテス文化センター「スペイン音楽講座」 等<br /><br />
イギリス大使館/スペイン大使館/相模原市役所/狛江市かわせみコンサート/大沢公民館ニューイヤーコンサート/横山公民館ファミリーコンサート 等<br /><br />
日本丸/飛鳥Ⅱ/ロイヤルウイング<br />
東京・大阪帝国ホテル/ウィンザーホテル/雅叙園/ホテルニューグランド/パンパシフィックH/京王プラザH/ベイシェラトンH/ローズH/モントレ銀座横浜H/山楽/水戸プラザH「デンタルショー」/鳥羽国際H/品川プリンスH/フォーシーズンH/大阪リッツカールトンH 等<br /><br />

プランタン銀座/渋谷東急プラザ/銀座ヤマハ/レクサス・クリスマスミニコンサート/神保町三井ビルディング「ライトコンサート」/汐留住友ビル/銀座三越 等<br /><br />

白寿ホール/東京文化会館小ホール/杜のホール「弦楽とピアノの夕べ」/岐阜サラマンカホール/ルネ小平ホール/サンエール相模原「土曜コンサート」 「チャリティーコンサート」 等<br /><br />

その他ボランティア活動として、地域の学校、病院、各種施設 等</p><br />

</div><!-- /request -->
            </div><!-- /box02 -->
        
      </div><!-- /box_main -->
    </div><!-- /big_box -->
    </div><!-- /innner -->
  <? require_once 'partials/footer.php'; ?> 
  </div><!-- /contents -->
</div><!-- /wrapper -->
</body>
</html>
