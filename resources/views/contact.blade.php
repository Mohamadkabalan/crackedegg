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
@include('partials.hero-area',['title' => 'About Us'])
<!--===== HERO AREA ENDS =======-->

<!--===== CONTACT AREA STARTS =======-->
<div class="contact-main-inner-area sp1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="heading2 contact-header">
                    <h5>Contact Us</h5>
                    <h2>Get in Touch with Cracked Eggs We Value Your Connection</h2>
                    <p>Our dedicated team is committed to providing prompt and effective support to ensure your needs are met. We believe in open communication and are always ready to listen. Reach out to us via phone, email, or live chat, or visit our office during business hours.</p>
                    <div class="space32"></div>
                    <div class="number-address-area">
                        <div class="phone-number">
                            <div class="img1">
                                <img src="assets/img/icons/phone3.svg" alt="">
                            </div>
                            <div class="content">
                                <p>Phone Number</p>
                                <a href="tel:+96170785152">+961-70785152</a>
                            </div>
                        </div>

                        <div class="phone-number m-0">
                            <div class="img1">
                                <img src="assets/img/icons/email3.svg" alt="">
                            </div>
                            <div class="content">
                                <p>Email Address</p>
                                <a href="mailto:Info@crackedegg.studio">Info@crackedegg.studio</a>
                            </div>
                        </div>
                    </div>
                    <div class="space50"></div>
                    <div class="number-address-area2">
                        <div class="phone-number">
                            <div class="img1">
                                <img src="assets/img/icons/location3.svg" alt="">
                            </div>
                            <div class="content">
                                <a href="#">1300 North Lebanon, Koura, Rasmaska <br class="d-lg-block d-none"> Main Square</a>
                            </div>
                        </div>

{{--                        <div class="phone-number">
                            <a href="https://www.google.com/maps/@24.0098057,88.9892437,15z?entry=ttu" class="map" target="_blank">View Our Map</a>
                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="contact-form-area">
                    <h4>Get In Touch</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-area">
                                <input type="text" placeholder="First Name">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="input-area">
                                <input type="text" placeholder="Last Name">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="input-area">
                                <input type="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-area">
                                <input type="number" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-area">
                                <textarea placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-area">
                                <button type="submit" class="header-btn1">Get In Touch <span><i class="fa-solid fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('layouts.footer')

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