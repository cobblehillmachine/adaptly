$( document ).ready(function() {
  careersSlider();
  blurs();
  widowVanquisher();
  if ($('.video-bg video').length > 0) {
    $('.video-bg video')[0].play();
  }
  $('.request-demo-form form').on('click', function() {
	  // console.log('attempt');
  })


})

$( window ).load(function() {
  homepageAnimation();
  $('.computer-animation video').loop = true;
  requestDemoForm();
  smoothScroll();
  blogPhotoWrap();
  gallery();
  splashCookie();
  $('#splash-signup').on('click', function() {
    $('#home-overlay').fadeOut();
    $('body').css('overflow-y', 'visible')
  })


});

$( window ).resize(function() {
  homepageAnimation();
})

function gallery() {
  $('#dg-container').gallery({
      autoplay  : true,
      interval : 2500
    });
}

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
      var targetHeight = $('.video-bg').outerHeight();
      var scrollPercent = (targetHeight - window.scrollY) / targetHeight;
      if(scrollPercent >= 0){
          $('.video-bg').css('opacity', scrollPercent);
      }
      $('.home.page footer').show();
      $('.rest-of-homepage').fadeIn('fast', function() {
        clientTestimonialSlider();
      })
    })
  } else {
    $('.animation-text-wrapper').css('height', 'initial')
    $('.rest-of-homepage').show();
    $('.home.page footer').show();
    clientTestimonialSlider();
  }
}

function clientTestimonialSlider() {
  $('.client-testimonial-carousel.flexslider').flexslider({
    animation:'slide',
    controlNav:false,
    directionNav: false,
    prevText: '',
    nextText: '',
    pauseOnHover: false,
    touch: false
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
  var shareDivs = $('.post');
  $.each(shareDivs, function(div) {
    var totalCount = get_tweets(div.find('a').href) + get_shares(div.find('a').href);
    console.log(div.find('a').href)
    if (totalCount === 1) {
      $(' .counter-total').text(totalCount + " share");
    } else {
      $(' .counter-total').text(totalCount + " shares");
    }
  })
}

function careersSlider() {
  var colorList = ['#b1aba9', 'black', '#171735', '#461b25', '#9d9d9d' ]
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
  $('.employee-quotes.flexslider').flexslider({
    animation:'slide',
    controlNav:false,
    directionNav: false,
    prevText: '',
    nextText: '',
    pauseOnHover: false
  })
}

function blogPhotoWrap() {
  $('.mid-cont.blog-post img.aligncenter').parent().css('text-align', 'center')
}

function widowVanquisher() {
  $('p, h4').each(function(){
    var string = $(this).html();
    string = string.replace(/ ([^ ]*)$/,'&nbsp;$1');
    $(this).html(string);
  });
}

function instagramSplash() {
  var lengthOfTime = 10000;
  if ($(window).width() > 1000) {
    var images = $('.image-tiles.desktop img')
  } else {
    var images = $('.image-tiles.mobile img')
  }
  var numberOfImages = images.length;
  var fadeTimeout = lengthOfTime / numberOfImages;
  var shuffledImageArray = shuffle(images);
  console.log(images.length)
  shuffledImageArray.each(function(i) {
    $(this).delay(i++*fadeTimeout).fadeTo("slow", 0);
  });
}

function shuffle(o) {
  for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
  return o;
};

function splashCookie() {
  var COOKIE_NAME = 'home-page-cookie';
  $go = $.cookie(COOKIE_NAME);
  if ($go == null) {
    $.cookie(COOKIE_NAME, 'test', { path: '/', expires: 6 });
    $('#home-overlay').show();
    instagramSplash();
    $('body').css('overflow-y', 'hidden');
  }
  else {

  }

}
