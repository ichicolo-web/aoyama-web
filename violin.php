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
<link type="text/css" rel="stylesheet" href="css/violin.css" media="all" charset="utf-8" />
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
          <img src="images/base/violin.png" width="38" height="35" alt="バイオリンアイコン" /><span>青山英里香バイオリン教室</span>
        </div>          
      </div><!-- /title -->
      <div class="big_box">
        <div class="box_left">
          <div class="menu_left">
            <ul>
              <li class="navi001 selected" onclick="window.hdm.violin.toggle(1)"><img src="images/base/treble-clef.png" width="10" height="20" alt="音符" /><span>HOME</span></li>
              <li class="navi002" onclick="window.hdm.violin.toggle(2)"><img src="images/base/treble-clef.png" width="10" height="20" alt="音符" /><span>レッスンについて</span></li>
              <li class="navi003" onclick="window.hdm.violin.toggle(3)"><img src="images/base/treble-clef.png" width="10" height="20" alt="音符" /><span>プロフィール</span></li>
              <li class="navi004" onclick="window.hdm.violin.toggle(4)"><img src="images/base/treble-clef.png" width="10" height="20" alt="音符" /><span>アルバム/動画</span></li>
              <li class="navi005" onclick="window.hdm.violin.toggle(5)"><img src="images/base/treble-clef.png" width="10" height="20" alt="音符" /><span>演奏依頼</span></li>
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
              <p>湘南鷹取(横須賀/追浜)と久我山(東京都杉並区)にあるバイオリン教室です。<br />
              おもに、小さいお子様～音楽大学受験生を対象にした教室です。<br />
              現在生徒さん募集中！！お気軽にお問い合わせください。<br /><br />
              バイオリンを弾いてみたいけど・・・？<br />
              とお考えの方、お貸しできる楽器も置いてありますので、体験レッスンをいたしております。</p>
              <ul>
              <li>楽器に自信のない方</li>
              <li>昔習っていたので再スタートしたいという方</li>
              <li>学校や市民オケに在籍中で、オーケストラの曲を一緒にさらって欲しい方</li>
              <li>少し専門的に習いたい方</li>
              <li>音楽高校・音楽大学を受験したい方</li>
              <li>コンクールに出場してみたい方</li>
              <li>ご自分の室内楽グループでレッスンを希望される方</li>
              <li>など、ご相談ください</li>
              </ul>
              <p>
              きちんとしたバイオリンテクニック(弾き方)や練習方法を効率よく身につけていただける為には、クラシックの教本・曲の勉強が必要ですが、ポップスも弾いてみたい方には、そういった曲も取り入れます。(私も仕事では沢山弾いております。)<br />
              生徒さんの目的やレベルに沿った指導方法を考えレッスンしていくよう心がけております。遠慮なくお話し下さい。
              </p>
            </div><!-- /sentence01 -->
            </div><!-- /box001 -->
          <div class="box002">
          <div class="box_right">
            <p class="obi">レッスンについて</p>
          </div>
          <div class="cb"></div>
          <br />
          <div class="sentence02">
          <ul>
          	<li>【横須賀/横浜教室】</li>
            <li>毎週水曜日のみ</li>
            <li>所在地：横須賀市湘南鷹取３丁目</li>
            <li>最寄り駅：京浜急行「追浜駅」</li>
            <li>追浜駅より「湘南鷹取循環」または「鷹取一丁目」バスに乗車</li>
            <li>「鷹取中学校前」下車徒歩５分</li>
            <li>内川橋ー安浦利用の場合は「追浜一丁目」のバス停下車徒歩７分</li>
            <li>お車の方は駐車場スペースあり</li><br />

            <li>【東京教室】</li>
            <li>ほぼ毎週ですが曜日は主に金土日のいずれかです。</li>
            <li>所在地：杉並区久我山４丁目</li>
            <li>最寄り駅：京王井の頭線「久我山駅」より徒歩６分</li>
            <li>バス系統［荻４０］立教女学院行き「久我山」のバス停より徒歩３分</li>
            <li>（ＪＲ荻窪、西荻窪駅などからバスが出ています。）</li>

          </ul><br />
          
          <table border="1" cellpadding="0" cellspacing="0">
            <th>レッスン料金表</th>
            <tr>
              <td>30分/3000円（初心者の方、小さいお子様向け）
              </td>
            </tr>
            <tr>
              <td>45分/4000円
              </td>
            </tr>
            <tr>
              <td>60分/5000円
              </td>
            </tr>
        </table>
  
          <p>大人向けのレッスン、および出張レッスンは、現在受け付けておりません。<br />
  専門になさりたい方は、上記以上のお時間をお勧めします。ご相談ください。<br />
  初心者、小さいお子様は30分レッスン、徐々に時間を増やしていかれるのが良いと思います。<br />
  現在演奏活動が忙しく、曜日は決めていても、こちらの都合で変更をお願いしなければいけない事もあると思います。<br />
  ご了承ください。
          </p>
          
          <p>
          基礎(楽器の持ち方、構え方、ボーイング、ヴィブラート)はきっちりと身に着けて頂きたいと思っています。<br />
          そのための練習方法をお教えします。また、音楽的な表現については、違いを示しながらレッスンしていきます。<br /><br />
          曲の仕上げのレッスンはできる限り伴奏つきで行えるようにしております。<br />
          (原則無料ですが、ご家族の方にお願いする場合もあります)<br /><br />
          年に一度、春に横浜美術館レクチャーホールにて、発表会を行っております。<br />
          (発表会費10,000円～、これ以外に上級者の方には伴奏代をお願いしております)<br />
          12月にはクリスマス会として、湘南鷹取の自宅にて、ホームコンサートを行い、ソロはもちろんですが、ご家族、<br />
          生徒さん同士のアンサンブルの発表会の場を設けるように致しております。<br />
          ティータイム付以外は原則無料、アットホームな楽しい会で、毎年生徒さんの方からはいつ？と聞かれます。 </p>
          <p>
          青山英里香バイオリン教室は、山梨県甲府市の塩部幼稚園内でも月3回(月曜日、火曜日)レッスンを行っております。<br />
          発表会は年1回、秋にキングスウェル・ガーデンホールで行っております。レッスン料、その他は別途お問い合わせください。
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
          <p><img src="images/violin/erika.jpg" width="200" height="234" />
          </p>
          </div>
          	<div class="sentence03_right">
          	<ul>
            	<li><span>【青山英里香】</span></li>
				<li>横浜に生まれ、横須賀で育つ。3歳よりバイオリンを始める。桐朋学園子供のための音楽教室（鎌倉、横浜教室）を経て、桐朋女子高等学校音楽科（男女共学）、桐朋学園大学音楽学部演奏学科を卒業。桐朋学園大学研究科修了。</li><br />

				<li>これまでに小出始子、井上淑子、神谷美千子、ドガレイユ、加藤知子の各氏に師事。室内楽では、毛利伯郎、藤井一興、三上桂子、野島稔、原田幸一郎、藤原浜雄、徳永二男、斎木隆、東京カルテットの各氏に師事。</li><br />
				<li>第７６、７８、８０回桐朋学園室内楽演奏会出演。JTアートホール期待の音大生によるアフタヌーンコンサートVol.１８５出演。<br />
クラシック音楽コンクール、日本演奏家コンクール、JILA音楽コンクール、TMC東京Jazz/Rockコンクールetc.上位入賞。</li><br />
		<li>現在、ストリングス・ユニット「seasons」を結成しテレビ、ライヴなど全国で活動中。 2009 年にＣＤ「Neo classic」をリリース。</li>
        </ul>
        <br />

        <ul>
        	<li><span>【詳しい活動内容】</span></li>
        	<li>鈴木メソード全国大会（武道館）で２年連続代表。夏期学校コンサート最年少出演</li>
            <li>桐朋学園子供のための音楽教室推薦音楽会出演</li>
            <li>第８回コンサートかなざわ出演</li>
            <li>第４３回鎌倉市学生音楽コンクール教育委員会賞</li>
            <li>第１７回厚木青少年音楽コンクール金賞</li>
            <li>第９回クラシック音楽コンクール東京大会優秀賞</li>
            <li>第１回日本演奏家コンクール第３位</li>
            <li>第９回ＪＩＬＡ音楽コンクール第２位</li>
            <li>ＴＭＣ東京Jazz/Rockコンクール最高位、その他入賞入選多数</li>
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
