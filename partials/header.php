<?php
print <<<EOF
  <div class="header">
    <div>
      <h1>
        <img src="images/base/logo.png" width="297" height="36" alt="Haus-de-musik（ハウスデムジカ）" />
      </h1>
	  <p>～ハウスデムジカ・音楽の集まる家～</p>
      <address>
        神奈川県横須賀市湘南鷹取3丁目<br />
        TEL : 090-8305-0003<br />
        お問い合わせは<a href="">コチラ</a>からお気軽にどうぞ♪<br />
      </address>
    </div>
    <ul class="gnavi">
      <li id="index"><a href="index.php">トップ</a></li>
      <li id="violin"><a href="violin.php">バイオリン教室</a></li>
      <li id="piano"><a href="piano.php">ピアノ教室</a></li>
      <li id="request"><a href="request.php">演奏依頼</a></li>
      <li id="contact"><a href="contact.php">お問い合わせ</a></li>
      <li id="link"><a href="link.php">リンク</a></li>
      <li id="access" class="last"><a href="access.php">アクセス</a></li>
    </ul>
  </div><!-- /header -->
<script type="text/javascript">
(function () {
  var path = location.pathname,
      violin = path.match('violin'),
      piano = path.match('piano'),
      request = path.match('request'),
      contact = path.match('contact'),
      link = path.match('link'),
      access = path.match('access');
  
    if (violin == 'violin') {
      $('#violin').addClass('selected');
    } else if (piano == 'piano') {
      $('#piano').addClass('selected');
    } else if (request == 'request') {
      $('#request').addClass('selected');
    } else if (contact == 'contact') {
      $('#contact').addClass('selected');
    } else if (link == 'link') {
      $('#link').addClass('selected');
    } else if (access == 'access') {
      $('#access').addClass('selected');
    } else {
      $('#index').addClass('selected');
    }
}());
</script>

EOF;

?>
