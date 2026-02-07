<div class="hero1-section-area" style="background-image: url({{ asset('img/bg/header-bg1.png')  }});">
    <img src="{{ asset('img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="header-main-content heading1">
                    <h5><img src="{{ asset('img/icons/logo-icons.svg') }}" alt="">{{$hero->heading}}</h5>
                    <h1 class="text-anime-style-3">{{$hero->title}}</h1>
                    <p data-aos="fade-left" data-aos-duration="1000">{{$hero->description}}</p>
                    <div class="btn-area" data-aos="fade-left" data-aos-duration="1200">
                        <a href="/contact" class="header-btn1">Start Ranking Now <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        <a href="/contact" class="header-btn2">Contact Now <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="header-images-area">
                    <div class="main-images-area">
                        <div class="img1">
                            <img src="{{ asset('storage/'.$hero->image1) }}" alt="" data-aos="zoom-in" data-aos-duration="1000">
                        </div>
                        <div class="img2">
                            <img src="{{ asset('storage/'.$hero->image2) }}" alt="">
                        </div>
                        <div class="icons-area">
                            <img src="{{ asset('img/icons/sound-icons1.svg') }}" alt="" class="sound-icons1 aniamtion-key-1">
                            <img src="{{ asset('img/icons/lite-icons1.svg') }}" alt="" class="lite-icons1 aniamtion-key-1">
                        </div>
                        <div class="auhtor-icons">
                            <img src="{{ asset('img/elements/elements2.png') }}" alt="" class="elements2">
                            <img src="{{ asset('img/elements/elements3.png') }}" alt="" class="elements3">
                        </div>
                        <div class="auhtor-images">
                            <img src="{{ asset('storage/'.$hero->image2) }}" alt="" class="header-author-img1 aniamtion-key-2">
                            <img src="{{ asset('storage/'.$hero->image3) }}" alt="" class="header-author-img2 aniamtion-key-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
