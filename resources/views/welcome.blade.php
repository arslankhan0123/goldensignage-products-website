@extends('layouts.frontend.main')
@section('title', 'Home')
@section('meta')
@endsection

@section('content')
<!-- Inline styles to make homepage/blog/product images uniform -->
<style>
    /* Base: ensure images fill width and are cropped (not stretched) */
    .blog-image img,
    .services-image img,
    .projects-image img,
    .single-projects-item .projects-image img,
    .about-image img,
    .skill-image img {
        width: 100%;
        object-fit: cover;
        display: block;
    }

    /* Blog/service default height */
    .blog-image img,
    .services-image img {
        height: 220px;
    }

    /* Make product grid images (homepage products) a bit taller */
    .services-area .services-image img {
        height: 260px;
    }

    /* Slightly smaller on small screens */
    @media (max-width: 768px) {

        .blog-image img,
        .services-image img {
            height: 160px;
        }

        .services-area .services-image img {
            height: 180px;
        }
    }
</style>
<!-- Start Main Hero Area -->
<div class="main-hero-area">
    <div class="hero-slides owl-carousel owl-theme">
        <div class="main-hero-item jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container-fluid">
                <div class="main-hero-content">
                    <span data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">We craft modern, visually impactful designs built to perform under various conditions.</span>
                    <h1 data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">3D Signage <span class="overlay"></span></h1>
                    <p data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">Golden Signage specializes in premium, non-illuminated 3D signage solutions for businesses across Dubai, UAE. Our team works closely with clients to understand their vision and deliver customized signage tailored to their specific business needs. From detailed logo designs to large-scale display installations, our versatile signage is suitable for both indoor and outdoor applications.</p>

                    <div class="slides-btn" data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                        <a href="{{ route('frontend.contact') }}" class="default-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-hero-item item-bg-2 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container-fluid">
                <div class="main-hero-content">
                    <span data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">We utilize only top-quality materials such as acrylic, aluminum, and stainless steel to ensure durability.</span>
                    <h1 data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">Outlit 3D Signage <span class="overlay"></span></h1>
                    <p data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">At Golden Signage, we provide premium Outlit 3D Signage solutions that bring a refined and distinctive character to any environment. Featuring strategically placed lighting around the edges, our outlit 3D signs produce an elegant halo effect that enhances visibility and captures attention both day and night. These signs are perfectly suited for storefronts, office buildings, and high-traffic locations, delivering a modern, polished, and professional appearance.</p>

                    <div class="slides-btn" data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                        <a href="{{ route('frontend.contact') }}" class="default-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-hero-item item-bg-3 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container-fluid">
                <div class="main-hero-content">
                    <span data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">WE ARE LEADING TECHNOLOGY SOLUTIONS PROVIDING COMPANY</span>
                    <h1 data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">Get The Best IT Solution From Us <span class="overlay"></span></h1>
                    <p data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">Golden Signage is a professional signage and branding solutions company based in Dubai, UAE, dedicated to helping businesses stand out with impactful visual communication. We specialize in designing and delivering high-quality custom signage, including 3D signs, neon signs, indoor and outdoor branding, and illuminated and non-illuminated displays.</p>

                    <div class="slides-btn" data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                        <a href="{{ route('frontend.contact') }}" class="default-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-shape-1">
        <img src="{{ asset('frontend/assets/img/slides-shape-1.png') }}" alt="image">
    </div>
    <div class="hero-shape-2">
        <img src="{{ asset('frontend/assets/img/slides-shape-2.png') }}" alt="image">
    </div>
    <div class="hero-shape-3">
        <img src="{{ asset('frontend/assets/img/slides-shape-3.png') }}" alt="image">
    </div>
</div>
<!-- End Main Hero Area -->

