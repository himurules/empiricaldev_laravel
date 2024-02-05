<div>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('storage/images/bg_11.jpg') }}');"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>

        <header class="header-home" id="main">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-6 col-md-2 pt-1 text-center">
                        <a class="navbar-brand" href="/">
                            <img src="{{ asset('storage/images/icons/logo.png') }}" alt="IMG" style="margin-right: 10px;">
                        </a>
                    </div>
                    <div class="col-6 col-md-4 pt-5 navbar-brand text-center d-none d-md-block">
                        <span>LUXURY</span>HOME<span>BUILDERS</span>
                    </div>
                    <div class="col-6 col-md-2 d-flex justify-content-center pt-5">
                        <div class="phone-number h5">
                            <span class="fa fa-phone call-link"></span>
                            <a href="tel:1300740240">1300 740 240</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- START nav -->
            <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
                <div class="container">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span> Menu
                    </button>
                    <div class="collapse navbar-collapse" id="ftco-nav">
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
                            <li class="nav-item {{ request()->is('our-team') ? 'active' : '' }}">
                                <a href="/our-team" class="nav-link">Team</a>
                            </li>
                            <li class="nav-item {{ request()->is('our-projects') ? 'active' : '' }}">
                                <a href="/our-projects" class="nav-link">Projects</a>
                            </li>
                            <li class="nav-item {{ request()->is('our-gallery') ? 'active' : '' }}">
                                <a href="/our-gallery" class="nav-link">Gallery</a>
                            </li>
                            <li class="nav-item {{ request()->is('our-process') ? 'active' : '' }}">
                                <a href="/our-process" class="nav-link">Process</a>
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
        </header>

        <header class="header d-none scrolled" id="scrolled">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-6 col-md-2">
                        <a class="navbar-brand" href="/">
                            <img src="{{ asset('storage/images/icons/logo.png') }}" alt="IMG" style="margin-right: 10px;">
                        </a>
                    </div>
                    <div class="col-6 col-md-2 d-flex justify-content-center pt-5">
                        <div class="phone-number h5 pt-2">
                            <span class="fa fa-phone call-link-2"></span>
                            <a href="tel:1300740240">1300 740 240</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container" style="margin-top: 210px;">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/home">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>@yield('sub-title') <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">@yield('sub-title')</h1>
                </div>
            </div>
        </div>
    </section>
</div>
