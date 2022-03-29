@extends('layouts.home.app')

@section('title')
Argon Dashboard 2 by Creative Tim
@endsection

@section('content')

<div class="row mt-4">
    <div class="col-lg-7 mb-lg-0 mb-4">
        <div class="card ">
            <div class="card-header pb-0 p-3">
                <div class="d-flex justify-content-between">
                    <h6 class="mb-2">Sales by Country</h6>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center ">
                    <tbody>
                        <tr>
                            <td class="w-30">
                                <div class="d-flex px-2 py-1 align-items-center">
                                    <div>
                                        <img src="{{ asset('/assets/img/icons/flags/US.png') }}" alt="Country flag">
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-xs font-weight-bold mb-0">Country:</p>
                                        <h6 class="text-sm mb-0">United States</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                    <h6 class="text-sm mb-0">2500</h6>
                                </div>
                            </td>
                            <td>
                                <div class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Value:</p>
                                    <h6 class="text-sm mb-0">$230,900</h6>
                                </div>
                            </td>
                            <td class="align-middle text-sm">
                                <div class="col text-center">
                                    <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                    <h6 class="text-sm mb-0">29.9%</h6>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-30">
                                <div class="d-flex px-2 py-1 align-items-center">
                                    <div>
                                        <img src="{{ asset('/assets/img/icons/flags/DE.png') }}" alt="Country flag">
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-xs font-weight-bold mb-0">Country:</p>
                                        <h6 class="text-sm mb-0">Germany</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                    <h6 class="text-sm mb-0">3.900</h6>
                                </div>
                            </td>
                            <td>
                                <div class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Value:</p>
                                    <h6 class="text-sm mb-0">$440,000</h6>
                                </div>
                            </td>
                            <td class="align-middle text-sm">
                                <div class="col text-center">
                                    <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                    <h6 class="text-sm mb-0">40.22%</h6>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-30">
                                <div class="d-flex px-2 py-1 align-items-center">
                                    <div>
                                        <img src="{{ asset('/assets/img/icons/flags/GB.png') }}" alt="Country flag">
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-xs font-weight-bold mb-0">Country:</p>
                                        <h6 class="text-sm mb-0">Great Britain</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                    <h6 class="text-sm mb-0">1.400</h6>
                                </div>
                            </td>
                            <td>
                                <div class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Value:</p>
                                    <h6 class="text-sm mb-0">$190,700</h6>
                                </div>
                            </td>
                            <td class="align-middle text-sm">
                                <div class="col text-center">
                                    <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                    <h6 class="text-sm mb-0">23.44%</h6>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-30">
                                <div class="d-flex px-2 py-1 align-items-center">
                                    <div>
                                        <img src="{{ asset('/assets/img/icons/flags/BR.png') }}" alt="Country flag">
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-xs font-weight-bold mb-0">Country:</p>
                                        <h6 class="text-sm mb-0">Brasil</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                    <h6 class="text-sm mb-0">562</h6>
                                </div>
                            </td>
                            <td>
                                <div class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Value:</p>
                                    <h6 class="text-sm mb-0">$143,960</h6>
                                </div>
                            </td>
                            <td class="align-middle text-sm">
                                <div class="col text-center">
                                    <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                    <h6 class="text-sm mb-0">32.14%</h6>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Categories</h6>
            </div>
            <div class="card-body p-3">
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                <i class="ni ni-mobile-button text-white opacity-10"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm">Devices</h6>
                                <span class="text-xs">250 in stock, <span class="font-weight-bold">346+ sold</span></span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                <i class="ni ni-tag text-white opacity-10"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm">Tickets</h6>
                                <span class="text-xs">123 closed, <span class="font-weight-bold">15 open</span></span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                <i class="ni ni-box-2 text-white opacity-10"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm">Error logs</h6>
                                <span class="text-xs">1 is active, <span class="font-weight-bold">40 closed</span></span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                <i class="ni ni-satisfied text-white opacity-10"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm">Happy users</h6>
                                <span class="text-xs font-weight-bold">+ 430</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-lg-7 mb-lg-0 mb-4">
    <a class="btn btn-primary btn-sm mb-0 w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree" type="button">I'm a Company</a>

    </div>
    <div class="col-lg-5">
    <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">I'm an employee</a>

    </div>
</div>

@endsection

@section('css')
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/assets/img/apple-icon.png') }}">
<link rel="icon" type="image/png" href="{{ asset('/assets/img/favicon.png') }}">

<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<!-- Nucleo Icons -->
<link href="{{ asset('/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
<!-- Font Awesome Icons -->
<link href="{{ asset('/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
<!-- CSS Files -->
<link id="pagestyle" href="{{ asset('/assets/css/argon-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
@endsection

@section('js')
<!--   Core JS Files   -->
<script src="{{ asset('/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('/assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('/assets/js/plugins/chartjs.min.js') }}"></script>
<script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Mobile apps",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#5e72e4",
                backgroundColor: gradientStroke1,
                borderWidth: 3,
                fill: true,
                data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                maxBarThickness: 6

            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#fbfbfb',
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#ccc',
                        padding: 20,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });
</script>

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="{{ asset('/assets/js/buttons.js') }}"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('/assets/js/argon-dashboard.min.js?v=2.0.1') }}"></script>
<!-- Font Awesome Icons -->
<script src="{{ asset('/assets/js/font_icon_kit_fontawesome.js') }}"></script>
@endsection