@extends('layouts.backend.main')
@section('title', 'Services')
@section('meta')
<meta name="description" content="Quick News Global AI - Stay informed with AI-powered news summaries in under 9 seconds. Get verified, concise news updates without the noise." />
<meta name="robots" content="index, follow" />
@endsection

@section('content')
<div class="dashboard-main-body">
    <div
        class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Services</h6>
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
            <li class="fw-medium">Services</li>
        </ul>
    </div>

    <!-- Success/Error Messages -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session('success') }}
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

    <!-- Category Filter -->
    <div class="card mb-3">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <label for="categoryFilter" class="form-label fw-semibold mb-0">Filter by Category:</label>
                </div>
                <!-- <div class="col-md-4">
                    <select id="categoryFilter" class="form-select">
                       
                    </select>
                </div> -->
            </div>
        </div>
    </div>

    <div class="card basic-data-table">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title mb-0">Services 
                <span class="text-muted">({{ $services->count() }})</span>
            </h5>
            <div class="d-flex align-items-center gap-2">
                <!-- <button id="bulkDeleteBtn" onclick="bulkDelete()" class="btn btn-danger fw-semibold px-3 py-2.5 rounded d-inline-flex align-items-center" style="display: none; border: none; white-space: nowrap; box-shadow: 0 4px 6px -1px rgba(220, 53, 69, 0.3); transition: all 0.3s ease; font-size: 15px;">
                    <iconify-icon icon="mingcute:delete-2-line" class="icon me-2" style="font-size: 20px;"></iconify-icon>
                    Delete Selected
                </button> -->
                <a href="{{route('services.create')}}" class="btn text-white fw-semibold px-3 py-2.5 rounded d-inline-flex align-items-center" style="background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 50%, #a855f7 100%); border: none; white-space: nowrap; box-shadow: 0 4px 6px -1px rgba(79, 70, 229, 0.3); transition: all 0.3s ease; font-size: 15px;">
                    <iconify-icon icon="solar:add-circle-bold" class="icon me-2" style="font-size: 20px;"></iconify-icon>
                    Create Service
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table
                    class="table bordered-table mb-0"
                    id="dataTable"
                    data-page-length="10">
                    <thead>
                        <tr>
                            <th scope="col">
                                <div
                                    class="form-check style-check d-flex align-items-center">
                                    <input
                                        id="selectAllCheckbox"
                                        class="form-check-input"
                                        type="checkbox" />
                                    <label class="form-check-label">
                                        S.L
                                    </label>
                                </div>
                            </th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Short Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                        <tr>
                            <td>
                                <div
                                    class="form-check style-check d-flex align-items-center">
                                    <input
                                        class="form-check-input product-checkbox"
                                        type="checkbox"
                                        data-id="{{$service->id}}" />
                                    <label class="form-check-label">
                                        {{$service->id}}
                                    </label>
                                </div>
                            </td>
                            <td><img src="{{ asset($service->image) }}" alt="{{ $service->name }}" style="width: 50px; height: auto;"></td>
                            <td>{{$service->name}}</td>
                            <td>{{$service->short_description ?? 'N/A'}}</td>
                            <td>
                                <a
                                    href="{{route('services.edit', $service->id)}}"
                                    class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center"
                                    title="Edit">
                                    <iconify-icon
                                        icon="lucide:edit"></iconify-icon>
                                </a>
                                <a
                                    href="{{route('services.delete', $service->id)}}"
                                    class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center"
                                    title="Delete"
                                    onclick="return confirm('Are you sure you want to delete this service?');">
                                    <iconify-icon
                                        icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection