<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('logo.png') }}" alt="image" class="site-logo">
                    </a>
                </div>
                <!-- Custom Mobile Toggle -->
                <div class="custom-mobile-toggle" id="mobile-menu-btn">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Mobile Tabbed Menu Overlay -->
    <div id="mobileCustomMenu">
        <div class="mobile-menu-header">
            <img src="{{ asset('logo.png') }}" alt="Logo">
            <div class="mobile-menu-close" onclick="toggleMobileMenu()">
                <i class="ri-close-line"></i>
            </div>
        </div>
        <div class="mobile-menu-body">
            <div class="mobile-menu-sidebar">
                <div class="mobile-menu-tab" onclick="location.href='{{ route('home') }}'">
                    <i class="ri-home-4-line"></i>
                    <span>Home</span>
                </div>
                @if(isset($signageCategories) && $signageCategories->isNotEmpty())
                <div class="mobile-menu-tab active" onclick="switchMobileTab(this, 'tab-signage')">
                    <i class="ri-advertisement-line"></i>
                    <span>Signages</span>
                </div>
                @endif
                @if(isset($printingCategories) && $printingCategories->isNotEmpty())
                <div class="mobile-menu-tab" onclick="switchMobileTab(this, 'tab-printing')">
                    <i class="ri-printer-line"></i>
                    <span>Printing</span>
                </div>
                @endif
                @if(isset($officeStoreCategories) && $officeStoreCategories->isNotEmpty())
                <div class="mobile-menu-tab" onclick="switchMobileTab(this, 'tab-branding')">
                    <i class="ri-building-line"></i>
                    <span>Branding</span>
                </div>
                @endif
                @if(isset($backdropsExhibitionCategories) && $backdropsExhibitionCategories->isNotEmpty())
                <div class="mobile-menu-tab" onclick="switchMobileTab(this, 'tab-exhibition')">
                    <i class="ri-gallery-line"></i>
                    <span>Exhibition</span>
                </div>
                @endif
                @if(isset($corporateGiftsCategories) && $corporateGiftsCategories->isNotEmpty())
                <div class="mobile-menu-tab" onclick="switchMobileTab(this, 'tab-gifts')">
                    <i class="ri-gift-line"></i>
                    <span>Gifts</span>
                </div>
                @endif
                @if(isset($flagsCategories) && $flagsCategories->isNotEmpty())
                <div class="mobile-menu-tab" onclick="switchMobileTab(this, 'tab-flags')">
                    <i class="ri-flag-line"></i>
                    <span>Flags</span>
                </div>
                @endif
                <div class="mobile-menu-tab" onclick="location.href='{{ route('frontend.management') }}'">
                    <i class="ri-team-line"></i>
                    <span>Management</span>
                </div>
                <div class="mobile-menu-tab" onclick="location.href='{{ route('frontend.contact') }}'">
                    <i class="ri-contacts-line"></i>
                    <span>Contact</span>
                </div>
            </div>
            <div class="mobile-menu-content">
                @if(isset($signageCategories))
                <div id="tab-signage" class="mobile-tab-content active">
                    <div class="mobile-content-title">Signages <i class="ri-arrow-right-s-line"></i></div>
                    @foreach($signageCategories as $category)
                    <div class="mobile-category-section">
                        <div class="mobile-category-title">{{ $category->name }} <i class="ri-arrow-right-s-line"></i></div>
                        <div class="mobile-products-grid">
                            @foreach($category->products as $product)
                            <a href="{{ route('frontend.product-details', $product->id) }}" class="mobile-product-card">
                                <div class="mobile-product-image">
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                </div>
                                <div class="mobile-product-info">
                                    <h4>{{ $product->name }}</h4>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

                @if(isset($printingCategories))
                <div id="tab-printing" class="mobile-tab-content">
                    <div class="mobile-content-title">Printing <i class="ri-arrow-right-s-line"></i></div>
                    @foreach($printingCategories as $category)
                    <div class="mobile-category-section">
                        <div class="mobile-category-title">{{ $category->name }} <i class="ri-arrow-right-s-line"></i></div>
                        <div class="mobile-products-grid">
                            @foreach($category->products as $product)
                            <a href="{{ route('frontend.product-details', $product->id) }}" class="mobile-product-card">
                                <div class="mobile-product-image">
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                </div>
                                <div class="mobile-product-info">
                                    <h4>{{ $product->name }}</h4>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

                @if(isset($officeStoreCategories))
                <div id="tab-branding" class="mobile-tab-content">
                    <div class="mobile-content-title">Store Branding <i class="ri-arrow-right-s-line"></i></div>
                    @foreach($officeStoreCategories as $category)
                    <div class="mobile-category-section">
                        <div class="mobile-category-title">{{ $category->name }} <i class="ri-arrow-right-s-line"></i></div>
                        <div class="mobile-products-grid">
                            @foreach($category->products as $product)
                            <a href="{{ route('frontend.product-details', $product->id) }}" class="mobile-product-card">
                                <div class="mobile-product-image">
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                </div>
                                <div class="mobile-product-info">
                                    <h4>{{ $product->name }}</h4>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

                @if(isset($backdropsExhibitionCategories))
                <div id="tab-exhibition" class="mobile-tab-content">
                    <div class="mobile-content-title">Exhibition <i class="ri-arrow-right-s-line"></i></div>
                    @foreach($backdropsExhibitionCategories as $category)
                    <div class="mobile-category-section">
                        <div class="mobile-category-title">{{ $category->name }} <i class="ri-arrow-right-s-line"></i></div>
                        <div class="mobile-products-grid">
                            @foreach($category->products as $product)
                            <a href="{{ route('frontend.product-details', $product->id) }}" class="mobile-product-card">
                                <div class="mobile-product-image">
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                </div>
                                <div class="mobile-product-info">
                                    <h4>{{ $product->name }}</h4>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

                @if(isset($corporateGiftsCategories))
                <div id="tab-gifts" class="mobile-tab-content">
                    <div class="mobile-content-title">Gifts & Bags <i class="ri-arrow-right-s-line"></i></div>
                    @foreach($corporateGiftsCategories as $category)
                    <div class="mobile-category-section">
                        <div class="mobile-category-title">{{ $category->name }} <i class="ri-arrow-right-s-line"></i></div>
                        <div class="mobile-products-grid">
                            @foreach($category->products as $product)
                            <a href="{{ route('frontend.product-details', $product->id) }}" class="mobile-product-card">
                                <div class="mobile-product-image">
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                </div>
                                <div class="mobile-product-info">
                                    <h4>{{ $product->name }}</h4>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

                @if(isset($flagsCategories))
                <div id="tab-flags" class="mobile-tab-content">
                    <div class="mobile-content-title">Flags <i class="ri-arrow-right-s-line"></i></div>
                    @foreach($flagsCategories as $category)
                    <div class="mobile-category-section">
                        <div class="mobile-category-title">{{ $category->name }} <i class="ri-arrow-right-s-line"></i></div>
                        <div class="mobile-products-grid">
                            @foreach($category->products as $product)
                            <a href="{{ route('frontend.product-details', $product->id) }}" class="mobile-product-card">
                                <div class="mobile-product-image">
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                </div>
                                <div class="mobile-product-info">
                                    <h4>{{ $product->name }}</h4>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function toggleMobileMenu() {
            console.log('Toggle called');
            const menu = $('#mobileCustomMenu');
            menu.toggleClass('active');
            if (menu.hasClass('active')) {
                $('body').css('overflow', 'hidden');
            } else {
                $('body').css('overflow', '');
            }
        }

        function switchMobileTab(element, tabId) {
            $('.mobile-menu-tab').removeClass('active');
            $(element).addClass('active');
            
            $('.mobile-tab-content').removeClass('active');
            $('#' + tabId).addClass('active');
            
            $('.mobile-menu-content').scrollTop(0);
        }

        $(document).ready(function() {
            $('#mobile-menu-btn').on('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                toggleMobileMenu();
            });
        });
    </script>

    <div class="main-navbar navbar-with-black-color">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('logo.png') }}" alt="Golden Signage" class="site-logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">Home</a>
                        </li>

                        @if(isset($signageCategories) && $signageCategories->isNotEmpty())
                        <li class="nav-item mega-menu-item">
                            <a href="#" class="nav-link">
                                Signage
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <div class="mega-menu">
                                <div class="mega-menu-container">
                                    <div class="mega-menu-content">
                                        @foreach($signageCategories as $category)
                                            <div class="mega-menu-column">
                                                <h3>{{ $category->name }} <i class="ri-arrow-right-s-line"></i></h3>
                                                <ul>
                                                    @foreach($category->products as $product)
                                                        <li><a href="{{ route('frontend.product-details', $product->id) }}">{{ $product->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="mega-menu-column-image">
                                        @php 
                                            $cat = $signageCategories->first();
                                            $img = $cat && $cat->image ? asset('storage/' . $cat->image) : asset('logo.png');
                                        @endphp
                                        <div class="mega-menu-image-card">
                                            <img src="{{ $img }}" alt="{{ $cat->name ?? 'Featured' }}">
                                            <div class="card-body">
                                                <h4>{{ $cat->name ?? 'Featured' }}</h4>
                                            </div>
                                        </div>
                                        <div class="mega-menu-popular">
                                            <h5>Most Popular</h5>
                                            <div class="popular-items-grid">
                                                <div class="popular-item"><img src="{{ asset('logo.png') }}" alt="Pop"></div>
                                                <div class="popular-item"><img src="{{ asset('logo.png') }}" alt="Pop"></div>
                                                <div class="popular-item"><img src="{{ asset('logo.png') }}" alt="Pop"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endif

                        @if(isset($printingCategories) && $printingCategories->isNotEmpty())
                        <li class="nav-item mega-menu-item">
                            <a href="#" class="nav-link">
                                Printing
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <div class="mega-menu">
                                <div class="mega-menu-container">
                                    <div class="mega-menu-content">
                                        @foreach($printingCategories as $category)
                                            <div class="mega-menu-column">
                                                <h3>{{ $category->name }} <i class="ri-arrow-right-s-line"></i></h3>
                                                <ul>
                                                    @foreach($category->products as $product)
                                                        <li><a href="{{ route('frontend.product-details', $product->id) }}">{{ $product->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="mega-menu-column-image">
                                        @php 
                                            $cat = $printingCategories->first();
                                            $img = $cat && $cat->image ? asset('storage/' . $cat->image) : asset('logo.png');
                                        @endphp
                                        <div class="mega-menu-image-card">
                                            <img src="{{ $img }}" alt="{{ $cat->name ?? 'Featured' }}">
                                            <div class="card-body">
                                                <h4>{{ $cat->name ?? 'Featured' }}</h4>
                                            </div>
                                        </div>
                                        <div class="mega-menu-popular">
                                            <h5>Most Popular</h5>
                                            <div class="popular-items-grid">
                                                <div class="popular-item"><img src="{{ asset('logo.png') }}" alt="Pop"></div>
                                                <div class="popular-item"><img src="{{ asset('logo.png') }}" alt="Pop"></div>
                                                <div class="popular-item"><img src="{{ asset('logo.png') }}" alt="Pop"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endif

                        @if(isset($officeStoreCategories) && $officeStoreCategories->isNotEmpty())
                        <li class="nav-item mega-menu-item">
                            <a href="#" class="nav-link">
                                Store Branding
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <div class="mega-menu">
                                <div class="mega-menu-container">
                                    <div class="mega-menu-content">
                                        @foreach($officeStoreCategories as $category)
                                            <div class="mega-menu-column">
                                                <h3>{{ $category->name }} <i class="ri-arrow-right-s-line"></i></h3>
                                                <ul>
                                                    @foreach($category->products as $product)
                                                        <li><a href="{{ route('frontend.product-details', $product->id) }}">{{ $product->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="mega-menu-column-image">
                                        @php 
                                            $cat = $officeStoreCategories->first();
                                            $img = $cat && $cat->image ? asset('storage/' . $cat->image) : asset('logo.png');
                                        @endphp
                                        <div class="mega-menu-image-card">
                                            <img src="{{ $img }}" alt="{{ $cat->name ?? 'Featured' }}">
                                            <div class="card-body">
                                                <h4>{{ $cat->name ?? 'Featured' }}</h4>
                                            </div>
                                        </div>
                                        <div class="mega-menu-popular">
                                            <h5>Most Popular</h5>
                                            <div class="popular-items-grid">
                                                <div class="popular-item"><img src="{{ asset('logo.png') }}" alt="Pop"></div>
                                                <div class="popular-item"><img src="{{ asset('logo.png') }}" alt="Pop"></div>
                                                <div class="popular-item"><img src="{{ asset('logo.png') }}" alt="Pop"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endif

                        @if(isset($backdropsExhibitionCategories) && $backdropsExhibitionCategories->isNotEmpty())
                        <li class="nav-item mega-menu-item">
                            <a href="#" class="nav-link">
                                Exhibition
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <div class="mega-menu">
                                <div class="mega-menu-container">
                                    <div class="mega-menu-content">
                                        @foreach($backdropsExhibitionCategories as $category)
                                            <div class="mega-menu-column">
                                                <h3>{{ $category->name }} <i class="ri-arrow-right-s-line"></i></h3>
                                                <ul>
                                                    @foreach($category->products as $product)
                                                        <li><a href="{{ route('frontend.product-details', $product->id) }}">{{ $product->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="mega-menu-column-image">
                                        @php 
                                            $cat = $backdropsExhibitionCategories->first();
                                            $img = $cat && $cat->image ? asset('storage/' . $cat->image) : asset('logo.png');
                                        @endphp
                                        <div class="mega-menu-image-card">
                                            <img src="{{ $img }}" alt="{{ $cat->name ?? 'Featured' }}">
                                            <div class="card-body">
                                                <h4>{{ $cat->name ?? 'Featured' }}</h4>
                                            </div>
                                        </div>
                                        <div class="mega-menu-popular">
                                            <h5>Most Popular</h5>
                                            <div class="popular-items-grid">
                                                <div class="popular-item"><img src="{{ asset('logo.png') }}" alt="Pop"></div>
                                                <div class="popular-item"><img src="{{ asset('logo.png') }}" alt="Pop"></div>
                                                <div class="popular-item"><img src="{{ asset('logo.png') }}" alt="Pop"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endif

                        @if(isset($corporateGiftsBagsCategories) && $corporateGiftsBagsCategories->isNotEmpty())
                        <li class="nav-item mega-menu-item">
                            <a href="#" class="nav-link">
                                Gifts/Bags
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <div class="mega-menu">
                                <div class="mega-menu-container">
                                    <div class="mega-menu-content">
                                        @foreach($corporateGiftsBagsCategories as $category)
                                            <div class="mega-menu-column">
                                                <h3>{{ $category->name }} <i class="ri-arrow-right-s-line"></i></h3>
                                                <ul>
                                                    @foreach($category->products as $product)
                                                        <li><a href="{{ route('frontend.product-details', $product->id) }}">{{ $product->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="mega-menu-column-image">
                                        @php 
                                            $cat = $corporateGiftsBagsCategories->first();
                                            $img = $cat && $cat->image ? asset('storage/' . $cat->image) : asset('logo.png');
                                        @endphp
                                        <div class="mega-menu-image-card">
                                            <img src="{{ $img }}" alt="{{ $cat->name ?? 'Featured' }}">
                                            <div class="card-body">
                                                <h4>{{ $cat->name ?? 'Featured' }}</h4>
                                            </div>
                                        </div>
                                        <div class="mega-menu-popular">
                                            <h5>Most Popular</h5>
                                            <div class="popular-items-grid">
                                                <div class="popular-item"><img src="{{ asset('logo.png') }}" alt="Pop"></div>
                                                <div class="popular-item"><img src="{{ asset('logo.png') }}" alt="Pop"></div>
                                                <div class="popular-item"><img src="{{ asset('logo.png') }}" alt="Pop"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endif
                        
                        @if(isset($flagsCategories) && $flagsCategories->isNotEmpty())
                        <li class="nav-item mega-menu-item">
                            <a href="#" class="nav-link">
                                Flags
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <div class="mega-menu">
                                <div class="mega-menu-container">
                                    <div class="mega-menu-content">
                                        @foreach($flagsCategories as $category)
                                            <div class="mega-menu-column">
                                                <h3>{{ $category->name }} <i class="ri-arrow-right-s-line"></i></h3>
                                                <ul>
                                                    @foreach($category->products as $product)
                                                        <li><a href="{{ route('frontend.product-details', $product->id) }}">{{ $product->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="mega-menu-column-image">
                                        @php 
                                            $cat = $flagsCategories->first();
                                            $img = $cat && $cat->image ? asset('storage/' . $cat->image) : asset('logo.png');
                                        @endphp
                                        <div class="mega-menu-image-card">
                                            <img src="{{ $img }}" alt="{{ $cat->name ?? 'Featured' }}">
                                            <div class="card-body">
                                                <h4>{{ $cat->name ?? 'Featured' }}</h4>
                                            </div>
                                        </div>
                                        <div class="mega-menu-popular">
                                            <h5>Most Popular</h5>
                                            <div class="popular-items-grid">
                                                <div class="popular-item"><img src="{{ asset('logo.png') }}" alt="Pop"></div>
                                                <div class="popular-item"><img src="{{ asset('logo.png') }}" alt="Pop"></div>
                                                <div class="popular-item"><img src="{{ asset('logo.png') }}" alt="Pop"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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