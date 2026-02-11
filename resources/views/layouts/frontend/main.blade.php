<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Links of CSS files -->
    <!-- <link rel="stylesheet" href="https://templates.envytheme.com/coze/default/assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="https://templates.envytheme.com/coze/default/assets/css/aos.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/aos.css') }}">
    <!-- <link rel="stylesheet" href="https://templates.envytheme.com/coze/default/assets/css/animate.min.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <!-- <link rel="stylesheet" href="https://templates.envytheme.com/coze/default/assets/css/meanmenu.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}">
    <!-- <link rel="stylesheet" href="https://templates.envytheme.com/coze/default/assets/css/remixicon.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/remixicon.css') }}">
    <!-- <link rel="stylesheet" href="https://templates.envytheme.com/coze/default/assets/css/odometer.min.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/odometer.min.css') }}">
    <!-- <link rel="stylesheet" href="https://templates.envytheme.com/coze/default/assets/css/owl.carousel.min.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <!-- <link rel="stylesheet" href="https://templates.envytheme.com/coze/default/assets/css/owl.theme.default.min.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">
    <!-- <link rel="stylesheet" href="https://templates.envytheme.com/coze/default/assets/css/magnific-popup.min.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.min.css') }}">
    <!-- <link rel="stylesheet" href="https://templates.envytheme.com/coze/default/assets/css/fancybox.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fancybox.css') }}">
    <!-- <link rel="stylesheet" href="https://templates.envytheme.com/coze/default/assets/css/nice-select.min.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.min.css') }}">
    <!-- <link rel="stylesheet" href="https://templates.envytheme.com/coze/default/assets/css/style.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <!-- <link rel="stylesheet" href="https://templates.envytheme.com/coze/default/assets/css/navbar.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/navbar.css') }}">
    <!-- <link rel="stylesheet" href="https://templates.envytheme.com/coze/default/assets/css/footer.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/footer.css') }}">
    <!-- <link rel="stylesheet" href="https://templates.envytheme.com/coze/default/assets/css/dark.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/dark.css') }}">
    <!-- <link rel="stylesheet" href="https://templates.envytheme.com/coze/default/assets/css/responsive.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">

    <title>@yield('title', 'Home')</title>

    <!-- <link rel="icon" type="image/png" href="https://templates.envytheme.com/coze/default/assets/images/favicon.png"> -->
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
</head>

