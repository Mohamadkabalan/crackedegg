<div class="case1-section-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="case-header-area heading2 text-center">
                    <img src="{{ asset('img/elements/star2.png') }}" alt="" class="star2 keyframe5">
                    <img src="{{ asset('img/elements/star2.png') }}" alt="" class="star3 keyframe5">
                    <h2 class="text-anime-style-3">Benefits of SEO & Digital Marketing</h2>
                    <p data-aos="fade-up" data-aos-duration="1000">By investing in strategic SEO and digital marketing initiatives, businesses can <br class="d-md-block d-none"> unlock a myriad of benefits.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12" data-aos="zoom-out" data-aos-duration="1200">
                <div class="cs_case_study_1_list">

                    @foreach($projects as $project)
                    <div class="cs_case_study cs_style_1 cs_hover_active active" data-aos="fade-up" data-aos-duration="800">
                        <a href="{{ route('project.show', $project->slug) }}" class="cs_case_study_thumb cs_bg_filed" data-src="{{ asset('storage/'.$project->featured_image) }}"></a>
                        <div class="content-area1">
                            <a href="{{ route('project.show', $project->slug) }}" class="head">{{$project->title}}</a>
                        </div>
                        <div class="content-area">
                            <a href="{{ route('project.show', $project->slug) }}" class="head">
                            <p>{{$project->title}}</p>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
