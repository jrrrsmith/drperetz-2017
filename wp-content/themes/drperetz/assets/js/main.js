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

  $(".faq-links a").on("click touchstart", function( e ) {
    e.preventDefault();
    $("body, html").animate({ 
        scrollTop: $( $(this).attr('href') ).offset().top - 72
    }, 1500, "easeInOutCubic");
  });
});

// Enable Checkbox on Scroll

$(document).ready(function() {

  $("#checkAgree :input").attr("disabled", true);

  $('#agreement').scroll(function () {
      if ($(this).scrollTop() == $(this)[0].scrollHeight - $(this).height()) {
          $('#checkAgree :input').removeAttr('disabled');
          $('.instruction-form').addClass('faded');
      }
  });

});

// Mobile Nav
$(document).ready(function() {

  $('.mobile-nav-button').on('click touchstart', function( e ) {
    e.preventDefault();
    $(this).toggleClass('menu-open');
    $('.menu-primary-container').toggleClass('menu-open');
  });

});

document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://www.drchristinaperetz.com/appointment-booking/';
}, false );
