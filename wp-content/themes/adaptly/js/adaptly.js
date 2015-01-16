$(document).ready(function() {
    $('.video-bg video')[0].play();
})

$(window).load(function() {
  $('.nav-trigger').on('click', function(e) {
    e.preventDefault();
    showNav();

  })

  $('.body').on('click', function() {
    if ($('#side-nav').css('width') == '200px') {
       hideNav();
    }

  })
  // $('#nav-trigger').on('click', function(e) {
  //   e.preventDefault();
  //   if ($('.side-nav').css('right') == '-200px') {
  //     showNav();
  //   } else {
  //     hideNav();
  //   }
  // })
  // $('.body').on('click', function(e) {
  //   e.preventDefault();
  //   if ($('.side-nav').css('right') == '0px') {
  //     hideNav();
  //   }
  // })

  homepageAnimation();

  $('.employee-quotes.flexslider').flexslider({
    animation:'slide',
    controlNav:false,
    directionNav: false,
    prevText: '',
    nextText: '',
    pauseOnHover: false
  })
  $('.computer-animation video').loop = true;
  careersHeaderSlider();
  requestDemoForm();
  blurs();
  smoothScroll();
  shareCounter();
  blogPhotoWrap();
});

function showNav() {
  $('#side-nav').css('width', 200)
  $('.body').css({
    marginLeft: -200,
    marginRight: 200
  })
}

function hideNav() {
  $('#side-nav').css('width', 0)
  $('.body').css({
    marginLeft: 0,
    marginRight: 0
  })
}

function homepageAnimation() {
  var height = $(window).height();
  if ($(window).width() > 920) {
    $('.home-page').show();
    $('.animation-text-wrapper').css('height', height + 179)
    $('.video-bg').css('height', height);
    $(document).scroll(function() {
      var videoScrollDistance = $(this).scrollTop()
      $('.video-bg').fadeOut('fast');
      $('.home.page footer').show();
      $('.rest-of-homepage').fadeIn('fast', function() {
        clientTestimonialSlider();
      })
      if (videoScrollDistance === 0) {
        $('.video-bg video')[0].play();
        $('.video-bg').show();
      }
    })
  } else {
    clientTestimonialSlider();
    $('.video-bg').hide();
  }
}



function clientTestimonialSlider() {
  $('.client-testimonial-carousel.flexslider').flexslider({
    animation:'slide',
    controlNav:false,
    directionNav: false,
    prevText: '',
    nextText: ''
  });
}

function requestDemoForm() {
  $('.request-demo-cta a').on('click', function() {
    $('.request-demo-form.technology').slideToggle();
  })
  $('.post-header-cta a').on('click', function() {
    $('.request-demo-form.post-header').slideToggle();
  })
  $('.pre-footer-cta a').on('click', function() {
    $('.request-demo-form.pre-footer').slideToggle();
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
    overlay: 'rgba(255, 255, 255, 0.4)'
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
    var facebookCount = $('this' + ' .ssba_sharecount.facebook').textContent || 0;
    var twitterCount = $(' .ssba_sharecount.twitter').textContent || 0;
    var totalCount = parseInt(facebookCount) + parseInt(twitterCount);
    if (totalCount === 1) {
      $(' .counter-total').text(totalCount + " share");
    } else {
      $(' .counter-total').text(totalCount + " shares");
    }
  })
}

function careersHeaderSlider() {
  var colorList = ['#b1aba9', 'black', '#171735', '#461b25', '#9d9d9d']
  $('.header-slider ul').addClass('slides');
  $('.header-slider .flexslider').flexslider({
      animation:'slide',
      controlNav:false,
      directionNav: false,
      prevText: '',
      nextText: '',
      before: function(slider) {
        if ($(window).width() > 450) {
          var currentColor = colorList[slider.currentSlide]
          $('.wide-cont.careers a').css('background-color', currentColor);
        }

      }
  })
}

function svgColorChange() {
  var scrollDistance = $('.icon-container').offset().top;
  $(document).scroll(function() {
    if($(this).scrollTop() > scrollDistance) {
      $('.icon-container path, .icon-container circle, .icon-container line, .icon-container ellipse, .icon-container rect, .icon-container polygon').attr('stroke', "#1AA2D1");
      $('.icon-container g g g g path').attr('fill', "#1AA2D1");
    }
  })
}


function blogPhotoWrap() {
  $('.mid-cont.blog-post p img').each(function() {
    if (($(this)).css('width') > 560) {
      ($(this)).css('float', 'none')
    } else {
      ($(this)).css('float', 'right')
    }
  })

}

