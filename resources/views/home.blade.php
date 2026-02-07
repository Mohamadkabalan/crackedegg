<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRACKED EGG - Digital Marketing Agency</title>

    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="{{ asset('img/logo/fav-logo1.png') }}" type="image/x-icon">

    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="{{ asset('css/plugins/bootstrap.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/fontawesome.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/magnific-popup.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/mobile.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/owlcarousel.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/sidebar.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/slick-slider.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/nice-select.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!--=====  JS SCRIPT LINK =======-->
    <script src="{{ asset('js/plugins/jquery-3-6-0.min.js') }}"></script>
</head>
<body class="homepage1-body">

<!--===== PRELOADER STARTS =======-->
@include('partials.preloader')
<!--===== PRELOADER ENDS =======-->

<!--===== PROGRESS STARTS=======-->
@include('partials.progress')
<!--===== PROGRESS ENDS=======-->

<!--=====HEADER START=======-->
@include('layouts.header')
<!--=====HEADER END =======-->

<!--===== MOBILE HEADER STARTS =======-->
@include('partials.header-mobile')
<!--===== MOBILE HEADER STARTS =======-->

<!--===== HERO AREA STARTS =======-->
@include('partials.hero')
<!--===== HERO AREA ENDS =======-->

<!--===== CLIENTS AREA STARTS =======-->
@include('partials.clients')
<!--===== CLIENTS AREA ENDS =======-->

<div class="all-section-bg" style="background-image: url({{ asset('img/bg/pages-bg1.png') }}); background-repeat: no-repeat; background-size: cover;">
    <!--===== ABOUT AREA STARTS =======-->
    @include('partials.about')
    <!--===== ABOUT AREA ENDS =======-->

    <!--===== SERVICE AREA STARTS =======-->
    @include('partials.services')
    <!--===== SERVICE AREA ENDS =======-->

    <!--===== SERVICE AREA STARTS =======-->
    @include('partials.services2')
    <!--===== SERVICE AREA ENDS =======-->

    <!--===== CASE AREA STARTS =======-->
    @include('partials.projects')
    <!--===== CASE AREA ENDS =======-->


    <!--===== TESTIMONIAL AREA STARTS =======-->
    @include('partials.testimonials')
    <!--===== TESTIMONIAL AREA ENDS =======-->

    <!--===== BLOG AREA STARTS =======-->
    {{--@include('partials.blogs')--}}
    <!--===== BLOG AREA ENDS =======-->

    <!--===== CONTACT AREA STARTS =======-->
    @include('partials.contact')
    <!--===== CONTACT AREA ENDS =======-->

    <!--===== CTA AREA STARTS =======-->
    @include('partials.cta')
    <!--===== CTA AREA ENDS =======-->

    <!--===== FOOTER AREA STARTS =======-->
    @include('layouts.footer')
    <!--===== FOOTER AREA ENDS =======-->
</div>

<!--===== JS SCRIPT LINK =======-->
<script src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins/fontawesome.js') }}"></script>
<script src="{{ asset('js/plugins/aos.js')  }}"></script>
<script src="{{ asset('js/plugins/counter.js') }}"></script>
<script src="{{ asset('js/plugins/gsap.min.js') }}"></script>
<script src="{{ asset('js/plugins/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('js/plugins/Splitetext.js') }}"></script>
<script src="{{ asset('js/plugins/sidebar.js') }}"></script>
<script src="{{ asset('js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('js/plugins/mobilemenu.js') }}"></script>
<script src="{{ asset('js/plugins/owlcarousel.min.js') }}"></script>
<script src="{{ asset('js/plugins/gsap-animation.js') }}"></script>
<script src="{{ asset('js/plugins/nice-select.js') }}"></script>
<script src="{{ asset('js/plugins/waypoints.js') }}"></script>
<script src="{{ asset('js/plugins/slick-slider.js') }}"></script>
<script src="{{ asset('js/plugins/circle-progress.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>