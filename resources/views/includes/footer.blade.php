
@if(!request()->is('contact-us'))
    @include('includes/cta')
@endif
<footer class="footer" style="line-height: 1.2">
    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col-md-12 py-2 text-center"> <!-- Add 'text-center' to this div -->
                <div class="row justify-content-center"> <!-- Add 'justify-content-center' for horizontal centering in Bootstrap 4 -->
                    <p>
                        <a href="/">
                            <img src="{{ asset('storage/images/icons/logo_scrolled.png') }}" alt="IMG">
                        </a>
                    </p>
                </div>
                <div class="row justify-content-center">
                    <p>
                        <a href="tel://1300740240">1300 740 240</a> | <a href="mailto:info@empiricaldev.com.au">info@empiricaldev.com.au</a>
                    </p>
                </div>
                <div class="row justify-content-center">
                    <ul class="ftco-footer-social p-0">
                        <li class="list-inline-item"><a href="https://www.facebook.com/empiricaldevelopments"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Facebook" target="_new"><span
                                    class="ion-logo-facebook"></span></a>
                        </li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/empirical_developments"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Instagram" target="_new"><span
                                    class="ion-logo-instagram"></span></a>
                        </li>
                    </ul>
                </div>
                <div class="row justify-content-center">
                    <ul class="list-unstyled text-center"> <!-- Add 'text-center' here if needed -->
                        <li>
                            <p>Empirical Developments PTY LMT | Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                All rights reserved
                            </p>
                        </li>
                    </ul>
                </div>
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
