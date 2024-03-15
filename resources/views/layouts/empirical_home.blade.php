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
    <link rel="stylesheet" href="{{ asset('storage/css/style.css?v=1.3') }}">
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
    $(document).ready(function() {
        let prevScrollPos = window.scrollY; // Define this outside to maintain its state

        function handleScroll() {
            toggleMenuOnScroll();
            const currentScrollPos = window.scrollY;
            if (currentScrollPos > 100) {
                $('#main').addClass('d-none');
                $('#scrolled').removeClass('d-none');
            } else {
                $('#scrolled').addClass('d-none');
                $('#main').removeClass('d-none');
            }
            prevScrollPos = currentScrollPos; // Update the previous scroll position
        }

        // This function checks the visibility of the navbar-toggler and collapses the menu if it's open
        function toggleMenuOnScroll() {
            $('.navbar-toggler').each(function() {
                const navbarToggler = $(this);
                // Assuming each navbar-toggler controls a corresponding navbar-collapse
                // We find the closest parent that contains both and then find navbar-collapse within it
                const navbarCollapse = navbarToggler.closest('.container, .navbar, .nav, .row, .header').find('.navbar-collapse');

                console.log(navbarToggler.is(':visible'));
                // Check if this navbar-toggler is visible and the menu is expanded
                if (navbarToggler.is(':visible') && navbarCollapse.hasClass('show')) {
                    navbarToggler.trigger('click'); // Simulate a click to collapse the menu
                }
            });
        }

        // Attach the scroll event listener to window
        $(window).on('scroll', handleScroll);
    });
</script>
@stack('scripts')
</body>
</html>
