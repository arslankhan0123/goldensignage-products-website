<div class="topbar-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-9 col-md-9">
                <ul class="topbar-information">
                    <li>
                        <i class="ri-phone-line"></i>
                        <span>Phone:
                            <a href="tel:{{ preg_replace('/\D+/', '', ($adminDetails->phone ?? '')) }}">{{ $adminDetails->phone ?? '' }}</a>
                        </span>
                    </li>
                    <li>
                        <i class="ri-mail-line"></i>
                        <span>Mail:
                            <a href="mailto:{{ $adminDetails->email ?? '' }}">{{ $adminDetails->email ?? 'info@example.com' }}</a>
                        </span>
                    </li>
                    <li>
                        <i class="ri-map-pin-line"></i>
                        <span>Address: {{ $adminDetails->address ?? '413 North Las Vegas, NV 89032' }}</span>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-3">
                <ul class="topbar-action">
                    <li class="dropdown language-option">
                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-global-line"></i>
                            <span class="lang-name"></span>
                        </button>
                        <div class="dropdown-menu language-dropdown-menu">
                            <a class="dropdown-item" href="#">
                                <img src="{{ asset('frontend/assets/img/uk.png') }}" alt="flag">
                                ENG
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="{{ asset('frontend/assets/img/china.png') }}" alt="flag">
                                简体中文
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="{{ asset('frontend/assets/img/uae.png') }}" alt="flag">
                                العربيّة
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>