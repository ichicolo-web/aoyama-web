(function () {
  if (typeof window.hdm === 'undefined') {
    window.hdm = {};
  }

  if (typeof window.hdm.index === 'undefined') {
    window.hdm.index = {};
  }

  var i = window.hdm.index;

  $(function () {
    var d = document,
    n1 = d.getElementById('note001'),
    nL = 440,
    nT = 190;
  $('#note001').fadeIn(3000);
  timerID = setInterval (
    function () {
      nL = nL + 0.2 * (Math.random () * 5);
      n1.style.left = nL + 'px';
      nT = nT - 0.2 * (Math.random () * 5);
      n1.style.top = nT + 'px';
    }
    ,50);
  });


  

}());
