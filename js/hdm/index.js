(function () {
  if (typeof window.hdm === 'undefined') {
    window.hdm = {};
  }

  if (typeof window.hdm.index === 'undefined') {
    window.hdm.index = {};
  }

  var i = window.hdm.index;

  $(function () {
    var box = $('.key-visual'),
    v001 = box.children('.v001'),
    v002 = box.children('.v002'),
    v003 = box.children('.v003');

  var first = function () {
    setTimeout(function () {
      v001.fadeOut('slow');
      v002.fadeIn('slow');
      second();
    }, 6000);
  };

  var second = function () {
    setTimeout(function () {
      v002.fadeOut('slow');
      v003.fadeIn('slow');
      third();
    }, 6000);
  };

  var third = function () {
    setTimeout(function () {
      v003.fadeOut('slow');
      v001.fadeIn('slow');
      first();
    }, 6000);
  };

    first();

  });

}());
