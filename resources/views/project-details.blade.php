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
    <link rel="stylesheet" href="{{ asset('css/plugins/mobile.css') }}?v={{ filemtime(public_path('css/plugins/mobile.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/owlcarousel.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/sidebar.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/slick-slider.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/nice-select.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}?v={{ filemtime(public_path('css/main.css')) }}">

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

@include('partials.hero-area',['title'=> 'Project detail'])

<!--===== CASE AREA STARTS =======-->
<div class="case-single-section-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="case-auhtor-area sp1">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="case-single-hedaer heading2">
                                <h2>Information</h2>
                                <p>{{$project->content}}</p>
                                <div class="case-others-area">
                                    <ul>
                                        <li><span>Category:</span>Keyword Research & Analysis</li>
                                        <li><span>Date:</span>{{ \Carbon\Carbon::parse($project->created_at)->translatedFormat('j F Y') }}</li>
                                        <li><span>Client:</span>{{$project->title}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-7">
                            <div class="case-images image-anime">
                                <img src="{{asset('storage/'.$project->featured_image)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== CASE AREA ENDS =======-->
<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tabs-content-area">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="#pills-email-tab">
                            <div class="tabs-contents">
                                <div class="row align-items-center">
                                    @foreach ($project->images as $img)
                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('storage/' . $img->path) }}"   alt="{{ $project->title }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div style="margin-bottom:50px;">
    <div class="container">
        <div class="row">


            @foreach ($project->videos as $video)
                    <div class="col-lg-4">
                        <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;">
                            <iframe
                                    src="{{ $video->source_url }}"
                                    style="position:absolute;top:0;left:0;width:100%;height:100%;"
                                    frameborder="0"
                                    allowfullscreen
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    width="360"
                                    height="640"
                            ></iframe>
                        </div>
                    </div>

            @endforeach

        </div>
    </div>
</div>


@include('partials.cta')
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