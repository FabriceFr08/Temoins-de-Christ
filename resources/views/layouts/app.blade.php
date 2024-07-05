<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>@yield('title') - Temoins de Christ</title>
    @yield('head')
    <link rel="icon" type="image/x-icon" href="{{asset('LOGO_TEMOINS_DE_CHRIST_fond_transparent-300x300.png')}}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.11/build/css/intlTelInput.css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Yantramanav:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <!-- Libraries Stylesheet -->

    @vite('resources/lib/owlcarousel/assets/owl.carousel.min.css')
    @vite('resources/lib/lightbox/css/lightbox.min.css')
    @vite('resources/lib/animate/animate.min.css')


    <!-- Customized Bootstrap Stylesheet -->
    @vite('resources/css/bootstrap.min.css')

    <!-- Template Stylesheet -->
    @vite('resources/css/style.css')
    @vite('resources/lib/owlcarousel/owl.carousel.min.js')
    @vite('resources/lib/counterup/counterup.min.js')
    @vite('resources/lib/wow/wow.min.js')
    @vite('resources/lib/lightbox/js/lightbox.min.js')
    @vite('resources/lib/waypoints/waypoints.min.js')
    @vite('resources/lib/easing/easing.min.js')
    @vite('resources/js/main.js')

</head>

<body>

<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


{{--@include('.partials.topbar')--}}

@include('.partials.navbar')




{{--@include('.partials.banner')--}}

@yield('content')

@include('.partials.footer')

@include('.partials.copyright')

<!-- Back to Top -->
<a href="#" class="btn btn-success btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" ></script>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.11/build/js/intlTelInput.min.js"></script>

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


</body>

</html>
