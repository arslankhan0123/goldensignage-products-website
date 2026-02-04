<footer class="footer-area with-black-background margin-zero pt-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <div class="widget-logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('logo.png') }}" alt="image"></a>
                    </div>
                    <p>We are leading technology solutions providing company all over the world doing over 40 years.</p>

                    <ul class="widget-social">
                        <li>
                            <a href="https://www.facebook.com" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/?lang=en" target="_blank">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.youtube.com/" target="_blank">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://vimeo.com/" target="_blank">
                                <i class="ri-vimeo-fill"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget ps-5" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                    <h3>Links</h3>

                    <ul class="quick-links">
                        <li><a href="{{ route('frontend.our-services') }}">Services</a></li>
                        <li><a href="{{ route('frontend.about') }}">About Us</a></li>
                        <li><a href="{{ route('frontend.contact') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget ps-5" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                    <h3>Pages</h3>

                    <ul class="quick-links">
                        <li><a href="{{ route('frontend.our-products') }}">Products</a></li>
                        <li><a href="{{ route('frontend.management') }}">Management</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <h3>Subscribe Newsletter</h3>

                    <form class="newsletter-form" data-bs-toggle="validator">
                        <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">

                        <button type="submit" class="default-btn">Subscribe</button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    Copyright <strong>Golden Signage</strong> All Rights Reserved by <a href="https://goldensignage.ae/" target="_blank"> Golden Signage</a>
                </p>
            </div>
        </div>
    </div>
    <div class="footer-shape-1">
        <img src="{{ asset('frontend/assets/img/footer-shape-1.png') }}" alt="image">
    </div>
    <div class="footer-shape-2">
        <img src="{{ asset('frontend/assets/img/footer-shape-2.png') }}" alt="image">
    </div>
    <div class="footer-shape-3">
        <img src="{{ asset('frontend/assets/img/footer-shape-3.png') }}" alt="image">
    </div>
</footer>