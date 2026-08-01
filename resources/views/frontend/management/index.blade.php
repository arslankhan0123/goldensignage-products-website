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
        'name' => 'Salem Shamsi',
        'title' => 'CEO',
        'image' => asset('salem.jpeg'),
        'initials' => 'MAR',
        'phone' => '',
        'is_ceo' => true,
        'experience' => '15+ Years',
        'specialization' => 'Business strategy and leadership expertise'
    ],
    [
        'name' => 'Muhammad Aamir Riaz',
        'title' => 'Director',
        'image' => asset('amir.jpeg'),
        'initials' => 'AN',
        'phone' => '',
        'experience' => '15+ Years',
        'specialization' => 'Strategic planning and operations management expertise'
    ],
    [
        'name' => 'Muhammad Qasim',
        'title' => 'Office Manager',
        'image' => asset('qasim.jpeg'),
        'initials' => 'MQ',
        'phone' => '',
        'experience' => '5+ Years',
        'specialization' => 'Office management expertise'
    ],
    [
        'name' => 'Arslan Khan',
        'title' => 'Sales Manager and Software Engineer',
        'image' => 'https://arslankhan.net/frontend/assets/Profile-Pic.png',
        'initials' => 'AK',
        'phone' => '',
        'experience' => '8+ Years',
        'specialization' => 'Sales management and Software engineering expertise'
    ],
];
@endphp

<!-- ================= Team Section ================= -->
<div class="team-section">
    <div class="container">
        <h2 class="team-title">Meet Our Team</h2>

        <div class="team-grid">
            @foreach($teamMembers as $member)
            <div class="member-card">
                @if(isset($member['is_ceo']) && $member['is_ceo'])
                <span class="member-badge">👑 CEO</span>
                @endif
                
                <div class="member-media">
                    @if(!empty($member['image']))
                        <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" class="member-img">
                    @else
                        <div class="member-initials-circle">
                            {{ $member['initials'] }}
                        </div>
                    @endif
                </div>

                <div class="member-divider"></div>

                <div class="member-info">
                    <h4 class="member-name">{{ $member['name'] }}</h4>
                    <h6 class="member-role">{{ $member['title'] }}</h6>
                    
                    @if(!empty($member['experience']))
                    <p class="member-meta-text"><strong>Experience:</strong> {{ $member['experience'] }}</p>
                    @endif
                    @if(!empty($member['specialization']))
                    <p class="member-meta-text"><strong>Specialization:</strong> {{ $member['specialization'] }}</p>
                    @endif

                    @if(!empty($member['phone']))
                    <a href="tel:{{ $member['phone'] }}" class="member-phone-btn">
                        <i class="ri-phone-line me-1"></i> {{ $member['phone'] }}
                    </a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- ================= CSS Styles ================= -->
<style>
    .page-banner-area {
        position: relative;
        z-index: 1;
        background-color: #000 !important;
    }
    .page-banner-area::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        z-index: -1;
    }
    .page-banner-content {
        position: relative;
        z-index: 1;
    }

    .team-section {
        background-color: #111215 !important;
        padding: 80px 0;
    }
    
    .team-title {
        color: #fff;
        font-size: 36px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        text-align: center;
        margin-bottom: 50px;
        position: relative;
    }
    
    .team-title::after {
        content: '';
        display: block;
        width: 60px;
        height: 3px;
        background: #C89B3C;
        margin: 15px auto 0;
    }

    .team-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin: 0 auto;
    }

    .member-card {
        flex: 0 0 calc(25% - 15px);
        max-width: calc(25% - 15px);
        background: linear-gradient(145deg, #1e1f22, #121315);
        border: 1px solid #2a2b2e;
        border-radius: 8px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        transition: all 0.3s ease;
        padding-bottom: 20px;
        position: relative;
        height: 100%;
    }

    .member-card:hover {
        transform: translateY(-8px);
        border-color: #C89B3C;
        box-shadow: 0 10px 25px rgba(200, 155, 60, 0.15);
    }

    .member-media {
        width: 100%;
        height: 350px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #151619;
        overflow: hidden;
        position: relative;
    }

    .member-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .member-initials-circle {
        width: 90px;
        height: 90px;
        border: 2px solid #C89B3C;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #C89B3C;
        font-size: 26px;
        font-weight: 700;
        background: transparent;
        letter-spacing: 1px;
    }

    .member-divider {
        width: 100%;
        height: 2px;
        background-color: #C89B3C;
        margin-bottom: 20px;
    }

    .member-info {
        padding: 0 15px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        justify-content: flex-start;
        align-items: center;
    }

    .member-name {
        color: #fff;
        font-size: 15px;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 8px;
        letter-spacing: 0.5px;
        line-height: 1.3;
    }

    .member-role {
        color: #C89B3C;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: 15px;
        letter-spacing: 0.5px;
        line-height: 1.3;
    }

    .member-meta-text {
        color: #aaa;
        font-size: 12px;
        margin-bottom: 6px;
        line-height: 1.4;
    }

    .member-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: rgba(200, 155, 60, 0.95);
        color: #000;
        padding: 3px 8px;
        font-size: 10px;
        font-weight: 700;
        border-radius: 4px;
        text-transform: uppercase;
        z-index: 5;
    }

    .member-phone-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background-color: #C89B3C;
        color: #000 !important;
        padding: 5px 12px;
        font-size: 11px;
        font-weight: 700;
        border-radius: 20px;
        text-decoration: none !important;
        transition: all 0.3s ease;
    }

    .member-phone-btn:hover {
        background-color: #dcb35c;
        transform: scale(1.05);
    }

    /* Responsive Grid */
    @media (max-width: 1200px) {
        .member-card {
            flex-basis: calc(25% - 15px);
            max-width: calc(25% - 15px);
        }
    }

    @media (max-width: 992px) {
        .member-card {
            flex-basis: calc(33.333% - 14px);
            max-width: calc(33.333% - 14px);
        }
    }

    @media (max-width: 768px) {
        .team-grid {
            gap: 15px;
        }
        .member-card {
            flex-basis: calc(50% - 8px);
            max-width: calc(50% - 8px);
        }
        .team-title {
            font-size: 28px;
        }
    }

    @media (max-width: 480px) {
        .team-grid {
            max-width: 280px;
            margin: 0 auto;
        }
        .member-card {
            flex-basis: 100%;
            max-width: 100%;
        }
    }
</style>

@endsection
