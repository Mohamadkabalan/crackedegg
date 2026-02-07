<div class="service1-section-area sp9">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="service-header-area heading2 text-center">
                    <img src="{{ asset('img/elements/star2.png') }}" alt="" class="star2 keyframe5">
                    <img src="{{ asset('img/elements/star2.png') }}" alt="" class="star3 keyframe5">
                    <h2 class="text-anime-style-3">Popular Digital Marketing Services <br class="d-md-block d-none"> To Build Your Business</h2>
                    <p data-aos="fade-up" data-aos-duration="1000">Our expert team specializes in delivering tailored solutions designed to elevate <br class="d-md-block d-none"> your brand and drive measurable results. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="service-all-boxes-area">
                    @foreach($services as $service)
                    <div class="service-boxarea {{$loop->iteration > 1 ? 'box'.$loop->iteration : ''}} " data-aos="zoom-in" data-aos-duration="800">

                        <a href="javascript:;">{{$service->title}}</a>
                        <div class="space40"></div>
                        <img src="{{ asset('storage/'.$service->icon) }}" alt="">
                        <div class="space40"></div>
                        <p>{{$service->description}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
