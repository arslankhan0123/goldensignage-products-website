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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
        height: 100vh;
        /* full screen height */
        object-fit: cover;
        /* fills container and crops */
        display: block;
    }
</style>
<!-- Start Main Hero Area -->
<div class="home-banner">
    <div class="home-banner-carousel owl-carousel owl-theme">

        <!-- Slide 1 -->
        <div class="banner-slide">
            <img src="https://graphicsfamily.com/wp-content/uploads/edd/2024/11/Free-Download-Storefront-and-Outdoor-Sign-3D-Logo-Mockup--scaled.jpg" alt="Roll Up Banner">
            <div class="banner-overlay">
                <h2>Outlit 3D Signage</h2>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="banner-slide">
            <img src="https://www.signsnw.co.uk/wp-content/uploads/2017/07/lavelle-flex-face.jpg" alt="Standee Banner">
            <div class="banner-overlay">
                <h2>Flex Face Signage</h2>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="banner-slide">
            <img src="https://png.pngtree.com/thumb_back/fh260/background/20230617/pngtree-3d-rendered-shop-signage-empty-black-rectangle-mockup-image_3627444.jpg" alt="Backdrop Exhibition">
            <div class="banner-overlay">
                <h2>3D Signage & Outdoor Signage</h2>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="banner-slide">
            <img src="https://t4.ftcdn.net/jpg/02/24/03/49/360_F_224034986_vWUKsRU4ay23YK9sCADOsz2E0cOUivRT.jpg" alt="Backdrop Exhibition">
            <div class="banner-overlay">
                <h2>Neon Signage</h2>
            </div>
        </div>

        <!-- Slide 4 -->
        <div class="banner-slide">
            <img src="https://img.freepik.com/premium-photo/old-brown-paper-envelope-grunge-vintage-paper-brown-background_123827-27752.jpg" alt="Promotional Banner">
            <div class="banner-overlay">
                <h2>Custom Envelopes</h2>
            </div>
        </div>

        <!-- Slide 5 -->
        <div class="banner-slide">
            <img src="https://t4.ftcdn.net/jpg/03/90/94/61/360_F_390946110_XTezYxpYC8AHloVFQHY7hQoydO7A1NYO.jpg" alt="Promotional Banner">
            <div class="banner-overlay">
                <h2>Business Cards</h2>
            </div>
        </div>

        <!-- Slide 6 -->
        <div class="banner-slide">
            <img src="https://www.dlxprint.com/images/signages/fabric_light_Box_dubai.webp" alt="Roll Up Banner">
            <div class="banner-overlay">
                <h2>Fabric Light Box Signage</h2>
            </div>
        </div>

        <!-- Slide 6 -->
        <div class="banner-slide">
            <img src="https://lh3.googleusercontent.com/proxy/sdCQGzj8hCu2VfbDiy7KNpny63aPRuUwPWIc3fQoavfwpLOr152h3HMuIMRtY65Av50btya-3orLR-YWvLMi43FZZTj9aQ3R5cICmyYIEXIwO9xz4pXZW331onSeCFqOMXb-m7x9r38xeHbBWTuFNA" alt="Roll Up Banner">
            <div class="banner-overlay">
                <h2>Acrylic Name Plates</h2>
            </div>
        </div>

        <!-- Slide 7 -->
        <div class="banner-slide">
            <img src="https://media.istockphoto.com/id/1284992155/vector/metal-banner-realistic-iron-plate-stainless-steel-board-with-silver-shine-and-texture.jpg?s=612x612&w=0&k=20&c=yXWjQPvOvj_FSURppiI9hpcFwFy4XQZVtDkU8bo-6-k=" alt="Roll Up Banner">
            <div class="banner-overlay">
                <h2>Metal Name Plates</h2>
            </div>
        </div>

        <!-- Slide 8 -->
        <div class="banner-slide">
            <img src="https://media.istockphoto.com/id/1404213994/photo/wooden-nameplate-or-sign-board-screwed-at-wall-background-front-view-of-name-plate.jpg?s=612x612&w=0&k=20&c=JNo2Q2he0bt9wdgqqsonAoE6g8LxdPse55MPbviepQ8=" alt="Roll Up Banner">
            <div class="banner-overlay">
                <h2>Wooden Name Plates</h2>
            </div>
        </div>

        <!-- Slide 9 -->
        <div class="banner-slide">
            <img src="https://www.scribescolourprint.co.uk/images/templates/InvoiceBooks22.jpg" alt="Roll Up Banner">
            <div class="banner-overlay">
                <h2>Invoice Books</h2>
            </div>
        </div>

        <!-- Slide 10 -->
        <div class="banner-slide">
            <img src="https://www.navitor.com/Assets/Catalog/Stamps/Stamp_Self-Inking_Category_540x240.png" alt="Roll Up Banner">
            <div class="banner-overlay">
                <h2>Self-Inking Stamps</h2>
            </div>
        </div>

        <!-- Slide 11 -->
        <div class="banner-slide">
            <img src="https://t4.ftcdn.net/jpg/18/92/00/39/360_F_1892003960_PuENoHo3bf0NlW8u2ffA2wb8FmmLQ2li.jpg" alt="Roll Up Banner">
            <div class="banner-overlay">
                <h2>Brochures</h2>
            </div>
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