<body>

    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="lds-spinner">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Topbar Area -->
    @include('layouts.frontend.topbar')
    <!-- End Topbar Area -->

    <!-- Start Navbar Area -->
    @include('layouts.frontend.navbar')
    <!-- End Navbar Area -->

    <!-- Sidebar Modal -->
    @include('layouts.frontend.sidebar')
    <!-- End Sidebar Modal -->

    @yield('content')

    <!-- End Footer Area -->
    @include('layouts.frontend.footer')
    <!-- End Footer Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="ri-arrow-up-s-line"></i>
    </div>
    <!-- End Go Top Area -->

    <div class="fixed-bottom-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-3 border-end">
                    <span><i class="ri-phone-fill"></i> Phone:
                        <a href="tel:{{ preg_replace('/\D+/', '', ($adminDetails->phone ?? '')) }}">{{ $adminDetails->phone ?? '' }}</a>
                    </span>
                </div>
                <div class="col-3 border-end">
                    <span><i class="ri-mail-fill"></i> Mail:
                        <a href="mailto:{{ $adminDetails->email ?? '' }}">{{ $adminDetails->email ?? 'info@example.com' }}</a>
                    </span>
                </div>
                <div class="col-3 border-end">
                    <a href="#" class="btn btn-sm btn-orange">Quick Inquiry</a>
                </div>
                <div class="col-3 social-box">
                    <p class="mb-1" style="font-size: 12px; font-weight: bold;">Follow Us</p>
                    <div class="social-icons">
                        <a href="#" target="_blank"><i class="ri-facebook-circle-fill"></i></a>
                        <a href="#" target="_blank"><i class="ri-instagram-line"></i></a>
                        <a href="#" target="_blank"><i class="ri-whatsapp-line"></i></a>
                        <a href="#" target="_blank"><i class="ri-twitter-x-fill"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* Custom Fixed Bottom Bar Styling */
        .fixed-bottom-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #ffffff;
            /* White background */
            z-index: 2000;
            /* Taaki sabse upar rahe */
            padding: 10px 0;
            box-shadow: 0 -4px 15px rgba(0, 0, 0, 0.15);
            /* Top shadow */
            border-top: 2px solid #f1f1f1;
        }

        .fixed-bottom-bar p {
            font-size: 14px;
            font-weight: 600;
            color: #333;
            margin-bottom: 5px !important;
        }

        .btn-orange {
            background-color: #ff8c00;
            /* Orange color */
            color: #fff;
            border-radius: 4px;
            padding: 4px 12px;
            font-size: 12px;
            transition: 0.3s;
            text-transform: uppercase;
        }

        .btn-orange:hover {
            background-color: #e67e00;
            color: #fff;
        }

        /* Page content ko bar ke piche chhupne se bachane ke liye */
        body {
            padding-bottom: 80px !important;
        }

        /* Mobile responsive adjustments */
        @media (max-width: 768px) {
            .fixed-bottom-bar p {
                font-size: 10px;
            }

            .btn-orange {
                font-size: 10px;
                padding: 3px 6px;
            }

            body {
                padding-bottom: 100px !important;
            }
        }

        /* Social Icons Styling */
        .social-icons a {
            font-size: 20px;
            /* Icon ka size */
            margin: 0 5px;
            color: #333;
            /* Default color */
            transition: 0.3s;
            display: inline-block;
        }

        .social-icons a:hover {
            color: #ff8c00;
            /* Hover par orange color */
            transform: translateY(-3px);
            /* Halka sa upar move hoga */
        }

        /* Icons aur text ki alignment */
        .fixed-bottom-bar span i {
            color: #ff8c00;
            margin-right: 5px;
        }

        /* Mobile responsive fixes */
        @media (max-width: 768px) {
            .social-icons a {
                font-size: 16px;
                margin: 0 3px;
            }

            .fixed-bottom-bar span {
                font-size: 10px;
            }
        }
    </style>

    <!-- Floating Contact Buttons (Phone, WhatsApp, Email) -->
    <div class="floating-contact-wrap">
        <div class="floating-contact-buttons is-hidden" id="floatingContactButtons">
            <a href="tel:+971543569914" class="floating-contact-btn-phone" title="Call Us" aria-label="Call">
                <i class="ri-phone-fill"></i>
            </a>
            <a href="https://wa.me/971543569914" target="_blank" rel="noopener noreferrer" class="floating-contact-btn-whatsapp" title="WhatsApp" aria-label="WhatsApp">
                <i class="ri-whatsapp-fill"></i>
            </a>
            <a href="mailto:info@goldensignage.ae" class="floating-contact-btn-email" title="Email Us" aria-label="Email">
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

    <!-- Links of JS files -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/jquery.min.js"></script> -->
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/bootstrap.bundle.min.js"></script> -->
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/jquery.meanmenu.js"></script> -->
    <script src="{{ asset('frontend/assets/js/jquery.meanmenu.js') }}"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/owl.carousel.min.js"></script> -->
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/jquery.appear.js"></script> -->
    <script src="{{ asset('frontend/assets/js/jquery.appear.js') }}"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/odometer.min.js"></script> -->
    <script src="{{ asset('frontend/assets/js/odometer.min.js') }}"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/jquery.magnific-popup.min.js"></script> -->
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/fancybox.min.js"></script> -->
    <script src="{{ asset('frontend/assets/js/fancybox.min.js') }}"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/tweenmax.min.js"></script> -->
    <script src="{{ asset('frontend/assets/js/tweenmax.min.js') }}"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/ScrollMagic.min.js"></script> -->
    <script src="{{ asset('frontend/assets/js/ScrollMagic.min.js') }}"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/animation.gsap.min.js"></script> -->
    <script src="{{ asset('frontend/assets/js/animation.gsap.min.js') }}"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/debug.addIndicators.min.js"></script> -->
    <script src="{{ asset('frontend/assets/js/debug.addIndicators.min.js') }}"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/mixitup.min.js"></script> -->
    <script src="{{ asset('frontend/assets/js/mixitup.min.js') }}"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/nice-select.min.js"></script> -->
    <script src="{{ asset('frontend/assets/js/nice-select.min.js') }}"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/tilt.jquery.min.js"></script> -->
    <script src="{{ asset('frontend/assets/js/tilt.jquery.min.js') }}"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/parallax.min.js"></script> -->
    <script src="{{ asset('frontend/assets/js/parallax.min.js') }}"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/jquery.ajaxchimp.min.js"></script> -->
    <script src="{{ asset('frontend/assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/form-validator.min.js"></script> -->
    <script src="{{ asset('frontend/assets/js/form-validator.min.js') }}"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/contact-form-script.js"></script> -->
    <script src="{{ asset('frontend/assets/js/contact-form-script.js') }}"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/aos.js"></script> -->
    <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/wow.min.js"></script> -->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <!-- <script src="https://templates.envytheme.com/coze/default/assets/js/main.js"></script> -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML = "window.__CF$cv$params={r:'9b7298928d66e23c',t:'MTc2NzI3NjU4Mg=='};var a=document.createElement('script');a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script>
    <style>
        .site-logo {
            height: 80px;
            width: auto;
        }

        @media (max-width: 1200px) {
            .site-logo {
                height: auto;
                display: inline-block;
                max-width: 50% !important;
            }

            .topbar-area {
                display: none !important;
            }
        }
    </style>
</body>

</html>