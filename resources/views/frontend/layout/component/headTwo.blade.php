<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- font awesome css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" id="be-widgets-css" href="{{ asset('assets/frontend') }}/assets/css/widgets.css_ver=6.3.1.css"
        media="all">
    <link rel="stylesheet" id="owl-carousel-css" href="{{ asset('assets/frontend') }}/assets/css/owl-carosel.css"
        media="all">
    <link rel="stylesheet" id="stellarnav-css"
        href="{{ asset('assets/frontend') }}/assets/css/plugins_stellarnav.min.css_ver=2.0.0.css" media="all">
    <link rel="stylesheet" id="nice-select-css" href="{{ asset('assets/frontend') }}/assets/css/select.css"
        media="all">
    <link rel="stylesheet" id="bootstrap-css" href="{{ asset('assets/frontend') }}/assets/css/bootstrap.css"
        media="all">
    <link rel="stylesheet" id="cliper-typography-css" href="{{ asset('assets/frontend') }}/assets/css/typography.css"
        media="all">

    <link rel="stylesheet" id="cliper-blog-css" href="{{ asset('assets/frontend') }}/assets/css/pages-service-one.css"
        media="all">
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" id="elementor-frontend-css"
        href="{{ asset('assets/frontend') }}/assets/css/frontend-lite.min.css" media="all">
    <link rel="stylesheet" id="swiper-css" href="{{ asset('assets/frontend') }}/assets/css/swiper.min.css"
        media="all">
    <!--css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/assets/css/service-one.css">

</head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="//gmpg.org/xfn/11">

<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<style id="cliper-main-style-inline-css">
    .banner-area-bg {
        background-image: url('{{ asset('assets/frontend') }}/assets/images/banner/service-one-banner.png');
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
<script src="{{ asset('assets/frontend') }}/assets/js/jquery.js" id="jquery-core-js"></script>

<script src="{{ asset('assets/frontend') }}/assets/js/jquery-migrate.js"></script>
</head>