<!-- Order Process Section -->
<section class="order-process-section">
    <div class="container">
        <div class="section-title" style="margin: 0 auto 45px; text-align: center;">
            <h2>Order Process</h2>
        </div>

        <div class="row text-center justify-content-center">

            <!-- Step 1 -->
            <div class="col-lg col-md-4 col-6 process-item">
                <div class="process-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h5>Inquiry</h5>
                <p>Inquire with your requirements</p>
            </div>

            <!-- Step 2 -->
            <div class="col-lg col-md-4 col-6 process-item">
                <div class="process-icon">
                    <i class="fas fa-file-invoice"></i>
                </div>
                <h5>Quotation</h5>
                <p>Approve provided quotation</p>
            </div>

            <!-- Step 3 -->
            <div class="col-lg col-md-4 col-6 process-item">
                <div class="process-icon">
                    <i class="fas fa-credit-card"></i>
                </div>
                <h5>Payment</h5>
                <p>Make payment to proceed</p>
            </div>

            <!-- Step 4 -->
            <div class="col-lg col-md-4 col-6 process-item">
                <div class="process-icon">
                    <i class="fas fa-image"></i>
                </div>
                <h5>Mock Up</h5>
                <p>Confirm mock-up before production</p>
            </div>

            <!-- Step 5 -->
            <div class="col-lg col-md-4 col-6 process-item">
                <div class="process-icon">
                    <i class="fas fa-industry"></i>
                </div>
                <h5>Production</h5>
                <p>We fulfill your order</p>
            </div>

            <!-- Step 6 -->
            <div class="col-lg col-md-4 col-6 process-item">
                <div class="process-icon">
                    <i class="fas fa-truck"></i>
                </div>
                <h5>Delivery Or Collection</h5>
                <p>Receive via delivery or collect</p>
            </div>

        </div>
    </div>
</section>
<style>
    .order-process-section {
        background: #f2f2f2;
        padding: 70px 0;
    }

    .section-title h2 {
        font-size: 36px;
        font-weight: 600;
        margin-bottom: 50px;
    }

    .process-item {
        margin-bottom: 40px;
    }

    .process-icon {
        width: 70px;
        height: 70px;
        margin: 0 auto 15px;
        border: 2px solid #000;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
    }

    .process-item h5 {
        font-weight: 600;
        margin-bottom: 5px;
    }

    .process-item p {
        font-size: 14px;
        color: #555;
    }
</style>

<!-- Trusted Businesses Section -->
<section class="trusted-section">
    <div class="container">
        <div class="section-title text-center">
            <h2>Businesses that Trust Deluxe Printing</h2>
        </div>

        <div class="owl-carousel trusted-carousel">
    <div class="logo-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/BMW.svg" alt="BMW" style="height: 80px; width: auto; margin: 0 auto;">
    </div>

    <div class="logo-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/500px-Google_%22G%22_logo.svg.png" alt="Google" style="height: 80px; width: auto; margin: 0 auto;">
    </div>

    <div class="logo-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Microsoft" style="height: 80px; width: auto; margin: 0 auto;">
    </div>

    <div class="logo-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Amazon" style="height: 80px; width: auto; margin: 0 auto;">
    </div>

    <div class="logo-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple" style="height: 80px; width: auto; margin: 0 auto;">
    </div>

    <div class="logo-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/c/ce/Coca-Cola_logo.svg" alt="Coca-Cola" style="height: 80px; width: auto; margin: 0 auto;">
    </div>

    <div class="logo-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a6/Logo_NIKE.svg" alt="Nike" style="height: 80px; width: auto; margin: 0 auto;">
    </div>

    <div class="logo-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Mercedes-Logo.svg/500px-Mercedes-Logo.svg.png" alt="Mercedes" style="height: 80px; width: auto; margin: 0 auto;">
    </div>
