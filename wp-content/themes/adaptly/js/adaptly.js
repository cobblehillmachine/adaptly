
$(window).load(function() {
  homepageAnimation();

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
    svgColorChange();

});

function homepageAnimation() {
  var height = $(window).height();
  $('.video-bg').css('height', height);
  if(/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())){
    console.log("chrome!")
   $('.video-bg').css('background', 'url("wp-content/themes/adaptly/images/homepage_animation.gif")');
  }
}

function requestDemoForm() {
  $('.request-demo-cta button').on('click', function() {
    $('.request-demo-form.technology').slideToggle();
  })
  $('.post-header-cta button').on('click', function() {
    $('.request-demo-form.post-header').slideToggle();
  })
  $('.pre-footer-cta button').on('click', function() {
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
      nextText: ''
      // before: function(slider) {
      //   var $currentSlide = $('.header-slider ul li')[slider.currentSlide];
      //   console.log($currentSlide)
      //   var color = $currentSlide.html;
      //   console.log(color)
      //   // $('wide-cont.careers a').css('background-color', color)
      // }
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


