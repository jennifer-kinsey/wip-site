$(function() {
  $(window).scroll(function() {
    var mn = $(".main-nav");
    hdr = $('.upper').height();

    if( $(this).scrollTop() > hdr ) {
      mn.addClass("main-nav-scrolled");
    } else {
      mn.removeClass("main-nav-scrolled");
    }
  });

});
