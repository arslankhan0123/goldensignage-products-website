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
    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/img/favicon.png') }}">
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
</body>

</html>