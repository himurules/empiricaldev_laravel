@extends('layouts.empirical')

@section('title', 'Contact Us - Empirical Developments')

@section('description', 'Contact Empirical Developments for all your construction needs in the Sydney Area. Whether you have questions, need a quote, or want to discuss a project, our team is here to help. Get in touch with us today.')

@section('keywords', 'Empirical Developments, contact us, construction needs, Sydney Area, questions, quote, project, get in touch')

@section('sub-title', 'Contact Us')

@section('content')
    <section class="mt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="contact-wrap w-100 p-md-5 p-4">
                            <h3>Empirical Developments PTY Limited</h3>
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    <p>ABN 34 637 544 908</p>
                                    <p><strong>T</strong>&nbsp;&nbsp;<a href="tel://1300740240">1300 740 240</a><br>
                                        <strong>E</strong>&nbsp; &nbsp;<a href="mailto:info@empiricaldev.com.au">info@empiricaldev.com.au</a>
                                    </p>
                                </div>
                                <div class="col-md-6 text-left">
                                    <p><strong>Licences</strong><br> NSW Builder License 368631C</p>
                                    <p><strong>Memberships</strong><br> Master Builders Association NS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=" mt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters mb-5">
                            <div class="col-md-12">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Contact Us</h3>
                                    <div id="form-message-warning" class="mb-4" style="display:none;">
                                        There has been an error sending your message. Please try again later.
                                    </div>
                                    <div id="form-message-success" class="mb-4" style="display:none;">
                                        Your message has been received successfully. We will get back to you soon as
                                        possible.
                                    </div>
                                    <form method="POST" id="contact-form" name="contactForm"
                                          class="contact-form contact-us-form">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="username">*Full Name</label>
                                                    <input type="text" class="form-control" name="username"
                                                           id="username" placeholder="Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">*Email Address</label>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                           placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="phone">*Phone</label>
                                                    <input type="tel" class="form-control" name="phone" id="phone"
                                                           placeholder="Phone Number" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="project-address">What is the address of
                                                        your project?</label>
                                                    <input type="text" class="form-control" name="project_address"
                                                           id="project-address" placeholder="Project Address">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="start-date">Ideal Start Date</label>
                                                    <input type="date" class="form-control" name="start_date"
                                                           id="start-date">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="scope">*Brief description of the scope of
                                                        the project</label>
                                                    <textarea name="scope" class="form-control" id="scope" cols="30"
                                                              rows="4" placeholder="Describe the project scope"
                                                              required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Are you currently working with an architect or
                                                        designer?</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="working_with_designer" id="designerYes"
                                                               value="yes">
                                                        <label class="form-check-label" for="designerYes">Yes</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="working_with_designer" id="designerNo" value="no"
                                                               checked>
                                                        <label class="form-check-label" for="designerNo">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Have you acquired plans and designs for the project?</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="plans_acquired" id="plansYes" value="yes">
                                                        <label class="form-check-label" for="plansYes">Yes</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="plans_acquired" id="plansNo" value="no" checked>
                                                        <label class="form-check-label" for="plansNo">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Do you require council approval, and if so, have you obtained
                                                        it?</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="council_approval" id="approvalYes" value="yes">
                                                        <label class="form-check-label" for="approvalYes">Yes</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="council_approval" id="approvalNo" value="no"
                                                               checked>
                                                        <label class="form-check-label" for="approvalNo">No</label>
                                                    </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        const form = document.querySelector('.contact-us-form');

        form.addEventListener('submit', (e) => {
            e.preventDefault();

            const formData = new FormData(form);

            fetch('/request-a-contact', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    // Handle the response from the server
                    console.log(data);
                    if (data.success) {
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
