<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crackedegg - Digital Marketing Agency</title>

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
@include('partials.about')

<!--===== WORK AREA STARTS =======-->
<div class="works-inner-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="works-header-area heading2">
                    <h5>Why Choose Us</h5>
                    <h2>Experience the Advantage Why We're the Right Choice</h2>
                    <p>At Crackedegg we understand that you have many options when it comes to digital marketing services. So why should you choose us? Here are a few reasons</p>
                    <div class="space32"></div>
                    <div class="works-content-box">
                        <div class="icons">
                            <img src="{{asset('img/icons/works-icons7.svg')}}" alt="">
                        </div>
                        <div class="content">
                            <a href="case.html">Proven Result</a>
                            <p>We have a track record of delivering tangible results for our clients. From increasing website traffic and improving search. </p>
                        </div>
                    </div>
                    <div class="space20"></div>
                    <div class="works-content-box">
                        <div class="icons">
                            <img src="{{asset('img/icons/works-icons8.svg')}}" alt="">
                        </div>
                        <div class="content">
                            <a href="case-single.html">Customized Solutions</a>
                            <p>We believe that one size does not fit all when it comes to digital marketing. That's why we take the time to understand your SEO. </p>
                        </div>
                    </div>
                    <div class="space20"></div>
                    <div class="works-content-box">
                        <div class="icons">
                            <img src="{{asset('img/icons/works-icons9.svg')}}" alt="">
                        </div>
                        <div class="content">
                            <a href="case-single.html">Dedicated Support</a>
                            <p>Your success is our top priority. That's why provide dedicated support and guidance every step of the way to running seo.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-all-images-area">
                    <img src="{{asset('img/elements/elements14.png')}}" alt="" class="elements12 keyframe5">
                    <img src="{{asset('img/elements/elements15.png')}}" alt="" class="elements13 keyframe5">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="img1 image-anime">
                                <div class="space100"></div>
                                <img src="{{asset('img/all-images/about-img6.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="img2 image-anime">
                                <img src="{{asset('img/all-images/about-img5.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== WORK AREA ENDS =======-->

@include('partials.services2')

<!--===== HISTORY AREA STARTS =======-->
<div class="history-inner-section-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="history-header-area text-center heading2">
                    <img src="{{asset('img/elements/star7.png')}}" alt="" class="star2 keyframe5">
                    <img src="{{asset('img/elements/star7.png')}}" alt="" class="star3 keyframe5">
                    <h5>Our History</h5>
                    <h2>Our Journey: Charting the <br class="d-lg-block d-none"> Evolution of Crackedegg</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-all-images-area">
                    <img src="{{asset('img/elements/elements14.png')}}" alt="" class="elements12 keyframe5">
                    <img src="{{asset('img/elements/elements15.png')}}" alt="" class="elements13 keyframe5">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="img1 image-anime">
                                <div class="space100"></div>
                                <img src="{{asset('img/all-images/history-img1.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="img2 image-anime">
                                <img src="{{asset('img/all-images/history-img2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="history-content-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="history-box-content">
                                <h5>2015</h5>
                                <a href="service1.html">Inception and Founding</a>
                                <p>Crackedegg was founded with a vision to revolutionize the digital marketing industry and provide innovation.</p>
                                <a href="service1.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="history-box-content">
                                <h5>2016</h5>
                                <a href="service1.html">Expansion and Growth</a>
                                <p>The team expanded to include additional members with diverse skill sets and expertise allowing us.</p>
                                <a href="service1.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="history-box-content">
                                <h5>2017</h5>
                                <a href="service1.html">Recognition and Awards</a>
                                <p>We were honored to recognized as a leader in the digital marketing space and received accolades customer.</p>
                                <a href="service1.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="history-box-content">
                                <h5>2018</h5>
                                <a href="service1.html">Launch of New Services</a>
                                <p>Building on our success, Crackedegg expanded our service offerings to better meet the evolving needs. </p>
                                <a href="service1.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="history-box-content">
                                <h5>2019</h5>
                                <a href="service1.html">Strategic Partnerships </a>
                                <p>Crackedegg formed strategic partnerships and collaborations with industry leaders and technology providers. </p>
                                <a href="service1.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="history-box-content">
                                <h5>2020</h5>
                                <a href="service1.html">Continued Growth  Success</a>
                                <p>2020 continued to experience steady growth and success, despite ongoing challenges in external environment.</p>
                                <a href="service1.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HISTORY AREA ENDS =======-->

