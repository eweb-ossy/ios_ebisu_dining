import $ from 'jquery';
import 'slick-carousel';

(function() {

    if (typeof EventTarget !== 'undefined') {
        let supportsPassive = false;
        try {
          // Test via a getter in the options object to see if the passive property is accessed
          const opts = Object.defineProperty({}, 'passive', {
            get: () => {
              supportsPassive = true;
            },
          });
          window.addEventListener('testPassive', null, opts);
          window.removeEventListener('testPassive', null, opts);
        } catch (e) {}
        const func = EventTarget.prototype.addEventListener;
        EventTarget.prototype.addEventListener = function (type, fn) {
          this.func = func;
          this.func(type, fn, supportsPassive ? { passive: false } : false);
        };
    }
    
    // slider top 
    $('.slider').slick({
        arrows: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 10000,
        cssEase: 'linear',
        speed: 600,
        pauseOnFocus: false,
        pauseOnHover: false,
        dots: false,
    });
    $('.slider').on('afterChange', function() {
        $('.fadein-mv').fadeIn();
    });

    // slider rooms 
    $('.slider-rooms').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        slidesToScroll: 1,
        variableWidth: true,
        dots: true,
    });

    // scroll 
    let position;
    $(window).on('scroll', function() {
        position = $(this).scrollTop();
        if (position > 0) {
            $('.header').removeClass('top').addClass('fixed');
        } else {
            $('.header').addClass('top').removeClass('fixed');
        }
    });

    // nav
    $('#nav_btn').on('click', function() {
        let className = $('.header').attr('class');
        if (className.match(/top/)) {
            $('.header').toggleClass('on top fixed');
        } else {
            $('.header').toggleClass('on');
        }
    });

    $('#menu').on('mouseover', function() {
        $('.sub-menu').slideDown();
    });
    $('.menu').on('mouseover', function() {
        $('.sub-menu').hide();
    });

})();