$(document).ready(function () {
    $(".one-time").slick({
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        touchMove: true,
        prevArrow:
            '<button type="button" data-role="none" class="slick-prev">Anterior</button>',
        nextArrow:
            '<button type="button" data-role="none" class="slick-next">Próximo</button>',

        responsive: [
            {
                breakpoint: 740,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                },
                prevArrow:
                    '<button type="button" data-role="none" class="slick-prev">Anterior</button>',
                nextArrow:
                    '<button type="button" data-role="none" class="slick-next">Próximo</button>',
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
                prevArrow:
                    '<button type="button" data-role="none" class="slick-prev">Anterior</button>',
                nextArrow:
                    '<button type="button" data-role="none" class="slick-next">Próximo</button>',
            },
            {
                breakpoint: 380,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
                prevArrow:
                    '<button type="button" data-role="none" class="slick-prev">Anterior</button>',
                nextArrow:
                    '<button type="button" data-role="none" class="slick-next">Próximo</button>',
            },
        ],
    });
});
