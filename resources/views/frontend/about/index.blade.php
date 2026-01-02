@extends('layouts.frontend.main')
@section('title', 'About Us')
@section('meta')
@endsection

@section('content')
<!-- Start Page Banner Area -->
<div class="page-banner-area bg-3 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
            <h2>About Us</h2>

            <ul>
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Success/Error Messages -->
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(request()->get('deleted') == 'success')
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong>
    @php
    $count = request()->get('count', 1);
    @endphp
    {{ $count > 1 ? $count . ' contacts deleted successfully.' : 'Contact deleted successfully.' }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong>
    <ul class="mb-0">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<!-- Start About Area -->
<div class="about-area border-none pt-100 pb-75">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-wrap-image" data-tilt>
                    <img src="{{ asset('frontend/assets/img/about-3.jpg') }}" alt="image" data-aos="fade-down" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-wrap-content" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <div class="about-bg-text">ABOUT US</div>
                    <span>WHO WE ARE</span>
                    <h3>Your Trusted Partner For All IT Solutions <span class="overlay"></span></h3>
                    <p>We are leading technology solutions providing company all over the world doing over 40 years. Lorem ipsum dolor sit amet consetetur sadipscing elitre sed diam non umy eirmod tempor invidunt ut labore.</p>
                </div>
            </div>
        </div>

        <div class="about-inner-box">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-about-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                        <h3>Our Vision</h3>
                        <p>Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.</p>

                        <div class="about-btn">
                            <a href="{{ route('frontend.contact') }}" class="default-btn">Contact Us for More Information</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-about-card" data-aos="fade-down" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                        <h3>Our Mission</h3>
                        <p>Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-about-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                        <div class="card-image" data-tilt>
                            <img src="{{ asset('frontend/assets/img/about-4.jpg') }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-circle-shape">
        <img src="{{ asset('frontend/assets/img/about-circle.png') }}" alt="image">
    </div>
</div>
<!-- End About Area -->

<!-- Start Choose Area -->
<div class="choose-area border-none pb-75">
    <div class="container">
        <div class="section-title section-style-two">
            <div class="section-bg-text">PROCESS</div>
            <span>WORK PROCESS</span>
            <h2>We Follow Four Simple Steps <span class="overlay"></span></h2>
            <p>We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="single-choose-card" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <div class="choose-image" data-tilt>
                        <a href="services-details.html"><img src="{{ asset('frontend/assets/img/choose-1.png') }}" alt="image"></a>

                        <div class="number">1</div>
                    </div>
                    <div class="choose-content">
                        <h3>
                            <a href="#">Discussion</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-choose-card" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                    <div class="choose-image" data-tilt>
                        <a href="services-details.html"><img src="{{ asset('frontend/assets/img/choose-2.png') }}" alt="image"></a>

                        <div class="number">2</div>
                    </div>
                    <div class="choose-content">
                        <h3>
                            <a href="#">Testing & Trying</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-choose-card" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                    <div class="choose-image" data-tilt>
                        <a href="services-details.html"><img src="{{ asset('frontend/assets/img/choose-3.png') }}" alt="image"></a>

                        <div class="number">3</div>
                    </div>
                    <div class="choose-content">
                        <h3>
                            <a href="#">Ideas & Concept</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-choose-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <div class="choose-image" data-tilt>
                        <a href="services-details.html"><img src="{{ asset('frontend/assets/img/choose-4.png') }}" alt="image"></a>

                        <div class="number">4</div>
                    </div>
                    <div class="choose-content">
                        <h3>
                            <a href="#">Execute & Install</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Choose Area -->

<!-- Start Video Area -->
<div class="video-area-box">
    <div class="container">
        <div class="video-view-content" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
            <div class="video-image">
                <img src="{{ asset('frontend/assets/img/video.jpg') }}" alt="image">
            </div>

            <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                <i class="ri-play-mini-fill"></i>
            </a>
        </div>
    </div>
</div>
<!-- End Video Area -->

<!-- Start Testimonials Area -->
<div class="testimonials-area ptb-100">
    <div class="container-fluid">
        <div class="section-title section-style-two">
            <div class="section-bg-text">FEEDBACK</div>
            <span>TESTIMONIALS</span>
            <h2>Our Client's Feedback <span class="overlay"></span></h2>
        </div>

        <div class="testimonials-slides owl-carousel owl-theme">
            <div class="single-testimonials-card" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                <p>We look and sound so good! I am still in shock at how smooth this process was. The professionalism, collaboration and the design they come up is great.</p>

                <div class="info-item-box">
                    <img src="{{ asset('frontend/assets/img/testimonials-4.jpg') }}" class="rounded-circle" alt="image">
                    <h4>Bradly Doe, <span>Founder of Medizo</span></h4>
                    <ul class="rating-list">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-line"></i></li>
                    </ul>
                </div>
            </div>

            <div class="single-testimonials-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                <p>The professionalism, collaboration and the design they come up with is pheno-menal. Thanks a lot the Coze Team.</p>

                <div class="info-item-box">
                    <img src="{{ asset('frontend/assets/img/testimonials-5.jpg') }}" class="rounded-circle" alt="image">
                    <h4>Daniel John, <span>Solit Team</span></h4>
                    <ul class="rating-list">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-line"></i></li>
                    </ul>
                </div>
            </div>

            <div class="single-testimonials-card" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                <p>We look and sound so good! I am still in shock at how smooth this process was. The professionalism, collaboration and the design they come up is great.</p>

                <div class="info-item-box">
                    <img src="{{ asset('frontend/assets/img/testimonials-6.jpg') }}" class="rounded-circle" alt="image">
                    <h4>Jennifer Smith, <span>Spix Team</span></h4>
                    <ul class="rating-list">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-line"></i></li>
                    </ul>
                </div>
            </div>

            <div class="single-testimonials-card" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                <p>The professionalism, collaboration and the design they come up with is pheno-menal. Thanks a lot the Coze Team.</p>

                <div class="info-item-box">
                    <img src="{{ asset('frontend/assets/img/testimonials-7.jpg') }}" class="rounded-circle" alt="image">
                    <h4>Sarp Karahan, <span>Benzo Team</span></h4>
                    <ul class="rating-list">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-line"></i></li>
                    </ul>
                </div>
            </div>

            <div class="single-testimonials-card" data-aos="fade-up" data-aos-delay="90" data-aos-duration="900" data-aos-once="true">
                <p>We look and sound so good! I am still in shock at how smooth this process was. The professionalism, collaboration and the design they come up is great.</p>

                <div class="info-item-box">
                    <img src="{{ asset('frontend/assets/img/testimonials-8.jpg') }}" class="rounded-circle" alt="image">
                    <h4>Jane Ronan, <span>Lebu Team</span></h4>
                    <ul class="rating-list">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-line"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials Area -->

<!-- Start Pricing Area -->
<!-- <div class="pricing-area with-black-background margin-zero pt-100 pb-75">
    <div class="container">
        <div class="section-title">
            <span>PRICING</span>
            <h2>Our <b>Pricing</b> For All Type Of Technology Services <span class="overlay"></span></h2>
            <p>We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-pricing-card" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                    <h3>Startup</h3>
                    <div class="price">$19 <span>/ month</span></div>
                    <p>Lorem ipsum dolor sit amet consetetur sadi scing elitr sed diam nonumy eirmod.</p>

                    <ul class="pricing-list">
                        <li><i class="ri-check-fill"></i> Lorem ipsum dolor.</li>
                        <li><i class="ri-check-fill"></i> Sit amet consetetur set a ledip.</li>
                    </ul>
                    <div class="pricing-btn">
                        <a href="pricing.html" class="default-btn">Choose Plan</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-pricing-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <h3>Basic</h3>
                    <div class="price">$49 <span>/ month</span></div>
                    <p>Lorem ipsum dolor sit amet consetetur sadi scing elitr sed diam nonumy eirmod.</p>

                    <ul class="pricing-list">
                        <li><i class="ri-check-fill"></i> Lorem ipsum dolor.</li>
                        <li><i class="ri-check-fill"></i> Sit amet consetetur set a ledip.</li>
                        <li><i class="ri-check-fill"></i> Lorems Sit ledip ipsum dolor.</li>
                    </ul>
                    <div class="pricing-btn">
                        <a href="pricing.html" class="default-btn">Choose Plan</a>
                    </div>
                    <div class="most-popular">
                        <span>Most Popular</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-pricing-card" data-aos="fade-up" data-aos-delay="90" data-aos-duration="900" data-aos-once="true">
                    <h3>Advanced</h3>
                    <div class="price">$79 <span>/ month</span></div>
                    <p>Lorem ipsum dolor sit amet consetetur sadi scing elitr sed diam nonumy eirmod.</p>

                    <ul class="pricing-list">
                        <li><i class="ri-check-fill"></i> Lorem ipsum dolor.</li>
                        <li><i class="ri-check-fill"></i> Sit amet consetetur set a ledip.</li>
                        <li><i class="ri-check-fill"></i> Lorems Sit ledip ipsum dolor.</li>
                        <li><i class="ri-check-fill"></i> Lorem ipsum dolor.</li>
                    </ul>
                    <div class="pricing-btn">
                        <a href="pricing.html" class="default-btn">Choose Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pricing-bg-shape-1">
        <img src="{{ asset('frontend/assets/img/pricing-bg-shape.png') }}" alt="image">
    </div>
    <div class="pricing-shape-1">
        <img src="{{ asset('frontend/assets/img/pricing-shape-1.png') }}" alt="image">
    </div>
    <div class="pricing-shape-2">
        <img src="{{ asset('frontend/assets/img/pricing-shape-2.png') }}" alt="image">
    </div>
</div> -->
<!-- End Pricing Area -->

<!-- Start Team Area -->
<div class="team-area pt-100 pb-75">
    <div class="container">
        <div class="section-title section-style-two">
            <div class="section-bg-text">TEAM</div>
            <span>TEAM MEMBER</span>
            <h2>Our Expert IT Consultants <span class="overlay"></span></h2>
            <p>We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-card">
                    <div class="team-image" data-tilt>
                        <img src="{{ asset('frontend/assets/img/team-1.png') }}" alt="image">

                        <ul class="team-social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3>Johny Smith</h3>
                        <span>President & CEO</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-team-card">
                    <div class="team-image" data-tilt>
                        <img src="{{ asset('frontend/assets/img/team-2.png') }}" alt="image">

                        <ul class="team-social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3>Jennifer Walter</h3>
                        <span>Product Manager</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-team-card">
                    <div class="team-image" data-tilt>
                        <img src="{{ asset('frontend/assets/img/team-3.png') }}" alt="image">

                        <ul class="team-social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3>Jems Rodrigez</h3>
                        <span>UI UX Designer</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-team-card">
                    <div class="team-image" data-tilt>
                        <img src="{{ asset('frontend/assets/img/team-4.png') }}" alt="image">

                        <ul class="team-social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3>Deren Bravoo</h3>
                        <span>Web Developer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Team Area -->

<!-- Start Talk Area -->
<div class="talk-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="talk-image" data-tilt>
                    <img src="{{ asset('frontend/assets/img/talk.png') }}" alt="image">

                    <div class="talk-circle">
                        <img src="{{ asset('frontend/assets/img/talk-circle.png') }}" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="talk-content">
                    <div class="talk-bg-text">LET'S TALK</div>
                    <span>LET'S TALK</span>
                    <h3>We Would Like To Hear From You Any Question <span class="overlay"></span></h3>
                    <!-- <p>Lorem ipsum dolor sit amet consetetur sadipscing elitre sed diam non umy eirmod tempor invidunt ut labore.</p> -->

                    <form id="contactFormTwo" method="POST" action="{{ route('contact.details.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required placeholder="Your name">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required placeholder="Your email address">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" class="form-control" required placeholder="Your Subject">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="number" name="phone_number" class="form-control" required placeholder="Your Phone">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="6" required placeholder="Your message..."></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">Send Message<span></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Talk Area -->
@endsection