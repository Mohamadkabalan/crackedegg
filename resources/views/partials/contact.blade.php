<div class="contact1-section-area sp6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="contact-header-area text-center heading2">
                    <img src="{{ asset('img/elements/star2.png') }}" alt="" class="star2 keyframe5">
                    <img src="{{ asset('img/elements/star2.png') }}" alt="" class="star3 keyframe5">
                    <h2 class="text-anime-style-3">Get In Touch With Us Today</h2>
                    <p>1We're here to help! If you have any questions or would like to discuss <br class="d-md-block d-none"> how our SEO and digital marketing services can benefit your business,</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5" data-aos="zoom-out" data-aos-duration="1000">
                <div class="contact-info-area">
                    <h3>Contact Info</h3>
                    <p>We're here to help! If you have any questions or would like to discuss how our SEO and digital marketing services can benefit your business,</p>
                    <div class="space32"></div>
                    <div class="contact-auhtor-box">
                        <div class="icons">
                            <img src="{{ asset('img/icons/location2.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <h4>Our Location</h4>
                            <a href="#">1300, Rasmaska,  Koura   <br class="d-lg-block d-none"> North Lebanon</a>
                        </div>
                    </div>
                    <div class="space40"></div>
                    <div class="contact-auhtor-box">
                        <div class="icons">
                            <img src="{{ asset('img/icons/phone2.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <h4>Phone Number</h4>
                            <a href="tel:+961-70785152">+961-70785152</a>
                        </div>
                    </div>
                    <div class="space40"></div>
                    <div class="contact-auhtor-box">
                        <div class="icons">
                            <img src="{{ asset('img/icons/email2.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <h4>Email Address</h4>
                            <a href="mailto:info@crackedegg.studio">info@crackedegg.studio</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="zoom-out" data-aos-duration="1200">
                <div class="contact-boxarea">
                    <h3>Get In Touch</h3>
                    <p>We're here to help! If you have any questions or would like to discuss <br class="d-lg-block d-none"> how our SEO and digital marketing services can benefit your business,</p>
                    <form action="{{ route('contact.send')  }}" method="POST" id="contactForm">
                        @csrf
                        <div id="formAlert" class="alert mt-3" style="display:none;"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-area">
                                    <input type="text" placeholder="First Name" name="first_name" value="{{ old('first_name') }}" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-area">
                                    <input type="text" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}"  required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-area">
                                    <input type="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="input-area">
                                    <input type="number" placeholder="Phone Number" name="phone" value="{{ old('phone') }}" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="input-area">
                                    <textarea placeholder="Your Message" name="message" value="{{ old('message') }}" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-area">
                                    <button class="header-btn1" id="contactSubmitBtn">Free Consultation <span><i class="fa-solid fa-arrow-right"></i></span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/contact.js') }}"></script>
