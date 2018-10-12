$(document).ready(function(){

    $('.techno-carousel').slick({
        slidesToShow: 8,
        autoplay: true,
        arrows:false,
        draggable:true,
        responsive:[
            {
                breakpoint:585,
                settings: {
                    slidesToShow:4
                }
            }
        ]
    });
    $('.carousel-back').slick({
        slidesToShow: 5,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows:false,
        draggable:true,
        responsive:[
            {
                breakpoint:585,
                settings: {
                    slidesToShow:4
                }
            }
        ]
    });
    $('.carousel-front').slick({
        slidesToShow: 6,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows:false,
        draggable:true,
        responsive:[
            {
                breakpoint:585,
                settings: {
                    slidesToShow:4
                }
            }
        ]
    });
    $('.carousel-log').slick({
        slidesToShow: 8,
        autoplay: true,
        autoplaySpeed: 2500,
        arrows:false,
        draggable:true,
        responsive:[
            {
                breakpoint:585,
                settings: {
                    slidesToShow:4
                }
            }
        ]
    });

});    
