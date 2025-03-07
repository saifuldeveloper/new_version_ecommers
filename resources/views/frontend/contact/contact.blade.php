@extends('frontend.layout.master')
@section('content')
    <!-- font awesome css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" id="cliper-blog-css" href="./assets/css/pages-service-one.css" media="all">
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" id="elementor-frontend-css"
        href="{{ asset('assets/frontend') }}/assets/css/frontend-lite.min.css" media="all">
    <link rel="stylesheet" id="swiper-css" href="{{ asset('assets/frontend') }}/assets/css/swiper.min.css" media="all">

    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/assets/css/service-one.css">
    <style id="cliper-main-style-inline-css">
        .banner-area-bg {
            background-image: url('./assets/images/banner/service-one-banner.png');
        }

        .banner-area {
            text-align: center;
        }

        .page-title h1,
        .page-title,
        .breadcumb,
        .breadcumb a,
        .breadcumb a span {
            color: #131313;
        }

        .navbar-header h3 a {
            color: #1A152E;
        }

        .is-sticky .navbar-header h3 a {
            color: #00152e;
        }

        /*---------footer area-----------------------------------------------------------------------------------------------*/
        .footer_area {
            padding-top: 100px;
            padding-bottom: 70px;
            background: #111;
            color: #fff;
        }

        .footer_area .footer_content img {
            display: block;
            margin-bottom: 29px;
        }

        .footer_area .footer_content p {
            font-size: 16px;
            color: #fff;
            margin-bottom: 0;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .footer_area .footer_content .footer_social_link ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .footer_area .footer_content .footer_social_link ul li {
            display: inline-block;
            padding-right: 10px;
        }

        .footer_area .footer_content h3 {
            margin: 0;
            padding-bottom: 20px;
            border-bottom: 1px solid #333535;
            margin-bottom: 25px;
            font-weight: bold;
            font-size: 25px;
        }

        .footer_area .footer_content .footer_social_link ul li a {
            color: #fff;
            font-size: 17px;
            transition: .5s;
            display: block;
        }

        .footer_area .footer_content .footer_social_link ul li a:hover {
            color: #e73c3e;
            font-size: 16px;
        }

        .footer_area .footer_content .footer_second_link ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .footer_area .footer_content .footer_second_link ul li {
            display: block;
            margin-bottom: 15px;
        }

        .footer_area .footer_content .footer_second_link ul li a {
            color: #fff;
            font-size: 16px;
            transition: .5s ease-in-out;
            display: block;
        }

        .footer_area .footer_content .footer_second_link ul li a:hover {
            color: #e73c3e;
            font-size: 16px;
            letter-spacing: 1px;
        }

        .footer_area .footer_content.footer_last_link i {
            padding-right: 20px !important;
            line-height: 16px;
        }

        .footer_area .footer_content.footer_last_link span a {
            color: #fff;
            transition: .5s;
        }

        .footer_area .footer_content.footer_last_link span a:hover {
            color: #e73c3e;
        }

        /* for scroll bottom to top */
        .bottom_to_top {
            opacity: 0;
        }

        .bottom_to_top img {
            width: 50px;
            height: 50px;
            position: fixed;
            bottom: 50px;
            right: 60px;
            cursor: pointer;
        }

        /*--------footer bottom area-----------------------------------------------------------------------------------*/
        .footer_bottom {
            background: #111;
            border-top: 1px solid #292929;
            color: #fff;
            text-align: center;
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .footer_bottom span a {
            color: #acd14e;
            font-size: 20px;
            font-weight: bold;
            transition: .5s;
        }

        .footer_bottom span a:hover {
            color: #e73c3e;
        }

        @media (max-width: 991px) and (min-width: 768px) {
            .navbar-header h3 a {
                color: #00152e;
            }

            .is-sticky .navbar-header h3 a {
                color: #1A152E;
            }
        }

        @media only screen and (max-width: 767px) {
            .navbar-header h3 a {
                color: #00152e;
            }

            .is-sticky .navbar-header h3 a {
                color: #1A152E;
            }
        }

        #cliper-main-navigation {
            margin-right: inherit;
        }

        .mainnav-area-bg {
            opacity: .0;
        }

        .is-sticky .mainnav-area-bg {
            opacity: .1;
        }

        ul#cliper-nav li a {
            color: #131313;
        }

        .is-sticky ul#cliper-nav li a,
        ul#cliper-nav li li a {
            color: #131313;
        }

        ul#cliper-nav li a:hover,
        ul#cliper-nav li.active>a,
        ul#cliper-nav li.current-menu-parent>a,
        ul#cliper-nav li.current-menu-item>a,
        ul#cliper-nav li.hover>a,
        ul#cliper-nav li:hover>a {
            color: #438FF9;
        }

        .is-sticky ul#cliper-nav li>a:hover,
        .is-sticky ul#cliper-nav>li:hover>a,
        .is-sticky ul#cliper-nav li ul li>a:hover,
        .is-sticky ul#cliper-nav li.active>a,
        .is-sticky ul#cliper-nav li.hover>a,
        .is-sticky ul#cliper-nav li.current-menu-parent>a,
        .is-sticky ul#cliper-nav li.current-menu-item>a {
            color: #438FF9;
        }

        ul#cliper-nav li li a,
        .is-sticky ul#cliper-nav li li a {
            color: #8B8B8B !important;
        }

        ul#cliper-nav li ul li.hover>a,
        ul#cliper-nav li.has-sub li.current-menu-item>a,
        .is-sticky ul#cliper-nav li ul li.hover>a {
            color: #438FF9 !important;
            background: #e3eefe !important;
        }

        @media only screen and (min-width: 992px) {
            ul#cliper-nav>li.menu-item .wee {
                display: block;
            }
        }

        .mainnav-area {
            border-color: transparent;
        }

        @media only screen and (max-width: 991px) {
            .mainnav-area {
                border-color: rgba(255, 255, 255, .15);
            }

            .mainnav-area-bg {
                opacity: .1;
            }

            .is-sticky .mainnav-area-bg {
                opacity: .1;
            }

            .menu-toggle.full {
                color: #1A152E !important;
                border-color: #1A152E;
            }

            .line {
                stroke: #1A152E;
            }

            .is-sticky .menu-toggle.full {
                color: #1A152E;
                border-color: #1A152E;
            }

            .is-sticky .line {
                stroke: #1A152E;
            }

            ul#cliper-nav li a,
            ul#cliper-nav li li a,
            .is-sticky ul#cliper-nav li a,
            .is-sticky ul#cliper-nav li li a {
                color: #00274e !important;
            }

            ul#cliper-nav li.has-sub.open>a,
            ul#cliper-nav>li>a:hover,
            ul#cliper-nav li.active>a,
            ul#cliper-nav li.current-menu-item>a,
            ul#cliper-nav li.open.menu-item-has-children>a {
                background: #ffffff !important;
                color: #438FF9 !important;
            }
        }

        .footer-area-bg:after {
            opacity: 0.5;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/assets/css/contact.css">
    <link rel="stylesheet" id="elementor-post-1837-css" href="{{ asset('assets/frontend') }}/assets/css/post-css.css"
        media="all">
    <script src="{{ asset('assets/frontend') }}/ssets/js/jquery.js" id="jquery-core-js"></script>

    <script src="{{ asset('assets/frontend') }}/assets/js/jquery-migrate.js"></script>
    <!--Banner Start-->
    <div class="banner-area white">
        <div class="banner-area-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="page-title">
                        <h1>
                            Contact Us - Graphics Amazon </h1>
                    </div>
                    <div class="breadcumb">
                        <div class="cliper__theme__breadcrumb">
                            <a href="#" title="Home" rel="bookmark" class="breadcrumb-item">Home</a> <span
                                class="bredcrumb-separator active">&gt;</span> <span class="active">Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Banner End-->

    <!--Contact Start-->
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-049ed67 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="049ed67" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ce5ec03"
                data-id="ce5ec03" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-3b74e7e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="3b74e7e" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-43cbcf6"
                                data-id="43cbcf6" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-d311f0c elementor-widget elementor-widget-heading animated fadeInUp"
                                        data-id="d311f0c" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <style>
                                                /*! elementor - v3.14.0 - 26-06-2023 */
                                                .elementor-heading-title {
                                                    padding: 0;
                                                    margin: 0;
                                                    line-height: 1
                                                }

                                                .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                                    color: inherit;
                                                    font-size: inherit;
                                                    line-height: inherit
                                                }

                                                .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                    font-size: 15px
                                                }

                                                .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                    font-size: 19px
                                                }

                                                .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                    font-size: 29px
                                                }

                                                .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                    font-size: 39px
                                                }

                                                .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                    font-size: 59px
                                                }
                                            </style>
                                            <h3 class="elementor-heading-title elementor-size-default">Have a project in
                                                mind?
                                                <span style="color:#438FF9;text-decoration:underline;">Let’s talk.</span>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-a1c40d3 elementor-widget elementor-widget-text-editor animated fadeInUp"
                                        data-id="a1c40d3" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <style>
                                                /*! elementor - v3.14.0 - 26-06-2023 */
                                                .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                    background-color: #69727d;
                                                    color: #fff
                                                }

                                                .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                    color: #69727d;
                                                    border: 3px solid;
                                                    background-color: transparent
                                                }

                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                    margin-top: 8px
                                                }

                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                    width: 1em;
                                                    height: 1em
                                                }

                                                .elementor-widget-text-editor .elementor-drop-cap {
                                                    float: left;
                                                    text-align: center;
                                                    line-height: 1;
                                                    font-size: 50px
                                                }

                                                .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                    display: inline-block
                                                }
                                            </style>
                                            <p>Please fill up the form below if you need Quotation or have any questions/
                                                inquiries about our photo editing, post processing and retouching services.
                                                If you wish to contact directly our team, you may call in our&nbsp;<span
                                                    class="text-danger">HOT LINE (24×7)</span>&nbsp;number&nbsp;<span
                                                    class="text-danger">880-176-109-7001</span>.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-11e4317 elementor-widget elementor-widget-text-editor animated fadeInUp"
                                        data-id="11e4317" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>We’ll provide you a dedicated customer support and the best quality bulk
                                                photo editing services 24/7 days with a low price.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b85e1b8"
                                data-id="b85e1b8" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-15ea0e9 elementor-widget elementor-widget-Be_Addons_Info_Box_Widget animated fadeInUp"
                                        data-id="15ea0e9" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}"
                                        data-widget_type="Be_Addons_Info_Box_Widget.default">
                                        <div class="elementor-widget-container">
                                            <div class="be__addons__info__box__wrap be__addons__infobox__style__1">
                                                <div class="info__box__header__title">
                                                    <h3>Main Branch</h3>
                                                </div>
                                                <div class="info__box__list">
                                                    <div class="single__info__box elementor-repeater-item-4cd4ea1">

                                                        <div class="info__box__icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="info__details">
                                                            <p>Hemayetpur, Dhaka - Aricha Hwy, Savar, Post code:1340, Dhaka
                                                                Bangladesh.</p>
                                                        </div>
                                                    </div>
                                                    <div class="single__info__box elementor-repeater-item-949384a">

                                                        <div class="info__box__icon">
                                                            <i class="far fa-envelope"></i>
                                                        </div>
                                                        <div class="info__details">
                                                            <p><a
                                                                    href="mailto:graphicsamazonbd@gmail.com">graphicsamazonbd@gmail.com</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="single__info__box elementor-repeater-item-f7f54ec">

                                                        <div class="info__box__icon">
                                                            <i class="far fa-envelope"></i>
                                                        </div>

                                                    </div>
                                                    <div class="single__info__box elementor-repeater-item-d7e2b0c">

                                                        <div class="info__box__icon">
                                                            <i class="fa fa-phone"></i>
                                                        </div>
                                                        <div class="info__details">
                                                            <p><a href="tel:+8801788110628">+880-176-109-7001</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!--Contact End-->
@endsection
