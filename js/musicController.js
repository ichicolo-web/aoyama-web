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


/*

   v.aboutSwitchOn = function (tag) {
   var d = document,
   t = tag,
   globalNavi = d.getElementById('gnav'),
   a = d.getElementsByTagName('audio'),
   s = d.getElementsByName('soundspeech_about'),
   e = d.getElementById('soundspeech'),
   p = e.getElementsByTagName('span'),
   e_img = e.getElementsByTagName('img'),
   v0 = d.getElementById('voice_reader000'),
   v1 = d.getElementById('voice_reader001'),
   v2 = d.getElementById('voice_reader002'),
   img = d.getElementsByName('voice_buttons'),
   c = globalNavi.childNodes,
   r = [],
   n,
   i;
   for(n = 0; n < c.length; n = n + 1) {
   if(c[n].nodeType === 1) {
   r.push(c[n]);
   }
   }
   e_img[0].src = '/images/base/voice_button_off.png';
   e.onclick = new Function ('window.tsad.voice.switchOn();');
   for (i = 0; i < r.length; i = i + 1) {
   r[i].onmouseover = new Function ('');
   r[i].onmouseout = new Function ('');
   }
   p[0].innerHTML  = 'こちらをクリックすると、メイン<br />メニューの説明が音声で流れます。';

   if (tag == '0') {
   v0.innerHTML = 'こちらをクリックすると、『障スポ・<br />ナビとは』の説明がオフになります。';
   img[0].src = '/images/base/voice_button_on.png';
   s[0].onclick = new Function ('window.tsad.voice.aboutSwitchOff(0)');
   a[8].play();
   var timerID8 = setInterval (function () {
   if(a[8].ended === true) {
   v0.innerHTML = 'こちらをクリックすると、『障スポ・<br />ナビとは』の説明が音声で流れます。';
   img[0].src = '/images/base/voice_button_off.png';
   s[0].onclick = new Function ('window.tsad.voice.aboutSwitchOn(0)');
   clearInterval(timerID8);
   } 
   }, 10); 
   v1.innerHTML = 'こちらをクリックすると、『各種・ボランティア<br />検索について』の説明が音声で流れます。';
   img[1].src = '/images/base/voice_button_off.png';
   s[1].onclick = new Function ('window.tsad.voice.aboutSwitchOn(1)');
   a[9].pause();
   a[9].load();
   v2.innerHTML = 'こちらをクリックすると、『その他の<br />ページについて』の説明が音声で流れます。';
   img[2].src = '/images/base/voice_button_off.png';
   s[2].onclick = new Function ('window.tsad.voice.aboutSwitchOn(2)');
   a[10].pause();
   a[10].load();
   }else if (tag == '1') {
   v1.innerHTML = 'こちらをクリックすると、『各種・ボランティア<br />検索について』の説明がオフになります。';
   img[1].src = '/images/base/voice_button_on.png';
   s[1].onclick = new Function ('window.tsad.voice.aboutSwitchOff(1)');
   a[9].play();
   var timerID9 = setInterval (function () {
   if(a[9].ended === true) {
   v1.innerHTML = 'こちらをクリックすると、『各種・ボランティア<br />検索について』の説明が音声で流れます。';
   img[1].src = '/images/base/voice_button_off.png';
   s[1].onclick = new Function ('window.tsad.voice.aboutSwitchOn(1)');
   clearInterval(timerID9);
   } 
   }, 10); 
   v0.innerHTML = 'こちらをクリックすると、『障スポ・<br />ナビとは』の説明が音声で流れます。';
   img[0].src = '/images/base/voice_button_off.png';
   s[0].onclick = new Function ('window.tsad.voice.aboutSwitchOn(0)');
a[8].pause();
a[8].load();
v2.innerHTML = 'こちらをクリックすると、『その他の<br />ページについて』の説明が音声で流れます。';
img[2].src = '/images/base/voice_button_off.png';
s[2].onclick = new Function ('window.tsad.voice.aboutSwitchOn(2)');
a[10].pause();
a[10].load();
}else if (tag == '2') {
  v2.innerHTML = 'こちらをクリックすると、『その他の<br />ページについて』の説明がオフになります。';
  img[2].src = '/images/base/voice_button_on.png';
  s[2].onclick = new Function ('window.tsad.voice.aboutSwitchOff(2)');
  a[10].play();
  var timerID10 = setInterval (function () {
    if(a[10].ended === true) {
      v2.innerHTML = 'こちらをクリックすると、『その他の<br />ページについて』の説明が音声で流れます。';
      img[2].src = '/images/base/voice_button_off.png';
      s[2].onclick = new Function ('window.tsad.voice.aboutSwitchOn(2)');
      clearInterval(timerID10);
    } 
  }, 10); 
  v0.innerHTML = 'こちらをクリックすると、『障スポ・<br />ナビとは』の説明が音声で流れます。';
  img[0].src = '/images/base/voice_button_off.png';
  s[0].onclick = new Function ('window.tsad.voice.aboutSwitchOn(0)');
  a[8].pause();
  a[8].load();
  v1.innerHTML = 'こちらをクリックすると、『各種・ボランティア<br />検索について』の説明が音声で流れます。';
  img[1].src = '/images/base/voice_button_off.png';
  s[1].onclick = new Function ('window.tsad.voice.aboutSwitchOn(1)');
  a[9].pause();
  a[9].load();
}
};

v.aboutSwitchOff = function (tag) {
  var d = document,
      t = tag,
      a = d.getElementsByTagName('audio'),
      s = d.getElementsByName('soundspeech_about'),
      v = d.getElementsByName('text_wrap'),
      img = d.getElementsByName('voice_buttons'),
      v0 = d.getElementById('voice_reader000'),
      v1 = d.getElementById('voice_reader001'),
      v2 = d.getElementById('voice_reader002');
  if (tag == '0') {
    v0.innerHTML = 'こちらをクリックすると、『障スポ・<br />ナビとは』の説明が音声で流れます。';
    img[0].src = '/images/base/voice_button_off.png';
    s[0].onclick = new Function ('window.tsad.voice.aboutSwitchOn(0)');
    a[8].pause();
    a[8].load();
  }else if (tag == '1') {
    v1.innerHTML = 'こちらをクリックすると、『各種・ボランティア<br />検索について』の説明が音声で流れます。';
    img[1].src = '/images/base/voice_button_off.png';
    s[1].onclick = new Function ('window.tsad.voice.aboutSwitchOn(1)');
    a[9].pause();
    a[9].load();
  }else if (tag == '2') {
    v2.innerHTML = 'こちらをクリックすると、『その他の<br />ページについて』の説明が音声で流れます。';
    img[2].src = '/images/base/voice_button_off.png';
    s[2].onclick = new Function ('window.tsad.voice.aboutSwitchOn(2)');
    a[10].pause();
    a[10].load();
  }
};

(function () {
  $(function () {
    var ieContents = function () {
      var d = document,
    bgs = d.createElement('bgsound'),
    head = d.getElementsByTagName('head'),
    s = d.getElementsByName('soundspeech_about'),
    e = d.getElementById('soundspeech'),
    i;
  bgs.id = 'voice-info';
  bgs.setAttribute('src', '');
  bgs.setAttribute('autostart', 'true');
  head[0].appendChild(bgs);
  e.onclick = new Function ('window.tsad.voice.switchOnIe8();');
  for(i = 0; i < s.length; i = i + 1) {
    s[i].onclick = new Function ('window.tsad.voice.aboutSwitchOnIe8(' + i + ')');
      }
      };

      var ffContents = function () {
        var d = document,
      s = d.getElementsByTagName('source'),
      i;
    for(i = 0; i < s.length; i = i + 1) {
      s[i].src = s[i].src.replace ('mp3' , 'ogg');
      s[i].type = s[i].type.replace ('mp3' , 'ogg');
    }
      };

      var operaContents = function () {
        var d = document,
      s = d.getElementsByTagName('source'),
      i;
    for(i = 0; i < s.length; i = i + 1) {
      s[i].src = s[i].src.replace ('mp3' , 'wav');
      s[i].type = s[i].type.replace ('mp3' , 'wav');
    }
      };

      var androidContents = function () {
        var d = document,
            sa = d.getElementsByName('soundspeech_about'),
            sf = d.getElementsByName('soundspeech_flash'),
            i;
        for(i = 0; i < sa.length; i = i + 1) {
          sa[i].style.display = 'none';
          sf[i].style.display = 'block';
        }
      };

      if (navigator.userAgent.indexOf('MSIE 8') != -1) {
        ieContents();
      } else if (navigator.userAgent.indexOf('MSIE 7') != -1) {
        ieContents();
      } else if (navigator.userAgent.indexOf('MSIE 6') != -1) {
        ieContents();
      } else if (navigator.userAgent.indexOf('Firefox') != -1) {
        ffContents();
      } else if (navigator.userAgent.indexOf('Opera') != -1) {
        operaContents();
      } else if (navigator.userAgent.indexOf('Android') != -1) {
        androidContents();
      }

  });

  v.switchOn = function () {
    var d = document,
        globalNavi = d.getElementById('gnav'),
        v = d.getElementsByName('text_wrap'),
        e = d.getElementById('soundspeech'),
        p = e.getElementsByTagName('span'),
        e_img = e.getElementsByTagName('img'),
        c = globalNavi.childNodes,
        a = d.getElementsByTagName('audio'),
        s = d.getElementsByName('soundspeech_about'),
        img = d.getElementsByName('voice_buttons'),
        v0 = d.getElementById('voice_reader000'),
        v1 = d.getElementById('voice_reader001'),
        v2 = d.getElementById('voice_reader002'),
        r = [],
        n,
        i;
    for(n = 0; n < c.length; n = n + 1) {
      if(c[n].nodeType === 1) {
        r.push(c[n]);
      }
    }
    p[0].innerHTML = 'こちらをクリックすると、メイン<br />メニューの説明がオフになります。';
    e_img[0].src = '/images/base/voice_button_on.png';
    e.onclick = new Function ('window.tsad.voice.switchOff();');
    for (i = 0; i < r.length; i = i + 1) {
      r[i].onmouseover = new Function ('window.tsad.voice.play(' + i + ')');
          r[i].onmouseout = new Function ('window.tsad.voice.pause(' + i + ')');
            }
            v0.innerHTML = 'こちらをクリックすると、『障スポ・<br />ナビとは』の説明が音声で流れます。';
            img[0].src = '/images/base/voice_button_off.png';
            s[0].onclick = new Function ('window.tsad.voice.aboutSwitchOn(0)');
            a[8].pause();
            a[8].load();
            v1.innerHTML = 'こちらをクリックすると、『各種・ボランティア<br />検索について』の説明が音声で流れます。';
            img[1].src = '/images/base/voice_button_off.png';
            s[1].onclick = new Function ('window.tsad.voice.aboutSwitchOn(1)');
            a[9].pause();
            a[9].load();
            v2.innerHTML = 'こちらをクリックすると、『その他の<br />ページについて』の説明が音声で流れます。';
            img[2].src = '/images/base/voice_button_off.png';
            s[2].onclick = new Function ('window.tsad.voice.aboutSwitchOn(2)');
            a[10].pause();
            a[10].load();
            };

            v.play = function (number) {
              var n = number,
                  d = document.getElementsByTagName('audio');
              d[n].play();
            };

            v.pause = function (number) {
              var n = number,
                  d = document.getElementsByTagName('audio');
              d[n].pause();
              d[n].load();
            };

            v.switchOff = function () {
              var d = document,
                  globalNavi = d.getElementById('gnav'),
                  e = d.getElementById('soundspeech'),
                  p = e.getElementsByTagName('span'),
                  e_img = e.getElementsByTagName('img'),
                  c = globalNavi.childNodes,
                  r = [],
                  n,
                  i;
              for(n = 0; n < c.length; n = n + 1) {
                if(c[n].nodeType === 1) {
                  r.push(c[n]);
                }
              }
              e_img[0].src = '/images/base/voice_button_off.png';
              e.onclick = new Function ('window.tsad.voice.switchOn();');
              p[0].innerHTML  = 'こちらをクリックすると、メイン<br />メニューの説明が音声で流れます。';
              for (i = 0; i < r.length; i = i + 1) {
                r[i].onmouseover = new Function ('');
                r[i].onmouseout = new Function ('');
              }
            };

            v.aboutSwitchOn = function (tag) {
              var d = document,
                  t = tag,
                  globalNavi = d.getElementById('gnav'),
                  a = d.getElementsByTagName('audio'),
                  s = d.getElementsByName('soundspeech_about'),
                  e = d.getElementById('soundspeech'),
                  p = e.getElementsByTagName('span'),
                  e_img = e.getElementsByTagName('img'),
                  v0 = d.getElementById('voice_reader000'),
                  v1 = d.getElementById('voice_reader001'),
                  v2 = d.getElementById('voice_reader002'),
                  img = d.getElementsByName('voice_buttons'),
                  c = globalNavi.childNodes,
                  r = [],
                  n,
                  i;
              for(n = 0; n < c.length; n = n + 1) {
                if(c[n].nodeType === 1) {
                  r.push(c[n]);
                }
              }
              e_img[0].src = '/images/base/voice_button_off.png';
              e.onclick = new Function ('window.tsad.voice.switchOn();');
              for (i = 0; i < r.length; i = i + 1) {
                r[i].onmouseover = new Function ('');
                r[i].onmouseout = new Function ('');
              }
              p[0].innerHTML  = 'こちらをクリックすると、メイン<br />メニューの説明が音声で流れます。';

              if (tag == '0') {
                v0.innerHTML = 'こちらをクリックすると、『障スポ・<br />ナビとは』の説明がオフになります。';
                img[0].src = '/images/base/voice_button_on.png';
                s[0].onclick = new Function ('window.tsad.voice.aboutSwitchOff(0)');
                a[8].play();
                var timerID8 = setInterval (function () {
                  if(a[8].ended === true) {
                    v0.innerHTML = 'こちらをクリックすると、『障スポ・<br />ナビとは』の説明が音声で流れます。';
                    img[0].src = '/images/base/voice_button_off.png';
                    s[0].onclick = new Function ('window.tsad.voice.aboutSwitchOn(0)');
                    clearInterval(timerID8);
                  } 
                }, 10); 
                v1.innerHTML = 'こちらをクリックすると、『各種・ボランティア<br />検索について』の説明が音声で流れます。';
                img[1].src = '/images/base/voice_button_off.png';
                s[1].onclick = new Function ('window.tsad.voice.aboutSwitchOn(1)');
                a[9].pause();
                a[9].load();
                v2.innerHTML = 'こちらをクリックすると、『その他の<br />ページについて』の説明が音声で流れます。';
                img[2].src = '/images/base/voice_button_off.png';
                s[2].onclick = new Function ('window.tsad.voice.aboutSwitchOn(2)');
                a[10].pause();
                a[10].load();
              }else if (tag == '1') {
                v1.innerHTML = 'こちらをクリックすると、『各種・ボランティア<br />検索について』の説明がオフになります。';
                img[1].src = '/images/base/voice_button_on.png';
                s[1].onclick = new Function ('window.tsad.voice.aboutSwitchOff(1)');
                a[9].play();
                var timerID9 = setInterval (function () {
                  if(a[9].ended === true) {
                    v1.innerHTML = 'こちらをクリックすると、『各種・ボランティア<br />検索について』の説明が音声で流れます。';
                    img[1].src = '/images/base/voice_button_off.png';
                    s[1].onclick = new Function ('window.tsad.voice.aboutSwitchOn(1)');
                    clearInterval(timerID9);
                  } 
                }, 10); 
                v0.innerHTML = 'こちらをクリックすると、『障スポ・<br />ナビとは』の説明が音声で流れます。';
                img[0].src = '/images/base/voice_button_off.png';
                s[0].onclick = new Function ('window.tsad.voice.aboutSwitchOn(0)');
                a[8].pause();
                a[8].load();
                v2.innerHTML = 'こちらをクリックすると、『その他の<br />ページについて』の説明が音声で流れます。';
                img[2].src = '/images/base/voice_button_off.png';
                s[2].onclick = new Function ('window.tsad.voice.aboutSwitchOn(2)');
                a[10].pause();
                a[10].load();
              }else if (tag == '2') {
                v2.innerHTML = 'こちらをクリックすると、『その他の<br />ページについて』の説明がオフになります。';
                img[2].src = '/images/base/voice_button_on.png';
                s[2].onclick = new Function ('window.tsad.voice.aboutSwitchOff(2)');
                a[10].play();
                var timerID10 = setInterval (function () {
                  if(a[10].ended === true) {
                    v2.innerHTML = 'こちらをクリックすると、『その他の<br />ページについて』の説明が音声で流れます。';
                    img[2].src = '/images/base/voice_button_off.png';
                    s[2].onclick = new Function ('window.tsad.voice.aboutSwitchOn(2)');
                    clearInterval(timerID10);
                  } 
                }, 10); 
                v0.innerHTML = 'こちらをクリックすると、『障スポ・<br />ナビとは』の説明が音声で流れます。';
                img[0].src = '/images/base/voice_button_off.png';
                s[0].onclick = new Function ('window.tsad.voice.aboutSwitchOn(0)');
                a[8].pause();
                a[8].load();
                v1.innerHTML = 'こちらをクリックすると、『各種・ボランティア<br />検索について』の説明が音声で流れます。';
                img[1].src = '/images/base/voice_button_off.png';
                s[1].onclick = new Function ('window.tsad.voice.aboutSwitchOn(1)');
                a[9].pause();
                a[9].load();
              }
            };

            v.aboutSwitchOff = function (tag) {
              var d = document,
                  t = tag,
                  a = d.getElementsByTagName('audio'),
                  s = d.getElementsByName('soundspeech_about'),
                  v = d.getElementsByName('text_wrap'),
                  img = d.getElementsByName('voice_buttons'),
                  v0 = d.getElementById('voice_reader000'),
                  v1 = d.getElementById('voice_reader001'),
                  v2 = d.getElementById('voice_reader002');
              if (tag == '0') {
                v0.innerHTML = 'こちらをクリックすると、『障スポ・<br />ナビとは』の説明が音声で流れます。';
                img[0].src = '/images/base/voice_button_off.png';
                s[0].onclick = new Function ('window.tsad.voice.aboutSwitchOn(0)');
                a[8].pause();
                a[8].load();
              }else if (tag == '1') {
                v1.innerHTML = 'こちらをクリックすると、『各種・ボランティア<br />検索について』の説明が音声で流れます。';
                img[1].src = '/images/base/voice_button_off.png';
                s[1].onclick = new Function ('window.tsad.voice.aboutSwitchOn(1)');
                a[9].pause();
                a[9].load();
              }else if (tag == '2') {
                v2.innerHTML = 'こちらをクリックすると、『その他の<br />ページについて』の説明が音声で流れます。';
                img[2].src = '/images/base/voice_button_off.png';
                s[2].onclick = new Function ('window.tsad.voice.aboutSwitchOn(2)');
                a[10].pause();
                a[10].load();
              }
            };


            v.switchOnIe8 = function () {
              var d = document,
                  voice = d.getElementById('voice-info'),
                  globalNavi = d.getElementById('gnav'),
                  e = d.getElementById('soundspeech'),
                  p = e.getElementsByTagName('span'),
                  e_img = e.getElementsByTagName('img'),
                  s = d.getElementsByName('soundspeech_about'),
                  v0 = d.getElementById('voice_reader000'),
                  v1 = d.getElementById('voice_reader001'),
                  v2 = d.getElementById('voice_reader002'),
                  img = d.getElementsByName('voice_buttons'),
                  c = globalNavi.childNodes,
                  r = [],
                  n,
                  i;
              voice.src = '';
              for(n = 0; n < c.length; n = n + 1) {
                if(c[n].nodeType === 1) {
                  r.push(c[n]);
                }
              }
              r[0].onmouseover = function () {
                voice.src = '/voice/top.mp3';
              };
              r[1].onmouseover = function () {
                voice.src = '/voice/about.mp3';
              };
              r[2].onmouseover = function () {
                voice.src = '/voice/search.mp3';
              };
              r[3].onmouseover = function () {
                voice.src = '/voice/qa.mp3';
              };
              r[4].onmouseover = function () {
                voice.src = '/voice/feature.mp3';
              };
              r[5].onmouseover = function () {
                voice.src = '/voice/sports.mp3';
              };
              r[6].onmouseover = function () {
                voice.src = '/voice/report.mp3';
              };
              r[7].onmouseover = function () {
                voice.src = '/voice/interview.mp3';
              };
              for(i = 0; i < r.length; i = i + 1) {
                r[i].onmouseout = function () {
                  voice.src = '';
                };
              }
              p[0].innerHTML = 'こちらをクリックすると、メイン<br />メニューの説明がオフになります。';
              e_img[0].src = '/images/base/voice_button_on.png';
              e.onclick = new Function ('window.tsad.voice.switchOffIe8();');
              v0.innerHTML = 'こちらをクリックすると、『障スポ・<br />ナビとは』の説明が音声で流れます。';
              img[0].src = '/images/base/voice_button_off.png';
              s[0].onclick = new Function ('window.tsad.voice.aboutSwitchOnIe8(0)');
              v1.innerHTML = 'こちらをクリックすると、『各種・ボランティア<br />検索について』の説明が音声で流れます。';
              img[1].src = '/images/base/voice_button_off.png';
              s[1].onclick = new Function ('window.tsad.voice.aboutSwitchOnIe8(1)');
              v2.innerHTML = 'こちらをクリックすると、『その他の<br />ページについて』の説明が音声で流れます。';
              img[2].src = '/images/base/voice_button_off.png';
              s[2].onclick = new Function ('window.tsad.voice.aboutSwitchOnIe8(2)');
            };

            v.switchOffIe8 = function () {
              var d = document,
                  globalNavi = d.getElementById('gnav'),
                  e = d.getElementById('soundspeech'),
                  p = e.getElementsByTagName('span'),
                  e_img = e.getElementsByTagName('img'),
                  c = globalNavi.childNodes,
                  r = [],
                  n,
                  i;
              for(n = 0; n < c.length; n = n + 1) {
                if(c[n].nodeType === 1) {
                  r.push(c[n]);
                }
              }
              e_img[0].src = '/images/base/voice_button_off.png';
              e.onclick = new Function ('window.tsad.voice.switchOnIe8();');
              p[0].innerHTML  = 'こちらをクリックすると、メイン<br />メニューの説明が音声で流れます。';
              for (i = 0; i < r.length; i = i + 1) {
                r[i].onmouseover = new Function ('');
                r[i].onmouseout = new Function ('');
              }
            };

            v.aboutSwitchOnIe8 = function (tag) {
              var d = document,
                  t = tag,
                  globalNavi = d.getElementById('gnav'),
                  voice = d.getElementById('voice-info'),
                  s = d.getElementsByName('soundspeech_about'),
                  e = d.getElementById('soundspeech'),
                  p = e.getElementsByTagName('span'),
                  e_img = e.getElementsByTagName('img'),
                  v0 = d.getElementById('voice_reader000'),
                  v1 = d.getElementById('voice_reader001'),
                  v2 = d.getElementById('voice_reader002'),
                  img = d.getElementsByName('voice_buttons'),
                  c = globalNavi.childNodes,
                  r = [],
                  n,
                  i;
              for(n = 0; n < c.length; n = n + 1) {
                if(c[n].nodeType === 1) {
                  r.push(c[n]);
                }
              }
              e_img[0].src = '/images/base/voice_button_off.png';
              e.onclick = new Function ('window.tsad.voice.switchOnIe8();');
              p[0].innerHTML  = 'こちらをクリックすると、メイン<br />メニューの説明が音声で流れます。';
              for (i = 0; i < r.length; i = i + 1) {
                r[i].onmouseover = new Function ('');
                r[i].onmouseout = new Function ('');
              }
              e_img[0].src = '/images/base/voice_button_off.png';
              e.onclick = new Function ('window.tsad.voice.switchOnIe8()');
              p[0].innerHTML  = 'こちらをクリックすると、メイン<br />メニューの説明が音声で流れます。';
              if (tag == '0') {
                v0.innerHTML = 'こちらをクリックすると、『障スポ・<br />ナビとは』の説明がオフになります。';
                img[0].src = '/images/base/voice_button_on.png';
                s[0].onclick = new Function ('window.tsad.voice.aboutSwitchOffIe8(0)');
                voice.src = '/voice/about/about.mp3';
                v1.innerHTML = 'こちらをクリックすると、『各種・ボランティア<br />検索について』の説明が音声で流れます。';
                img[1].src = '/images/base/voice_button_off.png';
                s[1].onclick = new Function ('window.tsad.voice.aboutSwitchOnIe8(1)');
                v2.innerHTML = 'こちらをクリックすると、『その他の<br />ページについて』の説明が音声で流れます。';
                img[2].src = '/images/base/voice_button_off.png';
                s[2].onclick = new Function ('window.tsad.voice.aboutSwitchOnIe8(2)');
                var timerID8 = setTimeout (function () {
                  v0.innerHTML = 'こちらをクリックすると、『障スポ・<br />ナビとは』の説明が音声で流れます。';
                  img[0].src = '/images/base/voice_button_off.png';
                  s[0].onclick = new Function ('window.tsad.voice.aboutSwitchOnIe8(0)');
                  clearTimeout('timerID8');
                }, 55000); 
              }else if (tag == '1') {
                v1.innerHTML = 'こちらをクリックすると、『各種・ボランティア<br />検索について』の説明がオフになります。';
                img[1].src = '/images/base/voice_button_on.png';
                s[1].onclick = new Function ('window.tsad.voice.aboutSwitchOffIe8(1)');
                voice.src = '/voice/about/search_volunteer.mp3';
                v0.innerHTML = 'こちらをクリックすると、『障スポ・<br />ナビとは』の説明が音声で流れます。';
                img[0].src = '/images/base/voice_button_off.png';
                s[0].onclick = new Function ('window.tsad.voice.aboutSwitchOnIe8(0)');
                v2.innerHTML = 'こちらをクリックすると、『その他の<br />ページについて』の説明が音声で流れます。';
                img[2].src = '/images/base/voice_button_off.png';
                s[2].onclick = new Function ('window.tsad.voice.aboutSwitchOnIe8(2)');
                var timerID9 = setTimeout (function () {
                  v1.innerHTML = 'こちらをクリックすると、『各種・ボランティア<br />検索について』の説明が音声で流れます。';
                  img[1].src = '/images/base/voice_button_off.png';
                  s[1].onclick = new Function ('window.tsad.voice.aboutSwitchOnIe8(1)');
                  clearTimeout('timerID9');
                }, 43000); 
              }else if (tag == '2') {
                v2.innerHTML = 'こちらをクリックすると、『その他の<br />ページについて』の説明がオフになります。';
                img[2].src = '/images/base/voice_button_on.png';
                s[2].onclick = new Function ('window.tsad.voice.aboutSwitchOffIe8(2)');
                voice.src = '/voice/about/others.mp3';
                v0.innerHTML = 'こちらをクリックすると、『障スポ・<br />ナビとは』の説明が音声で流れます。';
                img[0].src = '/images/base/voice_button_off.png';
                s[0].onclick = new Function ('window.tsad.voice.aboutSwitchOnIe8(0)');
                v1.innerHTML = 'こちらをクリックすると、『各種・ボランティア<br />検索について』の説明が音声で流れます。';
                img[1].src = '/images/base/voice_button_off.png';
                s[1].onclick = new Function ('window.tsad.voice.aboutSwitchOnIe8(1)');
                var timerID10 = setTimeout (function () {
                  v2.innerHTML = 'こちらをクリックすると、『その他の<br />ページについて』の説明が音声で流れます。';
                  img[2].src = '/images/base/voice_button_off.png';
                  s[2].onclick = new Function ('window.tsad.voice.aboutSwitchOnIe8(2)');
                  clearTimeout('timerID10');
                }, 49000); 
              }
            };

            v.aboutSwitchOffIe8 = function (tag) {
              var d = document,
                  t = tag,
                  s = d.getElementsByName('soundspeech_about'),
                  voice = d.getElementById('voice-info'),
                  v = d.getElementsByName('text_wrap'),
                  img = d.getElementsByName('voice_buttons'),
                  v0 = d.getElementById('voice_reader000'),
                  v1 = d.getElementById('voice_reader001'),
                  v2 = d.getElementById('voice_reader002');
              if (tag == '0') {
                v0.innerHTML = 'こちらをクリックすると、『障スポ・<br />ナビとは』の説明が音声で流れます。';
                img[0].src = '/images/base/voice_button_off.png';
                s[0].onclick = new Function ('window.tsad.voice.aboutSwitchOnIe8(0)');
                voice.src = '';
              }else if (tag == '1') {
                v1.innerHTML = 'こちらをクリックすると、『各種・ボランティア<br />検索について』の説明が音声で流れます。';
                img[1].src = '/images/base/voice_button_off.png';
                s[1].onclick = new Function ('window.tsad.voice.aboutSwitchOnIe8(1)');
                voice.src = '';
              }else if (tag == '2') {
                v2.innerHTML = 'こちらをクリックすると、『その他の<br />ページについて』の説明が音声で流れます。';
                img[2].src = '/images/base/voice_button_off.png';
                s[2].onclick = new Function ('window.tsad.voice.aboutSwitchOnIe8(2)');
                voice.src = '';
              }
            };

}());
*/
