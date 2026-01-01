@extends('layouts.frontend.main')
@section('title', 'Our Services')
@section('meta')
@endsection

@section('content')
<!-- Start Page Banner Area -->
<div class="page-banner-area bg-2 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
            <h2>Services Style One</h2>

            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Services Style One</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Choose Area -->
<div class="choose-area pt-100 pb-75">
    <div class="container">
        <div class="section-title">
            <span>KEY FEATURES</span>
            <h2>We Help You To <b>Increase</b> Your Sale Through Solutions <span class="overlay"></span></h2>
            <p>We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-choose-card" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <div class="choose-image" data-tilt>
                        <a href="#"><img src="{{ asset('frontend/assets/img/choose-1.png') }}" alt="image"></a>
                    </div>
                    <div class="choose-content">
                        <h3>
                            <a href="#">Mobile Apps</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-choose-card" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                    <div class="choose-image" data-tilt>
                        <a href="#"><img src="{{ asset('frontend/assets/img/choose-2.png') }}" alt="image"></a>
                    </div>
                    <div class="choose-content">
                        <h3>
                            <a href="#">Branding Strategy</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-choose-card" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                    <div class="choose-image" data-tilt>
                        <a href="#"><img src="{{ asset('frontend/assets/img/choose-3.png') }}" alt="image"></a>
                    </div>
                    <div class="choose-content">
                        <h3>
                            <a href="#">Graphic Design</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-choose-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <div class="choose-image" data-tilt>
                        <a href="#"><img src="{{ asset('frontend/assets/img/choose-4.png') }}" alt="image"></a>
                    </div>
                    <div class="choose-content">
                        <h3>
                            <a href="#">Search Optimization</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="choose-shape-1">
        <img src="{{ asset('frontend/assets/img/choose-shape.png') }}" alt="image">
    </div>
    <div class="choose-shape-2">
        <img src="{{ asset('frontend/assets/img/choose-shape-2.png') }}" alt="image">
    </div>
</div>
<!-- End Choose Area -->

<!-- Start Services Area -->
<div class="services-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>SERVICES</span>
            <h2>We Provide the Best Quality <b>Services</b> <span class="overlay"></span></h2>
            <p>We are technology solutions providing company all over the world doing over 40 years. lorem ipsum dolor sit amet.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="services-item">
                    <div class="services-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/services-1.jpg') }}" alt="image"></a>
                    </div>
                    <div class="services-content">
                        <h3>
                            <a href="#">Software Development</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>
                        <a href="#" class="services-btn">View More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="services-item">
                    <div class="services-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/services-1.jpg') }}" alt="image"></a>
                    </div>
                    <div class="services-content">
                        <h3>
                            <a href="#">App Development</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>
                        <a href="#" class="services-btn">View More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="services-item">
                    <div class="services-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/services-1.jpg') }}" alt="image"></a>
                    </div>
                    <div class="services-content">
                        <h3>
                            <a href="#">Web Development</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>
                        <a href="#" class="services-btn">View More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="services-item">
                    <div class="services-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/services-1.jpg') }}" alt="image"></a>
                    </div>
                    <div class="services-content">
                        <h3>
                            <a href="#">Analytic Solutions</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>
                        <a href="#" class="services-btn">View More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="services-item">
                    <div class="services-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/services-1.jpg') }}" alt="image"></a>
                    </div>
                    <div class="services-content">
                        <h3>
                            <a href="#">Database Administrator</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>
                        <a href="#" class="services-btn">View More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="services-item">
                    <div class="services-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/services-1.jpg') }}" alt="image"></a>
                    </div>
                    <div class="services-content">
                        <h3>
                            <a href="#">Product Design</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>
                        <a href="#" class="services-btn">View More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <a href="#" class="prev page-numbers"><i class="ri-arrow-left-s-line"></i></a>
                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="#" class="page-numbers">2</a>
                    <a href="#" class="page-numbers">3</a>
                    <a href="#" class="next page-numbers"><i class="ri-arrow-right-s-line"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="services-shape-1">
        <img src="{{ asset('frontend/assets/img/services-shape-1.png') }}" alt="image">
    </div>
    <div class="services-shape-2">
        <img src="{{ asset('frontend/assets/img/services-shape-2.png') }}" alt="image">
    </div>
</div>
<!-- End Services Area -->

