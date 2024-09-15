@extends('layouts.empirical_home')

@section('title', 'Empirical Developments - Building Dreams')

@section('description', 'Empirical Developments is a full-service construction company operating in the Sydney Area. We specialize in new build homes, house extensions, house renovations, property development, landscaping, and commercial construction. Our team is dedicated to delivering exceptional results and building dreams.')

@section('keywords', 'Empirical Developments, construction company, new build homes, house extensions, house renovations, property development, landscaping, commercial construction, Sydney Area')

@section('content')
    <main>
        @include('includes/services_home')

        <section id="Custom-CTA" class="section-with-background d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('storage/images/service.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed; min-height: 500px;">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="cta-content text-white py-5 px-4" style="margin: auto; background: rgba(0, 0, 0, 0.5); border-radius: 10px; font-size: 18px;">
                            <p>We are passionate about building beautifully designed spaces that are long lasting and bringing your unique luxury home visions to life.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container">
                <div class="row justify-content-center mt-5 mb-5 pb-3">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <h2>OUR PROJECTS</h2>
                    </div>
                </div>
                <div class="row d-flex no-gutters">
                    <!-- First Project -->
                    <div class="col-md-6 order-md-1">
                        <a href="/project-details/strathfield">
                            <img src="{{ asset('storage/images/work-1.jpg') }}" alt="about-us" style="width: 100%; height: 100%; object-fit: cover; display: block;"/>
                        </a>
                    </div>
                    <div class="col-md-6 order-md-2">
                        <div class="text-center">
                            <div class="row justify-content-start">
                                <div class="col-md-12 heading-section ftco-animate pl-md-4 py-md-2">
                                    <h2>Augusta Street Luxury Home</h2>
                                    <strong>ICON on Augusta - The New Luxury Benchmark for Strathfield</strong>
                                    <p>The finest brand-new estate to accompany the market in Strathfield, this landmark residence fuses flawless architecture, tropical landscaping, and refined interior design. Its sheer-scale interiors reveal purified luxury, state-of-the-art innovation and meticulous attention to detail whilst seamlessly integrating in/outdoor space. Set to impress the most disconcerting of buyers, this exclusive home has been built to prioritise optimal liveability with a bright north-to-rear aspect and finishes in Italian marble detail, off-form concrete, natural European oak, travertine & limestone.</p>
                                    <a href="/project-details/strathfield" class="btn btn-primary">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex no-gutters">
                    <!-- Second Project -->
                    <div class="col-md-6 order-md-1">
                        <a href="#">
                            <img src="{{ asset('storage/images/work-4.png') }}" alt="about-us" style="width: 100%; height: 100%; object-fit: cover; display: block;"/>
                        </a>
                    </div>
                    <div class="col-md-6 order-md-2">
                        <div class="text-center">
                            <div class="row justify-content-start">
                                <div class="col-md-12 heading-section ftco-animate pl-md-4 py-md-2">
                                    <h2>Meredith Street Luxury Home</h2>
                                    <strong>Project is currently underway</strong>
                                    <p>Stay tuned for more details about our innovative new Meredith project.</p>
                                    <a href="#" class="btn btn-primary">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex no-gutters">
                    <!-- Second Project -->
                    <div class="col-md-6 order-md-1">
                        <a href="#">
                            <img src="{{ asset('storage/images/work-5.png') }}" alt="about-us" style="width: 100%; height: 100%; object-fit: cover; display: block;"/>
                        </a>
                    </div>
                    <div class="col-md-6 order-md-2">
                        <div class="text-center">
                            <div class="row justify-content-start">
                                <div class="col-md-12 heading-section ftco-animate pl-md-4 py-md-2">
                                    <h2>Parkside Drive Luxury Multi Dwelling</h2>
                                    <strong>Project is currently underway</strong>
                                    <p>Stay tuned for more details about our innovative new Parkside Drive project.</p>
                                    <a href="#" class="btn btn-primary">View More</a>
                                </div>
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
        const textArray1 = ["Thinking of building a new home?", "Creating Timeless Luxury Builds, Tailored to You", "Build your home, your way"];
        const textArray2 = ["WE ARE HERE TO HELP", "LUXURY & QUALITY", "DREAMS TO REALITY"];

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
