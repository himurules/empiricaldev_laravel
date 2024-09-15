@extends('layouts.empirical')

@section('title', 'Projects Details - Empirical Developments')

@section('description', 'Explore the impressive portfolio of projects completed by Empirical Developments in the Sydney Area. From residential homes to commercial constructions, we have a track record of delivering high-quality results. Browse our diverse range of projects and get inspired today.')

@section('keywords', 'Empirical Developments, projects, portfolio, Sydney Area, residential homes, commercial constructions, high-quality results')

@section('sub-title', 'Projects Details')

@section('content')

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <p>
                        <img src="{{ asset('storage/images/work-1.jpg') }}" alt="" class="img-fluid">
                    </p>
                    <h2 class="mb-3">Details</h2>
                    <p>
                        The finest brand-new estate to accompany the market in Strathfield, this landmark residence fuses flawless architecture, tropical landscaping, and refined interior design. Its sheer-scale interiors reveal purified luxury, state-of-the-art innovation and meticulous attention to detail whilst seamlessly integrating in/outdoor space. Set to impress the most disconcerting of buyers, this exclusive home has been built to prioritise optimal liveability with a bright north-to-rear aspect and finishes in Italian marble detail, off-form concrete, natural European oak, travertine & limestone.
                    </p>
                </div> <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Project</h3>
                            <li>Augusta Street Luxury Home</li>
                            <h3>Location</h3>
                            <li>Strathfield</li>
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>More Projects</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url({{ asset('storage/images/work-2.png') }});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Meredith Street Luxury Home</a></h3>
                                <div class="meta">
                                    <div>Location: Homebush</div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url({{ asset('storage/images/work-3.png') }});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Parkside Drive Luxury Multi Dwelling</a></h3>
                                <div class="meta">
                                    <div>Location: Kogarah Bay</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 pt-2 pb-2">
                    <div class="work img d-flex align-items-end" style="background-image: url({{ asset('storage/images/work-11.jpg') }});height: 300px;">
                        <a href="{{ asset('storage/images/work-11.jpg') }}"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 pt-2 pb-2">
                    <div class="work img d-flex align-items-end" style="background-image: url({{ asset('storage/images/work-org-12.jpg') }});height: 300px;">
                        <a href="{{ asset('storage/images/work-org-12.jpg') }}"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 pt-2 pb-2">
                    <div class="work img d-flex align-items-end" style="background-image: url({{ asset('storage/images/work-org-13.jpg') }});height: 300px;">
                        <a href="{{ asset('storage/images/work-org-13.jpg') }}"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 pt-2 pb-2">
                    <div class="work img d-flex align-items-end" style="background-image: url({{ asset('storage/images/work-org-14.jpg') }});height: 300px;">
                        <a href="{{ asset('storage/images/work-org-14.jpg') }}"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 pt-2 pb-2">
                    <div class="work img d-flex align-items-end" style="background-image: url({{ asset('storage/images/work-org-5.jpg') }});height: 300px;">
                        <a href="{{ asset('storage/images/work-org-5.jpg') }}"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 pt-2 pb-2">
                    <div class="work img d-flex align-items-end" style="background-image: url({{ asset('storage/images/work-org-16.jpg') }});height: 300px;">
                        <a href="{{ asset('storage/images/work-org-16.jpg') }}"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 pt-2 pb-2">
                    <div class="work img d-flex align-items-end" style="background-image: url({{ asset('storage/images/work-org-17.jpg') }});height: 300px;">
                        <a href="{{ asset('storage/images/work-org-17.jpg') }}"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 pt-2 pb-2">
                    <div class="work img d-flex align-items-end" style="background-image: url({{ asset('storage/images/work-org-18.jpg') }});height: 300px;">
                        <a href="{{ asset('storage/images/work-org-18.jpg') }}"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 pt-2 pb-2">
                    <div class="work img d-flex align-items-end" style="background-image: url({{ asset('storage/images/work-org-19.jpg') }});height: 300px;">
                        <a href="{{ asset('storage/images/work-org-19.jpg') }}"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- .section -->

@endsection
