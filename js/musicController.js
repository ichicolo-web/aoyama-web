$(function () {
  var firefox = function () {
    $.each($('source'), function () {
      this.src = this.src.replace ('mp3' , 'ogg');
      this.type = this.type.replace ('mp3' , 'ogg');
    });
  };

  if (navigator.userAgent.indexOf('Firefox') != -1) {
    firefox();
  }
});

var musicController = {};

musicController.switchOn = function (tag) {
  var d = document,
      t = tag,
      c = d.getElementsByName('music_controller'),
      a = d.getElementsByTagName('audio');

  if (tag == '0') {
    c[0].onclick = new Function ('musicController.switchOff(0)');
    a[0].play();
    c[0].innerHTML = '<img src="images/ensemble/music.gif" /><br />Schubert<br />　クリックで音源を停止します。　';
    var timerID = setInterval (function () {
      if(a[0].ended === true) {
        c[0].innerHTML = '<img src="images/ensemble/music.gif" /><br />Schubert<br />クリックしたら音源を再生します。<br />音量に注意して下さい。';
        c[0].onclick = new Function ('musicController.switchOn(0)');
        clearInterval(timerID);
      } 
    }, 10); 
  }
};

musicController.switchOff = function (tag) {
  var d = document,
      t = tag,
      c = d.getElementsByName('music_controller'),
      a = d.getElementsByTagName('audio');

  if (tag == '0') {
    c[0].innerHTML = '<img src="images/ensemble/music.gif" /><br />Schubert<br />クリックしたら音源を再生します。<br />音量に注意して下さい。';
    c[0].onclick = new Function ('musicController.switchOn(0)');
    a[0].pause();
    a[0].load();
  }
};

musicController.play = function (number) {
  var n = number,
      d = document.getElementsByTagName('audio');
  d[n].play();
};

musicController.pause = function (number) {
  var n = number,
      d = document.getElementsByTagName('audio');
  d[n].pause();
  d[n].load();
};
