@extends('layouts.frontend.main')
@section('title', 'Signage, Printing & Branding Products in UAE')
@section('description', 'Explore Golden Signage products: custom signs, display solutions, printing, corporate branding, office and exhibition products for UAE businesses.')
@section('meta')
@endsection

@section('content')
<!-- Inline styles to make product grid images uniform -->
<style>
    /* Ensure product images fill the card and are cropped, not stretched */
    .products-image img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        display: block;
    }
    @media (max-width: 768px) {
        .products-image img { height: 200px; }
    }

    /* Page Banner Dark Overlay */
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
        background: rgba(0, 0, 0, 0.72);
        z-index: -1;
    }
    .page-banner-content h2, 
    .page-banner-content ul li,
    .page-banner-content ul li a {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        color: #ffffff !important;
    }

    /* Products Area Dark Theme */
    body { background: #111; color: #ddd; }
    .products-area { background: #111; }
    .result-count p { color: #fff; }
    
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
    .single-products-card .products-content span {
        color: #C89B3C;
        font-weight: 600;
        display: block;
        margin-top: 8px;
    }
    .single-products-card .add-to-cart-btn {
        position: absolute;
        bottom: -50px;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        z-index: 3;
    }
    .single-products-card:hover .add-to-cart-btn {
        bottom: 120px;
    }
    .single-products-card .add-to-cart-btn a.default-btn {
        display: inline-block;
        background: linear-gradient(135deg, #f5b82e, #C89B3C) !important;
        color: #111 !important;
        font-weight: 700;
        border-radius: 8px;
        border: none;
        transition: 0.3s;
        box-shadow: 0 4px 10px rgba(200, 155, 60, 0.3);
        padding: 10px 25px;
    }
    .single-products-card .add-to-cart-btn a.default-btn:hover {
        background: linear-gradient(135deg, #ffd15c, #D4AF37) !important;
        color: #000 !important;
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(212, 175, 55, 0.6);
    }
    /* Heart icons */
    .heart-line a i, .heart-fill a i {
        color: #C89B3C !important;
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
<div class="page-banner-area bg-4 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
            <h2>Shop</h2>

            <ul>
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>Shop</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Products Area -->
<div class="products-area pt-100 pb-100">
    <div class="container">
        <div class="products-grid-sorting row align-items-center">
            <div class="col-lg-6 col-md-6 result-count">
                <p><b>Total Products:</b> {{ $products->count() }}</p>
            </div>

            <!-- <div class="col-lg-6 col-md-6 ordering">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <form class="search-form">
                            <input type="search" class="search-field" placeholder="Search your products">
                            <button type="submit"><i class="ri-search-line"></i></button>
                        </form>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="select-box">
                            <select>
                                <option>Default Sorting</option>
                                <option>Popularity</option>
                                <option>Latest</option>
                                <option>Price: Low To High</option>
                                <option>Price: High To Low</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="row justify-content-center">
            @foreach ($products as $product)
            <div class="col-lg-3 col-sm-6">
                <div class="single-products-card">
                    <div class="products-image">
                        <a href="products-details.html"><img src="{{asset($product->image)}}" alt="image"></a>

                        <div class="heart-line">
                            <a href="#"><i class="ri-heart-line"></i></a>
                        </div>
                        <div class="heart-fill">
                            <a href="#"><i class="ri-heart-fill"></i></a>
                        </div>
                        <div class="add-to-cart-btn">
                            <a href="https://wa.me/971543569914" target="_blank" class="default-btn">Contact Us</a>
                        </div>
                    </div>
                    <div class="products-content">
                        <h3>
                            <a href="{{ route('frontend.product-details', $product->id) }}">{{ $product->name }}</a>
                        </h3>
                        <span>{{ $product->price }}</span>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-lg-3 col-sm-6">
                <div class="single-products-card">
                    <div class="products-image">
                        <a href="products-details.html"><img src="{{ asset('frontend/assets/img/products-1.jpg') }}" alt="image"></a>

                        <div class="heart-line">
                            <a href="wishlist.html"><i class="ri-heart-line"></i></a>
                        </div>
                        <div class="heart-fill">
                            <a href="wishlist.html"><i class="ri-heart-fill"></i></a>
                        </div>
                        <div class="add-to-cart-btn">
                            <a href="cart.html" class="default-btn">Add To Cart</a>
                        </div>
                    </div>
                    <div class="products-content">
                        <h3>
                            <a href="products-details.html">Technology Book</a>
                        </h3>
                        <span>$ 13.25</span>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-lg-3 col-sm-6">
                <div class="single-products-card">
                    <div class="products-image">
                        <a href="products-details.html"><img src="{{ asset('frontend/assets/img/products-2.jpg') }}" alt="image"></a>

                        <div class="heart-line">
                            <a href="wishlist.html"><i class="ri-heart-line"></i></a>
                        </div>
                        <div class="heart-fill">
                            <a href="wishlist.html"><i class="ri-heart-fill"></i></a>
                        </div>
                        <div class="add-to-cart-btn">
                            <a href="cart.html" class="default-btn">Add To Cart</a>
                        </div>
                    </div>
                    <div class="products-content">
                        <h3>
                            <a href="products-details.html">Think Outside The Box</a>
                        </h3>
                        <span>$ 10.25</span>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-lg-3 col-sm-6">
                <div class="single-products-card">
                    <div class="products-image">
                        <a href="products-details.html"><img src="{{ asset('frontend/assets/img/products-3.jpg') }}" alt="image"></a>

                        <div class="heart-line">
                            <a href="wishlist.html"><i class="ri-heart-line"></i></a>
                        </div>
                        <div class="heart-fill">
                            <a href="wishlist.html"><i class="ri-heart-fill"></i></a>
                        </div>
                        <div class="add-to-cart-btn">
                            <a href="cart.html" class="default-btn">Add To Cart</a>
                        </div>
                        <div class="sale">Sale</div>
                    </div>
                    <div class="products-content">
                        <h3>
                            <a href="products-details.html">Adventure</a>
                        </h3>
                        <span>$ 20.25</span>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-lg-3 col-sm-6">
                <div class="single-products-card">
                    <div class="products-image">
                        <a href="products-details.html"><img src="{{ asset('frontend/assets/img/products-4.jpg') }}" alt="image"></a>

                        <div class="heart-line">
                            <a href="wishlist.html"><i class="ri-heart-line"></i></a>
                        </div>
                        <div class="heart-fill">
                            <a href="wishlist.html"><i class="ri-heart-fill"></i></a>
                        </div>
                        <div class="add-to-cart-btn">
                            <a href="cart.html" class="default-btn">Add To Cart</a>
                        </div>
                    </div>
                    <div class="products-content">
                        <h3>
                            <a href="products-details.html">Notebook With Pen</a>
                        </h3>
                        <span>$ 40.25</span>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-lg-3 col-sm-6">
                <div class="single-products-card">
                    <div class="products-image">
                        <a href="products-details.html"><img src="{{ asset('frontend/assets/img/products-5.jpg') }}" alt="image"></a>

                        <div class="heart-line">
                            <a href="wishlist.html"><i class="ri-heart-line"></i></a>
                        </div>
                        <div class="heart-fill">
                            <a href="wishlist.html"><i class="ri-heart-fill"></i></a>
                        </div>
                        <div class="add-to-cart-btn">
                            <a href="cart.html" class="default-btn">Add To Cart</a>
                        </div>
                    </div>
                    <div class="products-content">
                        <h3>
                            <a href="products-details.html">Complete IT Solution</a>
                        </h3>
                        <span>$ 43.25</span>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-lg-3 col-sm-6">
                <div class="single-products-card">
                    <div class="products-image">
                        <a href="products-details.html"><img src="{{ asset('frontend/assets/img/products-6.jpg') }}" alt="image"></a>

                        <div class="heart-line">
                            <a href="wishlist.html"><i class="ri-heart-line"></i></a>
                        </div>
                        <div class="heart-fill">
                            <a href="wishlist.html"><i class="ri-heart-fill"></i></a>
                        </div>
                        <div class="add-to-cart-btn">
                            <a href="cart.html" class="default-btn">Add To Cart</a>
                        </div>
                        <div class="new">New</div>
                    </div>
                    <div class="products-content">
                        <h3>
                            <a href="products-details.html">How To Overcome Bug</a>
                        </h3>
                        <span>$ 23.25</span>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-lg-3 col-sm-6">
                <div class="single-products-card">
                    <div class="products-image">
                        <a href="products-details.html"><img src="{{ asset('frontend/assets/img/products-7.jpg') }}" alt="image"></a>

                        <div class="heart-line">
                            <a href="wishlist.html"><i class="ri-heart-line"></i></a>
                        </div>
                        <div class="heart-fill">
                            <a href="wishlist.html"><i class="ri-heart-fill"></i></a>
                        </div>
                        <div class="add-to-cart-btn">
                            <a href="cart.html" class="default-btn">Add To Cart</a>
                        </div>
                    </div>
                    <div class="products-content">
                        <h3>
                            <a href="products-details.html">Complete Guide To Success</a>
                        </h3>
                        <span>$ 53.25</span>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-lg-3 col-sm-6">
                <div class="single-products-card">
                    <div class="products-image">
                        <a href="products-details.html"><img src="{{ asset('frontend/assets/img/products-8.jpg') }}" alt="image"></a>

                        <div class="heart-line">
                            <a href="wishlist.html"><i class="ri-heart-line"></i></a>
                        </div>
                        <div class="heart-fill">
                            <a href="wishlist.html"><i class="ri-heart-fill"></i></a>
                        </div>
                        <div class="add-to-cart-btn">
                            <a href="cart.html" class="default-btn">Add To Cart</a>
                        </div>
                    </div>
                    <div class="products-content">
                        <h3>
                            <a href="products-details.html">Note Book Mockup</a>
                        </h3>
                        <span>$ 47.25</span>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <a href="#" class="prev page-numbers"><i class="ri-arrow-left-s-line"></i></a>
                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="#" class="page-numbers">2</a>
                    <a href="#" class="page-numbers">3</a>
                    <a href="#" class="next page-numbers"><i class="ri-arrow-right-s-line"></i></a>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- End Products Area -->

<!-- Start Overview Area -->
<div class="overview-area pt-100 pb-75">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="overview-card">
                    <h3>Call Us</h3>
                    <span>
                        <a href="tel:{{ $adminDetails->phone ?? '' }}">{{ $adminDetails->phone ?? '' }}</a>
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
                        <a href="mailto:{{ $adminDetails->email ?? '' }}">{{ $adminDetails->email ?? '' }}</a>
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
                        <a href="tel:{{ $adminDetails->support ?? '' }}">{{ $adminDetails->support ?? '' }}</a>
                    </span>

                    <div class="overview-shape">
                        <img src="{{ asset('frontend/assets/img/overview-shape.png') }}" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="overview-card">
                    <h3>Visit Us</h3>
                    <span>{{ $adminDetails->address ?? '' }}</span>

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
