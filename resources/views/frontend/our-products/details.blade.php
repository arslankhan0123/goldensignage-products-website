@extends('layouts.frontend.main')
@section('title', $product->name . ' - Product Details')
@section('meta')
@endsection

@section('content')
@php
    $gallery = is_string($product->gallery) ? json_decode($product->gallery, true) : ($product->gallery ?? []);
    $gallery = is_array($gallery) ? $gallery : [];
@endphp
<style>
    /* Product details page - dark theme */
    body {
        background: #111;
        color: #ddd;
    }
    .product-detail-hero {
        padding: 60px 0 80px;
        background: #111;
    }
    .product-detail-hero .headings-row {
        margin-bottom: 1.5rem;
    }
    .product-detail-hero .product-title {
        font-size: 2rem;
        font-weight: 700;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .product-detail-hero .about-heading {
        font-size: 1.35rem;
        font-weight: 700;
        color: #C89B3C;
    }
    .product-detail-hero .main-image-wrap {
        width: 100%;
        border-radius: 12px;
        overflow: hidden;
        background: #151515;
        border: 1px solid #333;
        box-shadow: 0 5px 15px rgba(0,0,0,0.4);
    }
    .product-detail-hero .main-image-wrap a {
        display: block;
        width: 100%;
    }
    .product-detail-hero .main-image-wrap img {
        width: 100%;
        height: auto;
        display: block;
        vertical-align: top;
        background: #151515 !important;
        border-bottom: 2px solid #C89B3C;
    }
    .product-detail-about .about-content {
        margin-top: 0;
        color: #ddd;
        line-height: 1.7;
        margin-bottom: 1.5rem;
    }
    .product-detail-about .about-content p {
        margin-bottom: 1rem;
    }
    .product-detail-about .about-content h4,
    .product-detail-about .about-content strong {
        font-size: 1.05rem;
        font-weight: 700;
        color: #fff;
        margin-top: 1.25rem;
        margin-bottom: 0.35rem;
    }
    .product-detail-about .about-content ul {
        margin-bottom: 1rem;
        padding-left: 1.25rem;
    }
    .product-detail-about .about-content li {
        margin-bottom: 0.25rem;
    }
    /* Gallery section */
    .product-gallery-section {
        padding: 0 0 80px;
        background: #111;
    }
    .product-gallery-section .gallery-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
    }
    .product-gallery-section .gallery-item {
        background: #111;
    }
    .product-gallery-section .gallery-item .gallery-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: #fff;
        margin-bottom: 0.75rem;
        padding-bottom: 0.35rem;
        border-bottom: 2px solid #C89B3C;
        display: inline-block;
    }
    .product-gallery-section .gallery-item .gallery-image {
        width: 100%;
        border-radius: 8px;
        overflow: hidden;
        background: #151515;
        border: 1px solid #333;
    }
    .product-gallery-section .gallery-item .gallery-image img {
        width: 100%;
        height: auto;
        object-fit: contain;
        display: block;
        background: #151515 !important;
    }
    @media (max-width: 991px) {
        .product-detail-hero .product-title { font-size: 1.65rem; }
        .product-gallery-section .gallery-grid { grid-template-columns: 1fr; }
    }
    @media (max-width: 576px) {
        .product-detail-hero { padding: 40px 0 50px; }
        .product-gallery-section .gallery-item .gallery-image img { min-height: auto; }
    }
    /* Floating contact buttons - right side stack */
    .floating-contact-wrap {
        position: fixed;
        right: 20px;
        bottom: 24px;
        z-index: 9999;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }
    .floating-contact-wrap a,
    .floating-contact-wrap button {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        text-decoration: none;
        border: none;
        cursor: pointer;
        box-shadow: 0 4px 14px rgba(0,0,0,0.2);
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .floating-contact-wrap a:hover,
    .floating-contact-wrap button:hover {
        transform: scale(1.08);
        box-shadow: 0 6px 18px rgba(0,0,0,0.25);
        color: #fff;
    }
    .floating-contact-wrap a:focus,
    .floating-contact-wrap button:focus {
        outline: none;
        color: #fff;
    }
    .floating-contact-btn-phone { background: #25D366; }
    .floating-contact-btn-whatsapp { background: #25D366; }
    .floating-contact-btn-email { background: #E84E40; }
    .floating-contact-toggle { background: #7c3aed; }
    .floating-contact-close { background: #a78bfa; }
    .floating-contact-wrap .floating-contact-toggle i,
    .floating-contact-wrap .floating-contact-close i,
    .floating-contact-wrap a i { font-size: 1.4rem; }
    .floating-contact-buttons {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }
    .floating-contact-buttons.is-hidden {
        display: none !important;
    }
    
    /* Overlay for better text readability on banner */
    .page-banner-area {
        position: relative;
        z-index: 1;
    }
    .page-banner-area::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.72); /* Much darker overlay for maximum text contrast */
        z-index: -1;
    }
    .page-banner-content h2, 
    .page-banner-content ul li,
    .page-banner-content ul li a {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Extra pop for text */
        color: #ffffff !important;
    }

    /* Related Products & Overview Area Dark Theme */
    .products-area { background: #111; }
    .related-title h2 { color: #fff; text-align: center; margin-bottom: 40px; font-weight: 800; text-transform: uppercase; }
    .related-title h2::after { content:''; display:block; width:80px; height:4px; background:linear-gradient(135deg, #C89B3C, #8B6914); margin:15px auto 0; border-radius:2px; }

    .single-products-card {
        text-align: center;
        background: #151515;
        border-radius: 14px;
        padding: 0;
        overflow: hidden;
        border: 1px solid #333;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        display: flex;
        flex-direction: column;
        box-shadow: 0 5px 15px rgba(0,0,0,0.4);
        margin-bottom: 30px;
    }
    .single-products-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(200, 155, 60, 0.2);
        border-color: #C89B3C;
    }
    .single-products-card .products-image img {
        transition: transform 0.6s ease;
        border-bottom: 2px solid #C89B3C;
        background: #151515 !important;
    }
    .single-products-card:hover .products-image img {
        transform: scale(1.08);
    }
    .single-products-card .products-content {
        padding: 25px 15px 20px;
        position: relative;
        background: #151515;
        z-index: 2;
        border-top: 2px solid #C89B3C;
    }
    .single-products-card .products-content h3 a {
        color: #fff;
        font-size: 18px;
        font-weight: 700;
        text-transform: capitalize;
        transition: 0.3s;
    }
    .single-products-card .products-content h3 a:hover {
        color: #C89B3C;
    }
    .single-products-card .related-order-btn {
        display: block;
        width: 100%;
        margin-top: 14px;
        padding: 10px 15px;
        color: #fff !important;
        background: #F7941D;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 700;
        line-height: 1.4;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: 0.3s;
        box-shadow: 0 4px 10px rgba(247, 148, 29, 0.3);
    }
    .single-products-card .related-order-btn:hover {
        color: #fff !important;
        background: #df7f0b;
        transform: translateY(-2px);
        box-shadow: 0 7px 18px rgba(247, 148, 29, 0.45);
    }
    .single-products-card .add-to-cart-btn a.default-btn {
        display: block;
        width: calc(100% - 40px);
        margin: 15px auto 0;
        background: linear-gradient(135deg, #f5b82e, #C89B3C) !important;
        color: #111 !important;
        font-weight: 700;
        border-radius: 8px;
        border: none;
        transition: 0.3s;
        box-shadow: 0 4px 10px rgba(200, 155, 60, 0.3);
        padding: 10px 0;
    }
    .single-products-card .add-to-cart-btn a.default-btn:hover {
        background: linear-gradient(135deg, #ffd15c, #D4AF37) !important;
        color: #000 !important;
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(212, 175, 55, 0.6);
    }

    /* Overview Section */
    .overview-area { background: #181818; }
    .overview-card {
        background: #111;
        border-radius: 12px;
        padding: 30px;
        text-align: center;
        border: 1px solid #333;
        transition: 0.3s;
    }
    .overview-card:hover { border-color: #C89B3C; transform: translateY(-5px); }
    .overview-card h3 { color: #fff; margin-bottom: 15px; font-weight: 700; }
    .overview-card span, .overview-card span a { color: #C89B3C; font-weight: 600; text-decoration: none; }
</style>

<!-- Start Page Banner Area -->
<div class="page-banner-area jarallax" data-jarallax='{"speed": 0.3}' style="background-image: url('{{ asset($product->image) }}');">
    <div class="container">
        <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
            <h2>{{ $product->name }}</h2>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('frontend.our-products') }}">Products</a></li>
                <li>{{ $product->name }}</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Product Detail Hero (Image + About) -->
<section class="product-detail-hero">
    <div class="container">
        <div class="row headings-row align-items-end">
            <div class="col-lg-6 col-md-12">
                <h1 class="product-title mb-0">{{ $product->name }}</h1>
            </div>
            <div class="col-lg-6 col-md-12">
                <h1 class="product-title mb-0">About</h1>
            </div>
        </div>
        <div class="row align-items-start content-row">
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                <div class="main-image-wrap">
                    <a data-fancybox="gallery" href="{{ asset($product->image) }}">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" style="object-fit: contain; width: 100%; height: auto; background: #f9f9f9;">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="product-detail-about">
                    <div class="about-content">
                        {!! $product->long_description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product Detail Hero -->

@if(count($gallery) > 0)
<!-- Start Product Gallery -->
<section class="product-gallery-section">
    <div class="container">
        <div class="gallery-grid">
            @foreach($gallery as $item)
            <div class="gallery-item">
                @if(!empty($item['title']))
                <h4 class="gallery-title">{{ $item['title'] }}</h4>
                @endif
                <div class="gallery-image">
                    @if(!empty($item['image']))
                    <a data-fancybox="product-gallery" href="{{ asset($item['image']) }}">
                        <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] ?? 'Gallery image' }}">
                    </a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Product Gallery -->
@endif

<!-- Start Related Products Area -->
@if(isset($recent_products) && $recent_products->isNotEmpty())
<div class="products-area pb-75">
    <div class="container">
        <div class="related-title">
            <h2>Related Products</h2>
        </div>
        <div class="row justify-content-center">
            @foreach ($recent_products as $relatedProduct)
            <div class="col-lg-3 col-sm-6">
                <div class="single-products-card">
                    <div class="products-image">
                        <a href="{{ route('frontend.product-details', $relatedProduct->id) }}">
                            <img src="{{ asset($relatedProduct->image) }}" alt="{{ $relatedProduct->name }}" style="width:100%;height:200px;object-fit:cover;">
                        </a>
                    </div>
                    <div class="products-content">
                        <h3>
                            <a href="{{ route('frontend.product-details', $relatedProduct->id) }}">{{ $relatedProduct->name }}</a>
                        </h3>
                        <a href="https://wa.me/971543569914?text={{ urlencode('I want to buy this product: ' . $relatedProduct->name) }}"
                            class="related-order-btn" target="_blank" rel="noopener noreferrer">
                            Order Now
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif
<!-- End Related Products Area -->

<!-- Start Overview Area -->
@if(isset($adminDetails))
<div class="overview-area pt-100 pb-75">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="overview-card">
                    <h3>Call Us</h3>
                    <span><a href="tel:{{ $adminDetails->phone ?? '' }}">{{ $adminDetails->phone ?? '' }}</a></span>
                    <div class="overview-shape"><img src="{{ asset('frontend/assets/img/overview-shape.png') }}" alt="image"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="overview-card">
                    <h3>Email Us</h3>
                    <span><a href="mailto:{{ $adminDetails->email ?? '' }}">{{ $adminDetails->email ?? '' }}</a></span>
                    <div class="overview-shape"><img src="{{ asset('frontend/assets/img/overview-shape.png') }}" alt="image"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="overview-card">
                    <h3>Tech Support</h3>
                    <span><a href="tel:{{ $adminDetails->support ?? '' }}">{{ $adminDetails->support ?? '' }}</a></span>
                    <div class="overview-shape"><img src="{{ asset('frontend/assets/img/overview-shape.png') }}" alt="image"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="overview-card">
                    <h3>Visit Us</h3>
                    <span>{{ $adminDetails->address ?? '' }}</span>
                    <div class="overview-shape"><img src="{{ asset('frontend/assets/img/overview-shape.png') }}" alt="image"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- End Overview Area -->
@endsection
