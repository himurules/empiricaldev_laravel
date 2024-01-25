@extends('layouts.empirical')

@section('title', 'Our Services - Empirical Developments')

@section('description', 'Discover the comprehensive range of services offered by Empirical Developments in the Sydney Area. From new build homes to house extensions, renovations, property development, landscaping, and commercial construction, we provide expert solutions to meet your needs. Explore our diverse services and let us bring your vision to life.')

@section('keywords', 'Empirical Developments, services, Sydney Area, new build homes, house extensions, renovations, property development, landscaping, commercial construction, expert solutions')

@section('sub-title', 'Our Services')

@section('content')

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
                    <div class="media block-6 d-block text-center pt-md-4">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-hook"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">New Build Homes</h3>
                            <p>
                                We offer comprehensive turnkey solutions for constructing new build homes. Our collaborative approach ensures a strong, well-informed team consisting of clients and architects, minimizing surprises. Whether you desire a traditional or contemporary new build home in Huddersfield, we are here to assist.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
                    <div class="media block-6 d-block text-center pt-md-4">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-skyline"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">House Extensions</h3>
                            <p>
                                Home extensions can often be a cost-effective and stress-free alternative to moving. With our guidance, you can optimize the layout and enhance the functionality of your space. We work with talented architects who can assist with design, planning permission, and detailed plans, ensuring a seamless house extension experience.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
                    <div class="media block-6 d-block text-center pt-md-4">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-stairs"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">House Renovations</h3>
                            <p>
                                Our expertise extends to rejuvenating tired homes through renovation projects. Our building techniques are respectful of the original structure. Whether you seek structural changes or a modernization update, the possibilities for transforming your house are endless.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
                    <div class="media block-6 d-block text-center pt-md-4">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-hook"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Property Development</h3>
                            <p>
                                We are actively seeking properties with development potential. Also, land which may pose the opportunity for new build projects. We will also consider opportunities which are further afield.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
                    <div class="media block-6 d-block text-center pt-md-4">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-home"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Landscaping</h3>
                            <p>
                                Hard landscaping projects create an interesting outside area to your property and will add to its value.  You can include Paved Areas, Bound Aggregate Paths with Timber, Concrete or Brick Edging, Rock & Stone Features, Pergolas & Shelters, Ponds & Water Features.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
                    <div class="media block-6 d-block text-center pt-md-4">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-skyline"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Commercial Construction</h3>
                            <p>
                                Building services to the commercial sector are within our scope. We are capable of delivering small to medium-sized projects, extensions to commercial premises, complete construction of small industrial units, change of use on commercial premises and hard landscaping to external areas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-12 col-lg-4 services-2 p-4 py-5 d-flex ftco-animate">
                    <div class="py-3 d-flex">
                        <div class="icon">
                            <span class="flaticon-engineer"></span>
                        </div>
                        <div class="text">
                            <h3>Expert &amp; Professional</h3>
                            <p class="mb-0">Unparalleled Expertise and Professionalism, Guiding You Towards Success.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 services-2 p-4 py-5 d-flex ftco-animate">
                    <div class="py-3 d-flex">
                        <div class="icon">
                            <span class="flaticon-engineer-1"></span>
                        </div>
                        <div class="text">
                            <h3>High Quality Work</h3>
                            <p class="mb-0">Excellence in Every Detail: Delivering High-Quality Workmanship.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 services-2 p-4 py-5 d-flex ftco-animate">
                    <div class="py-3 d-flex">
                        <div class="icon">
                            <span class="flaticon-engineer-2"></span>
                        </div>
                        <div class="text">
                            <h3>Support &amp; Help</h3>
                            <p class="mb-0">Reliable Support and Assistance, Just a Click Away.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes/testimonials')
@endsection
