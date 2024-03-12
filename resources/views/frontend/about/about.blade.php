@extends('frontend.layout.master')
@section('title', 'Home')
@section('content')
    <!-- font awesome css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" id="bootstrap-css" href="{{ asset('assets/frontend') }}/assets/css/bootstrap.css" media="all">
    <link rel="stylesheet" id="cliper-typography-css" href="{{ asset('assets/frontend') }}/assets/css/typography.css"
        media="all">

    <link rel="stylesheet" id="cliper-blog-css" href="{{ asset('assets/frontend') }}//assets/css/pages-service-one.css"
        media="all">
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" id="elementor-frontend-css"
        href="{{ asset('assets/frontend') }}/assets/css/frontend-lite.min.css" media="all">
    <link rel="stylesheet" id="swiper-css" href="{{ asset('assets/frontend') }}/assets/css/swiper.min.css" media="all">
    <!--css-->
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



    <div class="banner-area white">
        <div class="banner-area-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="page-title">
                        <h1>
                            About Us - Graphics Amazon </h1>
                    </div>
                    <div class="breadcumb">
                        <div class="cliper__theme__breadcrumb">
                            <a href="#" title="Home" rel="bookmark" class="breadcrumb-item">Home</a> <span
                                class="bredcrumb-separator active">&gt;</span> <span class="active">About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-area clearfix">
        <div data-elementor-type="wp-page" data-elementor-id="1837" class="elementor elementor-1837"
            data-elementor-post-type="page">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-b4f06d0 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="b4f06d0" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-80a8ec4"
                        data-id="80a8ec4" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-b8a54b1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="b8a54b1" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6f9d74a"
                                        data-id="6f9d74a" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-62a4a96 elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image animated zoomIn"
                                                data-id="62a4a96" data-element_type="widget"
                                                data-settings="{&quot;be_addons_floating_fx&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_scale_toggle&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_scale_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0.5,&quot;to&quot;:1}},&quot;be_addons_floating_fx_scale_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0.5,&quot;to&quot;:1}},&quot;be_addons_floating_fx_scale_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3000,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:700,&quot;_position&quot;:&quot;absolute&quot;,&quot;be_addons_floating_fx_scale_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container"
                                                    style="will-change: transform; transform: scaleX(0.732964) scaleY(0.732964);">
                                                    <style>
                                                        /*! elementor - v3.14.0 - 26-06-2023 */
                                                        .elementor-widget-image {
                                                            text-align: center
                                                        }

                                                        .elementor-widget-image a {
                                                            display: inline-block
                                                        }

                                                        .elementor-widget-image a img[src$=".svg"] {
                                                            width: 48px
                                                        }

                                                        .elementor-widget-image img {
                                                            vertical-align: middle;
                                                            display: inline-block
                                                        }
                                                    </style> <img decoding="async" width="100" height="100"
                                                        src="./assets/images/about-us/guranty.png"
                                                        class="attachment-full size-full wp-image-2747" alt="">
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-77ed6cf elementor-widget elementor-widget-image animated fadeInUp"
                                                data-id="77ed6cf" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" fetchpriority="high" width="982" height="749"
                                                        src="./assets/images/about-us/about_main_img.png"
                                                        class="attachment-full size-full wp-image-2768" alt="">
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-cfb361b elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image animated fadeInRight"
                                                data-id="cfb361b" data-element_type="widget"
                                                data-settings="{&quot;be_addons_floating_fx&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_translate_toggle&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_translate_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:-36,&quot;to&quot;:35}},&quot;be_addons_floating_fx_translate_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3000,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:900,&quot;_position&quot;:&quot;absolute&quot;,&quot;be_addons_floating_fx_translate_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:5}},&quot;be_addons_floating_fx_translate_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container"
                                                    style="will-change: transform; transform: translateX(-2.91917px) translateY(2.32964px);">
                                                    <img decoding="async" width="123" height="64"
                                                        src="./assets/images/about-us/dot-shap.png"
                                                        class="attachment-large size-large wp-image-2748" alt="">
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-0d83f36 elementor-absolute elementor-widget elementor-widget-image animated fadeInRight"
                                                data-id="0d83f36" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:1100,&quot;_position&quot;:&quot;absolute&quot;}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" loading="lazy" width="557" height="282"
                                                        src="./assets/images/about-us/squre-shap.png"
                                                        class="attachment-full size-full wp-image-2749" alt="">
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-ee6d305 elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image animated zoomIn"
                                                data-id="ee6d305" data-element_type="widget"
                                                data-settings="{&quot;be_addons_floating_fx&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_rotate_toggle&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_rotate_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:15}},&quot;be_addons_floating_fx_rotate_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:-180,&quot;to&quot;:3}},&quot;be_addons_floating_fx_rotate_z&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:4,&quot;to&quot;:4}},&quot;be_addons_floating_fx_rotate_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3000,&quot;sizes&quot;:[]},&quot;be_addons_floating_fx_scale_toggle&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_scale_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0.5,&quot;to&quot;:1}},&quot;be_addons_floating_fx_scale_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0.5,&quot;to&quot;:1}},&quot;be_addons_floating_fx_scale_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3000,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:700,&quot;_position&quot;:&quot;absolute&quot;,&quot;be_addons_floating_fx_rotate_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;be_addons_floating_fx_scale_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container"
                                                    style="will-change: transform; transform: rotateX(6.98891deg) rotateY(-94.7353deg) rotateZ(4deg) scaleX(0.732964) scaleY(0.732964);">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b4bd8aa"
                        data-id="b4bd8aa" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-a0ebf1f elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image animated fadeInRight"
                                data-id="a0ebf1f" data-element_type="widget"
                                data-settings="{&quot;be_addons_floating_fx&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_scale_toggle&quot;:&quot;yes&quot;,&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;be_addons_floating_fx_scale_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:1,&quot;to&quot;:1.2}},&quot;be_addons_floating_fx_scale_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:1,&quot;to&quot;:1.2}},&quot;be_addons_floating_fx_scale_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;be_addons_floating_fx_scale_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                data-widget_type="image.default">
                                <div class="elementor-widget-container"
                                    style="will-change: transform; transform: scaleX(1.17662) scaleY(1.17662);">
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-9690470 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="9690470" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-8e474f7"
                                        data-id="8e474f7" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-2f38b66 elementor-widget elementor-widget-text-editor animated fadeInUp"
                                                data-id="2f38b66" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}"
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
                                                    <span style="color: #2b1b9a;">About</span><span
                                                        style="color: #2b1b9a;"> Us</span>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-0033054 elementor-widget elementor-widget-heading animated fadeInUp"
                                                data-id="0033054" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
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
                                                    <h3 class="elementor-heading-title elementor-size-default">
                                                        We’re your trusted partner in virtual photo editing &amp; design
                                                        studio</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-61f5709 elementor-widget elementor-widget-text-editor animated fadeInUp"
                                                data-id="61f5709" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:700}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    Photo editing services for e-commerce businesses and photo studios,
                                                    from product photographers to Amazon sellers to global brands.
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1343dae elementor-widget elementor-widget-text-editor animated fadeInUp"
                                                data-id="1343dae" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:900}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    Because a quick product shoot can easily turn into a day or more of
                                                    editing and formatting your images. Let us look after the edits, so
                                                    you can get back to the work that needs you. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-0b64658 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="0b64658" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fa24938"
                        data-id="fa24938" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-e536bc3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="e536bc3" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-edd4f2a"
                                        data-id="edd4f2a" data-element_type="column">
                                        <div class="elementor-widget-wrap">
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8f5e130"
                                        data-id="8f5e130" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-f01a512 elementor-invisible elementor-widget elementor-widget-BeAreaTitle"
                                                data-id="f01a512" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}"
                                                data-widget_type="BeAreaTitle.default">
                                                <div class="elementor-widget-container">
                                                    <div class="area__content">

                                                        <div class="area__subtitle">Fun Fact</div>
                                                        <div class="area__title">
                                                            <p>What are Clipping Path and the necessity of it and its
                                                                uses?</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1382570 elementor-widget elementor-widget-text-editor"
                                                data-id="1382570" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>We have and still serve many small and medium-sized companies and
                                                        corporations in Bangladesh and US by supporting large scale
                                                        image editing and graphic design needs. We provide and are
                                                        capable of providing large scale support to the following:</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-246202b"
                                        data-id="246202b" data-element_type="column">
                                        <div class="elementor-widget-wrap">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-e8fdaeb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="e8fdaeb" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-26050cb"
                                        data-id="26050cb" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-5e53a40 elementor-widget elementor-widget-heading"
                                                data-id="5e53a40" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Who We
                                                        Serve</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-19f5023 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="19f5023" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text">All kinds of photo
                                                            editing and retouching services</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text">E-commerce Site
                                                            Management Firms</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text">Product and Fashion
                                                            Photographers</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text">Graphic Design Agencies
                                                            and Firms</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text">Advertising Agencies
                                                            (both Web and Print)</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text">Multimedia Advertising
                                                            Agencies</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text">News Publication and
                                                            Magazine Firms</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text">Web Designers and
                                                            Developers</span>
                                                    </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2c613de"
                                        data-id="2c613de" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-b524e7c elementor-widget elementor-widget-heading"
                                                data-id="b524e7c" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Your
                                                        Benefits</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5df9358 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="5df9358" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">Best Quality</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">Low Cost Price</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">Free Trials For All
                                                                Service</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">3 Steps Quality
                                                                Control</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">Satisfaction
                                                                Guarantee</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">Quick
                                                                Turnaround</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">Urgent Delivery
                                                                Options</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">Huge Amount Of Image
                                                                Processing Capacity</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-572ce87"
                                        data-id="572ce87" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-c150a50 elementor-widget elementor-widget-heading"
                                                data-id="c150a50" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Offers
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f89a6cd elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="f89a6cd" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">24 X 7 X 365 Days
                                                                Support</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">FTP And Dropbox
                                                                Support</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">All Kind Of Online
                                                                Support</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">No Upfront Financial
                                                                Commitment</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-1e65110 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="1e65110" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-89a73c2"
                                        data-id="89a73c2" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-12a6bb0 elementor-widget elementor-widget-heading"
                                                data-id="12a6bb0" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Our
                                                        Capacity</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-ca8cc96 elementor-widget elementor-widget-text-editor"
                                                data-id="ca8cc96" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    Graphics Amazon (CA), commits global Class service in design
                                                    development. Our principal activity is Photoshop PROFESSIONAL PHOTO
                                                    RETOUCHING AND GHOST MANNEQUIN SERVICE, Clipping Path, Image
                                                    Masking, Photo Retouching, Photo Restoration, Color Correction, Logo
                                                    Design, Raster 2 Vector works image editing and other innovative
                                                    design solutions. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b1a1783"
                                        data-id="b1a1783" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-f8a35fe elementor-widget elementor-widget-heading"
                                                data-id="f8a35fe" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Image
                                                        Processing Capacity</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-d3e9c73 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="d3e9c73" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">Clipping – 1600
                                                                images/day</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">Masking – 1000
                                                                images/day</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">Retouch – 1000
                                                                images/day</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">Neck Joint/GHOST
                                                                MANNEQUIN – 1500 images/day</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-aed6450"
                                        data-id="aed6450" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-300b1a9 elementor-widget elementor-widget-heading"
                                                data-id="300b1a9" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Human
                                                        Recources</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1aaa210 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="1aaa210" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">60 Junior Graphic
                                                                Designers</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">50 Senior Graphic
                                                                Designers (Supervisors)</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">15 Quality Assurance
                                                                Professionals</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">3 Production
                                                                Management</span>
                                                        </li>
                                                    </ul>
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
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-95dd54e elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="95dd54e" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e271010"
                        data-id="e271010" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-5835f70 elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-image"
                                data-id="5835f70" data-element_type="widget"
                                data-settings="{&quot;be_addons_floating_fx&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_scale_toggle&quot;:&quot;yes&quot;,&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_position&quot;:&quot;absolute&quot;,&quot;be_addons_floating_fx_scale_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:1,&quot;to&quot;:1.2}},&quot;be_addons_floating_fx_scale_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:1,&quot;to&quot;:1.2}},&quot;be_addons_floating_fx_scale_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;be_addons_floating_fx_scale_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                data-widget_type="image.default">
                                <div class="elementor-widget-container"
                                    style="will-change: transform; transform: scaleX(1.17662) scaleY(1.17662);">
                                    <img decoding="async" loading="lazy" width="184" height="167"
                                        src="{{ asset('assets/frontend') }}/assets/images/about-us/about-shape-2.png"
                                        class="attachment-full size-full wp-image-2786" alt="">
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-b601141 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="b601141" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-aa01108"
                                        data-id="aa01108" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-8b72e5c elementor-invisible elementor-widget elementor-widget-heading"
                                                data-id="8b72e5c" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Our
                                                        Policies and Philosophies</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f16b4a1 elementor-invisible elementor-widget elementor-widget-text-editor"
                                                data-id="f16b4a1" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:900}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <h4>Service quality</h4>
                                                    <p>Outsourcing your image editing, clipping paths and Photoshop
                                                        retouching means you will be looking for design specialists; you
                                                        will need assurance that your images are in safe, reliable
                                                        hands, and quality is of the utmost importance…</p>
                                                    <p>Our quality policy also ensures 100% satisfaction to clients.
                                                        Look no further : the CPM team of professionals are waiting to
                                                        meet you, 24 hours a day.</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-ffeaaee elementor-invisible elementor-widget elementor-widget-text-editor"
                                                data-id="ffeaaee" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:900}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <h4>Graphics Amazon’s Vision:</h4>
                                                    <p>To be the world’s favorite destination for “Photo Editing”
                                                        service and help clients achieve their graphic design
                                                        requirements to the highest standard of quality, Excellence to
                                                        meet client expectations on priority, faster delivery with !!LOW
                                                        PRICE!! and produce results that directly, and positively impact
                                                        on our clients &amp; also we encourage a positive work
                                                        environment to keep our own people motivated towards common
                                                        business goals as they are working hard to keep Global Webtech.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-05a2522"
                        data-id="05a2522" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-7c07c5d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="7c07c5d" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-eb7f112"
                                        data-id="eb7f112" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-d8a8529 elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-image"
                                                data-id="d8a8529" data-element_type="widget"
                                                data-settings="{&quot;be_addons_floating_fx&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_scale_toggle&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_scale_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0.5,&quot;to&quot;:1}},&quot;be_addons_floating_fx_scale_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0.5,&quot;to&quot;:1}},&quot;be_addons_floating_fx_scale_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3000,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:700,&quot;_position&quot;:&quot;absolute&quot;,&quot;be_addons_floating_fx_scale_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container"
                                                    style="will-change: transform; transform: scaleX(0.732964) scaleY(0.732964);">
                                                    <img decoding="async" width="100" height="100"
                                                        src="./assets/images/about-us/guranty.png"
                                                        class="attachment-full size-full wp-image-2747" alt="">
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2540be2 elementor-invisible elementor-widget elementor-widget-image"
                                                data-id="2540be2" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" fetchpriority="high" width="982"
                                                        height="749" src="./assets/images/about-us/about_main_img.png"
                                                        class="attachment-full size-full wp-image-2768" alt="">
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1d7e7fc elementor-widget__width-auto elementor-absolute elementor-invisible elementor-widget elementor-widget-image"
                                                data-id="1d7e7fc" data-element_type="widget"
                                                data-settings="{&quot;be_addons_floating_fx&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_translate_toggle&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_translate_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:-36,&quot;to&quot;:35}},&quot;be_addons_floating_fx_translate_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3000,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:900,&quot;_position&quot;:&quot;absolute&quot;,&quot;be_addons_floating_fx_translate_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:5}},&quot;be_addons_floating_fx_translate_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container"
                                                    style="will-change: transform; transform: translateX(-2.91917px) translateY(2.32964px);">
                                                    <img decoding="async" width="123" height="64"
                                                        src="./assets/images/about-us/dot-shap.png"
                                                        class="attachment-large size-large wp-image-2748" alt="">
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5a5826c elementor-absolute elementor-invisible elementor-widget elementor-widget-image"
                                                data-id="5a5826c" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:1100,&quot;_position&quot;:&quot;absolute&quot;}"
                                                data-widget_type="image.default">
                                            </div>
                                            <div class="elementor-element elementor-element-3d0188f elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-image"
                                                data-id="3d0188f" data-element_type="widget"
                                                data-settings="{&quot;be_addons_floating_fx&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_rotate_toggle&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_rotate_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:15}},&quot;be_addons_floating_fx_rotate_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:-180,&quot;to&quot;:3}},&quot;be_addons_floating_fx_rotate_z&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:4,&quot;to&quot;:4}},&quot;be_addons_floating_fx_rotate_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3000,&quot;sizes&quot;:[]},&quot;be_addons_floating_fx_scale_toggle&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_scale_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0.5,&quot;to&quot;:1}},&quot;be_addons_floating_fx_scale_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0.5,&quot;to&quot;:1}},&quot;be_addons_floating_fx_scale_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3000,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:700,&quot;_position&quot;:&quot;absolute&quot;,&quot;be_addons_floating_fx_rotate_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;be_addons_floating_fx_scale_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container"
                                                    style="will-change: transform; transform: rotateX(6.98891deg) rotateY(-94.7353deg) rotateZ(4deg) scaleX(0.732964) scaleY(0.732964);">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="elementor-element elementor-element-fa8bf96 elementor-invisible elementor-widget elementor-widget-text-editor"
                                data-id="fa8bf96" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:900}"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <h4>Compliance</h4>
                                    <p>We comply with most of the debating issues related to Business Process
                                        Outsourcing. Starting from employee wages to environmental concerns. We are also
                                        strongly against child labor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-3a1d908d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="3a1d908d" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1f29b95b"
                        data-id="1f29b95b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-3ad1b2b5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="3ad1b2b5" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-61c946af"
                                        data-id="61c946af" data-element_type="column">
                                        <div class="elementor-widget-wrap">
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-73a1e41e"
                                        data-id="73a1e41e" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-125d2845 elementor-invisible elementor-widget elementor-widget-BeAreaTitle"
                                                data-id="125d2845" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}"
                                                data-widget_type="BeAreaTitle.default">
                                                <div class="elementor-widget-container">
                                                    <div class="area__content">

                                                        <div class="area__subtitle">Graphics Amazon</div>
                                                        <div class="area__title">GET HIGH-QUALITY <span
                                                                style="color: #438ff9"> IMAGE EDITING </span> FOR
                                                            online and E-COMMERCE BUSINESS</div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-acde3b5"
                                        data-id="acde3b5" data-element_type="column">
                                        <div class="elementor-widget-wrap">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-7214dc6e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="7214dc6e" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-63ada2de"
                                        data-id="63ada2de" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-3f92c644 elementor-invisible elementor-widget elementor-widget-text-editor"
                                                data-id="3f92c644" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>GET YOUR QUOTE IN 30 MINUTES</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-60b776d0 elementor-invisible elementor-widget elementor-widget-Be_Addons_Dual_Button"
                                                data-id="60b776d0" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:600}"
                                                data-widget_type="Be_Addons_Dual_Button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="be__addons__dual__button cliper_btn_layout_1"><a
                                                            class="be__addons__btn elementor-repeater-item-c48947a"
                                                            href="/free-trial">
                                                            <div class="button__title">Free Trial</div>
                                                            <div class="cliper_btn_icon be__addons__btn_icon_right"><i
                                                                    class="fas fa-paper-plane"></i></div>
                                                        </a><a class="be__addons__btn elementor-repeater-item-cbade1d"
                                                            href="/contact-us/">
                                                            <div class="button__title">Contact Us</div>
                                                            <div class="cliper_btn_icon be__addons__btn_icon_right"><i
                                                                    class="far fa-paper-plane"></i></div>
                                                        </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="elementor-element elementor-element-3396a7b9 elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-PositionElement"
                                data-id="3396a7b9" data-element_type="widget"
                                data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                data-widget_type="PositionElement.default">
                                <div class="elementor-widget-container">
                                    <div class="posiion__element__wrap FramesFive animated infinite slow infinite">
                                        <div class="posiion__element__item"><img loading="lazy" width="99"
                                                height="159"
                                                src="https://clippingamazon.com/wp-content/uploads/2021/11/Group-541.png"
                                                class="attachment-full size-full wp-image-2831" alt=""
                                                decoding="async">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-755c6b39 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="755c6b39" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d064f80"
                        data-id="d064f80" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-19da7f38 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="19da7f38" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-32a780b3"
                                        data-id="32a780b3" data-element_type="column">
                                        <div class="elementor-widget-wrap">
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f4f868d"
                                        data-id="f4f868d" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-4aa542ff elementor-invisible elementor-widget elementor-widget-BeAreaTitle"
                                                data-id="4aa542ff" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}"
                                                data-widget_type="BeAreaTitle.default">
                                                <div class="elementor-widget-container">
                                                    <div class="area__content">

                                                        <div class="area__subtitle">Clients Feedback</div>
                                                        <div class="area__title">
                                                            <p>Explore Clients Review</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-530f700d"
                                        data-id="530f700d" data-element_type="column">
                                        <div class="elementor-widget-wrap">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-1b00c52c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="1b00c52c" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4229a568"
                                        data-id="4229a568" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-543f97e elementor-invisible elementor-widget elementor-widget-global elementor-global-7777 elementor-widget-BeTestmonial"
                                                data-id="543f97e" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                                data-widget_type="BeTestmonial.default">
                                                <div class="elementor-widget-container">


                                                    <div class="sldier-content-area tesmonial_style_7">
                                                        <div class="be-testmonial-carousel be-carousel-active owl-carousel owl-theme owl-responsive-1900 owl-loaded"
                                                            data-settings="{&quot;item_on_large&quot;:3,&quot;item_on_medium&quot;:3,&quot;item_on_tablet&quot;:2,&quot;item_on_mobile&quot;:1,&quot;stage_padding&quot;:0,&quot;item_margin&quot;:30,&quot;autoplay&quot;:true,&quot;autoplaytimeout&quot;:3000,&quot;slide_speed&quot;:1000,&quot;slide_animation&quot;:&quot;no&quot;,&quot;slide_animate_in&quot;:null,&quot;slide_animate_out&quot;:null,&quot;nav&quot;:false,&quot;nav_position&quot;:null,&quot;next_icon&quot;:null,&quot;prev_icon&quot;:null,&quot;dots&quot;:true,&quot;loop&quot;:true,&quot;hover_pause&quot;:true,&quot;center&quot;:false,&quot;rtl&quot;:false}">









                                                            <div class="owl-stage-outer">
                                                                <div class="owl-stage"
                                                                    style="transform: translate3d(-2260px, 0px, 0px); transition: all 1s ease 0s; width: 5650.01px;">
                                                                    <div class="owl-item cloned"
                                                                        style="width: 346.667px; margin-right: 30px;">
                                                                    </div>
                                                                    <div class="owl-item"
                                                                        style="width: 346.667px; margin-right: 30px;">
                                                                        <div
                                                                            class="cliper_single_testmonial elementor-repeater-item-058f444">
                                                                            <div class="author__content">
                                                                                <div class="testmonial__quote"><img
                                                                                        decoding="async"
                                                                                        src="./assets/images/about-us/rating.png"
                                                                                        alt=""></div>
                                                                                <div class="testmonial__description">
                                                                                    <p>"Graphics Amazon is Always kind
                                                                                        and professional, it's
                                                                                        absolutely worth evaluating
                                                                                        them. After years spent
                                                                                        retouching photos, removing
                                                                                        backgrounds, Ghost Meniquine
                                                                                        service, and adjusting colors I
                                                                                        met this company.<br>That
                                                                                        changed my life and now I can
                                                                                        focus on other parts of my
                                                                                        photography business!"</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="author__thumb__designation__warp">
                                                                                <div class="author__thumb__designation">
                                                                                    <div class="author__thumb"><img
                                                                                            decoding="async"
                                                                                            src="https://clippingamazon.com/wp-content/uploads/2023/06/7.Deborah-Anderson-150x150.jpg"
                                                                                            alt="About Us"></div>
                                                                                    <h4 class="author__name">Deborah
                                                                                        Anderson</h4>
                                                                                    <p class="author__designation">Owner
                                                                                        Photo studio </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item"
                                                                        style="width: 346.667px; margin-right: 30px;">
                                                                        <div
                                                                            class="cliper_single_testmonial elementor-repeater-item-e5abbb4">
                                                                            <div class="author__content">
                                                                                <div class="testmonial__quote"><img
                                                                                        decoding="async"
                                                                                        src="./assets/images/about-us/rating.png"
                                                                                        alt=""></div>
                                                                                <div class="testmonial__description">
                                                                                    <p>"We send many jewelry photos
                                                                                        every month to get the
                                                                                        background removed and
                                                                                        retouching services. Fast
                                                                                        turnaround, great price. We even
                                                                                        pitched more photo editing
                                                                                        services for our photos and they
                                                                                        were open and happy to
                                                                                        accommodate.<br>"</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="author__thumb__designation__warp">
                                                                                <div class="author__thumb__designation">
                                                                                    <div class="author__thumb"><img
                                                                                            decoding="async"
                                                                                            src="https://clippingamazon.com/wp-content/uploads/2023/06/8.Andras-Kovacs-150x150.jpg"
                                                                                            alt="About Us"></div>
                                                                                    <h4 class="author__name">Andras
                                                                                        Kovacs</h4>
                                                                                    <p class="author__designation">
                                                                                        E-commerce manager</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item"
                                                                        style="width: 346.667px; margin-right: 30px;">
                                                                        <div
                                                                            class="cliper_single_testmonial elementor-repeater-item-fe41ac9">
                                                                            <div class="author__content">
                                                                                <div class="testmonial__quote"><img
                                                                                        decoding="async"
                                                                                        src="./assets/images/about-us/rating.png"
                                                                                        alt=""></div>
                                                                                <div class="testmonial__description">
                                                                                    <p>"Excellent company to work with.
                                                                                        We have been using Graphics
                                                                                        Amazon for five years now and
                                                                                        always receive images in a
                                                                                        timely manner and the quality is
                                                                                        exceptional. We always recommend
                                                                                        Graphics Amazon to anyone
                                                                                        looking for a professional photo
                                                                                        editing company."</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="author__thumb__designation__warp">
                                                                                <div class="author__thumb__designation">
                                                                                    <div class="author__thumb"><img
                                                                                            decoding="async"
                                                                                            src="https://clippingamazon.com/wp-content/uploads/2023/06/9.Jeff-Collins-150x150.jpg"
                                                                                            alt="About Us"></div>
                                                                                    <h4 class="author__name">Jeff
                                                                                        Collins</h4>
                                                                                    <p class="author__designation">
                                                                                        Photography Agency</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item cloned"
                                                                        style="width: 346.667px; margin-right: 30px;">
                                                                        <div
                                                                            class="cliper_single_testmonial elementor-repeater-item-a73f5d7">
                                                                            <div class="author__content">
                                                                                <div class="testmonial__quote"><img
                                                                                        decoding="async"
                                                                                        src="./assets/images/about-us/rating.png"
                                                                                        alt=""></div>
                                                                                <div class="testmonial__description">
                                                                                    <p>"Graphics Amazon's Photo Ghost
                                                                                        Mannequin Service has been
                                                                                        amazing. I send them basic
                                                                                        unprocessed images of my
                                                                                        client's property, and in a
                                                                                        quick time span, Graphics Amazon
                                                                                        return exquisitely retouched
                                                                                        images that really improve the
                                                                                        look of my photo studio
                                                                                        business. The photographs are
                                                                                        detailed and show good artistry
                                                                                        of their Photo Retouching
                                                                                        editors."</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="author__thumb__designation__warp">
                                                                                <div class="author__thumb__designation">
                                                                                    <div class="author__thumb"><img
                                                                                            decoding="async"
                                                                                            src="https://clippingamazon.com/wp-content/uploads/2023/06/1.Richard-Sanders-150x150.jpg"
                                                                                            alt="About Us"></div>
                                                                                    <h4 class="author__name">Richard
                                                                                        Sanders</h4>
                                                                                    <p class="author__designation">Photo
                                                                                        studio owner</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item cloned"
                                                                        style="width: 346.667px; margin-right: 30px;">
                                                                        <div
                                                                            class="cliper_single_testmonial elementor-repeater-item-827cfbe">
                                                                            <div class="author__content">
                                                                                <div class="testmonial__quote"><img
                                                                                        decoding="async"
                                                                                        src="./assets/images/about-us/rating.png"
                                                                                        alt=""></div>
                                                                                <div class="testmonial__description">
                                                                                    <p>"Graphics Amazon has been
                                                                                        providing me with Ghost
                                                                                        Meniquine service for a long
                                                                                        time. The quality and turnaround
                                                                                        time is second to none. I
                                                                                        recommend CA for its superior
                                                                                        Ghost Meniquine and Retouching
                                                                                        Services at a very very
                                                                                        reasonable cost."</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="author__thumb__designation__warp">
                                                                                <div class="author__thumb__designation">
                                                                                    <div class="author__thumb"><img
                                                                                            decoding="async"
                                                                                            src="https://clippingamazon.com/wp-content/uploads/2023/06/2.Jerry-Fletcher-150x150.jpg"
                                                                                            alt="About Us"></div>
                                                                                    <h4 class="author__name">Jerry
                                                                                        Fletcher</h4>
                                                                                    <p class="author__designation">
                                                                                        Ecommerce Manager</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item cloned"
                                                                        style="width: 346.667px; margin-right: 30px;">
                                                                        <div
                                                                            class="cliper_single_testmonial elementor-repeater-item-2897bd7">
                                                                            <div class="author__content">
                                                                                <div class="testmonial__quote"><img
                                                                                        decoding="async"
                                                                                        src="./assets/images/about-us/rating.png"
                                                                                        alt=""></div>
                                                                                <div class="testmonial__description">
                                                                                    <p>"I've always received utmost
                                                                                        efficiency &amp; professionalism
                                                                                        for all my Photo editing needs.
                                                                                        They never hesitated to follow
                                                                                        up promptly concerning any
                                                                                        matter. Their attention to
                                                                                        detail and deadlines is
                                                                                        phenomenal. I look forward to
                                                                                        more positive transactions with
                                                                                        Graphics Amazon"</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="author__thumb__designation__warp">
                                                                                <div class="author__thumb__designation">
                                                                                    <div class="author__thumb"><img
                                                                                            decoding="async"
                                                                                            src="https://clippingamazon.com/wp-content/uploads/2023/06/3.Christina-Maldonado-150x150.jpg"
                                                                                            alt="About Us"></div>
                                                                                    <h4 class="author__name">Christina
                                                                                        Maldonado</h4>
                                                                                    <p class="author__designation">
                                                                                        Manager Real Estate Photography
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-controls">
                                                                <div class="owl-nav">
                                                                    <div class="owl-prev" style="display: none;"><i
                                                                            class="fa fa-angle-left"></i></div>
                                                                    <div class="owl-next" style="display: none;"><i
                                                                            class="fa fa-angle-right"></i></div>
                                                                </div>
                                                                <div class="owl-dots" style="">
                                                                    <div class="owl-dot"><span></span></div>
                                                                    <div class="owl-dot active"><span></span></div>
                                                                    <div class="owl-dot"><span></span></div>
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
                            <div class="elementor-element elementor-element-64bfff1 elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-PositionElement"
                                data-id="64bfff1" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:1200,&quot;_position&quot;:&quot;absolute&quot;}"
                                data-widget_type="PositionElement.default">
                                <div class="elementor-widget-container">
                                    <div class="posiion__element__wrap Fade_In_Out animated infinite slow infinite">
                                        <div class="posiion__element__item"><img loading="lazy" width="81"
                                                height="81"
                                                src="https://clippingamazon.com/wp-content/uploads/2021/11/Path-948.png"
                                                class="attachment-full size-full wp-image-2910" alt=""
                                                decoding="async">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-420afb35 elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-PositionElement"
                                data-id="420afb35" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:1200,&quot;_position&quot;:&quot;absolute&quot;}"
                                data-widget_type="PositionElement.default">
                                <div class="elementor-widget-container">
                                    <div class="posiion__element__wrap Fade_In_Out animated infinite slow infinite">
                                        <div class="posiion__element__item"><img loading="lazy" width="81"
                                                height="81"
                                                src="https://clippingamazon.com/wp-content/uploads/2021/11/Path-948.png"
                                                class="attachment-full size-full wp-image-2910" alt=""
                                                decoding="async">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-26647eb9 elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-PositionElement"
                                data-id="26647eb9" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:1200,&quot;_position&quot;:&quot;absolute&quot;}"
                                data-widget_type="PositionElement.default">
                                <div class="elementor-widget-container">
                                    <div class="posiion__element__wrap Fade_In_Out animated infinite slow infinite">
                                        <div class="posiion__element__item"><img loading="lazy" width="48"
                                                height="48"
                                                src="https://clippingamazon.com/wp-content/uploads/2021/11/Path-952.png"
                                                class="attachment-full size-full wp-image-2911" alt=""
                                                decoding="async">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-6a148daf elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-PositionElement"
                                data-id="6a148daf" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:1200,&quot;_position&quot;:&quot;absolute&quot;}"
                                data-widget_type="PositionElement.default">
                                <div class="elementor-widget-container">
                                    <div class="posiion__element__wrap Fade_In_Out animated infinite slow infinite">
                                        <div class="posiion__element__item"><img loading="lazy" width="48"
                                                height="48"
                                                src="https://clippingamazon.com/wp-content/uploads/2021/11/Path-952.png"
                                                class="attachment-full size-full wp-image-2911" alt=""
                                                decoding="async">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-4eb3244 elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-PositionElement"
                                data-id="4eb3244" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:1200,&quot;_position&quot;:&quot;absolute&quot;}"
                                data-widget_type="PositionElement.default">
                                <div class="elementor-widget-container">
                                    <div class="posiion__element__wrap Fade_In_Out animated infinite slow infinite">
                                        <div class="posiion__element__item"><img loading="lazy" width="48"
                                                height="48"
                                                src="https://clippingamazon.com/wp-content/uploads/2021/11/Path-952.png"
                                                class="attachment-full size-full wp-image-2911" alt=""
                                                decoding="async">
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

@endsection
