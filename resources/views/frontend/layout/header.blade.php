<header id="navbar" class="header_area" style="background: transparent; box-shadow: none; z-index: 9999">
    <nav class="navbar container navbar-expand-md navbar-light py-4">
        <a class="navbar-brand logo" href="./home.html">
            <img class="logo_img" src="{{ asset('assets/frontend') }}/assets/images/logo/logo.png"
                alt="Graphics Amazon logo" />
        </a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbar1"
            aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown mega-area">
                    <a class="nav-link dropdown-toggle" href="./service-one.html" id="mega-one" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu menu-area" aria-labelledby="mega-one">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <h2>Main Services</h2>
                                <a href="./service-one.html" class="dropdown-item">Clipping Path
                                    Service</a>
                                <a href="./service-one.html" class="dropdown-item">Photo
                                    Retouching Service</a>
                                <a href="./service-one.html" class="dropdown-item">Neck
                                    Joint Service</a>
                                <a href="./service-one.html" class="dropdown-item">Masking
                                    Service</a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <h2></h2>
                                <a href="./service-one.html" class="dropdown-item">Shadow
                                    Creation Service</a>
                                <a href="./service-one.html" class="dropdown-item">Color
                                    Correction Service</a>
                                <a href="./service-one.html" class="dropdown-item">Jewellery
                                    Retouching Service</a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <h2>Special Services</h2>
                                <a href="./service-one.html" class="dropdown-item">Raster To
                                    Vector Conversion</a>
                                <a href="./service-one.html" class="dropdown-item">Graphic Design
                                    Service</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pricing.page') }}">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about.page') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.page') }}">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn freeTrial_btn_bg" href="#">Free
                        Trial</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
