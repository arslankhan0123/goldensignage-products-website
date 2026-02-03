<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>

            <div class="modal-body">
                <a href="index.html">
                    <img src="{{ asset('logo.png') }}" alt="image" class="site-logo">
                </a>
                <div class="sidebar-content">
                    <h3>About Us</h3>
                    <p>Golden Signage is a professional signage and branding solutions company based in Dubai, UAE, dedicated to helping businesses stand out with impactful visual communication. We specialize in designing and delivering high-quality custom signage, including 3D signs, neon signs, indoor and outdoor branding, and illuminated and non-illuminated displays.</p>

                    <div class="sidebar-btn">
                        <a href="{{ route('frontend.contact') }}" class="default-btn">Let’s Talk</a>
                    </div>
                </div>
                <div class="sidebar-contact-info">
                    <h3>Contact Information</h3>

                    <ul class="info-list">
                        <li><i class="ri-phone-fill"></i> <a href="tel:{{ preg_replace('/\D+/', '', ($adminDetails->phone ?? '')) }}">{{ $adminDetails->phone ?? '' }}</a></li>

                        <li><i class="ri-mail-line"></i> <a href="mailto:{{ $adminDetails->email ?? '' }}">{{ $adminDetails->email ?? '' }}</a></li>

                        <li><i class="ri-map-pin-line"></i> {{ $adminDetails->address ?? 'N/A' }}</li>
                    </ul>
                </div>
                <ul class="sidebar-social-list">
                    <li><a href="#" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                    <li><a href="#" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                    <li><a href="#" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                    <li><a href="#" target="_blank"><i class="ri-instagram-fill"></i></a></li>
                </ul>
                <div class="contact-form">
                    <h3>Ready to Get Started?</h3>

                    <form id="contactForm" method="POST" action="{{ route('contact.details.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required placeholder="Your name">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required placeholder="Your email address">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" class="form-control" required placeholder="Your Subject">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="number" name="phone_number" class="form-control" required placeholder="Your Phone">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="6" required placeholder="Your message..."></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">Send Message<span></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>