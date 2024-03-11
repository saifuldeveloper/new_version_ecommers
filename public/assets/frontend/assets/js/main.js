$(document).ready(function() {
    // scroll down then menubar background-color change
        var nav = document.getElementById("navbar");

        window.onscroll = function () {
            if (window.pageYOffset > 100) {
                nav.style.background = "#ffff";
                nav.style.boxShadow = "#2b9e38 0px 4px 2px;";
                nav.style.zIndex = "9999";
            } else {
                nav.style.background = "transparent";
                nav.style.boxShadow = "none";
            }
        };
        // for clipping path services area slider 
        $(".autoplay").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });
        $(".lazy").slick({
            lazyLoad: "ondemand",
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });
        $(".beforeafterdefault").cndkbeforeafter({
            autoSliding: true,
            autoSlidingStopOnHover: true,
            showText: false,
        });

        // scroll bottom to top 
        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                $(".bottom_to_top").css({ opacity: "1", visibility: "visible" });
            } else {
                $(".bottom_to_top").css({ opacity: "0", visibility: "hidden" });
            }
        });
        $(".bottom_to_top").click(function () {
            $("html").animate({ scrollTop: 0 }, 1500);
        });
        $(".bottom_to_top").click(function () {
            $("html").animate({ scrollTop: 0 }, 1500);
        });

})