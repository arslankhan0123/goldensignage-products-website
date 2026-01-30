@extends('layouts.frontend.main')
@section('title', 'Contact Us')
@section('meta')
@endsection

@section('content')
<!-- Start Page Banner Area -->
<div class="page-banner-area bg-5 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
            <h2>Contact</h2>

            <ul>
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Success/Error Messages -->
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(request()->get('deleted') == 'success')
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong>
    @php
    $count = request()->get('count', 1);
    @endphp
    {{ $count > 1 ? $count . ' contacts deleted successfully.' : 'Contact deleted successfully.' }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong>
    <ul class="mb-0">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

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

<!-- Start Talk Area -->
<div class="talk-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="talk-image" data-tilt>
                    <img src="{{ asset('frontend/assets/img/talk.png') }}" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="talk-content margin-zero">
                    <span>LET'S TALK</span>
                    <h3>We Would Like To Hear From You Anytime <span class="overlay"></span></h3>

                    <form id="contactFormTwo" method="POST" action="{{ route('contact.details.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required placeholder="Your name">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required placeholder="Your email address">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" class="form-control" required placeholder="Your Subject">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
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
<!-- End Talk Area -->

<!-- Start Map Area -->
<div class="container ptb-100">
    <div class="map-location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102948.35266648312!2d-115.15540073403864!3d36.26047650441708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c8c2b00ad43d33%3A0x22c7fa13f5acf526!2sNorth%20Las%20Vegas%2C%20NV%2C%20USA!5e0!3m2!1sen!2sbd!4v1639919075838!5m2!1sen!2sbd"></iframe>
    </div>
</div>
<!-- End Map Area -->
@endsection