@extends('admin.layouts/layoutMaster')

@section('title', 'eCommerce Dashboard - Apps')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
@endsection

@section('page-style')
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/cards-advance.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/app-ecommerce-dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

@section('content')

    <!-- Card Border Shadow -->
    <div class="row">
        <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card card-border-shadow-primary">

                <!-- Total Products -->
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                            <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-package ti-md"></i></span>

                        </div>
                        <h4 class="ms-1 mb-0">{{ $totalProducts }}</h4>
                    </div>
                    <p class="mb-1">Total Products</p>
                    <p class="mb-0">
                        <span
                            class="fw-medium me-1 {{ $productIncreasePercentage >= 0 ? 'text-success' : 'text-danger' }}">
                            {{ $productIncreasePercentage >= 0 ? '+' : '' }}{{ number_format($productIncreasePercentage, 1) }}%
                        </span>
                        <small class="text-muted">since last month</small>
                    </p>
                </div>

            </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card card-border-shadow-warning">

                <!-- Total Orders -->
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                            <span class="avatar-initial rounded bg-label-warning"><i
                                    class="ti ti-shopping-cart ti-md"></i></span>
                        </div>
                        <h4 class="ms-1 mb-0">{{ $totalOrders }}</h4>
                    </div>
                    <p class="mb-1">Total Orders</p>
                    <p class="mb-0">
                        <span class="fw-medium me-1 {{ $orderIncreasePercentage >= 0 ? 'text-success' : 'text-danger' }}">
                            {{ $orderIncreasePercentage >= 0 ? '+' : '' }}{{ number_format($orderIncreasePercentage, 1) }}%
                        </span>
                        <small class="text-muted">since last month</small>
                    </p>
                </div>

            </div>
        </div>
        <!-- Total Customers -->
        <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card card-border-shadow-danger">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                            <span class="avatar-initial rounded bg-label-danger"><i class='ti ti-users ti-md'></i></span>
                        </div>
                        <h4 class="ms-1 mb-0">{{ $totalCustomers }}</h4>
                    </div>
                    <p class="mb-1">Total Customers</p>
                    <p class="mb-0">
                        <span
                            class="fw-medium me-1 {{ $customerIncreasePercentage >= 0 ? 'text-success' : 'text-danger' }}">
                            {{ $customerIncreasePercentage >= 0 ? '+' : '' }}{{ number_format($customerIncreasePercentage, 1) }}%
                        </span>
                        <small class="text-muted">since last month</small>
                    </p>
                </div>
            </div>
        </div>

        <!-- Total Reseller Customers -->
        <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card card-border-shadow-info">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                            <span class="avatar-initial rounded bg-label-info"><i class='ti ti-briefcase ti-md'></i></span>
                        </div>
                        <h4 class="ms-1 mb-0">{{ $totalResellers }}</h4>
                    </div>
                    <p class="mb-1">Total Reseller Customers</p>
                    <p class="mb-0">
                        <span
                            class="fw-medium me-1 {{ $resellerIncreasePercentage >= 0 ? 'text-success' : 'text-danger' }}">
                            {{ $resellerIncreasePercentage >= 0 ? '+' : '' }}{{ number_format($resellerIncreasePercentage, 1) }}%
                        </span>
                        <small class="text-muted">since last month</small>
                    </p>
                </div>
            </div>
        </div>



    </div>
    <!--/ Card Border Shadow -->


    <div class="row">

        <!-- Earning Reports -->
        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-header pb-0 d-flex justify-content-between mb-lg-n4">
                    <div class="card-title mb-0">
                        <h5 class="mb-0">Earning Reports</h5>
                        <small class="text-muted">Weekly Earnings Overview</small>
                    </div>

                    <!-- </div> -->
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-4 d-flex flex-column align-self-end">
                            <div class="d-flex gap-2 align-items-center mb-2 pb-1 flex-wrap">
                                <h1 class="mb-0">$468</h1>
                                <div class="badge rounded bg-label-success">+4.2%</div>
                            </div>
                            <small>You informed of this week compared to last week</small>
                        </div>
                        <div class="col-12 col-md-8">
                            <div id="weeklyEarningReports"></div>
                        </div>
                    </div>
                    <div class="border rounded p-3 mt-4">
                        <div class="row gap-4 gap-sm-0">
                            <div class="col-12 col-sm-4">
                                <div class="d-flex gap-2 align-items-center">
                                    <div class="badge rounded bg-label-primary p-1"><i
                                            class="ti ti-currency-dollar ti-sm"></i></div>
                                    <h6 class="mb-0">Earnings</h6>
                                </div>
                                <h4 class="my-2 pt-1">$545.69</h4>
                                <div class="progress w-75" style="height:4px">
                                    <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="d-flex gap-2 align-items-center">
                                    <div class="badge rounded bg-label-info p-1"><i class="ti ti-chart-pie-2 ti-sm"></i>
                                    </div>
                                    <h6 class="mb-0">Profit</h6>
                                </div>
                                <h4 class="my-2 pt-1">$256.34</h4>
                                <div class="progress w-75" style="height:4px">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="d-flex gap-2 align-items-center">
                                    <div class="badge rounded bg-label-danger p-1"><i
                                            class="ti ti-brand-paypal ti-sm"></i></div>
                                    <h6 class="mb-0">Expense</h6>
                                </div>
                                <h4 class="my-2 pt-1">$74.19</h4>
                                <div class="progress w-75" style="height:4px">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 65%"
                                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Earning Reports -->


        <!-- Sales Overview -->
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <small class="d-block mb-1 text-muted">Sales Overview</small>
                        <p class="card-text text-success">+18.2%</p>
                    </div>
                    <h4 class="card-title mb-1">$42.5k</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex gap-2 align-items-center mb-2">
                                <span class="badge bg-label-info p-1 rounded"><i
                                        class="ti ti-shopping-cart ti-xs"></i></span>
                                <p class="mb-0">Order</p>
                            </div>
                            <h5 class="mb-0 pt-1 text-nowrap">62.2%</h5>
                            <small class="text-muted">6,440</small>
                        </div>
                        <div class="col-4">
                            <div class="divider divider-vertical">
                                <div class="divider-text">
                                    <span class="badge-divider-bg bg-label-secondary">VS</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
                                <p class="mb-0">Visits</p>
                                <span class="badge bg-label-primary p-1 rounded"><i class="ti ti-link ti-xs"></i></span>
                            </div>
                            <h5 class="mb-0 pt-1 text-nowrap ms-lg-n3 ms-xl-0">25.5%</h5>
                            <small class="text-muted">12,749</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <div class="progress w-100" style="height: 8px;">
                            <div class="progress-bar bg-info" style="width: 70%" role="progressbar" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%"
                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Sales Overview -->

        <!-- Revenue Generated -->
        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="card-icon">
                        <span class="badge bg-label-success rounded-pill p-2">
                            <i class='ti ti-credit-card ti-sm'></i>
                        </span>
                    </div>
                    <h5 class="card-title mb-0 mt-2">97.5k</h5>
                    <small>Revenue Generated</small>
                </div>
                <div id="revenueGenerated"></div>
            </div>
        </div>
        <!--/ Revenue Generated -->
    </div>

    <div class="row">
        
        <!-- Source Visit -->
        <div class="col-xl-4 col-md-6 order-2 order-lg-1 mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="mb-0">Source Visits</h5>
                        <small class="text-muted">38.4k Visitors</small>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="sourceVisits" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sourceVisits">
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Download</a>
                            <a class="dropdown-item" href="javascript:void(0);">View All</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3 pb-1">
                            <div class="d-flex align-items-start">
                                <div class="badge bg-label-secondary p-2 me-3 rounded"><i class="ti ti-shadow ti-sm"></i>
                                </div>
                                <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Direct Source</h6>
                                        <small class="text-muted">Direct link click</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0">1.2k</p>
                                        <div class="ms-3 badge bg-label-success">+4.2%</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 pb-1">
                            <div class="d-flex align-items-start">
                                <div class="badge bg-label-secondary p-2 me-3 rounded"><i class="ti ti-globe ti-sm"></i>
                                </div>
                                <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Social Network</h6>
                                        <small class="text-muted">Social Channels</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0">31.5k</p>
                                        <div class="ms-3 badge bg-label-success">+8.2%</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 pb-1">
                            <div class="d-flex align-items-start">
                                <div class="badge bg-label-secondary p-2 me-3 rounded"><i class="ti ti-mail ti-sm"></i>
                                </div>
                                <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Email Newsletter</h6>
                                        <small class="text-muted">Mail Campaigns</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0">893</p>
                                        <div class="ms-3 badge bg-label-success">+2.4%</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 pb-1">
                            <div class="d-flex align-items-start">
                                <div class="badge bg-label-secondary p-2 me-3 rounded"><i
                                        class="ti ti-external-link ti-sm"></i></div>
                                <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Referrals</h6>
                                        <small class="text-muted">Impact Radius Visits</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0">342</p>
                                        <div class="ms-3 badge bg-label-danger">-0.4%</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 pb-1">
                            <div class="d-flex align-items-start">
                                <div class="badge bg-label-secondary p-2 me-3 rounded"><i
                                        class="ti ti-discount-2 ti-sm"></i></div>
                                <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">ADVT</h6>
                                        <small class="text-muted">Google ADVT</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0">2.15k</p>
                                        <div class="ms-3 badge bg-label-success">+9.1%</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-2">
                            <div class="d-flex align-items-start">
                                <div class="badge bg-label-secondary p-2 me-3 rounded"><i class="ti ti-star ti-sm"></i>
                                </div>
                                <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Other</h6>
                                        <small class="text-muted">Many Sources</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0">12.5k</p>
                                        <div class="ms-3 badge bg-label-success">+6.2%</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Source Visit -->


        <!-- Sales By Country -->
