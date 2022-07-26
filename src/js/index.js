import $ from 'jquery';

(function() {

    // mv slide 
    function mvSlider() {
        const mvSlide = document.getElementById('mv_slide');
        const mvSlideItem = mvSlide.querySelectorAll('.slide-item');
        const totalNum = mvSlideItem.length - 1;
        const fadeTime = 2000;
        const intarvalTime = 8000;
        let actNum = 0;
        let nowSlide;
        let nextSlide;
    
        mvSlideItem[0].classList.add('show', 'zoom');
        setInterval(() => {
            if (actNum < totalNum) {
                nowSlide = mvSlideItem[actNum];
                nextSlide = mvSlideItem[++actNum];
                nowSlide.classList.remove('show');
                nextSlide.classList.add('show', 'zoom');
                setTimeout(() => {
                    nowSlide.classList.remove('zoom');
                }, fadeTime);
            } else {
                nowSlide = mvSlideItem[actNum];
                nextSlide = mvSlideItem[actNum = 0];
                nowSlide.classList.remove('show');
                nextSlide.classList.add('show', 'zoom');
                setTimeout(() => {
                    nowSlide.classList.remove('zoom');
                }, fadeTime)
            };
        }, intarvalTime);
    }
    mvSlider();

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

    // mv scroll btn
    $('.mv-scroll').on('click', function() {
        let postion = $('#info').offset().top;
        $('body,html').animate({scrollTop: postion}, 1000, 'swing');
    });

})();