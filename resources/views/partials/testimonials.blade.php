<div class="testimonial1-section-area sp6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="testimonial-header heading2 text-center">
                    <img src="{{ asset('img/elements/star2.png') }}" alt="" class="star2 keyframe5">
                    <img src="{{ asset('img/elements/star2.png') }}" alt="" class="star3 keyframe5">
                    <h2 class="text-anime-style-3">What Our Client Say <br class="d-md-block d-none"> On Google Reviews</h2>
                    <p data-aos="fade-up" data-aos-duration="1000">Don't just take our word for it. Hear what our satisfied clients <br class="d-md-block d-none"> have to say about their experience partnering with crackedegg</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 m-auto" data-aos="fade-up" data-aos-duration="1000">
                <div class="testimonials-slider-area owl-carousel">

                    @foreach ($testimonials as $testimonial)
                    <div class="testimonial-boxarea">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="pera">
                                    <p>{{$testimonial->content}}</p>
                                    <div class="space100"></div>
                                    <div class="space30"></div>
                                    <div class="list-area">
                                        <div class="list">

                                            <ul>
                                                @for($i=0; $i<5;$i++)
                                                    @if($i < $testimonial->rating)
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    @else
                                                        <li><i class="fa-regular fa-star"></i></li>
                                                    @endif
                                                @endfor
                                            </ul>
                                            <a href="javascript:;">{{$testimonial->name}}</a>
                                        </div>
                                        <p>{{$testimonial->company }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="images">
                                    <img src="{{ asset('storage/'.$testimonial->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
