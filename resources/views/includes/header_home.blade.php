<div class="hero-wrap">
    <video autoplay muted loop id="background-video">
        <source src="{{ asset('storage/images/demo.webm') }}" type="video/webm">
    </video>

    <img src="{{ asset('storage/images/bg_11.jpg') }}" id="background-image"  alt="" class="hero-wrap-img">

    <div class="overlay"></div>
    <!-- rest of the content -->
    <header class="header-home" id="main">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6 col-md-2 pt-1 text-center">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('storage/images/icons/logo.png?v=1') }}" alt="IMG" style="margin-right: 10px;">
                    </a>
                </div>
                <div class="col-6 col-md-4 pt-5 navbar-brand text-center d-none d-md-block">
                    <span>LUXURY</span>HOME<span>BUILDERS</span>
                </div>
                <div class="col-6 col-md-2 pt-5 navbar-brand text-center d-md-block justify-content-center">
                    <!-- START nav -->
                    <nav class="navbar navbar-dark ftco_navbar bg-dark ftco-navbar-light pt-2">
                        <div class="container">
                            <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                                <span class="fa fa-bars"></span> Menu
                            </button>
                            <div class="dropdown-menu collapse navbar-collapse">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                                        <a href="/" class="nav-link">Home</a>
                                    </li>
                                    <li class="nav-item {{ request()->is('about-us') ? 'active' : '' }}">
                                        <a href="/about-us" class="nav-link">About</a>
                                    </li>
                                    <li class="nav-item {{ request()->is('our-services') ? 'active' : '' }}">
                                        <a href="/our-services" class="nav-link">Services</a>
                                    </li>
                                    <li class="nav-item {{ request()->is('our-projects') ? 'active' : '' }}">
                                        <a href="/our-projects" class="nav-link">Projects</a>
                                    </li>
                                    <li class="nav-item {{ request()->is('our-gallery') ? 'active' : '' }}">
                                        <a href="/our-gallery" class="nav-link">Media</a>
                                    </li>
                                    <li class="nav-item {{ request()->is('faq') ? 'active' : '' }}">
                                        <a href="/faq" class="nav-link">FAQ</a>
                                    </li>
                                    <li class="nav-item {{ request()->is('contact-us') ? 'active' : '' }}">
                                        <a href="/contact-us" class="nav-link">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- END nav -->
                </div>
            </div>
        </div>
    </header>

    <header class="header scrolled d-none" id="scrolled">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6 col-md-2">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('storage/images/icons/logo.png?v=1') }}" alt="IMG" style="margin-right: 10px;">
                    </a>
                </div>
                <div class="col-4 col-md-2 pt-5 navbar-brand text-center d-md-block justify-content-center">
                    <!-- START nav -->
                    <nav class="navbar navbar-dark ftco_navbar bg-dark ftco-navbar-light pt-2">
                        <div class="container">
                            <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                                <span class="fa fa-bars"></span> Menu
                            </button>
                            <div class="dropdown-menu collapse navbar-collapse">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                                        <a href="/" class="nav-link">Home</a>
                                    </li>
                                    <li class="nav-item {{ request()->is('about-us') ? 'active' : '' }}">
                                        <a href="/about-us" class="nav-link">About</a>
                                    </li>
                                    <li class="nav-item {{ request()->is('our-services') ? 'active' : '' }}">
                                        <a href="/our-services" class="nav-link">Services</a>
                                    </li>
                                    <li class="nav-item {{ request()->is('our-projects') ? 'active' : '' }}">
                                        <a href="/our-projects" class="nav-link">Projects</a>
                                    </li>
                                    <li class="nav-item {{ request()->is('our-gallery') ? 'active' : '' }}">
                                        <a href="/our-gallery" class="nav-link">Media</a>
                                    </li>
                                    <li class="nav-item {{ request()->is('faq') ? 'active' : '' }}">
                                        <a href="/faq" class="nav-link">FAQ</a>
                                    </li>
                                    <li class="nav-item {{ request()->is('contact-us') ? 'active' : '' }}">
                                        <a href="/contact-us" class="nav-link">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- END nav -->
                </div>
            </div>
        </div>
    </header>

    <div class="container" style="padding-top: 300px;">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-12 ftco-animate">
                <div class="text w-100 text-center navbar-brand">
                    <span id="text1">
                        Thinking Of Building A New Home ?
                    </span>
                    <h1 id="text2" class="mb-3">We are here to help</h1>
                </div>
            </div>
        </div>
    </div>
</div>
