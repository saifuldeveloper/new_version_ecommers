@extends('frontend.layout.master')
@section('title', 'Services')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" id="be-widgets-css" href=".{{ asset('assets/frontend') }}/assets/css/widgets.css_ver=6.3.1.css" media="all">
<link rel="stylesheet" id="owl-carousel-css" href="{{ asset('assets/frontend') }}/assets/css/owl-carosel.css" media="all">
<link rel="stylesheet" id="stellarnav-css" href="{{ asset('assets/frontend') }}/assets/css/plugins_stellarnav.min.css_ver=2.0.0.css" media="all">
<link rel="stylesheet" id="nice-select-css" href="{{ asset('assets/frontend') }}/assets/css/select.css" media="all">
<link rel="stylesheet" id="bootstrap-css" href="{{ asset('assets/frontend') }}/assets/css/bootstrap.css" media="all">
<link rel="stylesheet" id="cliper-typography-css" href="{{ asset('assets/frontend') }}/assets/css/typography.css" media="all">
<link rel="stylesheet" id="cliper-blog-css" href="{{ asset('assets/frontend') }}/assets/css/pages-service-one.css" media="all">
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
    
    <link rel="stylesheet" id="cliper-blog-css" href="{{ asset('assets/frontend') }}/assets/css/pages-service-one.css" media="all">
    <link rel="stylesheet" id="elementor-frontend-css" href="{{ asset('assets/frontend') }}/assets/css/frontend-lite.min.css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/assets/css/pricing.css">
    
    <div class="banner-area white">
        <div class="banner-area-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="page-title">
                        <h1>
                            Our Pricing Plans
                        </h1>
                        <p>Choose your best suitable plan </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="content-area clearfix">
        <div data-elementor-type="wp-page" data-elementor-id="3639" class="elementor elementor-3639"
            data-elementor-post-type="page">
            <!--pricing plans start-->
            <section
                class="padding-100 elementor-section elementor-inner-section elementor-element elementor-element-c0624cc elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="c0624cc" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-41861ad"
                        data-id="41861ad" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-b77a1e6 elementor-widget elementor-widget-Be_Addons_Pricing_Table animated fadeInUp"
                                data-id="b77a1e6" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                data-widget_type="Be_Addons_Pricing_Table.default">

                            </div>
                            <div class="elementor-element elementor-element-212fe7a elementor-widget elementor-widget-Be_Addons_Pricing_Table animated fadeInUp"
                                data-id="212fe7a" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:700}"
                                data-widget_type="Be_Addons_Pricing_Table.default">
                                <div class="elementor-widget-container">
                                    <div class="single__price single__price__style__14">
                                        <div class="single__price__icon__with__rate">
                                            <div class="price__icon">
                                                <img width="148" height="148"
                                                    src="https://clippingamazon.com/wp-content/uploads/2023/05/clipping-amazon-1-25.jpg"
                                                    class="attachment-full size-full wp-image-7376" alt="Color Correction"
                                                    decoding="async">
                                            </div>
                                            <div class="price__rate">
                                                <h3>
                                                    <span class="new__price">
                                                        <span class="price__currency">$</span>1.50</span> <span
                                                        class="period__price">

                                                    </span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="single__price__header">
                                            <div class="price__title">
                                                <h3>Multiple clipping path service</h3>
                                            </div>
                                            <div class="price__desc">
                                                <ul>
                                                    <li>Price starts from 1.50$ per image</li>
                                                    <li>Basic Multiple Clipping Path $1.50</li>
                                                    <li>Multiple Clipping Path With Shadows $1.99</li>
                                                    <li>Medium Multiple Clipping Path $3.99</li>
                                                    <li>Complex Multiple Clipping Path $6.99</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single__price__footer">
                                            <a class="price__btn " href="/free-trial">Free Trial
                                                <i class="price__btn_icon_right fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-212fe7a elementor-widget elementor-widget-Be_Addons_Pricing_Table animated fadeInUp"
                                data-id="212fe7a" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:700}"
                                data-widget_type="Be_Addons_Pricing_Table.default">
                                <div class="elementor-widget-container">
                                    <div class="single__price single__price__style__14">
                                        <div class="single__price__icon__with__rate">
                                            <div class="price__icon">
                                                <img width="148" height="148"
                                                    src="https://clippingamazon.com/wp-content/uploads/2023/05/clipping-amazon-1-25.jpg"
                                                    class="attachment-full size-full wp-image-7376" alt="Color Correction"
                                                    decoding="async">
                                            </div>
                                            <div class="price__rate">
                                                <h3>
                                                    <span class="new__price">
                                                        <span class="price__currency">$</span>1.50</span> <span
                                                        class="period__price">

                                                    </span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="single__price__header">
                                            <div class="price__title">
                                                <h3>Multiple clipping path service</h3>
                                            </div>
                                            <div class="price__desc">
                                                <ul>
                                                    <li>Price starts from 1.50$ per image</li>
                                                    <li>Basic Multiple Clipping Path $1.50</li>
                                                    <li>Multiple Clipping Path With Shadows $1.99</li>
                                                    <li>Medium Multiple Clipping Path $3.99</li>
                                                    <li>Complex Multiple Clipping Path $6.99</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single__price__footer">
                                            <a class="price__btn " href="/free-trial">Free Trial
                                                <i class="price__btn_icon_right fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-212fe7a elementor-widget elementor-widget-Be_Addons_Pricing_Table animated fadeInUp"
                                data-id="212fe7a" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:700}"
                                data-widget_type="Be_Addons_Pricing_Table.default">
                                <div class="elementor-widget-container">
                                    <div class="single__price single__price__style__14">
                                        <div class="single__price__icon__with__rate">
                                            <div class="price__icon">
                                                <img width="148" height="148"
                                                    src="https://clippingamazon.com/wp-content/uploads/2023/05/clipping-amazon-1-25.jpg"
                                                    class="attachment-full size-full wp-image-7376" alt="Color Correction"
                                                    decoding="async">
                                            </div>
                                            <div class="price__rate">
                                                <h3>
                                                    <span class="new__price">
                                                        <span class="price__currency">$</span>1.50</span> <span
                                                        class="period__price">

                                                    </span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="single__price__header">
                                            <div class="price__title">
                                                <h3>Multiple clipping path service</h3>
                                            </div>
                                            <div class="price__desc">
                                                <ul>
                                                    <li>Price starts from 1.50$ per image</li>
                                                    <li>Basic Multiple Clipping Path $1.50</li>
                                                    <li>Multiple Clipping Path With Shadows $1.99</li>
                                                    <li>Medium Multiple Clipping Path $3.99</li>
                                                    <li>Complex Multiple Clipping Path $6.99</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single__price__footer">
                                            <a class="price__btn " href="/free-trial">Free Trial
                                                <i class="price__btn_icon_right fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-212fe7a elementor-widget elementor-widget-Be_Addons_Pricing_Table animated fadeInUp"
                                data-id="212fe7a" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:700}"
                                data-widget_type="Be_Addons_Pricing_Table.default">
                                <div class="elementor-widget-container">
                                    <div class="single__price single__price__style__14">
                                        <div class="single__price__icon__with__rate">
                                            <div class="price__icon">
                                                <img width="148" height="148"
                                                    src="https://clippingamazon.com/wp-content/uploads/2023/05/clipping-amazon-1-25.jpg"
                                                    class="attachment-full size-full wp-image-7376" alt="Color Correction"
                                                    decoding="async">
                                            </div>
                                            <div class="price__rate">
                                                <h3>
                                                    <span class="new__price">
                                                        <span class="price__currency">$</span>1.50</span> <span
                                                        class="period__price">

                                                    </span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="single__price__header">
                                            <div class="price__title">
                                                <h3>Multiple clipping path service</h3>
                                            </div>
                                            <div class="price__desc">
                                                <ul>
                                                    <li>Price starts from 1.50$ per image</li>
                                                    <li>Basic Multiple Clipping Path $1.50</li>
                                                    <li>Multiple Clipping Path With Shadows $1.99</li>
                                                    <li>Medium Multiple Clipping Path $3.99</li>
                                                    <li>Complex Multiple Clipping Path $6.99</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single__price__footer">
                                            <a class="price__btn " href="/free-trial">Free Trial
                                                <i class="price__btn_icon_right fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-212fe7a elementor-widget elementor-widget-Be_Addons_Pricing_Table animated fadeInUp"
                                data-id="212fe7a" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:700}"
                                data-widget_type="Be_Addons_Pricing_Table.default">
                                <div class="elementor-widget-container">
                                    <div class="single__price single__price__style__14">
                                        <div class="single__price__icon__with__rate">
                                            <div class="price__icon">
                                                <img width="148" height="148"
                                                    src="https://clippingamazon.com/wp-content/uploads/2023/05/clipping-amazon-1-25.jpg"
                                                    class="attachment-full size-full wp-image-7376" alt="Color Correction"
                                                    decoding="async">
                                            </div>
                                            <div class="price__rate">
                                                <h3>
                                                    <span class="new__price">
                                                        <span class="price__currency">$</span>1.50</span> <span
                                                        class="period__price">

                                                    </span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="single__price__header">
                                            <div class="price__title">
                                                <h3>Multiple clipping path service</h3>
                                            </div>
                                            <div class="price__desc">
                                                <ul>
                                                    <li>Price starts from 1.50$ per image</li>
                                                    <li>Basic Multiple Clipping Path $1.50</li>
                                                    <li>Multiple Clipping Path With Shadows $1.99</li>
                                                    <li>Medium Multiple Clipping Path $3.99</li>
                                                    <li>Complex Multiple Clipping Path $6.99</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single__price__footer">
                                            <a class="price__btn " href="/free-trial">Free Trial
                                                <i class="price__btn_icon_right fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-212fe7a elementor-widget elementor-widget-Be_Addons_Pricing_Table animated fadeInUp"
                                data-id="212fe7a" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:700}"
                                data-widget_type="Be_Addons_Pricing_Table.default">
                                <div class="elementor-widget-container">
                                    <div class="single__price single__price__style__14">
                                        <div class="single__price__icon__with__rate">
                                            <div class="price__icon">
                                                <img width="148" height="148"
                                                    src="https://clippingamazon.com/wp-content/uploads/2023/05/clipping-amazon-1-25.jpg"
                                                    class="attachment-full size-full wp-image-7376" alt="Color Correction"
                                                    decoding="async">
                                            </div>
                                            <div class="price__rate">
                                                <h3>
                                                    <span class="new__price">
                                                        <span class="price__currency">$</span>1.50</span> <span
                                                        class="period__price">

                                                    </span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="single__price__header">
                                            <div class="price__title">
                                                <h3>Multiple clipping path service</h3>
                                            </div>
                                            <div class="price__desc">
                                                <ul>
                                                    <li>Price starts from 1.50$ per image</li>
                                                    <li>Basic Multiple Clipping Path $1.50</li>
                                                    <li>Multiple Clipping Path With Shadows $1.99</li>
                                                    <li>Medium Multiple Clipping Path $3.99</li>
                                                    <li>Complex Multiple Clipping Path $6.99</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single__price__footer">
                                            <a class="price__btn " href="/free-trial">Free Trial
                                                <i class="price__btn_icon_right fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-212fe7a elementor-widget elementor-widget-Be_Addons_Pricing_Table animated fadeInUp"
                                data-id="212fe7a" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:700}"
                                data-widget_type="Be_Addons_Pricing_Table.default">
                                <div class="elementor-widget-container">
                                    <div class="single__price single__price__style__14">
                                        <div class="single__price__icon__with__rate">
                                            <div class="price__icon">
                                                <img width="148" height="148"
                                                    src="https://clippingamazon.com/wp-content/uploads/2023/05/clipping-amazon-1-25.jpg"
                                                    class="attachment-full size-full wp-image-7376" alt="Color Correction"
                                                    decoding="async">
                                            </div>
                                            <div class="price__rate">
                                                <h3>
                                                    <span class="new__price">
                                                        <span class="price__currency">$</span>1.50</span> <span
                                                        class="period__price">

                                                    </span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="single__price__header">
                                            <div class="price__title">
                                                <h3>Multiple clipping path service</h3>
                                            </div>
                                            <div class="price__desc">
                                                <ul>
                                                    <li>Price starts from 1.50$ per image</li>
                                                    <li>Basic Multiple Clipping Path $1.50</li>
                                                    <li>Multiple Clipping Path With Shadows $1.99</li>
                                                    <li>Medium Multiple Clipping Path $3.99</li>
                                                    <li>Complex Multiple Clipping Path $6.99</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single__price__footer">
                                            <a class="price__btn " href="/free-trial">Free Trial
                                                <i class="price__btn_icon_right fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


            </section>
            <!--pricing plans end-->

            <!--Special  Discount start-->
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-748e004 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="748e004" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6d6a3a1"
                        data-id="6d6a3a1" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-e17cdbf elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="e17cdbf" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d57872b"
                                        data-id="d57872b" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-2e96983 elementor-widget elementor-widget-BeAreaTitle animated fadeInUp"
                                                data-id="2e96983" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}"
                                                data-widget_type="BeAreaTitle.default">
                                                <div class="elementor-widget-container">
                                                    <div class="area__content">

                                                        <div class="area__title">
                                                            <p>Special Discount for<br>Bulk Images !</p>
                                                        </div>
                                                        <div class="area__description">
                                                            <p>We provide 100% handmade photo editing services to use
                                                                photoshop. So you will get great quality services. always
                                                                try to deliver your order within 24 hours or less.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-b1dd649 elementor-widget elementor-widget-Be_Addons_Dual_Button animated fadeInUp"
                                                data-id="b1dd649" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                                data-widget_type="Be_Addons_Dual_Button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="be__addons__dual__button cliper_btn_layout_1"><a
                                                            class="be__addons__btn elementor-repeater-item-cd4e962"
                                                            href="https://demo.clippingamazon.com/contact-us/">
                                                            <div class="button__title">Contact Us</div>
                                                            <div class="cliper_btn_icon be__addons__btn_icon_right"><i
                                                                    class="fas fa-arrow-right"></i></div>
                                                        </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-088b0d2"
                                        data-id="088b0d2" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-4d155de elementor-widget elementor-widget-image animated fadeInUp"
                                                data-id="4d155de" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:700}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
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
                                                    </style> <img decoding="async" fetchpriority="high" width="722"
                                                        height="372"
                                                        src="https://clippingamazon.com/wp-content/uploads/2021/11/Group-5893.png"
                                                        class="attachment-full size-full wp-image-2462" alt=""
                                                        srcset="https://clippingamazon.com/wp-content/uploads/2021/11/Group-5893.png 722w, https://clippingamazon.com/wp-content/uploads/2021/11/Group-5893-300x155.png 300w, https://clippingamazon.com/wp-content/uploads/2021/11/Group-5893-570x294.png 570w, https://clippingamazon.com/wp-content/uploads/2021/11/Group-5893-270x139.png 270w"
                                                        sizes="(max-width: 722px) 100vw, 722px">
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-874f098 elementor-widget elementor-widget-image animated flash"
                                                data-id="874f098" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;flash&quot;,&quot;_animation_delay&quot;:900}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" width="250" height="209"
                                                        src="https://clippingamazon.com/wp-content/uploads/2021/11/Group-5644.png"
                                                        class="attachment-full size-full wp-image-2463" alt=""
                                                        srcset="https://clippingamazon.com/wp-content/uploads/2021/11/Group-5644.png 250w, https://clippingamazon.com/wp-content/uploads/2021/11/Group-5644-215x180.png 215w"
                                                        sizes="(max-width: 250px) 100vw, 250px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="elementor-element elementor-element-6d5d9b4 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image"
                                data-id="6d5d9b4" data-element_type="widget"
                                data-settings="{&quot;be_addons_floating_fx&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_rotate_toggle&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_rotate_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:0}},&quot;be_addons_floating_fx_rotate_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:0}},&quot;be_addons_floating_fx_rotate_z&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:180}},&quot;be_addons_floating_fx_rotate_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5000,&quot;sizes&quot;:[]},&quot;be_addons_floating_fx_scale_toggle&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_scale_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5000,&quot;sizes&quot;:[]},&quot;_position&quot;:&quot;absolute&quot;,&quot;be_addons_floating_fx_rotate_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;be_addons_floating_fx_scale_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:1,&quot;to&quot;:1.2}},&quot;be_addons_floating_fx_scale_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:1,&quot;to&quot;:1.2}},&quot;be_addons_floating_fx_scale_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                data-widget_type="image.default">
                                <div class="elementor-widget-container"
                                    style="will-change: transform; transform: rotateZ(147.424deg) scaleX(1.1638) scaleY(1.1638);">
                                    <img decoding="async" width="99" height="159"
                                        src="https://clippingamazon.com/wp-content/uploads/2021/11/Group-316.png"
                                        class="attachment-full size-full wp-image-2464" alt="">
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5b8f336 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image"
                                data-id="5b8f336" data-element_type="widget"
                                data-settings="{&quot;be_addons_floating_fx&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_rotate_toggle&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_rotate_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:0}},&quot;be_addons_floating_fx_rotate_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:0}},&quot;be_addons_floating_fx_rotate_z&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:180}},&quot;be_addons_floating_fx_rotate_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5000,&quot;sizes&quot;:[]},&quot;be_addons_floating_fx_scale_toggle&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_scale_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:1,&quot;to&quot;:1}},&quot;be_addons_floating_fx_scale_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:1,&quot;to&quot;:1}},&quot;be_addons_floating_fx_scale_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5000,&quot;sizes&quot;:[]},&quot;_position&quot;:&quot;absolute&quot;,&quot;be_addons_floating_fx_rotate_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;be_addons_floating_fx_scale_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                data-widget_type="image.default">
                                <div class="elementor-widget-container"
                                    style="will-change: transform; transform: rotateZ(147.424deg) scaleX(1) scaleY(1);">
                                    <img decoding="async" loading="lazy" width="140" height="140"
                                        src="https://clippingamazon.com/wp-content/uploads/2021/11/Group-310.png"
                                        class="attachment-full size-full wp-image-2466" alt="">
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-b2dc3f0 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image"
                                data-id="b2dc3f0" data-element_type="widget"
                                data-settings="{&quot;be_addons_floating_fx&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_rotate_toggle&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_rotate_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:0}},&quot;be_addons_floating_fx_rotate_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:0}},&quot;be_addons_floating_fx_rotate_z&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:180}},&quot;be_addons_floating_fx_rotate_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5000,&quot;sizes&quot;:[]},&quot;be_addons_floating_fx_scale_toggle&quot;:&quot;yes&quot;,&quot;be_addons_floating_fx_scale_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:1,&quot;to&quot;:1}},&quot;be_addons_floating_fx_scale_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:1,&quot;to&quot;:1}},&quot;be_addons_floating_fx_scale_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5000,&quot;sizes&quot;:[]},&quot;_position&quot;:&quot;absolute&quot;,&quot;be_addons_floating_fx_rotate_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;be_addons_floating_fx_scale_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                data-widget_type="image.default">
                                <div class="elementor-widget-container"
                                    style="will-change: transform; transform: rotateZ(147.424deg) scaleX(1) scaleY(1);">
                                    <img decoding="async" loading="lazy" width="154" height="132"
                                        src="https://clippingamazon.com/wp-content/uploads/2021/11/Group-312.png"
                                        class="attachment-full size-full wp-image-2465" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Special  Discount end-->

            <!--Client reviews start-->
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-47df0efb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="47df0efb" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-54da570a"
                        data-id="54da570a" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-2301b66a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="2301b66a" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6eea4643"
                                        data-id="6eea4643" data-element_type="column">
                                        <div class="elementor-widget-wrap">
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-44b54425"
                                        data-id="44b54425" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-2bec2098 elementor-widget elementor-widget-BeAreaTitle animated fadeInUp"
                                                data-id="2bec2098" data-element_type="widget"
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
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-64fd3fe6"
                                        data-id="64fd3fe6" data-element_type="column">
                                        <div class="elementor-widget-wrap">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-1de92890 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="1de92890" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-14e1fb87"
                                        data-id="14e1fb87" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-314d690e elementor-widget elementor-widget-global elementor-global-7777 elementor-widget-BeTestmonial animated fadeInUp"
                                                data-id="314d690e" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                                data-widget_type="BeTestmonial.default">
                                                <div class="elementor-widget-container">


                                                    <div class="sldier-content-area tesmonial_style_7">
                                                        <div class="be-testmonial-carousel be-carousel-active owl-carousel owl-theme owl-loaded owl-responsive-600"
                                                            data-settings="{&quot;item_on_large&quot;:3,&quot;item_on_medium&quot;:3,&quot;item_on_tablet&quot;:2,&quot;item_on_mobile&quot;:1,&quot;stage_padding&quot;:0,&quot;item_margin&quot;:30,&quot;autoplay&quot;:true,&quot;autoplaytimeout&quot;:3000,&quot;slide_speed&quot;:1000,&quot;slide_animation&quot;:&quot;no&quot;,&quot;slide_animate_in&quot;:null,&quot;slide_animate_out&quot;:null,&quot;nav&quot;:false,&quot;nav_position&quot;:null,&quot;next_icon&quot;:null,&quot;prev_icon&quot;:null,&quot;dots&quot;:true,&quot;loop&quot;:true,&quot;hover_pause&quot;:true,&quot;center&quot;:false,&quot;rtl&quot;:false}">









                                                            <div class="owl-stage-outer">
                                                                <div class="owl-stage"
                                                                    style="transform: translate3d(-1137px, 0px, 0px); transition: all 1s ease 0s; width: 4927px;">
                                                                    <div class="owl-item cloned"
                                                                        style="width: 349px; margin-right: 30px;">
                                                                        <div
                                                                            class="cliper_single_testmonial elementor-repeater-item-e5abbb4">
                                                                            <div class="author__content">
                                                                                <div class="testmonial__quote"><img
                                                                                        decoding="async"
                                                                                        src="https://clippingamazon.com/wp-content/uploads/2021/11/Group-236.png"
                                                                                        alt=""></div>
                                                                                <div class="testmonial__description">
                                                                                    <p>"We send many jewelry photos every
                                                                                        month to get the background removed
                                                                                        and retouching services. Fast
                                                                                        turnaround, great price. We even
                                                                                        pitched more photo editing services
                                                                                        for our photos and they were open
                                                                                        and happy to accommodate.<br>"</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="author__thumb__designation__warp">
                                                                                <div class="author__thumb__designation">
                                                                                    <div class="author__thumb"><img
                                                                                            decoding="async"
                                                                                            src="https://clippingamazon.com/wp-content/uploads/2023/06/8.Andras-Kovacs-150x150.jpg"
                                                                                            alt="Services"></div>
                                                                                    <h4 class="author__name">Andras Kovacs
                                                                                    </h4>
                                                                                    <p class="author__designation">
                                                                                        E-commerce manager</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item cloned"
                                                                        style="width: 349px; margin-right: 30px;">
                                                                        <div
                                                                            class="cliper_single_testmonial elementor-repeater-item-fe41ac9">
                                                                            <div class="author__content">
                                                                                <div class="testmonial__quote"><img
                                                                                        decoding="async"
                                                                                        src="https://clippingamazon.com/wp-content/uploads/2021/11/Group-236.png"
                                                                                        alt=""></div>
                                                                                <div class="testmonial__description">
                                                                                    <p>"Excellent company to work with. We
                                                                                        have been using Clipping Amazon for
                                                                                        five years now and always receive
                                                                                        images in a timely manner and the
                                                                                        quality is exceptional. We always
                                                                                        recommend Clipping Amazon to anyone
                                                                                        looking for a professional photo
                                                                                        editing company."</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="author__thumb__designation__warp">
                                                                                <div class="author__thumb__designation">
                                                                                    <div class="author__thumb"><img
                                                                                            decoding="async"
                                                                                            src="https://clippingamazon.com/wp-content/uploads/2023/06/9.Jeff-Collins-150x150.jpg"
                                                                                            alt="Services"></div>
                                                                                    <h4 class="author__name">Jeff Collins
                                                                                    </h4>
                                                                                    <p class="author__designation">
                                                                                        Photography Agency</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item"
                                                                        style="width: 349px; margin-right: 30px;">
                                                                        <div
                                                                            class="cliper_single_testmonial elementor-repeater-item-a73f5d7">
                                                                            <div class="author__content">
                                                                                <div class="testmonial__quote"><img
                                                                                        decoding="async"
                                                                                        src="https://clippingamazon.com/wp-content/uploads/2021/11/Group-236.png"
                                                                                        alt=""></div>
                                                                                <div class="testmonial__description">
                                                                                    <p>"Clipping Amazon's Photo Ghost
                                                                                        Mannequin Service has been amazing.
                                                                                        I send them basic unprocessed images
                                                                                        of my client's property, and in a
                                                                                        quick time span, Clipping Amazon
                                                                                        return exquisitely retouched images
                                                                                        that really improve the look of my
                                                                                        photo studio business. The
                                                                                        photographs are detailed and show
                                                                                        good artistry of their Photo
                                                                                        Retouching editors."</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="author__thumb__designation__warp">
                                                                                <div class="author__thumb__designation">
                                                                                    <div class="author__thumb"><img
                                                                                            decoding="async"
                                                                                            src="https://clippingamazon.com/wp-content/uploads/2023/06/1.Richard-Sanders-150x150.jpg"
                                                                                            alt="Services"></div>
                                                                                    <h4 class="author__name">Richard
                                                                                        Sanders</h4>
                                                                                    <p class="author__designation">Photo
                                                                                        studio owner</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item active"
                                                                        style="width: 349px; margin-right: 30px;">
                                                                        <div
                                                                            class="cliper_single_testmonial elementor-repeater-item-827cfbe">
                                                                            <div class="author__content">
                                                                                <div class="testmonial__quote"><img
                                                                                        decoding="async"
                                                                                        src="https://clippingamazon.com/wp-content/uploads/2021/11/Group-236.png"
                                                                                        alt=""></div>
                                                                                <div class="testmonial__description">
                                                                                    <p>"Clipping Amazon has been providing
                                                                                        me with Ghost Meniquine service for
                                                                                        a long time. The quality and
                                                                                        turnaround time is second to none. I
                                                                                        recommend CA for its superior Ghost
                                                                                        Meniquine and Retouching Services at
                                                                                        a very very reasonable cost."</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="author__thumb__designation__warp">
                                                                                <div class="author__thumb__designation">
                                                                                    <div class="author__thumb"><img
                                                                                            decoding="async"
                                                                                            src="https://clippingamazon.com/wp-content/uploads/2023/06/2.Jerry-Fletcher-150x150.jpg"
                                                                                            alt="Services"></div>
                                                                                    <h4 class="author__name">Jerry Fletcher
                                                                                    </h4>
                                                                                    <p class="author__designation">
                                                                                        Ecommerce Manager</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item active"
                                                                        style="width: 349px; margin-right: 30px;">
                                                                        <div
                                                                            class="cliper_single_testmonial elementor-repeater-item-2897bd7">
                                                                            <div class="author__content">
                                                                                <div class="testmonial__quote"><img
                                                                                        decoding="async"
                                                                                        src="https://clippingamazon.com/wp-content/uploads/2021/11/Group-236.png"
                                                                                        alt=""></div>
                                                                                <div class="testmonial__description">
                                                                                    <p>"I've always received utmost
                                                                                        efficiency &amp; professionalism for
                                                                                        all my Photo editing needs. They
                                                                                        never hesitated to follow up
                                                                                        promptly concerning any matter.
                                                                                        Their attention to detail and
                                                                                        deadlines is phenomenal. I look
                                                                                        forward to more positive
                                                                                        transactions with Clipping Amazon"
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="author__thumb__designation__warp">
                                                                                <div class="author__thumb__designation">
                                                                                    <div class="author__thumb"><img
                                                                                            decoding="async"
                                                                                            src="https://clippingamazon.com/wp-content/uploads/2023/06/3.Christina-Maldonado-150x150.jpg"
                                                                                            alt="Services"></div>
                                                                                    <h4 class="author__name">Christina
                                                                                        Maldonado</h4>
                                                                                    <p class="author__designation">Manager
                                                                                        Real Estate Photography </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item"
                                                                        style="width: 349px; margin-right: 30px;">
                                                                        <div
                                                                            class="cliper_single_testmonial elementor-repeater-item-df86d99">
                                                                            <div class="author__content">
                                                                                <div class="testmonial__quote"><img
                                                                                        decoding="async"
                                                                                        src="https://clippingamazon.com/wp-content/uploads/2021/11/Group-236.png"
                                                                                        alt=""></div>
                                                                                <div class="testmonial__description">
                                                                                    <p>"Lightning-fast turnaround time
                                                                                        that's what I like about you. You
                                                                                        did it real quick and the virtual
                                                                                        tour on our Ecommerce website looks
                                                                                        incredible. It was excellent and
                                                                                        your team really exceeded our
                                                                                        expectations.<br>A huge thank you
                                                                                        for your exemplary efforts!"</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="author__thumb__designation__warp">
                                                                                <div class="author__thumb__designation">
                                                                                    <div class="author__thumb"><img
                                                                                            decoding="async"
                                                                                            src="https://clippingamazon.com/wp-content/uploads/2023/06/4.Andy-Grinaker-150x150.jpg"
                                                                                            alt="Services"></div>
                                                                                    <h4 class="author__name">Andy Grinaker
                                                                                    </h4>
                                                                                    <p class="author__designation">CEO,
                                                                                        E-commerce business</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item"
                                                                        style="width: 349px; margin-right: 30px;">
                                                                        <div
                                                                            class="cliper_single_testmonial elementor-repeater-item-4db884f">
                                                                            <div class="author__content">
                                                                                <div class="testmonial__quote"><img
                                                                                        decoding="async"
                                                                                        src="https://clippingamazon.com/wp-content/uploads/2021/11/Group-236.png"
                                                                                        alt=""></div>
                                                                                <div class="testmonial__description">
                                                                                    <p>"It's good to see someone stick to
                                                                                        their professional commitment
                                                                                        regarding image retouching services
                                                                                        as you did. You completed all the
                                                                                        Wedding Photo retouching work with
                                                                                        absolute precision and gave us a
                                                                                        good turnaround on our Wedding Photo
                                                                                        retouching project. I would like to
                                                                                        express my most sincere gratitude
                                                                                        and appreciation for all your
                                                                                        support and hard work."</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="author__thumb__designation__warp">
                                                                                <div class="author__thumb__designation">
                                                                                    <div class="author__thumb"><img
                                                                                            decoding="async"
                                                                                            src="https://clippingamazon.com/wp-content/uploads/2023/06/5.Allie-Bobbie-150x150.jpg"
                                                                                            alt="Services"></div>
                                                                                    <h4 class="author__name">Allie Bobbie
                                                                                    </h4>
                                                                                    <p class="author__designation">Wedding
                                                                                        Photographer</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item"
                                                                        style="width: 349px; margin-right: 30px;">
                                                                        <div
                                                                            class="cliper_single_testmonial elementor-repeater-item-c6f7c26">
                                                                            <div class="author__content">
                                                                                <div class="testmonial__quote"><img
                                                                                        decoding="async"
                                                                                        src="https://clippingamazon.com/wp-content/uploads/2021/11/Group-236.png"
                                                                                        alt=""></div>
                                                                                <div class="testmonial__description">
                                                                                    <p>The great team at Image Editing
                                                                                        Company has been doing our
                                                                                        children's swimwear live model
                                                                                        images for many years. Their photo
                                                                                        retouching work is excellent and
                                                                                        carried out in a timely manner.
                                                                                        That's why we keep coming back every
                                                                                        year.</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="author__thumb__designation__warp">
                                                                                <div class="author__thumb__designation">
                                                                                    <div class="author__thumb"><img
                                                                                            decoding="async"
                                                                                            src="https://clippingamazon.com/wp-content/uploads/2023/06/6.Jason-Mitchell-150x150.jpg"
                                                                                            alt="Services"></div>
                                                                                    <h4 class="author__name">Jason Mitchell
                                                                                    </h4>
                                                                                    <p class="author__designation">Swimwear
                                                                                        Photographer</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item"
                                                                        style="width: 349px; margin-right: 30px;">
                                                                        <div
                                                                            class="cliper_single_testmonial elementor-repeater-item-058f444">
                                                                            <div class="author__content">
                                                                                <div class="testmonial__quote"><img
                                                                                        decoding="async"
                                                                                        src="https://clippingamazon.com/wp-content/uploads/2021/11/Group-236.png"
                                                                                        alt=""></div>
                                                                                <div class="testmonial__description">
                                                                                    <p>"Clipping Amazon is Always kind and
                                                                                        professional, it's absolutely worth
                                                                                        evaluating them. After years spent
                                                                                        retouching photos, removing
                                                                                        backgrounds, Ghost Meniquine
                                                                                        service, and adjusting colors I met
                                                                                        this company.<br>That changed my
                                                                                        life and now I can focus on other
                                                                                        parts of my photography business!"
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="author__thumb__designation__warp">
                                                                                <div class="author__thumb__designation">
                                                                                    <div class="author__thumb"><img
                                                                                            decoding="async"
                                                                                            src="https://clippingamazon.com/wp-content/uploads/2023/06/7.Deborah-Anderson-150x150.jpg"
                                                                                            alt="Services"></div>
                                                                                    <h4 class="author__name">Deborah
                                                                                        Anderson</h4>
                                                                                    <p class="author__designation">Owner
                                                                                        Photo studio </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item"
                                                                        style="width: 349px; margin-right: 30px;">
                                                                        <div
                                                                            class="cliper_single_testmonial elementor-repeater-item-e5abbb4">
                                                                            <div class="author__content">
                                                                                <div class="testmonial__quote"><img
                                                                                        decoding="async"
                                                                                        src="https://clippingamazon.com/wp-content/uploads/2021/11/Group-236.png"
                                                                                        alt=""></div>
                                                                                <div class="testmonial__description">
                                                                                    <p>"We send many jewelry photos every
                                                                                        month to get the background removed
                                                                                        and retouching services. Fast
                                                                                        turnaround, great price. We even
                                                                                        pitched more photo editing services
                                                                                        for our photos and they were open
                                                                                        and happy to accommodate.<br>"</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="author__thumb__designation__warp">
                                                                                <div class="author__thumb__designation">
                                                                                    <div class="author__thumb"><img
                                                                                            decoding="async"
                                                                                            src="https://clippingamazon.com/wp-content/uploads/2023/06/8.Andras-Kovacs-150x150.jpg"
                                                                                            alt="Services"></div>
                                                                                    <h4 class="author__name">Andras Kovacs
                                                                                    </h4>
                                                                                    <p class="author__designation">
                                                                                        E-commerce manager</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item"
                                                                        style="width: 349px; margin-right: 30px;">
                                                                        <div
                                                                            class="cliper_single_testmonial elementor-repeater-item-fe41ac9">
                                                                            <div class="author__content">
                                                                                <div class="testmonial__quote"><img
                                                                                        decoding="async"
                                                                                        src="https://clippingamazon.com/wp-content/uploads/2021/11/Group-236.png"
                                                                                        alt=""></div>
                                                                                <div class="testmonial__description">
                                                                                    <p>"Excellent company to work with. We
                                                                                        have been using Clipping Amazon for
                                                                                        five years now and always receive
                                                                                        images in a timely manner and the
                                                                                        quality is exceptional. We always
                                                                                        recommend Clipping Amazon to anyone
                                                                                        looking for a professional photo
                                                                                        editing company."</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="author__thumb__designation__warp">
                                                                                <div class="author__thumb__designation">
                                                                                    <div class="author__thumb"><img
                                                                                            decoding="async"
                                                                                            src="https://clippingamazon.com/wp-content/uploads/2023/06/9.Jeff-Collins-150x150.jpg"
                                                                                            alt="Services"></div>
                                                                                    <h4 class="author__name">Jeff Collins
                                                                                    </h4>
                                                                                    <p class="author__designation">
                                                                                        Photography Agency</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item cloned"
                                                                        style="width: 349px; margin-right: 30px;">
                                                                        <div
                                                                            class="cliper_single_testmonial elementor-repeater-item-a73f5d7">
                                                                            <div class="author__content">
                                                                                <div class="testmonial__quote"><img
                                                                                        decoding="async"
                                                                                        src="https://clippingamazon.com/wp-content/uploads/2021/11/Group-236.png"
                                                                                        alt=""></div>
                                                                                <div class="testmonial__description">
                                                                                    <p>"Clipping Amazon's Photo Ghost
                                                                                        Mannequin Service has been amazing.
                                                                                        I send them basic unprocessed images
                                                                                        of my client's property, and in a
                                                                                        quick time span, Clipping Amazon
                                                                                        return exquisitely retouched images
                                                                                        that really improve the look of my
                                                                                        photo studio business. The
                                                                                        photographs are detailed and show
                                                                                        good artistry of their Photo
                                                                                        Retouching editors."</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="author__thumb__designation__warp">
                                                                                <div class="author__thumb__designation">
                                                                                    <div class="author__thumb"><img
                                                                                            decoding="async"
                                                                                            src="https://clippingamazon.com/wp-content/uploads/2023/06/1.Richard-Sanders-150x150.jpg"
                                                                                            alt="Services"></div>
                                                                                    <h4 class="author__name">Richard
                                                                                        Sanders</h4>
                                                                                    <p class="author__designation">Photo
                                                                                        studio owner</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item cloned"
                                                                        style="width: 349px; margin-right: 30px;">
                                                                        <div
                                                                            class="cliper_single_testmonial elementor-repeater-item-827cfbe">
                                                                            <div class="author__content">
                                                                                <div class="testmonial__quote"><img
                                                                                        decoding="async"
                                                                                        src="https://clippingamazon.com/wp-content/uploads/2021/11/Group-236.png"
                                                                                        alt=""></div>
                                                                                <div class="testmonial__description">
                                                                                    <p>"Clipping Amazon has been providing
                                                                                        me with Ghost Meniquine service for
                                                                                        a long time. The quality and
                                                                                        turnaround time is second to none. I
                                                                                        recommend CA for its superior Ghost
                                                                                        Meniquine and Retouching Services at
                                                                                        a very very reasonable cost."</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="author__thumb__designation__warp">
                                                                                <div class="author__thumb__designation">
                                                                                    <div class="author__thumb"><img
                                                                                            decoding="async"
                                                                                            src="https://clippingamazon.com/wp-content/uploads/2023/06/2.Jerry-Fletcher-150x150.jpg"
                                                                                            alt="Services"></div>
                                                                                    <h4 class="author__name">Jerry Fletcher
                                                                                    </h4>
                                                                                    <p class="author__designation">
                                                                                        Ecommerce Manager</p>
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
                                                                    <div class="owl-dot active"><span></span></div>
                                                                    <div class="owl-dot"><span></span></div>
                                                                    <div class="owl-dot"><span></span></div>
                                                                    <div class="owl-dot"><span></span></div>
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
                            <div class="elementor-element elementor-element-9f3e345 elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-PositionElement animated fadeInUp"
                                data-id="9f3e345" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:1200,&quot;_position&quot;:&quot;absolute&quot;}"
                                data-widget_type="PositionElement.default">
                                <div class="elementor-widget-container">
                                    <div class="posiion__element__wrap Fade_In_Out animated infinite slow infinite">
                                        <div class="posiion__element__item"><img loading="lazy" width="81"
                                                height="81"
                                                src="https://clippingamazon.com/wp-content/uploads/2021/11/Path-948.png"
                                                class="attachment-full size-full wp-image-2910" alt=""
                                                decoding="async"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-248ec4b2 elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-PositionElement animated fadeInUp"
                                data-id="248ec4b2" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:1200,&quot;_position&quot;:&quot;absolute&quot;}"
                                data-widget_type="PositionElement.default">
                                <div class="elementor-widget-container">
                                    <div class="posiion__element__wrap Fade_In_Out animated infinite slow infinite">
                                        <div class="posiion__element__item"><img loading="lazy" width="81"
                                                height="81"
                                                src="https://clippingamazon.com/wp-content/uploads/2021/11/Path-948.png"
                                                class="attachment-full size-full wp-image-2910" alt=""
                                                decoding="async"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-63ee7721 elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-PositionElement animated fadeInUp"
                                data-id="63ee7721" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:1200,&quot;_position&quot;:&quot;absolute&quot;}"
                                data-widget_type="PositionElement.default">
                                <div class="elementor-widget-container">
                                    <div class="posiion__element__wrap Fade_In_Out animated infinite slow infinite">
                                        <div class="posiion__element__item"><img loading="lazy" width="48"
                                                height="48"
                                                src="https://clippingamazon.com/wp-content/uploads/2021/11/Path-952.png"
                                                class="attachment-full size-full wp-image-2911" alt=""
                                                decoding="async"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-11def5d8 elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-PositionElement animated fadeInUp"
                                data-id="11def5d8" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:1200,&quot;_position&quot;:&quot;absolute&quot;}"
                                data-widget_type="PositionElement.default">
                                <div class="elementor-widget-container">
                                    <div class="posiion__element__wrap Fade_In_Out animated infinite slow infinite">
                                        <div class="posiion__element__item"><img loading="lazy" width="48"
                                                height="48"
                                                src="https://clippingamazon.com/wp-content/uploads/2021/11/Path-952.png"
                                                class="attachment-full size-full wp-image-2911" alt=""
                                                decoding="async"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-30c8d0dd elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-PositionElement animated fadeInUp"
                                data-id="30c8d0dd" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:1200,&quot;_position&quot;:&quot;absolute&quot;}"
                                data-widget_type="PositionElement.default">
                                <div class="elementor-widget-container">
                                    <div class="posiion__element__wrap Fade_In_Out animated infinite slow infinite">
                                        <div class="posiion__element__item"><img loading="lazy" width="48"
                                                height="48"
                                                src="https://clippingamazon.com/wp-content/uploads/2021/11/Path-952.png"
                                                class="attachment-full size-full wp-image-2911" alt=""
                                                decoding="async"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Client reviews end-->
        </div>
    </div>
    

    <script src="{{ asset('assets/frontend') }}/assets/js/jquery.js" id="jquery-core-js"></script>
    <script src="{{ asset('assets/frontend') }}/assets/js/bootstrap.min.js" id="bootstrap-js"></script>
    <script src="{{ asset('assets/frontend') }}/assets/js/jquery-effects-core-jsl.js"></script>
    <script src="{{ asset('assets/frontend') }}/assets/js/stellarnav.min.js_ver=2.0.0.js" id="stellarnav-js"></script>
    <script src="{{ asset('assets/frontend') }}/assets/js/menu-sticky-js.js"></script>
    <script src="{{ asset('assets/frontend') }}//assets/js/slick.js"></script>
    <script id="cliper-active-js-extra">
    var mobile_menu_scripts = {"style":"static","contact":"+0001234567890","location":"https:\/\/themeforest.net\/user\/bdexpert\/portfolio"};
    </script>
    <script src="{{ asset('assets/frontend') }}//assets/js/main-service-one.js" id="cliper-active-js"></script>
    <script id="cliper-active-js-after">
    
    jQuery(document).ready(function(){
                        "use strict";
                        jQuery("a.scrolltop").on("click", function (event) {
                            var id     = jQuery(this).attr("href");
                            var offset = 60;
                            var target = jQuery(id).offset().top - offset;
                            jQuery("html, body").animate({
                                scrollTop: target
                            }, 1500, "easeOutExpo");
                            event.preventDefault();
                        });
                    });
                
    
                    jQuery(document).ready(function(){
                        "use strict";
                        jQuery("#mainnav-area").sticky({
                            topSpacing: 0
                        });
                    });
                
    
                    jQuery(document).ready(function(){
                        "use strict";
                        var sticky_sidebar = jQuery(".content-area .product__content__wrap,.content-area .product__widgets__wrap");
                        sticky_sidebar.theiaStickySidebar({
                            additionalMarginTop: 0
                        });
                    });
    </script> 
    

@endsection