</div>
    </div>
</section>
<style>
    .trusted-section {
        background: #f2f2f2;
        padding: 60px 0;
    }

    .trusted-section h2 {
        font-size: 36px;
        font-weight: 600;
        margin-bottom: 40px;
    }

    .logo-item {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .logo-item img {
        max-height: 70px;
        width: auto;
        filter: grayscale(100%);
        opacity: 0.8;
        transition: 0.3s ease;
    }

    .logo-item img:hover {
        filter: grayscale(0%);
        opacity: 1;
    }
</style>

<section class="signage-showcase">
    <div class="container">
        <div class="signage-grid">

            <!-- Left Large Banner -->
            <div class="signage-large">
                <img src="https://gregory1.com/images/flexface-signage-gregory-inc-e44o55.png"
                    alt="Flex Face Signage">
                <div class="overlay">
                    <!-- <h2>Transform Your Sales with</h2> -->
                    <h1>Flex Face Signage</h1>
                    <p>Where Innovation Meets Visibility!</p>
                    <a href="#" class="explore-btn">Discover →</a>
                </div>
            </div>

            <!-- Right Side Cards -->
            <div class="signage-right">

                <div class="signage-card">
                    <img src="https://wsgprint.co.uk/wp-content/uploads/2020/01/shop-signs-north-east-face-lit-sign.jpg"
                        alt="Signages">
                    <div class="card-overlay">
                        <h3>SIGNAGES</h3>
                        <span>Explore →</span>
                    </div>
                </div>

                <div class="signage-card">
                    <img src="https://www.shutterstock.com/shutterstock/videos/1045272481/thumb/11.jpg?ip=x480"
                        alt="Neon Signages">
                    <div class="card-overlay">
                        <h3>NEON SIGNAGES</h3>
                        <span>Explore →</span>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<style>
    .signage-showcase {
        padding: 60px 0;
        background: #fff;
    }

    .signage-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 20px;
    }

    .signage-large,
    .signage-card {
        position: relative;
        overflow: hidden;
        border-radius: 14px;
    }

    .signage-large img,
    .signage-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* Left Banner */
    .signage-large {
        height: 420px;
    }

    .signage-large .overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.1));
        color: #fff;
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .signage-large h2 {
        font-size: 20px;
        margin-bottom: 5px;
        color: white;
    }

    .signage-large h1 {
        font-size: 32px;
        font-weight: 700;
        color: white;
    }

    .signage-large p {
        margin: 10px 0 18px;
        color: white;
    }

    .explore-btn {
        display: inline-block;
        background: #ff4d00;
        color: #fff;
        padding: 10px 22px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        width: fit-content;
    }

    /* Right Cards */
    .signage-right {
        display: grid;
        grid-template-rows: 1fr 1fr;
        gap: 20px;
    }

    .signage-card {
        height: 200px;
    }

    .card-overlay {
        position: absolute;
        inset: 0;
        /* background: rgba(255, 255, 255, 0.75); */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        backdrop-filter: blur(2px);
        text-align: center;
        color: white;
    }

    .card-overlay h3 {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 6px;
        color: white;
    }

    .card-overlay span {
        font-size: 14px;
        font-weight: 600;
    }

    /* Responsive */
    @media (max-width: 991px) {
        .signage-grid {
            grid-template-columns: 1fr;
        }

        .signage-large {
            height: 320px;
        }
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
    .workspace-carousel .owl-nav,
    .printing-marketing-carousel .owl-nav {
        position: absolute;
        top: 40%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        pointer-events: none;
    }

    /* ARROW BUTTONS */
    .workspace-carousel .owl-nav button,
    .printing-marketing-carousel .owl-nav button {
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
    .workspace-carousel .owl-nav .owl-prev,
    .printing-marketing-carousel .owl-nav .owl-prev {
        margin-left: -20px;
    }

    .workspace-carousel .owl-nav .owl-next,
    .printing-marketing-carousel .owl-nav .owl-next {
        margin-right: -20px;
    }

    /* HOVER EFFECT */
    .workspace-carousel .owl-nav button:hover,
    .printing-marketing-carousel .owl-nav button:hover {
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

<style>
    .testimonials-slides .owl-stage {
        display: flex;
    }

    .single-testimonials-card {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .single-testimonials-card p {
        flex-grow: 1;
    }
</style>
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

        $('.trusted-carousel').owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            nav: false, // 👈 arrows ON
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