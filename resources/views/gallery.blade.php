@extends('layouts.empirical')

@section('title', 'Our Gallery - Empirical Developments')

@section('description', 'Explore the impressive portfolio of projects completed by Empirical Developments in the Sydney Area. From residential homes to commercial constructions, we have a track record of delivering high-quality results. Browse our diverse range of projects and get inspired today.')

@section('keywords', 'Empirical Developments, projects, portfolio, Sydney Area, residential homes, commercial constructions, high-quality results')

@section('sub-title', 'Media')

@section('content')

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container pt-4">
            <!-- Images Heading -->
            <div class="row">
                <div class="col-md-12">
                    <h3>Media Features</h3>
                </div>
            </div>
            <!-- Images -->
            <div class="row">
                <!-- Image 1 -->
                <div class="col-md-4 gallery-item">
                    <div class="work img d-flex align-items-end" style="background-image: url({{ asset('storage/images/work-org-14.jpg') }});">
                        <a href="{{ asset('storage/images/work-org-14.jpg') }}"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item">
                    <div class="work img d-flex align-items-end" style="background-image: url({{ asset('storage/images/work-org-13.jpg') }});">
                        <a href="{{ asset('storage/images/work-org-13.jpg') }}"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item">
                    <div class="work img d-flex align-items-end" style="background-image: url({{ asset('storage/images/work-org-12.jpg') }});">
                        <a href="{{ asset('storage/images/work-org-12.jpg') }}"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Image 1 -->
                <div class="col-md-4 gallery-item">
                    <div class="work img d-flex align-items-end" style="background-image: url({{ asset('storage/images/work-org-2.jpg') }});">
                        <a href="{{ asset('storage/images/work-org-2.jpg') }}"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item">
                    <div class="work img d-flex align-items-end" style="background-image: url({{ asset('storage/images/work-org-4.jpg') }});">
                        <a href="{{ asset('storage/images/work-org-4.jpg') }}"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item">
                    <div class="work img d-flex align-items-end" style="background-image: url({{ asset('storage/images/work-org-5.jpg') }});">
                        <a href="{{ asset('storage/images/work-org-5.jpg') }}"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <!-- Repeat for other images... -->
            </div>

            <!-- Videos Heading -->
            <div class="row">
                <div class="col-md-12">
                    <h3>Videos</h3>
                </div>
            </div>
            <!-- Videos -->
            <div class="row">
                <!-- Video 1 -->
                <div class="col-md-6 video-item">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/eiVuCpnOQCU?feature=oembed" allowfullscreen></iframe>
                    </div>
                    <p>My cool project 1 walk through</p>
                </div>
                <!-- Video 2 -->
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/4No2sID-eFk?feature=oembed" allowfullscreen></iframe>
                    </div>
                    <p>My cool project 2 walk through</p>
                </div>
            </div>
        </div>
    </section>

@endsection
