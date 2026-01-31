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
    /* Product details page - screenshot style */
    .product-detail-hero {
        padding: 60px 0 80px;
        background: #fff;
    }
    .product-detail-hero .headings-row {
        margin-bottom: 1.5rem;
    }
    .product-detail-hero .product-title {
        font-size: 2rem;
        font-weight: 700;
        color: #1a1a1a;
    }
    .product-detail-hero .about-heading {
        font-size: 1.35rem;
        font-weight: 700;
        color: #1a1a1a;
    }
    .product-detail-hero .main-image-wrap {
        width: 100%;
        border-radius: 12px;
        overflow: hidden;
        background: #f5f5f5;
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
    }
    .product-detail-about .about-content {
        margin-top: 0;
        color: #444;
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
        color: #1a1a1a;
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
        background: #fff;
    }
    .product-gallery-section .gallery-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
    }
    .product-gallery-section .gallery-item {
        background: #fff;
    }
    .product-gallery-section .gallery-item .gallery-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: #1a1a1a;
        margin-bottom: 0.75rem;
        padding-bottom: 0.35rem;
        border-bottom: 2px solid #c00;
        display: inline-block;
    }
    .product-gallery-section .gallery-item .gallery-image {
        width: 100%;
        border-radius: 8px;
        overflow: hidden;
        background: #f5f5f5;
    }
    .product-gallery-section .gallery-item .gallery-image img {
        width: 100%;
        height: auto;
        min-height: 220px;
        object-fit: cover;
        display: block;
    }
    @media (max-width: 991px) {
        .product-detail-hero .product-title { font-size: 1.65rem; }
        .product-gallery-section .gallery-grid { grid-template-columns: 1fr; }
    }
    @media (max-width: 576px) {
        .product-detail-hero { padding: 40px 0 50px; }
        .product-gallery-section .gallery-item .gallery-image img { min-height: 180px; }
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
</style>

<!-- Start Page Banner Area -->
<div class="page-banner-area bg-5 jarallax" data-jarallax='{"speed": 0.3}'>
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
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
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
                        <div class="add-to-cart-btn">
                            <a href="{{ route('frontend.contact') }}" class="default-btn">Contact Us</a>
                        </div>
                    </div>
                    <div class="products-content">
                        <h3>
                            <a href="{{ route('frontend.product-details', $relatedProduct->id) }}">{{ $relatedProduct->name }}</a>
                        </h3>
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

<!-- Floating Contact Buttons (Phone, WhatsApp, Email) -->
<div class="floating-contact-wrap">
    <div class="floating-contact-buttons is-hidden" id="floatingContactButtons">
        <a href="tel:+923044727900" class="floating-contact-btn-phone" title="Call Us" aria-label="Call">
            <i class="ri-phone-fill"></i>
        </a>
        <a href="https://wa.me/923044627900" target="_blank" rel="noopener noreferrer" class="floating-contact-btn-whatsapp" title="WhatsApp" aria-label="WhatsApp">
            <i class="ri-whatsapp-fill"></i>
        </a>
        <a href="mailto:arslan.devsspace@gmail.com" class="floating-contact-btn-email" title="Email Us" aria-label="Email">
            <i class="ri-mail-fill"></i>
        </a>
        <button type="button" class="floating-contact-close" id="floatingContactClose" title="Close" aria-label="Close">
            <i class="ri-close-line"></i>
        </button>
    </div>
    <button type="button" class="floating-contact-toggle" id="floatingContactToggle" title="Contact Options" aria-label="Open contact options">
        <i class="ri-chat-smile-2-fill"></i>
    </button>
</div>
<script>
(function() {
    var toggle = document.getElementById('floatingContactToggle');
    var panel = document.getElementById('floatingContactButtons');
    var closeBtn = document.getElementById('floatingContactClose');
    if (toggle && panel) {
        toggle.addEventListener('click', function() {
            panel.classList.toggle('is-hidden');
        });
        if (closeBtn) {
            closeBtn.addEventListener('click', function() {
                panel.classList.add('is-hidden');
            });
        }
    }
})();
</script>
@endsection
