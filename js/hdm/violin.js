(function () {
  if (typeof window.hdm === 'undefined') {
    window.hdm = {};
  }

  if (typeof window.hdm.violin === 'undefined') {
    window.hdm.violin = {};
  }

  var v = window.hdm.violin;

  v.toggle = function (tag) {
    if(tag == '1') {
      $('.box001').show();
      $('.box002').hide();
      $('.box003').hide();
	  $('.box004').hide();
      $('.selected').removeClass('selected');
      $('.navi00' + tag).addClass('selected');
    } else if(tag == '2') {
      $('.box002').show();
      $('.box001').hide();
      $('.box003').hide();
	  $('.box004').hide();
      $('.selected').removeClass('selected');
      $('.navi00' + tag).addClass('selected');
    } else if(tag == '3') {
      $('.box003').show();
      $('.box001').hide();
      $('.box002').hide();
	  $('.box004').hide();
      $('.selected').removeClass('selected');
	  $('.navi00' + tag).addClass('selected');
    } else if(tag == '4') {
      $('.box004').show();
      $('.box001').hide();
      $('.box002').hide();
	  $('.box003').hide();
      $('.selected').removeClass('selected');
      $('.navi00' + tag).addClass('selected');
    }


  };
}());

/*
$(function () {
  $('p').click(function () {
    $(this).next('span').slideToggle();
  });
});
*/