<!-- Start About Area -->
<div class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-image" data-tilt>
                    <img src="{{ asset('frontend/assets/img/about-2.png') }}" alt="image" data-aos="fade-down" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-content" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <span>WHO WE ARE</span>
                    <h3>We Are All In One IT Solution & Technology Company <span class="overlay"></span></h3>
                    <p>Golden Signage is a professional signage and branding solutions company based in Dubai, UAE, dedicated to helping businesses stand out with impactful visual communication. We specialize in designing and delivering high-quality custom signage, including 3D signs, neon signs, indoor and outdoor branding, and illuminated and non-illuminated displays.</p>
                    <div class="about-btn">
                        <a href="{{ route('frontend.about') }}" class="default-btn">Know More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-shape-1">
        <img src="{{ asset('frontend/assets/img/about-shape.png') }}" alt="image">
    </div>
</div>
<!-- End About Area -->

<!-- Start Choose Area -->
<!-- <div class="choose-area bg-with-F5F5F5-color pt-100 pb-75">
    <div class="container">
        <div class="section-title">
            <span>WHY CHOOSE US</span>
            <h2>We Help You To <b>Increase</b> Your Sale Through Solutions <span class="overlay"></span></h2>
            <p>We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
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

            <div class="col-lg-3 col-md-6">
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

            <div class="col-lg-3 col-md-6">
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

            <div class="col-lg-3 col-md-6">
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
</div> -->
<!-- End Choose Area -->

<!-- Start Skill Area -->
<!-- <div class="skill-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="skill-content">
                    <span>SKILLSET</span>
                    <h3>We Have A Set Of Skill With High Quality <span class="overlay"></span></h3>
                </div>

                <div class="skill-bar" data-percentage="92%" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <p class="progress-title-holder">
                        <span class="progress-title">Software Development</span>
                        <span class="progress-number-wrapper">
                            <span class="progress-number-mark">
                                <span class="percent"></span>
                                <span class="down-arrow"></span>
                            </span>
                        </span>
                    </p>
                    <div class="progress-content-outter">
                        <div class="progress-content"></div>
                    </div>
                </div>

                <div class="skill-bar" data-percentage="80%" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                    <p class="progress-title-holder">
                        <span class="progress-title">App Development</span>
                        <span class="progress-number-wrapper">
                            <span class="progress-number-mark">
                                <span class="percent"></span>
                                <span class="down-arrow"></span>
                            </span>
                        </span>
                    </p>
                    <div class="progress-content-outter bg-D5158F">
                        <div class="progress-content bg-D5158F"></div>
                    </div>
                </div>

                <div class="skill-bar" data-percentage="70%" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                    <p class="progress-title-holder">
                        <span class="progress-title">Artificial Intelligence</span>
                        <span class="progress-number-wrapper">
                            <span class="progress-number-mark">
                                <span class="percent"></span>
                                <span class="down-arrow"></span>
                            </span>
                        </span>
                    </p>
                    <div class="progress-content-outter bg-FEB302">
                        <div class="progress-content bg-FEB302"></div>
                    </div>
                </div>

                <div class="skill-bar" data-percentage="45%" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <p class="progress-title-holder">
                        <span class="progress-title">Cyber Security</span>
                        <span class="progress-number-wrapper">
                            <span class="progress-number-mark">
                                <span class="percent"></span>
                                <span class="down-arrow"></span>
                            </span>
                        </span>
                    </p>
                    <div class="progress-content-outter bg-A66BFF">
                        <div class="progress-content bg-A66BFF"></div>
                    </div>
                </div>

                <div class="skill-bar-btn" data-aos="fade-up" data-aos-delay="90" data-aos-duration="900" data-aos-once="true">
                    <a href="{{ route('frontend.about') }}" class="default-btn">Explore More</a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="skill-image" data-aos="fade-left" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <img src="{{ asset('frontend/assets/img/skill-1.png') }}" alt="image" data-tilt>

                    <div class="skill-shape-1">
                        <img src="{{ asset('frontend/assets/img/skill-shape-1.png') }}" alt="image">
                    </div>
                    <div class="skill-shape-2">
                        <img src="{{ asset('frontend/assets/img/skill-shape-2.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="skill-bg-shape">
        <img src="{{ asset('frontend/assets/img/skill-bg-shape.png') }}" alt="image">
    </div>
