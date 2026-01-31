@extends('layouts.backend.main')
@section('title', 'Edit Blog')
@section('meta')
<meta name="description" content="Quick News Global AI - Stay informed with AI-powered news summaries in under 9 seconds. Get verified, concise news updates without the noise." />
<meta name="robots" content="index, follow" />
@endsection

@section('content')
<div class="dashboard-main-body">
    <div
        class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Admin Details</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a
                    href="{{route('dashboard')}}"
                    class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon
                        icon="solar:home-smile-angle-outline"
                        class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Admin Details</li>
        </ul>
    </div>

    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Admin Details</h5>
                </div>
                <div class="card-body">
                    <form
                        action="{{route('admin.details.update')}}"
                        method="POST"
                        enctype="multipart/form-data"
                        class="row gy-3 needs-validation"
                        novalidate>
                        @csrf
                        <div class="col-md-12">
                            <label class="form-label">Admin Phone <span class="text-danger">*</span></label>
                            <div class="icon-field has-validation">
                                <span class="icon">
                                    <iconify-icon
                                        icon="solar:document-bold"></iconify-icon>
                                </span>
                                <input
                                    type="text"
                                    name="phone"
                                    id="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    placeholder="Enter Admin Phone"
                                    value="{{old('phone', $adminDetails->phone ?? '')}}"
                                    required />
                                @error('phone')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @else
                                <div class="invalid-feedback">
                                    Please provide a valid phone.
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Admin Support Phone <span class="text-danger">*</span></label>
                            <div class="icon-field has-validation">
                                <span class="icon">
                                    <iconify-icon
                                        icon="solar:document-bold"></iconify-icon>
                                </span>
                                <input
                                    type="text"
                                    name="support"
                                    id="support"
                                    class="form-control @error('support') is-invalid @enderror"
                                    placeholder="Enter Admin Support Phone"
                                    value="{{old('support', $adminDetails->support ?? '')}}"
                                    required />
                                @error('support')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @else
                                <div class="invalid-feedback">
                                    Please provide a valid support.
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Admin Email <span class="text-danger">*</span></label>
                            <div class="icon-field has-validation">
                                <span class="icon">
                                    <iconify-icon
                                        icon="solar:document-bold"></iconify-icon>
                                </span>
                                <input
                                    type="text"
                                    name="email"
                                    id="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Enter Admin Email"
                                    value="{{old('email', $adminDetails->email ?? '')}}"
                                    required />
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @else
                                <div class="invalid-feedback">
                                    Please provide a valid email.
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Admin Address <span class="text-danger">*</span></label>
                            <div class="icon-field has-validation">
                                <span class="icon">
                                    <iconify-icon
                                        icon="solar:document-bold"></iconify-icon>
                                </span>
                                <input
                                    type="text"
                                    name="address"
                                    id="address"
                                    class="form-control @error('address') is-invalid @enderror"
                                    placeholder="Enter Admin Address"
                                    value="{{old('address', $adminDetails->address ?? '')}}"
                                    required />
                                @error('address')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @else
                                <div class="invalid-feedback">
                                    Please provide a valid address.
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button
                                class="btn btn-primary-600 d-inline-flex align-items-center"
                                type="submit">
                                <iconify-icon icon="solar:diskette-bold" class="icon me-2"></iconify-icon>
                                Update Admin Detail
                            </button>
                            <a href="{{route('admin.details')}}" class="btn btn-secondary ms-2">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quill Editor Scripts -->
<script src="{{asset('backend/assets/js/editor.highlighted.min.js')}}"></script>
<script src="{{asset('backend/assets/js/editor.quill.js')}}"></script>
<script src="{{asset('backend/assets/js/editor.katex.min.js')}}"></script>
@endsection