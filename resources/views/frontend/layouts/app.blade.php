<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>HIMASTER FMIPA UNTAN</title>
    <meta content="website himaster fmipa untan" name="description">
    <meta content="himaster website himpunan sistem komputer untan fmipa pontianak event" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link rel="icon" href="{{ asset('img/HIMASTER.ico') }}" type="image/x-icon">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    @yield('css')
     {{-- Variables CSS Files. Uncomment your preferred color scheme  --}}
    {{-- <link href="{{ asset('frontend/assets/css/variables.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{asset('frontend/assets/css/variables-blue.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{asset('frontend/assets/css/variables-green.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{asset('frontend/assets/css/variables-orange.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('frontend/assets/css/variables-purple.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('frontend/assets/css/variables-red.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{asset('frontend/assets/css/variables-pink.css')}}" rel="stylesheet"> --}}

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/main.css') }}" rel="stylesheet">
</head>

<body>

    @include('frontend.layouts.navbar')



    <main id="main">
        @yield('content')
    </main>
    <!-- End #main -->

    @include('frontend.layouts.footer')

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    @yield('js')
</body>

</html>
