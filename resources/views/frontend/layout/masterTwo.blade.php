<html lang="en-US">

@includeWhen(true, 'frontend.layout.component.headTwo')

<body
    class="page-template page-template-template page-template-composer page-template-templatecomposer-php page page-id-1837 header__style__13 header__style__1 cliper__main__class elementor-default elementor-kit-1836 elementor-page elementor-page-1837 cht-in-desktop cht-landscape e--ua-blink e--ua-chrome e--ua-webkit"
    data-spy="scroll" data-target=".mainnav-area" data-offset="90" style="overflow-x: hidden;"
    data-elementor-device-mode="laptop" data-new-gr-c-s-check-loaded="14.1127.0" data-gr-ext-installed=""
    cz-shortcut-listen="true">


    <!--SCROLL TO TOP-->
    <a href="#scrolltop" class="scrolltop" style="bottom: 20px; display: none;">
        <i class="fa-solid fa-angle-up"></i>
    </a>

    @includeWhen(true, 'frontend.layout.headerTwo')




    @yield('content')



    @includeWhen(true, 'frontend.layout.footerTwo')



    <script src="{{ asset('assets/frontend') }}/assets/js/stellarnav.min.js" id="stellarnav-js"></script>
    <script src="{{ asset('assets/frontend') }}/assets/js/jquery.sticky.js" id="menu-sticky-js"></script>
    <script id="cliper-active-js-extra">
        var mobile_menu_scripts = {
            "style": "static",
            "contact": "+0001234567890",
            "location": "https:\/\/themeforest.net\/user\/bdexpert\/portfolio"
        };
    </script>
    <script src="{{ asset('assets/frontend') }}/assets/js/about-main.js" id="cliper-active-js"></script>
    <script id="cliper-active-js-after">
        jQuery(document).ready(function() {
            "use strict";
            jQuery("a.scrolltop").on("click", function(event) {
                var id = jQuery(this).attr("href");
                var offset = 60;
                var target = jQuery(id).offset().top - offset;
                jQuery("html, body").animate({
                    scrollTop: target
                }, 1500, "easeOutExpo");
                event.preventDefault();
            });
        });


        jQuery(document).ready(function() {
            "use strict";
            jQuery("#mainnav-area").sticky({
                topSpacing: 0
            });
        });


        jQuery(document).ready(function() {
            "use strict";
            var sticky_sidebar = jQuery(
                ".content-area .product__content__wrap,.content-area .product__widgets__wrap");
            sticky_sidebar.theiaStickySidebar({
                additionalMarginTop: 0
            });
        });
    </script>
    <script src="{{ asset('assets/frontend') }}/assets/js/webpack.runtime.min.js" id="elementor-webpack-runtime-js">
    </script>
    <script src="{{ asset('assets/frontend') }}/assets/js/frontend-modules.min.js" id="elementor-frontend-modules-js">
    </script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 993,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 992,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1024,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.14.1",
            "is_static": false,
            "experimentalFeatures": {
                "e_dom_optimization": true,
                "e_optimized_assets_loading": true,
                "e_optimized_css_loading": true,
                "a11y_improvements": true,
                "additional_custom_breakpoints": true,
                "theme_builder_v2": true,
                "landing-pages": true,
                "page-transitions": true,
                "notes": true,
                "loop": true,
                "form-submissions": true,
                "e_scroll_snap": true
            },
            "urls": {
                "assets": "https:\/\/clippingamazon.com\/wp-content\/plugins\/elementor\/assets\/"
            },
            "swiperClass": "swiper-container",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet", "viewport_tablet_extra",
                    "viewport_laptop"
                ],
                "viewport_tablet": 992,
                "viewport_tablet_extra": 1024,
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 1837,
                "title": "About%20Us%20-%20Clipping%20Amazon",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script src="{{ asset('assets/frontend') }}/assets/js/frontend.min.js" id="elementor-frontend-js"></script>
    @yield('script')
</body>

</html>
