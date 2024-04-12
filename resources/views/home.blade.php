@extends('layouts.empirical_home')

@section('title', 'Empirical Developments - Building Dreams')

@section('description', 'Empirical Developments is a full-service construction company operating in the Sydney Area. We specialize in new build homes, house extensions, house renovations, property development, landscaping, and commercial construction. Our team is dedicated to delivering exceptional results and building dreams.')

@section('keywords', 'Empirical Developments, construction company, new build homes, house extensions, house renovations, property development, landscaping, commercial construction, Sydney Area')

@section('content')
    <main>
        @include('includes/services')

        <section id="Custom-CTA" class="section-with-background d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('storage/images/service.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed; min-height: 500px;">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="cta-content text-white py-5 px-4" style="margin: auto; background: rgba(0, 0, 0, 0.5); border-radius: 10px; font-size: 18px;">
                            <p>We are passionate about quality, craftsmanship and building beautifully designed spaces that stand the test of time</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container">
                <div class="row justify-content-center mt-5 mb-5 pb-3">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <h2>OUR RECENT PROJECTS</h2>
                    </div>
                </div>
                <div class="row d-flex no-gutters">
                    <div class="col-md-6">
                        <div>
                            <div class="align-items-center justify-content-center justify-content-md-end">
                                <a href="/project-details/strathfield">
                                    <img src="{{ asset('storage/images/work-1.jpg') }}" alt="about-us" style="width: 100%; height: 100%; object-fit: cover; display: block;"/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                            <div class="row justify-content-start">
                                <div class="col-md-12 heading-section ftco-animate pl-md-4 py-md-2">
                                    <h2>Strathfield Renovation</h2>
                                </div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-md-12 heading-section ftco-animate pl-md-4 py-md-2">
                                    <strong>
                                        Complete Renovation And Multi-Level Extension
                                    </strong>
                                </div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-md-12 heading-section ftco-animate pl-md-4 py-md-2">
                                    <p>
                                        Modern architecture incorporated into a traditional period home. Full renovation and third story addition with harbor views to create more space for a growing family.
                                    </p>
                                    <a href="/project-details/strathfield" class="btn btn-primary">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex no-gutters">
                    <div class="col-md-6">
                        <div class="text-center">
                            <div class="row justify-content-start">
                                <div class="col-md-12 heading-section ftco-animate pl-md-4 py-md-2">
                                    <h2>My cool new Project</h2>
                                </div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-md-12 heading-section ftco-animate pl-md-4 py-md-2">
                                    <strong>
                                        Coming soon with our latest project
                                    </strong>
                                </div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-md-12 heading-section ftco-animate pl-md-4 py-md-2">
                                    <p>
                                        Modern architecture incorporated into a traditional period home. Full renovation and third story addition with harbor views to create more space for a growing family.
                                    </p>
                                    <a href="#" class="btn btn-primary">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <div class="align-items-center justify-content-center justify-content-md-end">
                                <a href="#">
                                    <img src="{{ asset('storage/images/work-4.jpg') }}" alt="about-us" style="width: 100%; height: 100%; object-fit: cover; display: block;"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('scripts')
    <script>
        // Array of text to be displayed
        const textArray1 = ["Thinking Of Building A New Home ?", "Building Dreams, One Home At A Time", "Build Your Dream Home, Your way"];
        const textArray2 = ["We are here to help", "Luxury & Quality", "Dreams to Reality"];

        // Index to keep track of current text
        let index = 0;

        // Function to change the text every 5 seconds
        function changeText() {
            document.getElementById("text1").textContent = textArray1[index];
            document.getElementById("text2").textContent = textArray2[index];
            index = (index + 1) % textArray1.length;
        }

        // Call the function every 5 seconds
        setInterval(changeText, 5000);
    </script>
@endpush