<div class="col-xl-4 col-md-6 mb-4">
    <div class="card h-50">
        <div class="card-header d-flex justify-content-between">
            <div class="card-title mb-0">
                <h5 class="m-0 me-2">Sales by Countries</h5>
                <small class="text-muted">Lifetime Sales & Monthly Growth</small>
            </div>
        </div>
        <div class="card-body">
            <ul class="p-0 m-0">
                @foreach($countryData as $data)
                    <li class="d-flex align-items-center mb-4">
                        <img src="{{ asset('assets/svg/flags/' . strtolower($data['country']) . '.svg') }}" alt="{{ $data['country'] }}" class="rounded-circle me-3" width="34">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0 me-1">${{ number_format($data['total_revenue'] / 1000, 1) }}k</h6>
                                </div>
                                <small class="text-muted">{{ $data['country'] }}</small>
                            </div>
                            <div class="user-progress">
                                <p class="fw-medium mb-0 d-flex justify-content-center gap-1 {{ $data['order_growth'] >= 0 ? 'text-success' : 'text-danger' }}">
                                    <i class='ti ti-chevron-{{ $data['order_growth'] >= 0 ? 'up' : 'down' }}'></i>
                                    {{ number_format($data['order_growth'], 1) }}%
                                </p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!--/ Sales By Country -->


    </div>



    </div>
@endsection
