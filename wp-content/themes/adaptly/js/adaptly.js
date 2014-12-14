
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
    blurs();
    smoothScroll();
    resourceTabs()
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

function blurs() {
  $('.map').blurjs({
    source: '.map',
    radius: 2,
    overlay: 'rgba(0,100,100,0.1)'
  });
  $('.maximum-effect').blurjs({
    source: '.maximum-effect',
    radius: 0,
    overlay: 'rgba(255, 255, 255, 0.2)'
  })
}

function smoothScroll() {
  $('.subnav.about li a').click(function(){
      $('html, body').animate({
          scrollTop: $( $.attr(this, 'href') ).offset().top
      }, 400);
      return false;
  });
}

function resourceTabs() {
  $('.resources.subnav li.blog a').on('click', function() {
    $('.resources.subnav a').css('border-bottom', 0)
    $(this).css('border-bottom', '2px #1AA2D1 solid')
    $('.blog.resources').fadeIn('slow');
    $('.case-studies.resources').fadeOut('fast');
    $('.press.resources').fadeOut('fast');
  })
  $('.resources.subnav li.case-studies a').on('click', function() {
    $('.resources.subnav a').css('border-bottom', 0)
    $(this).css('border-bottom', '2px #1AA2D1 solid')
    $('.blog.resources').fadeOut('fast');
    $('.case-studies.resources').fadeIn('slow');
    $('.press.resources').fadeOut('fast');
  })
  $('.resources.subnav li.press a').on('click', function() {
    $('.resources.subnav a').css('border-bottom', 0)
    $(this).css('border-bottom', '2px #1AA2D1 solid')
    $('.blog.resources').fadeOut('fast');
    $('.case-studies.resources').fadeOut('fast');
    $('.press.resources').fadeIn('slow');
  })
}
