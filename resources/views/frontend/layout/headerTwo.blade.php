  <!--Header Start-->
  <header class="navigation-area" id="scrolltop">
      <div class="navifation-top-area">
          <div class="search-control">
              <div id="search-main-form-style-one" class="search-main-form-style-one">
                  <div class="search-main-form">
                      <form id="search-main-form" action="#">
                          <input type="text" id="search" placeholder="Search ..." name="s">
                      </form>
                  </div>
              </div>
              <div class="search-background"></div>
              <button class="search-close">
                  <i class="fa-solid fa-xmark"></i>
              </button>
          </div>

          <!-- MAINMENU AREA -->
          <div id="mainnav-area-sticky-wrapper" class="sticky-wrapper" style="height: 100.594px;">
              <div class="mainnav-area" id="mainnav-area" style="width: 768px;">
                  <div class="mainnav-area-bg"></div>
                  <nav class="navbar">
                      <div class="container container-full-width">
                          <div class="row">
                              <div class="col-md-12 flex-center-align">
                                  <div class="push__menu__button">
                                      <div class="offcanvas__menu__open__trigger">

                                      </div>
                                  </div>
                                  <div class="navbar-header">
                                      <a href="./home.html" class="custom-logo-link default-logo">
                                          <img src="{{ asset('assets/frontend') }}/assets/images/logo/logo.png"
                                              alt="">
                                      </a>
                                      <a href="./home.html" class="custom-logo-link sticky-logo">
                                          <img src="{{ asset('assets/frontend') }}/assets/images/logo/logo.png"
                                              alt="">
                                      </a>
                                  </div>


                                  <div id="cliper-main-navigation" class="stellarnav cliper-light-nav mobile">
                                      <ul id="cliper-nav" class="cliper-pull-right navbar-nav nav"
                                          style="display: none;">
                                          <li
                                              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home">
                                              <a href="{{ url('/') }}">Home</a>
                                          </li>
                                          <li
                                              class="menu-item menu-item-type-post_type menu-item-object-page page_item page-item-3639 current_page_item">
                                              <a href="{{ route('services.page') }}">Services </a>
                                          </li>
                                          <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                              <a href="{{ route('pricing.page') }}">Pricing</a>
                                          </li>
                                          <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                              <a href="{{ route('freetrail.page') }}">Free Trial</a>
                                          </li>
                                          <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                              <a href="{{ route('portfolio.page') }}">Portfolio</a>
                                          </li>
                                          <li class="menu-item menu-item-type-post_type menu-item-object-page ">
                                              <a href="{{ route('about.page') }}">About Us</a>
                                          </li>
                                          <li
                                              class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item">
                                              <a href="{{ route('contact.page') }}">Contact Us</a>
                                          </li>
                                          <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                              <a href="#">Blog</a>
                                          </li>
                                      </ul>
                                  </div>

                                  <div class="cliper-action-header d-none d-xl-flex">
                                      <div class="cliper-action-header d-none d-lg-flex">

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </nav>
              </div>
          </div>
          <!-- END MAINMENU AREA END -->

          <!-- OFFCANVAS CONTENT WRAP -->
          <!-- OFFCANVAS CONTENT WRAP END -->

          <!-- OFFCANVAS MENU START -->
          <div class="offcanvas__mobile__menu__main__wrapper">
              <div class="offcanvas__menu__close__trigger">
                  &times;
              </div>
              <div class="offcanvas__menu__wrapper">
                  <div class="offcanvas__menu__inner__content">


                      <div id="offcanvas__wrap" class="offcanvas__navigation">
                          <ul id="offanvas__menu" class="offanvas__menu">
                              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home"><a
                                      href="#">Home</a></li>
                              <li
                                  class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-3639 current_page_item">
                                  <a href="">Services</a>
                              </li>
                              <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                      href="#">Pricing</a></li>
                              <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                      href="#">Free Trial</a></li>
                              <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                      href="#">Portfolio</a></li>
                              <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                      href="#">About Us</a></li>
                              <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                      href="#">Contact Us</a></li>
                              <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                  <a href="">Blog</a>
                              </li>
                          </ul>
                      </div>
                      <div class="offcanvas__search__area">
                          <form class="search-main-form" action="">
                              <input name="s" placeholder="Search..." type="search">
                              <button type="submit">
                                  <i class="fa-solid fa-magnifying-glass"></i>
                              </button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <!-- OFFCANVAS MENU END -->

      </div>
  </header>
  <!--Header End-->