<!-- Start Services Area -->
<div class="services-area-style-two ptb-100">
    <div class="container-fluid">
        <div class="section-title">
            <span>SERVICES</span>
            <h2>We Provide the Best Quality <b>Services</b> <span class="overlay"></span></h2>
            <p>We are technology solutions providing company all over the world doing over 40 years. lorem ipsum dolor sit amet.</p>
        </div>

        <div class="services-slides-two owl-carousel owl-theme">
            <div class="services-item">
                <div class="services-image">
                    <a href="#"><img src="{{ asset('frontend/assets/img/services-1.jpg') }}" alt="image"></a>
                </div>
                <div class="services-content">
                    <h3>
                        <a href="#">Database Administrator</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>
                    <a href="#" class="services-btn">View More</a>
                </div>
            </div>

            <div class="services-item">
                <div class="services-image">
                    <a href="#"><img src="{{ asset('frontend/assets/img/services-1.jpg') }}" alt="image"></a>
                </div>
                <div class="services-content">
                    <h3>
                        <a href="#">Software Development</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>
                    <a href="#" class="services-btn">View More</a>
                </div>
            </div>

            <div class="services-item">
                <div class="services-image">
                    <a href="#"><img src="{{ asset('frontend/assets/img/services-1.jpg') }}" alt="image"></a>
                </div>
                <div class="services-content">
                    <h3>
                        <a href="#">App Development</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>
                    <a href="#" class="services-btn">View More</a>
                </div>
            </div>

            <div class="services-item">
                <div class="services-image">
                    <a href="#"><img src="{{ asset('frontend/assets/img/services-1.jpg') }}" alt="image"></a>
                </div>
                <div class="services-content">
                    <h3>
                        <a href="#">Web Development</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>
                    <a href="#" class="services-btn">View More</a>
                </div>
            </div>

            <div class="services-item">
                <div class="services-image">
                    <a href="#"><img src="{{ asset('frontend/assets/img/services-1.jpg') }}" alt="image"></a>
                </div>
                <div class="services-content">
                    <h3>
                        <a href="#">Analytic Solutions</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>
                    <a href="#" class="services-btn">View More</a>
                </div>
            </div>

            <div class="services-item">
                <div class="services-image">
                    <a href="#"><img src="{{ asset('frontend/assets/img/services-1.jpg') }}" alt="image"></a>
                </div>
                <div class="services-content">
                    <h3>
                        <a href="#">Product Design</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>
                    <a href="#" class="services-btn">View More</a>
                </div>
            </div>

            <div class="services-item">
                <div class="services-image">
                    <a href="#"><img src="{{ asset('frontend/assets/img/services-1.jpg') }}" alt="image"></a>
                </div>
                <div class="services-content">
                    <h3>
                        <a href="#">Cloud & DevOps</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet con setetur sadipscing elitr sed…</p>
                    <a href="#" class="services-btn">View More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="services-shape-1">
        <img src="{{ asset('frontend/assets/img/services-shape-1.png') }}" alt="image">
    </div>
    <div class="services-shape-2">
        <img src="{{ asset('frontend/assets/img/services-shape-2.png') }}" alt="image">
    </div>
</div>
<!-- End Services Area -->

<!-- Start Talk Area -->
<div class="talk-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="talk-image" data-tilt>
                    <img src="{{ asset('frontend/assets/img/talk-2.png') }}" alt="image">

                    <div class="talk-circle">
                        <img src="{{ asset('frontend/assets/img/talk-circle.png') }}" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="talk-content margin-zero">
                    <span>LET'S TALK</span>
                    <h3>We Would Like To Hear From You Any Question <span class="overlay"></span></h3>
                    <p>Lorem ipsum dolor sit amet consetetur sadipscing elitre sed diam non umy eirmod tempor invidunt ut labore.</p>

                    <form id="contactFormTwo">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required data-error="Please enter your name" placeholder="Your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required data-error="Please enter your email" placeholder="Your email address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Write your message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">Send Message<span></span></button>
                                <div id="msgSubmitTwo" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Talk Area -->

<!-- Start Overview Area -->
<div class="overview-area pt-100 pb-75">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="overview-card">
                    <h3>Call Us</h3>
                    <span>
                        <a href="tel:9901234567">+990-123-4567</a>
                    </span>

                    <div class="overview-shape">
                        <img src="{{ asset('frontend/assets/img/overview-shape.png') }}" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="overview-card">
                    <h3>Email Us</h3>
                    <span>
                        <a href="/cdn-cgi/l/email-protection#761e1f15190c1336111b171f1a5815191b"><span class="__cf_email__" data-cfemail="85edece6eaffe0c5e2e8e4ece9abe6eae8">[email&#160;protected]</span></a>
                    </span>

                    <div class="overview-shape">
                        <img src="{{ asset('frontend/assets/img/overview-shape.png') }}" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="overview-card">
                    <h3>Tech Support</h3>
                    <span>
                        <a href="tel:15143125678">+1 (514) 312-5678</a>
                    </span>

                    <div class="overview-shape">
                        <img src="{{ asset('frontend/assets/img/overview-shape.png') }}" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="overview-card">
                    <h3>Visit Us</h3>
                    <span>413 North Las Vegas, NV 89032</span>

                    <div class="overview-shape">
                        <img src="{{ asset('frontend/assets/img/overview-shape.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Overview Area -->
@endsection