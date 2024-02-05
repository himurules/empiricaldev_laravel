<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('storage/images/icons/favicon.ico') }}"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('storage/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('storage/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('storage/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('storage/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/style.css') }}">
</head>
<body class="pt-0">

@include('includes.header_home')

@yield('content')

@include('includes.footer')

<script src="{{ asset('storage/js/jquery.min.js') }}"></script>
<script src="{{ asset('storage/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('storage/js/popper.min.js') }}"></script>
<script src="{{ asset('storage/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('storage/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('storage/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('storage/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('storage/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('storage/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('storage/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('storage/js/scrollax.min.js') }}"></script>
<script src="{{ asset('storage/js/main.js') }}"></script>
<script>
    const element1 = document.querySelector('.call-link');
    const element2 = document.querySelector('.call-link-2');
    let shaking = false;

    setInterval(() => {
        if (shaking) {
            element1.classList.remove('shaking');
            element2.classList.remove('shaking');
            shaking = false;
        } else {
            element1.classList.add('shaking');
            element2.classList.add('shaking');
            shaking = true;
        }
    }, 2000);

    let prevScrollPos = window.scrollY;

    window.addEventListener('scroll', handleScroll);

    function handleScroll() {
        const currentScrollPos = window.scrollY;
        const header = document.querySelector('.header-home');

        if (currentScrollPos > prevScrollPos) {
            // Scrolling down
            // hide the navigation
            $('#main').addClass('d-none');
            $('#scrolled').removeClass('d-none');
        } else {
            // Scrolling up
            // show the navigation
            $('#main').removeClass('d-none');
            $('#scrolled').addClass('d-none');
            if(currentScrollPos > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }

        prevScrollPos = currentScrollPos;
    }
</script>
@stack('scripts')
</body>
</html>