<!--===== SKILLS AREA STARTS =======-->
<div class="skills-section-area sp2">
    <img src="{{asset('img/bg/cta-bg1.png')}}" alt="" class="cta-bg1 aniamtion-key-2">
    <img src="{{asset('img/bg/cta-bg2.png')}}" alt="" class="cta-bg2 aniamtion-key-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 m-auto">
                <div class="skills-header text-center heading2">
                    <h5>Skills</h5>
                    <h2>Our Skills</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-10 m-auto">
            <div class="circle-progress-area">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="progresbar">
                            <div class="progressbar">
                                <div class="circle" data-percent="82">
                                    <canvas></canvas>
                                    <div>82%</div>
                                </div>
                            </div>
                            <p>S M M</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="progresbar">
                            <div class="progressbar">
                                <div class="circle two" data-percent="49">
                                    <canvas></canvas>
                                    <div>49%</div>
                                </div>
                            </div>
                            <p>P P C</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="progresbar">
                            <div class="progressbar">
                                <div class="circle three" data-percent="99">
                                    <canvas></canvas>
                                    <div>99%</div>
                                </div>
                            </div>
                            <p>SEO</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="progresbar">
                            <div class="progressbar">
                                <div class="circle four" data-percent="95">
                                    <canvas></canvas>
                                    <div>95%</div>
                                </div>
                            </div>
                            <p>Digital Marketing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== SKILLS AREA ENDS =======-->

<!--===== TEAM AREA STARTS =======-->
<div class="team-inner-section-area sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="team2-header-area text-center heading2">
                    <h5>Our Team</h5>
                    <h2>Meet With Our Expert Team</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team-boxarea">
                    <div class="img1">
                        <img src="{{asset('img/all-images/team-img1.png')}}" alt="">
                    </div>
                    <ul>
                        <li><a href="#"><img src="{{asset('img/icons/facebook.svg')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('img/icons/instagram.svg')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('img/icons/linkedin.svg')}}" alt=""></a></li>
                        <li><a href="#" class="m-0"><img src="{{asset('img/icons/youtube.svg')}}" alt=""></a></li>
                    </ul>
                    <div class="content">
                        <a href="team.html">John Doe</a>
                        <p>CEO & Founder</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="team-boxarea">
                    <div class="img1">
                        <img src="{{asset('img/all-images/team-img2.png')}}" alt="">
                    </div>
                    <ul>
                        <li><a href="#"><img src="{{asset('img/icons/facebook.svg')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('img/icons/instagram.svg')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('img/icons/linkedin.svg')}}" alt=""></a></li>
                        <li><a href="#" class="m-0"><img src="{{asset('img/icons/youtube.svg')}}" alt=""></a></li>
                    </ul>
                    <div class="content">
                        <a href="team.html">Jane Smith</a>
                        <p>Digital Marketing Officer</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="team-boxarea">
                    <div class="img1">
                        <img src="{{asset('img/all-images/team-img3.png')}}" alt="">
                    </div>
                    <ul>
                        <li><a href="#"><img src="{{asset('img/icons/facebook.svg')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('img/icons/instagram.svg')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('img/icons/linkedin.svg')}}" alt=""></a></li>
                        <li><a href="#" class="m-0"><img src="{{asset('img/icons/youtube.svg')}}" alt=""></a></li>
                    </ul>
                    <div class="content">
                        <a href="team.html">Sarah Thompson </a>
                        <p>Web Designer</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="team-boxarea m-0">
                    <div class="img1">
                        <img src="{{asset('img/all-images/team-img4.png')}}" alt="">
                    </div>
                    <ul>
                        <li><a href="#"><img src="{{asset('img/icons/facebook.svg')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('img/icons/instagram.svg')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('img/icons/linkedin.svg')}}" alt=""></a></li>
                        <li><a href="#" class="m-0"><img src="{{asset('img/icons/youtube.svg')}}" alt=""></a></li>
                    </ul>
                    <div class="content">
                        <a href="team.html">David Garcia</a>
                        <p>Content Writer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== TEAM AREA ENDS =======-->

@include('partials.cta')

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