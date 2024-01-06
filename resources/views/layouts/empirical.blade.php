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
<body>

@include('includes.header')

<main>
    @yield('content')
</main>

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
    const element = document.querySelector('.call-link');

    let shaking = false;

    setInterval(() => {
        if(shaking) {
            element.classList.remove('shaking');
            shaking = false;
        } else {
            element.classList.add('shaking');
            shaking = true;
        }
    }, 2000);
</script>
@stack('scripts')
</body>
</html>
