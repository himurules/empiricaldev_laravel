@extends('layouts.empirical')

@section('title', 'Empirical Developments - Building Dreams')

@section('description', 'Empirical Developments is a full-service construction company operating in the Sydney Area. We specialize in new build homes, house extensions, house renovations, property development, landscaping, and commercial construction. Our team is dedicated to delivering exceptional results and building dreams.')

@section('keywords', 'Empirical Developments, construction company, new build homes, house extensions, house renovations, property development, landscaping, commercial construction, Sydney Area')

@section('content')
    <div class="hero-wrap">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image:url({{ asset('storage/images/bg_11.jpg') }});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2>Thinking Of Building A New Home ?</h2>
                                <h1 class="mb-3">We are here to help</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image:url({{ asset('storage/images/bg_22.jpg') }});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2>Building Dreams, One Home At A Time</h2>
                                <h1 class="mb-3">Luxury &amp; Quality</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image:url({{ asset('storage/images/bg_33.jpg') }});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2>Build Your Dream Home, Your way</h2>
                                <h1 class="mb-3">Dreams to Reality</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes/services')

    @include('includes/about')

    @include('includes/resources')

    @include('includes/projects')

    @include('includes/our_process')

    @include('includes/testimonials')
@endsection
