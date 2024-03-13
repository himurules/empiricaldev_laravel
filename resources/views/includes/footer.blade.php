<footer class="footer">
    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col-md-6 py-5">
                <div class="row">
                    <p>
                        <a href="/">
                            <img src="{{ asset('storage/images/icons/logo_scrolled.png') }}" alt="IMG">
                        </a>
                    </p>
                </div>
                <div class="row">
                    <p>
                        <a href="tel://1300740240">1300 740 240</a> | <a href="mailto:info@empiricaldev.com.au">info@empiricaldev.com.au</a>
                    </p>
                </div>
                <div class="row">
                    <ul class="ftco-footer-social p-0">
                        <li><a href="https://www.facebook.com/empiricaldevelopments"
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="Facebook" target="_new"><span
                                    class="ion-logo-facebook"></span></a>
                        </li>
                        <li><a href="https://www.instagram.com/empirical_developments"
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="Instagram" target="_new"><span
                                    class="ion-logo-instagram"></span></a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <ul class="list-unstyled">
                        <li>
                            <h2 class="footer-heading">Licenses</h2>
                        </li>
                        <li>
                            <p>NSW Builder License 368631C</p>
                        </li>
                        <li>
                            <h2 class="footer-heading">Memberships</h2>
                        </li>
                        <li>
                            <p>Master Builders Association NS | ABN 34 637 544 908</p>
                        </li>
                        <li>
                            <p>Empirical Development PTY Limited | Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                All rights reserved
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 py-md-5 py-4 aside-stretch-right pl-lg-5">
                <h2 class="footer-heading">Request A Quote</h2>
                <!-- show the success message once the message has been sent -->
                <div class="alert alert-success" style="display: none;" id="quote-success">
                    Your message has been received successfully. We will get back to you soon as possible.
                </div>
                <div class="alert alert-danger" style="display: none;" id="quote-error">
                    There has been an error sending your message. Please try again later.
                </div>

                <form action="#" class="contact-form quote-form" id="quote-form">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name" name="username" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <textarea id="" cols="30" rows="3" class="form-control" placeholder="Message" required
                                  name="message"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control submit px-3">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>

@push('scripts')
    <script>
        const form = document.querySelector('.quote-form');

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
                    if (data.success) {
                        // hide the form
                        $('#quote-form').hide();
                        //show success message
                        $('#quote-success').show();
                    } else {
                        $('#quote-form').hide();
                        $('#quote-error').show();
                    }
                })
                .catch(error => {
                    // Handle any errors
                    console.error(error);
                    $('#quote-form').hide();
                    $('#quote-error').show();
                });
        });
    </script>
@endpush
