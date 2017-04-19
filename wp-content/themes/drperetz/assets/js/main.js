// Fixed Navigation on Scroll

$(window).scroll(function(){
    if ($(window).scrollTop() >= 50) {
      $('.header__bottom').addClass('header-fixed');
      $('#page').addClass('header-fixed');
    }
    else {
      $('.header__bottom').removeClass('header-fixed');
      $('#page').removeClass('header-fixed');
    }
});

// Scroll to links

$(document).ready(function() {

  $(".faq-links a").on("click", function( e ) {
    e.preventDefault();
    $("body, html").animate({ 
        scrollTop: $( $(this).attr('href') ).offset().top - 72
    }, 1500, "easeInOutCubic");
  });
});