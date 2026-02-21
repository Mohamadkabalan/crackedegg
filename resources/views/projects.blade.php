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

@include('partials.hero-area',['title'=> 'Projects'])


<!--===== CASE AREA STARTS =======-->
<div class="case-inner-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="case-header text-center heading2">
                    <h5>Case Study</h5>
                    <h2>Our Case Studies</h2>
                </div>
                <div class="space50 d-lg-block d-none"></div>
                <div class="space30 d-lg-none d-block"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="tabs-area text-center">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-email-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="false">All
                            </button>
                        </li>

                        @foreach($categories as $category)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-{{$category->slug}}-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-{{ $category->slug }}" type="button" role="tab"
                                        aria-controls="pills-{{ $category->slug }}" aria-selected="false">{{ $category->name }}
                                </button>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="tabs-content-area">
                    <div class="tab-content" id="pills-tabContent" >
                        <div class="tab-pane fade active show" id="pills-home" role="tabpanel"  >
                            <div class="tabs-contents">
                                <div class="row align-items-center">
                                    @foreach($categories as $category)
                                        @foreach($category->projects as $project)
                                            <div class="col-lg-4">
                                                <div class="case-inner-box">
                                                    <div class="img1 image-anime">
                                                        <img
                                                                src="{{ $project->featured_image ? asset('storage/'.$project->featured_image) : asset('img/placeholder.png') }}"
                                                                alt="{{ $project->title }}"
                                                        >
                                                    </div>

                                                    <div class="content-area">
                                                        <div class="link-area">
                                                            <a href="{{ route('projects.index', ['category' => $project->category_id]) }}" class="tags">
                                                                #{{ $project->category?->name }}
                                                            </a>

                                                            <a href="{{ route('project.show', $project->slug) }}" class="head">
                                                                {{ $project->title }}
                                                            </a>
                                                        </div>

                                                        <div class="arrow">
                                                            <a href="{{ route('project.show', $project->slug) }}">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @foreach($categories as $category)
                        <div class="tab-pane fade" id="pills-{{$category->slug}}" role="tabpanel"  >
                            <div class="tabs-contents">
                                <div class="row align-items-center">
                                    @foreach($category->projects as $project)
                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img
                                                            src="{{ $project->featured_image ? asset('storage/'.$project->featured_image) : asset('img/placeholder.png') }}"
                                                            alt="{{ $project->title }}"
                                                    >
                                                </div>

                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="{{ route('projects.index', ['category' => $project->category_id]) }}" class="tags">
                                                            #{{ $project->category?->name }}
                                                        </a>

                                                        <a href="{{ route('project.show', $project->slug) }}" class="head">
                                                            {{ $project->title }}
                                                        </a>
                                                    </div>

                                                    <div class="arrow">
                                                        <a href="{{ route('project.show', $project->slug) }}">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
{{--            <div class="col-lg-12">
                <div class="pagination-area">
                        <div class="d-flex justify-content-center">
                            {{ $projects->links('partials.pagination') }}
                        </div>
                </div>
            </div>--}}
        </div>
    </div>
</div>
<!--===== CASE AREA ENDS =======-->

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