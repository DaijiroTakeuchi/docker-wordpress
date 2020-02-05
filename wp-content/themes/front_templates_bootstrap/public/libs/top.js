jQuery(function ($) {
    // 実績紹介スライダー
    $('.js-slick').slick({
        centerMode: true,
        slidesToShow: 1,
        centerPadding: "5%",
        variableWidth: true,
        prevArrow: '<button type="button" class="slick-prev"><img class="slick-prevImg" src="/images/slick-prev.png"></button>',
        nextArrow: '<button type="button" class="slick-next"><img class="slick-nextImg" src="/images/slick-next.png"></button>',
        dots: true,

        responsive: [
            {
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    slidesToShow: 1,
                    centerPadding: "0%",
                }
            }
        ]
    });
    // メディア タブ切り替え
    $('.top-mediaNavi__item').on('click', function () {
        // nav アクティブ切り替え
        $('.top-mediaNavi__item').removeClass('mediaNavi-active');
        $(this).addClass('mediaNavi-active');

        // body アクティブ切り替え
        $('.mediaArticle__item').removeClass('mediaArticle-active');
        var index = $(this).data('media');
        $('.mediaArticle__item[data-media=' + index + ']').addClass('mediaArticle-active');
    });
});

