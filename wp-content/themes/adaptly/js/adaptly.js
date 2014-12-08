
$(window).load(function() {
    $('.client-testimonial-carousel.flexslider').flexslider({
      animation:'slide',
      controlNav:false,
      directionNav: false,
      prevText: '',
      nextText: ''
    });
    requestDemoForm();
});


function requestDemoForm() {
  $('.pre-footer-cta button').on('click', function() {
    $('.request-demo-form').toggle();
  })
}