</div> -->
<!-- End Skill Area -->


<!-- Trade Shows Section -->
<section class="trade-shows-section">
    <div class="container">
        <div class="section-header mb-4">
            <h2>SIGNAGE PRODUCTS</h2>
            <!-- <h2>High-Impact Signage for Your Business <span class="overlay"></span></h2> -->
            <!-- <p>Discover our premium range of signage products designed to enhance your brand visibility. Crafted with precision, durability, and modern aesthetics for lasting impact.</p> -->
            <span class="underline"></span>
        </div>

        <div class="row">
            @foreach ($SignageProducts as $product)
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="trade-card h-100">
                    <div class="trade-image">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                    </div>
                    <h3>{{ $product->name }}</h3>
                    <a href="{{ route('frontend.product-details', $product->id) }}">View more</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<style>
    .trade-shows-section {
        padding: 60px 0;
    }

    .section-header h2 {
        font-size: 26px;
        font-weight: 600;
        margin-bottom: 6px;
    }

    .section-header .underline {
        width: 60px;
        height: 3px;
        background: #ff4d00;
        display: block;
    }

    .trade-card {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .trade-image {
        background: #f3f3f3;
        height: 220px;
        /* Same image box height */
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 15px;
    }

    .trade-image img {
        max-height: 100%;
        max-width: 100%;
        object-fit: contain;
        /* Image distort nahi hogi */
    }

    .trade-card h3 {
        margin: 15px 0 5px;
        font-size: 18px;
    }

    .trade-card a {
        color: #ff4d00;
        font-size: 14px;
        text-decoration: none;
    }

    .trade-card a:hover {
        text-decoration: underline;
    }
</style>


<!-- Start Choose Area -->
<div class="choose-area bg-with-F5F5F5-color pt-100 pb-75">
    <div class="container">
        <div class="section-title">
            <span>Printing & Marketing Products</span>
            <h2>High-Impact Printing & Marketing for Your Business <span class="overlay"></span></h2>
            <p>Discover our premium range of printing and marketing products designed to enhance your brand visibility. Crafted with precision, durability, and modern aesthetics for lasting impact.</p>
        </div>

        <div class="row justify-content-center">
            @foreach ($PrintingMarketingProducts as $product)
            <div class="col-lg-3 col-md-6">
                <div class="services-item">
                    <div class="services-image">
                        <a href="#"><img src="{{asset($product->image)}}" alt="image"></a>
                    </div>
                    <div class="services-content">
                        <h3>
                            <a href="#">{{ $product->name }}</a>
                        </h3>
                        <p>{{ \Illuminate\Support\Str::limit($product->short_description, 60) }}</p>
                        <a href="{{ route('frontend.product-details', $product->id) }}" class="services-btn">View More</a>
                    </div>
                </div>
            </div>
            @endforeach
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
<div class="services-area bg-with-14042C-color ptb-100">
    <div class="container">
        <div class="section-title">
            <span>PRODUCTS</span>
            <h2>We Offer High-Quality <b>Products</b> <span class="overlay"></span></h2>
            <p>We deliver premium products designed to meet modern needs, ensuring quality, reliability, and customer satisfaction.</p>
        </div>

        <div class="row justify-content-center">
            @foreach ($products as $product)
            <div class="col-lg-3 col-md-6">
                <div class="services-item">
                    <div class="services-image">
                        <a href="#"><img src="{{asset($product->image)}}" alt="image"></a>
                    </div>
                    <div class="services-content">
                        <h3>
                            <a href="#">{{ $product->name }}</a>
                        </h3>
                        <p>{{ \Illuminate\Support\Str::limit($product->short_description, 60) }}</p>
                        <a href="{{ route('frontend.product-details', $product->id) }}" class="services-btn">View More</a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-lg-3 col-md-6">
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
            </div> -->

            <!-- <div class="col-lg-3 col-md-6">
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
            </div> -->

            <!-- <div class="col-lg-3 col-md-6">
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
            </div> -->

            <!-- <div class="col-lg-3 col-md-6">
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
            </div> -->
        </div>

        <div class="services-all-btn">
            <a href="{{ route('frontend.our-products') }}" class="default-btn">Explore All Products</a>
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

<!-- Start Projects Area -->
<!-- <div class="projects-area pt-100 pb-75">
    <div class="container">
        <div class="section-title">
            <span>PROJECTS</span>
            <h2>Our Latest <b>Incredible</b> Client's Projects <span class="overlay"></span></h2>
        </div>

        <ul class="projects-filter-menu">
            <li class="filter" data-filter="all">All</li>
            <li class="filter" data-filter=".mobile">Mobile App</li>
            <li class="filter" data-filter=".development">Development</li>
            <li class="filter" data-filter=".web-design">Web Design</li>
            <li class="filter" data-filter=".product-design">Product Design</li>
        </ul>

        <div id="Container" class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mix mobile development web-design">
                <div class="single-projects-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <div class="projects-image">
                        <a href="projects-details.html"><img src="{{ asset('frontend/assets/img/projects-1.jpg') }}" alt="image"></a>
                    </div>
                    <div class="projects-content">
                        <h3>
                            <a href="projects-details.html">3D Animation</a>
                        </h3>
                        <a href="projects-details.html" class="projects-btn">View More</a>
                    </div>
                </div>

                <div class="single-projects-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <div class="projects-image">
                        <a href="projects-details.html"><img src="{{ asset('frontend/assets/img/projects-1.jpg') }}" alt="image"></a>
                    </div>
                    <div class="projects-content">
                        <h3>
                            <a href="projects-details.html">Online Banking Software</a>
                        </h3>
                        <a href="projects-details.html" class="projects-btn">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mix development product-design">
                <div class="single-projects-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <div class="projects-image">
                        <a href="projects-details.html"><img src="{{ asset('frontend/assets/img/projects-1.jpg') }}" alt="image"></a>
                    </div>
                    <div class="projects-content">
                        <h3>
                            <a href="projects-details.html">Cashier Software</a>
                        </h3>
                        <a href="projects-details.html" class="projects-btn">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mix web-design mobile product-design">
                <div class="single-projects-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <div class="projects-image">
                        <a href="projects-details.html"><img src="{{ asset('frontend/assets/img/projects-1.jpg') }}" alt="image"></a>
                    </div>
                    <div class="projects-content">
                        <h3>
                            <a href="projects-details.html">Messaging App</a>
                        </h3>
                        <a href="projects-details.html" class="projects-btn">View More</a>
                    </div>
                </div>

                <div class="single-projects-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <div class="projects-image">
                        <a href="projects-details.html"><img src="{{ asset('frontend/assets/img/projects-1.jpg') }}" alt="image"></a>
                    </div>
                    <div class="projects-content">
                        <h3>
                            <a href="projects-details.html">Analytics Software</a>
                        </h3>
                        <a href="projects-details.html" class="projects-btn">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="projects-bg-shape-1">
        <img src="{{ asset('frontend/assets/img/projects-bg-shape.png') }}" alt="image">
    </div>
</div> -->
<!-- End Projects Area -->

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

<!-- Start Testimonials Area -->
<div class="testimonials-area ptb-100">
    <div class="container-fluid">
        <div class="section-title">
            <span>TESTIMONIALS</span>
            <h2>Some <b>Sweet Talk</b> Of Our Happy Clients <span class="overlay"></span></h2>
        </div>

        <div class="testimonials-slides owl-carousel owl-theme">

            <div class="single-testimonials-card" data-aos="fade-up" data-aos-delay="50">
                <p>The entire experience was smooth and well-organized. The team maintained clear communication and delivered results that truly reflected professionalism and quality.</p>
                <div class="info-item-box">
                    <img src="{{ asset('frontend/assets/img/testimonials-4.jpg') }}" class="rounded-circle" alt="image">
                    <h4>Bradly Doe, <span>Business Owner</span></h4>
                    <ul class="rating-list">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-line"></i></li>
                    </ul>
                </div>
            </div>

            <div class="single-testimonials-card" data-aos="fade-up" data-aos-delay="80">
                <p>We were impressed by the attention to detail and the structured approach. Everything was handled efficiently, making the collaboration stress-free.</p>
                <div class="info-item-box">
                    <img src="{{ asset('frontend/assets/img/testimonials-5.jpg') }}" class="rounded-circle" alt="image">
                    <h4>Daniel John, <span>Project Lead</span></h4>
                    <ul class="rating-list">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-line"></i></li>
                    </ul>
                </div>
            </div>

            <div class="single-testimonials-card" data-aos="fade-up" data-aos-delay="60">
                <p>The professionalism shown throughout the process was outstanding. Timelines were respected, and the final outcome met our expectations perfectly.</p>
                <div class="info-item-box">
                    <img src="{{ asset('frontend/assets/img/testimonials-6.jpg') }}" class="rounded-circle" alt="image">
                    <h4>Jennifer Smith, <span>Operations Manager</span></h4>
                    <ul class="rating-list">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-line"></i></li>
                    </ul>
                </div>
            </div>

            <div class="single-testimonials-card" data-aos="fade-up" data-aos-delay="70">
                <p>A reliable and dedicated team that understands requirements clearly. The entire workflow felt organized and highly professional.</p>
                <div class="info-item-box">
                    <img src="{{ asset('frontend/assets/img/testimonials-7.jpg') }}" class="rounded-circle" alt="image">
                    <h4>Sarp Karahan, <span>Company Director</span></h4>
                    <ul class="rating-list">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-line"></i></li>
                    </ul>
                </div>
            </div>

            <div class="single-testimonials-card" data-aos="fade-up" data-aos-delay="90">
                <p>Everything was handled with care and precision. The communication was clear, and the results reflected a strong commitment to quality.</p>
                <div class="info-item-box">
                    <img src="{{ asset('frontend/assets/img/testimonials-8.jpg') }}" class="rounded-circle" alt="image">
                    <h4>Jane Ronan, <span>Marketing Head</span></h4>
                    <ul class="rating-list">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-line"></i></li>
                    </ul>
                </div>
            </div>

            <div class="single-testimonials-card" data-aos="fade-up">
                <p>The team delivered exactly what was promised. Their professionalism and structured workflow made the entire experience seamless.</p>
                <div class="info-item-box">
                    <img src="{{ asset('frontend/assets/img/testimonials-5.jpg') }}" class="rounded-circle" alt="image">
                    <h4>Michael Lee, <span>Entrepreneur</span></h4>
                    <ul class="rating-list">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-line"></i></li>
                    </ul>
                </div>
            </div>

            <div class="single-testimonials-card" data-aos="fade-up">
                <p>A very smooth and transparent process from start to finish. The dedication and professionalism were evident throughout.</p>
                <div class="info-item-box">
                    <img src="{{ asset('frontend/assets/img/testimonials-6.jpg') }}" class="rounded-circle" alt="image">
                    <h4>Emily Carter, <span>Team Lead</span></h4>
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

<!-- Start Partner Area -->
<!-- <div class="partner-area ptb-100">
    <div class="container">
        <div class="partner-slides owl-carousel owl-theme">
            <div class="partner-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                <a href="#">
                    <img src="{{ asset('frontend/assets/img/partner-1.png') }}" alt="partner">
                    <img src="{{ asset('frontend/assets/img/partner-hover-1.png') }}" alt="partner">
                </a>
            </div>
            <div class="partner-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                <a href="#">
                    <img src="{{ asset('frontend/assets/img/partner-2.png') }}" alt="partner">
                    <img src="{{ asset('frontend/assets/img/partner-hover-2.png') }}" alt="partner">
                </a>
            </div>
            <div class="partner-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                <a href="#">
                    <img src="{{ asset('frontend/assets/img/partner-3.png') }}" alt="partner">
                    <img src="{{ asset('frontend/assets/img/partner-hover-3.png') }}" alt="partner">
                </a>
            </div>
            <div class="partner-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                <a href="#">
                    <img src="{{ asset('frontend/assets/img/partner-4.png') }}" alt="partner">
                    <img src="{{ asset('frontend/assets/img/partner-hover-4.png') }}" alt="partner">
                </a>
            </div>
            <div class="partner-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                <a href="#">
                    <img src="{{ asset('frontend/assets/img/partner-5.png') }}" alt="partner">
                    <img src="{{ asset('frontend/assets/img/partner-hover-5.png') }}" alt="partner">
                </a>
            </div>
            <div class="partner-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                <a href="#">
                    <img src="{{ asset('frontend/assets/img/partner-6.png') }}" alt="partner">
                    <img src="{{ asset('frontend/assets/img/partner-hover-6.png') }}" alt="partner">
                </a>
            </div>
        </div>
    </div>
</div> -->
<!-- End Partner Area -->

<!-- Start Blog Area -->

<div class="blog-area pt-100 pb-75">
    <div class="container">
        <div class="section-title">
            <span>ARTICLE</span>
            <h2>Read Our Blog To Get All Recent Tech <b>News</b> <span class="overlay"></span></h2>
        </div>

        <div class="blog-slides owl-carousel owl-theme">
            @foreach ($blogs as $blog)
            <div class="blog-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="blog-image">
                            <a href="#"><img src="{{asset($blog->image)}}" alt="image"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog-content">
                            <div class="date">
                                {{ \Carbon\Carbon::parse($blog->created_at)->format('jS F, Y') }}
                            </div>
                            <h3>
                                <a href="#">{{ \Illuminate\Support\Str::limit($blog->title, 60) }}</a>
                            </h3>
                            <p>{!! \Illuminate\Support\Str::limit(strip_tags($blog->short_description), 100) !!}</p>
                            <a href="#" class="blog-btn">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="blog-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="blog-image">
                            <a href="single-blog-1.html"><img src="{{ asset('frontend/assets/img/blog-1.jpg') }}" alt="image"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog-content">
                            <div class="date">9th July, 2024</div>
                            <h3>
                                <a href="single-blog-1.html">How Technology Dominate In The new World In 2024</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eir m od tempor invidunt ut labore.</p>
                            <a href="single-blog-1.html" class="blog-btn">View More</a>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="blog-card" data-aos="fade-up" data-aos-delay="890" data-aos-duration="900" data-aos-once="true">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="blog-image">
                            <a href="single-blog-1.html"><img src="{{ asset('frontend/assets/img/blog-2.jpg') }}" alt="image"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog-content">
                            <div class="date">7th July, 2024</div>
                            <h3>
                                <a href="single-blog-1.html">Top 10 Most Famous Technology Trend In 2024</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eir m od tempor invidunt ut labore.</p>
                            <a href="single-blog-1.html" class="blog-btn">View More</a>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="blog-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="blog-image">
                            <a href="single-blog-1.html"><img src="{{ asset('frontend/assets/img/blog-1.jpg') }}" alt="image"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog-content">
                            <div class="date">9th July, 2024</div>
                            <h3>
                                <a href="single-blog-1.html">How Technology Dominate In The new World In 2024</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eir m od tempor invidunt ut labore.</p>
                            <a href="single-blog-1.html" class="blog-btn">View More</a>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="blog-card" data-aos="fade-up" data-aos-delay="90" data-aos-duration="900" data-aos-once="true">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="blog-image">
                            <a href="single-blog-1.html"><img src="{{ asset('frontend/assets/img/blog-2.jpg') }}" alt="image"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog-content">
                            <div class="date">7th July, 2024</div>
                            <h3>
                                <a href="single-blog-1.html">Top 10 Most Famous Technology Trend In 2024</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eir m od tempor invidunt ut labore.</p>
                            <a href="single-blog-1.html" class="blog-btn">View More</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <div class="blog-shape-1">
        <img src="{{ asset('frontend/assets/img/blog-shape-1.png') }}" alt="image">
    </div>
</div>
<!-- End Blog Area -->
@endsection