(function () {
  if (typeof window.hdm === 'undefined') {
    window.hdm = {};
  }

  if (typeof window.hdm.selected === 'undefined') {
    window.hdm.selected = {};
  }

  var i = window.hdm.selected;

  i.start = function () {
    $(function () {
      var path = location.pathname,
      violin = path.match('violin'),
      piano = path.match('piano'),
      request = path.match('request'),
      contact = path.match('contact'),
      confirm = path.match('confirm'),
      send = path.match('send'),
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
    } else if (confirm == 'confirm') {
      $('#contact').addClass('selected');
    } else if (send == 'send') {
      $('#contact').addClass('selected');
    } else if (link == 'link') {
      $('#link').addClass('selected');
    } else if (access == 'access') {
      $('#access').addClass('selected');
    } else {
      $('#index').addClass('selected');
    }
    });
  };

  $(function () {
    i.start();
  });
}());
