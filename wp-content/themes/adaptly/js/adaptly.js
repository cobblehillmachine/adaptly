document.onreadystatechange = function(e)
{
    if (document.readyState === 'complete')
    {
        //dom is ready, window.onload fires later
        $('.video-bg video')[0].play();
    }
};

$(window).load(function() {
  $('.sidr').show();
  $('#sidr-trigger').sidr( {
    side: 'right',
    onOpen: navClose()
  });
  homepageAnimation();
  $('.employee-quotes.flexslider').flexslider({
    animation:'slide',
    controlNav:false,
    directionNav: false,
    prevText: '',
    nextText: '',
    pauseOnHover: false
  })
  careersHeaderSlider();
  requestDemoForm();
  // blurs();
  smoothScroll();
  shareCounter();
});

function homepageAnimation() {
  var height = $(window).height();

  $('.animation-text-wrapper').css('height', height + 179)
  $('.video-bg').css('height', height);
  $(document).scroll(function() {
    var videoScrollDistance = $(this).scrollTop()
    $('.video-bg').fadeOut('fast');
    $('.home.page footer').show();
    $('.rest-of-homepage').fadeIn('fast', function() {
      svgColorChange();
      clientTestimonialSlider();
    })
    if (videoScrollDistance === 0) {
      console.log(videoScrollDistance)
      $('.video-bg video')[0].play();
      $('.video-bg').show();
    }
  })


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
        var currentColor = colorList[slider.currentSlide]
        $('.wide-cont.careers a').css('background-color', currentColor);
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

function navClose() {
  $('body').on('click', function() {
     $.sidr('close', 'sidr-main');
  })
}


