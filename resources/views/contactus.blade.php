@extends('layouts.empirical')

@section('title', 'Contact Us - Empirical Developments')

@section('description', 'Contact Empirical Developments for all your construction needs in the Sydney Area. Whether you have questions, need a quote, or want to discuss a project, our team is here to help. Get in touch with us today.')

@section('keywords', 'Empirical Developments, contact us, construction needs, Sydney Area, questions, quote, project, get in touch')

@section('sub-title', 'Contact Us')

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters mb-5">
                            <div class="col-md-7">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Contact Us</h3>
                                    <div id="form-message-warning" class="mb-4" style="display:none;">
                                        There has been an error sending your message. Please try again later.
                                    </div>
                                    <div id="form-message-success" class="mb-4" style="display:none;">
                                        Your message has been received successfully. We will get back to you soon as possible.
                                    </div>
                                    <form method="POST" id="contact-form" name="contactForm" class="contact-form contact-us-form">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="username">Full Name</label>
                                                    <input type="text" class="form-control" name="username" id="username"
                                                           placeholder="Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                           placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Subject</label>
                                                    <input type="text" class="form-control" name="subject" id="subject"
                                                           placeholder="Subject" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Message</label>
                                                    <textarea name="message" class="form-control" id="message" cols="30"
                                                              rows="4" placeholder="Message" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-stretch">
                                <div id="map">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Address:</span> 59 George St, Burwood NSW 2134, Australia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Phone:</span> <a href="tel://1300740240">1300 740 240</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Email:</span> <a
                                                href="mailto:info@empiricaldev.com.au">info@empiricaldev.com.au</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW--0pnIrGT905jh0MsS6orgJ-7Thc-tk&sensor=false"></script>
    <script>
        $(document).ready(function () {
            initMap();
        });

        function initMap() {
            let map = new google.maps.Map(document.getElementById("map"), {
                center: {lat: -33.8779, lng: 151.1036},
                zoom: 12,
            });
        }
        const form = document.querySelector('.contact-us-form');

        form.addEventListener('submit', (e) => {
            e.preventDefault();

            const formData = new FormData(form);

            fetch('/request-a-quote', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    // Handle the response from the server
                    console.log(data);
                    if(data.success) {
                        // hide the form
                        $('#contact-form').hide();
                        //show success message
                        $('#form-message-success').show();
                    } else {
                        $('#contact-form').hide();
                        $('#form-message-warning').show();
                    }
                })
                .catch(error => {
                    // Handle any errors
                    console.error(error);
                    $('#contact-form').hide();
                    $('#form-message-warning').show();
                });
        });
    </script>
@endpush
