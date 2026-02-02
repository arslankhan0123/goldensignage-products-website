<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('logo.png') }}" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navbar navbar-with-black-color">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('logo.png') }}" alt="Golden Signage" style="height:80px; width:auto;">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">Home</a>
                        </li>

                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                Services
                                <i class="ri-arrow-down-s-line"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="services-style-1.html" class="nav-link">Services Style One</a>
                                </li>
                                <li class="nav-item">
                                    <a href="services-style-2.html" class="nav-link">Services Style Two</a>
                                </li>
                                <li class="nav-item">
                                    <a href="services-details.html" class="nav-link">Services Details</a>
                                </li>
                            </ul>
                        </li> -->

                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                Shop
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="products.html" class="nav-link">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a href="cart.html" class="nav-link">Cart</a>
                                </li>
                                <li class="nav-item">
                                    <a href="wishlist.html" class="nav-link">Wishlist</a>
                                </li>
                                <li class="nav-item">
                                    <a href="checkout.html" class="nav-link">Checkout</a>
                                </li>
                                <li class="nav-item">
                                    <a href="my-account.html" class="nav-link">My Account</a>
                                </li>
                                <li class="nav-item">
                                    <a href="products-details.html" class="nav-link">Products Details</a>
                                </li>
                            </ul>
                        </li> -->

                        @if(isset($signageCategories) && $signageCategories->isNotEmpty())
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Signage
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($signageCategories as $category)
                                    <li class="nav-item">
                                        @if($category->products->isNotEmpty())
                                            <a href="{{ route('frontend.our-products', ['category' => $category->id]) }}" class="nav-link">
                                                {{ $category->name }}
                                                <i class="ri-arrow-down-s-line"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach($category->products as $product)
                                                    <li class="nav-item">
                                                        <a href="{{ route('frontend.product-details', $product->id) }}" class="nav-link">{{ $product->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <a href="{{ route('frontend.our-products', ['category' => $category->id]) }}" class="nav-link">{{ $category->name }}</a>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        @endif

                        @if(isset($flagsCategories) && $flagsCategories->isNotEmpty())
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Flags
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($flagsCategories as $category)
                                    <li class="nav-item">
                                        @if($category->products->isNotEmpty())
                                            <a href="{{ route('frontend.our-products', ['category' => $category->id]) }}" class="nav-link">
                                                {{ $category->name }}
                                                <i class="ri-arrow-down-s-line"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach($category->products as $product)
                                                    <li class="nav-item">
                                                        <a href="{{ route('frontend.product-details', $product->id) }}" class="nav-link">{{ $product->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <a href="{{ route('frontend.our-products', ['category' => $category->id]) }}" class="nav-link">{{ $category->name }}</a>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        @endif

                        @if(isset($printingCategories) && $printingCategories->isNotEmpty())
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Printing
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($printingCategories as $category)
                                    <li class="nav-item">
                                        @if($category->products->isNotEmpty())
                                            <a href="{{ route('frontend.our-products', ['category' => $category->id]) }}" class="nav-link">
                                                {{ $category->name }}
                                                <i class="ri-arrow-down-s-line"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach($category->products as $product)
                                                    <li class="nav-item">
                                                        <a href="{{ route('frontend.product-details', $product->id) }}" class="nav-link">{{ $product->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <a href="{{ route('frontend.our-products', ['category' => $category->id]) }}" class="nav-link">{{ $category->name }}</a>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        @endif

                        @if(isset($officeStoreCategories) && $officeStoreCategories->isNotEmpty())
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Store Branding
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($officeStoreCategories as $category)
                                    <li class="nav-item">
                                        @if($category->products->isNotEmpty())
                                            <a href="{{ route('frontend.our-products', ['category' => $category->id]) }}" class="nav-link">
                                                {{ $category->name }}
                                                <i class="ri-arrow-down-s-line"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach($category->products as $product)
                                                    <li class="nav-item">
                                                        <a href="{{ route('frontend.product-details', $product->id) }}" class="nav-link">{{ $product->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <a href="{{ route('frontend.our-products', ['category' => $category->id]) }}" class="nav-link">{{ $category->name }}</a>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        @endif

                        @if(isset($backdropsExhibitionCategories) && $backdropsExhibitionCategories->isNotEmpty())
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Exhibition
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($backdropsExhibitionCategories as $category)
                                    <li class="nav-item">
                                        @if($category->products->isNotEmpty())
                                            <a href="{{ route('frontend.our-products', ['category' => $category->id]) }}" class="nav-link">
                                                {{ $category->name }}
                                                <i class="ri-arrow-down-s-line"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach($category->products as $product)
                                                    <li class="nav-item">
                                                        <a href="{{ route('frontend.product-details', $product->id) }}" class="nav-link">{{ $product->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <a href="{{ route('frontend.our-products', ['category' => $category->id]) }}" class="nav-link">{{ $category->name }}</a>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        @endif

                        @if(isset($corporateGiftsBagsCategories) && $corporateGiftsBagsCategories->isNotEmpty())
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Gifts/Bags
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($corporateGiftsBagsCategories as $category)
                                    <li class="nav-item">
                                        @if($category->products->isNotEmpty())
                                            <a href="{{ route('frontend.our-products', ['category' => $category->id]) }}" class="nav-link">
                                                {{ $category->name }}
                                                <i class="ri-arrow-down-s-line"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach($category->products as $product)
                                                    <li class="nav-item">
                                                        <a href="{{ route('frontend.product-details', $product->id) }}" class="nav-link">{{ $product->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <a href="{{ route('frontend.our-products', ['category' => $category->id]) }}" class="nav-link">{{ $category->name }}</a>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        @endif
                        
                        <!-- <li class="nav-item">
                            <a href="{{ route('frontend.our-services') }}" class="nav-link">Our Services</a>
                        </li> -->

                        <!-- <li class="nav-item">
                            <a href="{{ route('frontend.our-products') }}" class="nav-link">Our Products</a>
                        </li> -->

                        <!-- <li class="nav-item">
                            <a href="{{ route('frontend.about') }}" class="nav-link">About</a>
                        </li> -->

                        <li class="nav-item">
                            <a href="{{ route('frontend.management') }}" class="nav-link">Management</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('frontend.contact') }}" class="nav-link">Contact</a>
                        </li>
                    </ul>

                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <i class="search-btn ri-search-line"></i>
                            <i class="close-btn ri-close-line"></i>
                            <div class="search-overlay search-popup">
                                <div class='search-box'>
                                    <form class="search-form">
                                        <input class="search-input" placeholder="Search..." type="text">

                                        <button class="search-button" type="submit">
                                            <i class="ri-search-line"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="side-menu-btn">
                                <i class="ri-bar-chart-horizontal-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <i class="search-btn ri-search-line"></i>
                            <i class="close-btn ri-close-line"></i>
                            <div class="search-overlay search-popup">
                                <div class='search-box'>
                                    <form class="search-form">
                                        <input class="search-input" placeholder="Search..." type="text">

                                        <button class="search-button" type="submit">
                                            <i class="ri-search-line"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="side-menu-btn">
                                <i class="ri-bar-chart-horizontal-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>