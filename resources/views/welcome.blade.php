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
<style>
    .home-banner {
        width: 100%;
        background: #f7f7f7;
    }

    .banner-slide {
        position: relative;
        text-align: center;
    }

    .banner-slide img {
        width: 100%;
        height: 420px;
        object-fit: contain;
        /* screenshot jaisa */
        background: #f7f7f7;
    }

    /* Center overlay text */
    .banner-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(255, 255, 255, 0.85);
        padding: 20px 40px;
        border-radius: 6px;
    }

    .banner-overlay h2 {
        font-size: 28px;
        font-weight: 700;
        letter-spacing: 2px;
        margin: 0;
        color: #111;
    }

    /* Dots style */
    .home-banner-carousel .owl-dots {
        margin-top: 15px;
    }

    .home-banner-carousel .owl-dot span {
        width: 10px;
        height: 10px;
        background: #ccc;
    }

    .home-banner-carousel .owl-dot.active span {
        background: #111;
    }

    /* Mobile */
    @media (max-width: 768px) {
        .banner-slide img {
            height: 260px;
        }

        .banner-overlay h2 {
            font-size: 18px;
            padding: 10px 20px;
        }
    }

    .order-btn {
        display: inline-block;
        margin-top: 10px;
        padding: 10px 18px;
        background: #ff4d00;
        color: #fff !important;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        border-radius: 6px;
        transition: all 0.3s ease;
        text-align: center;
    }

    .order-btn:hover {
        background: #e04300;
        color: #fff;
        transform: translateY(-2px);
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<!-- Start Main Hero Area -->
<div class="home-banner">
    <div class="home-banner-carousel owl-carousel owl-theme">

        <!-- Slide 1 -->
        <div class="banner-slide">
            <img src="https://www.dlxprint.com/images/carousel-images/signages_banner.webp" alt="Backdrop Exhibition">
            <!-- <div class="banner-overlay">
                <h2>3D Signage & Outdoor Signage</h2>
            </div> -->
        </div>

        <!-- Slide 2 -->
        <div class="banner-slide">
            <img src="https://www.dlxprint.com/images/carousel-images/print_and_marketing_banner.webp" alt="Roll Up Banner">
        </div>

        <!-- Slide 3 -->
        <div class="banner-slide">
            <img src="https://www.dlxprint.com/images/carousel-images/office_and_store_branding.webp" alt="Standee Banner">
        </div>

        <!-- Slide 4 -->
        <div class="banner-slide">
            <img src="https://www.dlxprint.com/images/carousel-images/backdrops_and_exhibition_banner.webp" alt="Promotional Banner">
        </div>

        <!-- Slide 5 -->
        <div class="banner-slide">
            <img src="https://www.dlxprint.com/images/carousel-images/flags_banner.webp" alt="Promotional Banner">
        </div>

    </div>
</div>

<!-- End Main Hero Area -->

<!-- Start About Area -->
<!-- <div class="about-area ptb-100">
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
</div> -->
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
<!-- <section class="trade-shows-section">
    <div class="container">
        <div class="section-header mb-4">
            <h2>SIGNAGE PRODUCTS</h2>
            <h2>High-Impact Signage for Your Business <span class="overlay"></span></h2>
            <p>Discover our premium range of signage products designed to enhance your brand visibility. Crafted with precision, durability, and modern aesthetics for lasting impact.</p>
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
                    <a href="{{ route('frontend.product-details', $product->id) }}" class="order-btn">
                        Order Now
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> -->
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

<section class="workspace-branding">
    <div class="container">
        <h2 class="section-title">SIGNAGE PRODUCTS</h2>

        <div class="workspace-carousel owl-carousel owl-theme">

            @foreach ($SignageProducts as $product)
            <div class="workspace-item">
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">

                <p class="product-title">{{ $product->name }}</p>

                <a href="{{ route('frontend.product-details', $product->id) }}"
                    class="order-btn">
                    Order Now
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<style>
    .workspace-branding {
        padding: 60px 0;
        background: #fff;
    }

    .section-title {
        font-size: 26px;
        font-weight: 600;
        margin-bottom: 25px;
    }

    .workspace-item {
        text-align: center;
    }

    .workspace-item img {
        width: 100%;
        height: 240px;
        object-fit: cover;
        border-radius: 6px;
    }

    .workspace-item p {
        margin-top: 12px;
        font-size: 15px;
        font-weight: 500;
    }

    .order-btn {
        display: block;
        /* full width enable */
        width: 100%;
        margin-top: 10px;
        padding: 10px 0;
        font-size: 14px;
        font-weight: 600;
        color: #fff;
        background: #ff4d00;
        border-radius: 5px;
        text-decoration: none;
        text-align: center;
        transition: all 0.3s ease;
    }

    .order-btn:hover {
        background: #e64400;
        color: #fff;
    }
</style>

<section class="workspace-branding">
    <div class="container">
        <h2 class="section-title">PRINTING $ MARKETING PRODUCTS</h2>

        <div class="printing-marketing-carousel owl-carousel owl-theme">

            @foreach ($PrintingMarketingProducts as $product)
            <div class="workspace-item">
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">

                <p class="product-title">{{ $product->name }}</p>

                <a href="{{ route('frontend.product-details', $product->id) }}"
                    class="order-btn">
                    Order Now
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="workspace-branding">
    <div class="container">
        <h2 class="section-title">Office & Store Brandings</h2>

        <div class="row">
            @foreach ($OfficeStoreProducts->take(12) as $product)
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="workspace-card h-100">
                    <div class="image-box">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                    </div>

                    <p class="product-title">{{ $product->name }}</p>

                    <a href="{{ route('frontend.product-details', $product->id) }}" class="order-btn">
                        Order Now
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<style>
    .workspace-card {
        background: #fff;
        border-radius: 8px;
        padding: 12px;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    /* FIXED IMAGE AREA */
    .image-box {
        width: 100%;
        height: 220px;
        /* SAME HEIGHT FOR ALL */
        background: #f5f5f5;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 6px;
        overflow: hidden;
    }

    .image-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* no distortion */
    }

    /* TITLE SAME HEIGHT */
    .product-title {
        margin: 12px 0;
        font-size: 15px;
        font-weight: 600;
        min-height: 40px;
        /* equal titles */
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    /* BUTTON ALWAYS BOTTOM */
    .order-btn {
        margin-top: auto;
        width: 100%;
        padding: 10px 0;
        font-size: 14px;
        font-weight: 600;
        color: #fff;
        background: #ff4d00;
        border-radius: 6px;
        text-decoration: none;
        text-align: center;
        transition: 0.3s;
    }

    .order-btn:hover {
        background: #e64400;
    }

    /* ARROW CONTAINER */
    .workspace-carousel .owl-nav, .printing-marketing-carousel .owl-nav {
        position: absolute;
        top: 40%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        pointer-events: none;
    }

    /* ARROW BUTTONS */
    .workspace-carousel .owl-nav button, .printing-marketing-carousel .owl-nav button {
        width: 45px;
        height: 45px;
        background: #ff4d00 !important;
        border-radius: 50%;
        color: #fff !important;
        font-size: 22px;
        display: flex;
        align-items: center;
        justify-content: center;
        pointer-events: all;
        transition: all 0.3s ease;
    }

    /* LEFT & RIGHT SPACING */
    .workspace-carousel .owl-nav .owl-prev, .printing-marketing-carousel .owl-nav .owl-prev {
        margin-left: -20px;
    }

    .workspace-carousel .owl-nav .owl-next, .printing-marketing-carousel .owl-nav .owl-next {
        margin-right: -20px;
    }

    /* HOVER EFFECT */
    .workspace-carousel .owl-nav button:hover, .printing-marketing-carousel .owl-nav button:hover {
        background: #e64400 !important;
        transform: scale(1.1);
    }
</style>


<!-- Start Choose Area -->
<!-- <div class="choose-area bg-with-F5F5F5-color pt-100 pb-75">
    <div class="container">
        <div class="section-title">
            <span>Printing & Marketing Products</span>
            <h2>Printing & Marketing Products <span class="overlay"></span></h2>
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
                            <a href="{{ route('frontend.product-details', $product->id) }}">{{ $product->name }}</a>
                        </h3>
                        <p>{{ \Illuminate\Support\Str::limit($product->short_description, 60) }}</p>
                        <a href="{{ route('frontend.product-details', $product->id) }}" class="services-btn">View More</a>
                        <a href="{{ route('frontend.product-details', $product->id) }}" class="order-btn">
                            Order Now
                        </a>
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
</div> -->
<!-- End Choose Area -->

<!-- Start Services Area -->
<!-- <div class="services-area bg-with-14042C-color ptb-100">
    <div class="container">
        <div class="section-title">
            <span>PRODUCTS</span>
            <h2>Office & Store Brandings <span class="overlay"></span></h2>
            <p>We deliver premium products designed to meet modern needs, ensuring quality, reliability, and customer satisfaction.</p>
        </div>

        <div class="row justify-content-center">
            @foreach ($OfficeStoreProducts as $product)
            <div class="col-lg-3 col-md-6">
                <div class="services-item">
                    <div class="services-image">
                        <a href="{{ route('frontend.product-details', $product->id) }}"><img src="{{asset($product->image)}}" alt="image"></a>
                    </div>
                    <div class="services-content">
                        <h3>
                            <a href="{{ route('frontend.product-details', $product->id) }}">{{ $product->name }}</a>
                        </h3>
                        <p>{{ \Illuminate\Support\Str::limit($product->short_description, 60) }}</p>
                        <a href="{{ route('frontend.product-details', $product->id) }}" class="order-btn">
                            Order Now
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="services-all-btn">
            <a href="{{ route('frontend.our-products') }}" class="default-btn">Explore All Products</a>
        </div>
    </div>
</div> -->
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
        <div class="section-title" style="margin: 0 auto 45px; text-align: center;">
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

<!-- <div class="blog-area pt-100 pb-75">
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
        </div>
    </div>

    <div class="blog-shape-1">
        <img src="{{ asset('frontend/assets/img/blog-shape-1.png') }}" alt="image">
    </div>
</div> -->
<!-- End Blog Area -->
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function() {
        $('.home-banner-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 4000,
            smartSpeed: 900,
            items: 1
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.workspace-carousel').owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            nav: true, // 👈 arrows ON
            dots: false,
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });

        $('.printing-marketing-carousel').owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            nav: true, // 👈 arrows ON
            dots: false,
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });
    });
</script>