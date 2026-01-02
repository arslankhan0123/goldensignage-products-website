@extends('layouts.backend.main')
@section('title', 'Dashboard')
@section('meta')
<meta name="description" content="Dashboard - Overview of Categories, Products, and Blogs" />
<meta name="robots" content="index, follow" />
@endsection

@section('content')
<div class="dashboard-main-body">
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Dashboard</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{route('dashboard')}}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
        </ul>
    </div>

    <!-- Stats Cards -->
    <div class="row row-cols-xxxl-4 row-cols-lg-2 row-cols-sm-2 row-cols-1 gy-4">
        <div class="col">
            <div class="card shadow-none border bg-gradient-start-1 h-100">
                <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium text-primary-light mb-1">Total Categories</p>
                            <h6 class="mb-0">{{$totalCategories}}</h6>
                        </div>
                        <div class="w-50-px h-50-px bg-cyan rounded-circle d-flex justify-content-center align-items-center">
                            <iconify-icon icon="solar:tag-bold" class="text-white text-2xl mb-0"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-none border bg-gradient-start-2 h-100">
                <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium text-primary-light mb-1">Total Main Products</p>
                            <h6 class="mb-0">{{$totalMainProducts}}</h6>
                        </div>
                        <div class="w-50-px h-50-px bg-purple rounded-circle d-flex justify-content-center align-items-center">
                            <iconify-icon icon="solar:box-bold" class="text-white text-2xl mb-0"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-none border bg-gradient-start-3 h-100">
                <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium text-primary-light mb-1">Total Child Products</p>
                            <h6 class="mb-0">{{$totalChildProducts}}</h6>
                        </div>
                        <div class="w-50-px h-50-px bg-info rounded-circle d-flex justify-content-center align-items-center">
                            <iconify-icon icon="solar:box-minimalistic-bold" class="text-white text-2xl mb-0"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-none border bg-gradient-start-4 h-100">
                <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium text-primary-light mb-1">Total Blogs</p>
                            <h6 class="mb-0">{{$totalBlogs}}</h6>
                        </div>
                        <div class="w-50-px h-50-px bg-success-main rounded-circle d-flex justify-content-center align-items-center">
                            <iconify-icon icon="solar:document-bold" class="text-white text-2xl mb-0"></iconify-icon>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </div>

    <!-- Chart Section -->
    <div class="row gy-4 mt-1">
        <div class="col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-3">
                        <h6 class="text-lg mb-0">Statistics Overview</h6>
                        <select id="periodFilter" class="form-select form-select-sm w-auto bg-base border text-secondary-light radius-8">
                            <option value="all">All Time</option>
                            <option value="week">Last Week</option>
                            <option value="2weeks">Last 2 Weeks</option>
                            <option value="month">Last Month</option>
                        </select>
                    </div>
                    <div id="dashboardChart" class="pt-28 apexcharts-tooltip-style-1"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ApexCharts Script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let chart;
        
        // Initial data
        const initialData = {
            categories: {{$totalCategories}},
            mainProducts: {{$totalMainProducts}},
            childProducts: {{$totalChildProducts}},
            blogs: {{$totalBlogs}}
        };

        // Different colors for each category
        const colors = {
            categories: '#17a2b8',      // Cyan/Teal
            mainProducts: '#6c5ce7',   // Purple
            childProducts: '#00b894',  // Green
            blogs: '#e17055'           // Orange/Red
        };

        function renderChart(data) {
            const options = {
                series: [{
                    name: 'Count',
                    data: [
                        data.categories,
                        data.mainProducts,
                        data.childProducts,
                        data.blogs
                    ]
                }],
                chart: {
                    type: 'bar',
                    height: 350,
                    toolbar: {
                        show: true
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded',
                        distributed: true
                    },
                },
                dataLabels: {
                    enabled: true,
                    style: {
                        colors: ['#fff']
                    }
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: ['Categories', 'Main Products', 'Child Products', 'Blogs'],
                },
                yaxis: {
                    title: {
                        text: 'Count'
                    }
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return val + " items"
                        }
                    }
                },
                colors: [colors.categories, colors.mainProducts, colors.childProducts, colors.blogs],
                legend: {
                    show: false
                }
            };

            if (chart) {
                chart.updateOptions({
                    series: [{
                        name: 'Count',
                        data: [
                            data.categories,
                            data.mainProducts,
                            data.childProducts,
                            data.blogs
                        ]
                    }]
                });
            } else {
                chart = new ApexCharts(document.querySelector("#dashboardChart"), options);
                chart.render();
            }
        }

        // Initial render
        renderChart(initialData);

        // Handle period filter change
        document.getElementById('periodFilter').addEventListener('change', function() {
            const period = this.value;
            
            // Show loading state
            if (chart) {
                chart.updateSeries([{
                    name: 'Count',
                    data: [0, 0, 0, 0]
                }]);
            }

            // Fetch filtered data
            fetch(`{{route('dashboard.filtered-data')}}?period=${period}`, {
                method: 'GET',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                renderChart(data);
            })
            .catch(error => {
                console.error('Error fetching filtered data:', error);
                // Fallback to initial data on error
                renderChart(initialData);
            });
        });
    });
</script>
@endsection
