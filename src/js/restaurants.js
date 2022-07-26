import $ from 'jquery';

(function() {

    // // scroll 
    // let position;
    // $(window).on('scroll', function() {
    //     position = $(this).scrollTop();
    //     if (position > 0) {
    //         $('.header').removeClass('top').addClass('fixed');
    //     } else {
    //         $('.header').addClass('top').removeClass('fixed');
    //     }
    // });

    // nav
    $('#nav_btn').on('click', function() {
        let className = $('.header').attr('class');
        if (className.match(/top/)) {
            $('.header').toggleClass('on top fixed');
        } else {
            $('.header').toggleClass('on');
        }
    });

    // mv scroll btn
    $('.mv-scroll').on('click', function() {
        let postion = $('#info').offset().top;
        $('body,html').animate({scrollTop: postion}, 1000, 'swing');
    });

})();