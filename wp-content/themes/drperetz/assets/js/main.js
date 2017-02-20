// Elements of Care tab functionality

$(document).ready(function () {
  $('.element-item__top').on('click', function(event) {
    if ($(this).parent().hasClass('element-item--active')) {
      event.preventDefault();
    } else {
      event.preventDefault();
      $('.element-item--active').removeClass('element-item--active');
      $(this).parent().addClass('element-item--active');
    }
  });
});


// Elements of Care sliding panels
  //toggle panel slide
$(document).ready(function () {
  $('.elements-details__cover').on('click', function(event) {
    $(this).siblings().toggleClass('element-slide');
  });
});

  //close panel

$(document).ready(function () {
  $('.slide-up').on('click', function(event) {
    $(this).parent().removeClass('element-slide');
  });
});

// VIDEO RESIZE FUNCTION

$(document).ready(function() {
  var $allVideos = $("iframe[src^='https://player.vimeo.com'], iframe[src^='https://www.youtube.com']"),

      $fluidEl = $(".home-video__wrap");

  $allVideos.each(function() {

    $(this)
      .data('aspectRatio', this.height / this.width)

      .removeAttr('height')
      .removeAttr('width');

  });

  $(window).resize(function() {

    var newWidth = $fluidEl.width();
    $allVideos.each(function() {

      var $el = $(this);
      $el
        .width(newWidth)
        .height(newWidth * $el.data('aspectRatio'));

    });
  }).resize();
});