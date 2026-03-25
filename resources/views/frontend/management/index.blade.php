@extends('layouts.frontend.main')

@section('title', 'Management Team')

@section('meta')
@endsection

@section('content')

<!-- ================= Page Banner ================= -->
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
<!-- ================= End Page Banner ================= -->

@php
$teamMembers = [
[
'name' => 'Amir Riaz',
'title' => 'CEO',
'image' => asset('amir.jpeg'),
'description' => 'Visionary leader with a passion for innovation and growth.',
'experience' => '15+ Years',
'specialization' => 'Business development manager and Marketing expert'
],
[
'name' => 'Arslan Khan',
'title' => 'Fullstack Developer',
'image' => 'https://arslankhan.net/frontend/assets/Profile-Pic.png',
'description' => 'Builds scalable applications using cutting-edge tech.',
'experience' => '8+ Years',
'specialization' => 'Laravel, React, Vue.js, DevOps, CI/CD, API Development'
],
[
'name' => 'Ali Aqeel Nasir',
'title' => 'Master of Digital Marketing',
'image' => asset('ali.jpeg'),
'description' => 'Drives our digital marketing strategy and online presence.',
'experience' => '6+ Years',
'specialization' => 'Master of Digital Marketing, SEO, Social Media Strategy',
],
];
@endphp

<!-- ================= Team Section ================= -->
<div class="team-section py-5" style="background:#f8f9fa;">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Meet Our Team</h2>

        @foreach($teamMembers as $member)
        <div class="card mb-5 border-0 shadow-lg team-card">
            <div class="row g-0 align-items-center p-3 team-row">

                <!-- Image -->
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <img src="{{ $member['image'] }}"
                        alt="{{ $member['name'] }}"
                        class="team-img img-fluid">
                </div>

                <!-- Content -->
                <div class="col-md-8 text-center text-md-start">
                    <div class="card-body">
                        <h4 class="fw-bold mb-1">{{ $member['name'] }}</h4>
                        <h6 class="text-primary fw-semibold mb-2">{{ $member['title'] }}</h6>
                        <p class="text-muted mb-3">{{ $member['description'] }}</p>

                        <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-md-start">
                            <!-- <span class="badge bg-secondary" style="padding: 8px 12px; text-align:center">Experience: {{ $member['experience'] }}</span> -->
                            <div class="experience">
                                Experience: {{ $member['experience'] }}
                            </div>
                            <div class="specialization">
                                Specialization: {{ $member['specialization'] }}
                            </div>

                        </div>

                        <!-- Social Icons -->
                        <div class="mt-3">
                            <a href="#" class="me-3 text-dark"><i class="bi bi-linkedin fs-5"></i></a>
                            <a href="#" class="me-3 text-dark"><i class="bi bi-twitter fs-5"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-facebook fs-5"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- ================= Responsive CSS ================= -->
<style>
    .team-card {
        border-radius: 16px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .team-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    }

    .team-img {
        width: 200px;
        height: 200px;
        object-fit: contain;
        border-radius: 50%;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
    }

    /* Mobile */
    @media (max-width: 768px) {
        .team-img {
            width: 140px;
            height: 140px;
        }

        .team-card {
            text-align: center;
        }

        .team-card .card-body {
            padding-top: 0.5rem;
        }
    }

    @media (max-width: 576px) {
        .team-img {
            width: 120px;
            height: 120px;
        }

        .team-card h4 {
            font-size: 1.1rem;
        }

        .team-card h6 {
            font-size: 0.95rem;
        }

        .team-card p {
            font-size: 0.9rem;
        }
    }

    @media (max-width: 480px) {
        .specialization {
            font-size: 12px;
            padding: 6px 10px;
        }
    }


    .specialization {
        background: #00cfe8;
        color: #000;
        font-size: 14px;
        font-weight: 600;

        padding: 8px 12px;
        border-radius: 6px;

        text-align: center;

        /* 🔥 RESPONSIVE FIX */
        white-space: normal;
        /* allow wrap */
        word-break: break-word;
        /* break long words */
        overflow-wrap: anywhere;
        /* force wrap if needed */
        line-height: 1.4;

        max-width: 100%;
    }

    .experience {
        background: #6c757d;
        color: white;
        font-size: 14px;
        font-weight: 600;

        padding: 8px 12px;
        border-radius: 6px;

        text-align: center;

        /* 🔥 RESPONSIVE FIX */
        white-space: normal;
        /* allow wrap */
        word-break: break-word;
        /* break long words */
        overflow-wrap: anywhere;
        /* force wrap if needed */
        line-height: 1.4;

        max-width: 100%;
    }
</style>

@endsection