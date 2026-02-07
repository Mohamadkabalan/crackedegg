<div class="slider-section-area sp5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="sldier-head">
                    <p>Trusted by  <br class="d-lg-block d-none"> Top Companies</p>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="slider-images-area owl-carousel">
                    @foreach($clients as $client)
                    <div class="img1">
                        <img src="{{ asset('storage/'.$client->logo) }}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>