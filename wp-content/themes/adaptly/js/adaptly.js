
$(window).load(function() {
  // homepageAnimation();
    $('.client-testimonial-carousel.flexslider').flexslider({
      animation:'slide',
      controlNav:false,
      directionNav: false,
      prevText: '',
      nextText: ''
    });
    $('.employee-quotes.flexslider').flexslider({
      animation:'slide',
      controlNav:false,
      directionNav: false,
      prevText: '',
      nextText: ''
    })
    careersHeaderSlider();
    requestDemoForm();
    blurs();
    smoothScroll();
    // resourceTabs()
    // shareCounter();
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

function shareCounter() {
  var shareDivs = $('.ssba');
  $.each(shareDivs, function(div) {
    var facebookCount = $('this' + ' .ssba_sharecount.facebook').textContent;
    console.log($('this' + ' .ssba_sharecount.facebook'))
    var twitterCount = $(' .ssba_sharecount.twitter').textContent;
    var totalCount = parseInt(facebookCount) + parseInt(twitterCount);
    console.log(totalCount);
    $(' .counter-total').text('totalCount')
  })
}

function careersHeaderSlider() {
  $('.header-slider ul').addClass('slides');
  $('.header-slider .flexslider').flexslider({
      animation:'slide',
      controlNav:false,
      directionNav: false,
      prevText: '',
      nextText: '',

    })
}
