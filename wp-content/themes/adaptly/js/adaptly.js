
$(window).load(function() {
  // homepageAnimation();
    $('.client-testimonial-carousel.flexslider').flexslider({
      animation:'slide',
      controlNav:false,
      directionNav: false,
      prevText: '',
      nextText: ''
    });
    requestDemoForm();
});

function homepageAnimation() {
  var height = $(window).height();
  $('.video-bg video').css('height', height);
}

function requestDemoForm() {
  $('.pre-footer-cta button').on('click', function() {
    $('.request-demo-form').slideToggle();
  })
}
