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

    // get address
    $('#getAddress').on('click', function() {
        let zipcode1 = $('#zipcode1').val();
        let zipcode2 = $('#zipcode2').val();
        let zipcode = zipcode1 + zipcode2;
        if (zipcode.length === 7) {
            $.ajax({
                url: 'https://zipcloud.ibsnet.co.jp/api/search',
                data: {
                    zipcode: zipcode
                },
                dataType: "jsonp",
            })
            .done(function(data) {
                $('#pref_name').val(data.results[0].address1);
                $('#address').val(data.results[0].address2+data.results[0].address3);
            })
        }
    });

})();