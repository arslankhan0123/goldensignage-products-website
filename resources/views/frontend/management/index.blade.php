@extends('layouts.frontend.main')
@section('title', 'About Us')
@section('meta')
@endsection

@section('content')
<!-- Start Page Banner Area -->
<div class="page-banner-area bg-3 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
            <h2>About Our Management</h2>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>About Our Management</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Team Section -->
@php
$teamMembers = [
[
'name' => 'Amir Riaz',
'title' => 'CEO',
'image' => 'https://randomuser.me/api/portraits/men/32.jpg',
'description' => 'Visionary leader driving innovation and strategic growth.',
'experience' => '15+ Years',
'specialization' => 'Business Strategy, Leadership'
],
[
'name' => 'Jane Smith',
'title' => 'CTO',
'image' => 'https://randomuser.me/api/portraits/women/44.jpg',
'description' => 'Leads our technical team and technology vision.',
'experience' => '12+ Years',
'specialization' => 'Software Architecture, Cloud Solutions'
],
[
'name' => 'Arslan Khan',
'title' => 'Fullstack Developer',
'image' => 'https://arslankhan.net/frontend/assets/Profile-Pic.png',
'description' => 'Builds scalable applications using cutting-edge tech.',
'experience' => '8+ Years',
'specialization' => 'Laravel, React, Vue.js'
],
[
'name' => 'Sara Ahmed',
'title' => 'Marketing Expert',
'image' => 'https://randomuser.me/api/portraits/women/68.jpg',
'description' => 'Crafts campaigns that drive brand engagement and growth.',
'experience' => '10+ Years',
'specialization' => 'Digital Marketing, SEO, Social Media'
],
[
'name' => 'Imran Malik',
'title' => 'WordPress Developer',
'image' => 'https://randomuser.me/api/portraits/men/66.jpg',
'description' => 'Expert in WordPress themes, plugins and site builds.',
'experience' => '7+ Years',
'specialization' => 'WordPress, WooCommerce, Plugin Development'
],
];
@endphp

<div class="team-section py-5" style="background: #f8f9fa;">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Meet Our Team</h2>

        @foreach($teamMembers as $member)
        <div class="card mb-5 border-0 shadow-lg team-card">
            <div class="row g-0 align-items-center p-3">
                <!-- Image Left -->
                <div class="col-md-4 text-center">
                    <!-- Update your image style -->
                    <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" class="team-img img-fluid rounded-circle shadow-lg">
                </div>

                <!-- Details Right -->
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title fw-bold mb-1">{{ $member['name'] }}</h4>
                        <h6 class="card-subtitle mb-2 text-primary fw-semibold">{{ $member['title'] }}</h6>
                        <p class="mb-2 text-muted">{{ $member['description'] }}</p>

                        <div class="d-flex flex-wrap gap-3 mt-3">
                            <span class="badge bg-secondary">Experience: {{ $member['experience'] }}</span>
                            <span class="badge bg-info text-dark">Specialization: {{ $member['specialization'] }}</span>
                        </div>

                        <!-- Optional Social Icons -->
                        <div class="mt-3">
                            <a href="#" class="me-3 text-decoration-none text-dark"><i class="bi bi-linkedin fs-5"></i></a>
                            <a href="#" class="me-3 text-decoration-none text-dark"><i class="bi bi-twitter fs-5"></i></a>
                            <a href="#" class="text-decoration-none text-dark"><i class="bi bi-facebook fs-5"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Custom CSS for Hover & Card -->
<style>
    .team-card {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .team-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    .team-card .badge {
        font-size: 0.85rem;
        padding: 0.45em 0.7em;
    }
</style>
<style>
    .team-img {
        width: 200px;
        /* fixed width */
        height: 200px;
        /* fixed height */
        object-fit: cover;
        /* crop/fit the image nicely */
        border-radius: 50%;
        /* circle */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .team-card {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .team-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    .team-card .badge {
        font-size: 0.85rem;
        padding: 0.45em 0.7em;
    }
</style>

@endsection