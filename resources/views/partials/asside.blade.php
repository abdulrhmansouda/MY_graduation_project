<aside class="my-3 bg-white border-0 sidenav navbar navbar-vertical navbar-expand-xs border-radius-xl fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="top-0 p-3 cursor-pointer fas fa-times text-secondary opacity-5 position-absolute end-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="m-0 navbar-brand" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
            target="_blank">
            <img src="{{ asset('/assets/img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Argon Dashboard 2</span>
        </a>
    </div>
    <hr class="mt-0 horizontal dark">
    <div class="w-auto collapse navbar-collapse " id="sidenav-collapse-main">
        <ul class="navbar-nav">

            @if (auth()->user()->isAdmin())
                <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link active" aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                                <div
                                    class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                                    <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                                </div>
                                <span class="nav-link-text ms-1">Users</span>
                            </a>
                            <div class="collapse  show " id="dashboardsExamples">
                                <ul class="nav ms-4">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.admins') }}">
                                            <span class="sidenav-normal"> Admins </span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="{{ route('admin.companies') }}">
                                            <span class="sidenav-normal"> Companies </span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="{{ route('admin.employees') }}">
                                            <span class="sidenav-normal"> Employees </span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                </div>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.companies') }}">
                        <div
                            class="text-center icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center">
                            <i class="text-sm ni ni-tv-2 text-primary opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Admins</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.companies') }}">
                        <div
                            class="text-center icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center">
                            <i class="text-sm ni ni-tv-2 text-primary opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Companies</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="./pages/dashboard.html">
                        <div
                            class="text-center icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center">
                            <i class="text-sm ni ni-tv-2 text-primary opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Employees</span>
                    </a>
                </li>
            @endif

            <li class="nav-item">
                <a class="nav-link active" href="{{ route('post.posts') }}">
                    <div
                        class="text-center icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center">
                        <i class="text-sm ni ni-tv-2 text-primary opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">All Posts</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="{{ route('post.create') }}">
                    <div
                        class="text-center icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center">
                        <i class="text-sm ni ni-tv-2 text-primary opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Create Post</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="./pages/dashboard.html">
                    <div
                        class="text-center icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center">
                        <i class="text-sm ni ni-tv-2 text-primary opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="./pages/tables.html">
                    <div
                        class="text-center icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center">
                        <i class="text-sm ni ni-calendar-grid-58 text-warning opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tables</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="./pages/billing.html">
                    <div
                        class="text-center icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center">
                        <i class="text-sm ni ni-credit-card text-success opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Billing</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="./pages/virtual-reality.html">
                    <div
                        class="text-center icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center">
                        <i class="text-sm ni ni-app text-info opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Virtual Reality</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="./pages/rtl.html">
                    <div
                        class="text-center icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center">
                        <i class="text-sm ni ni-world-2 text-danger opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">RTL</span>
                </a>
            </li>
            <li class="mt-3 nav-item">
                <h6 class="text-xs ps-4 ms-2 text-uppercase font-weight-bolder opacity-6">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="./pages/profile.html">
                    <div
                        class="text-center icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center">
                        <i class="text-sm ni ni-single-02 text-dark opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="./pages/sign-in.html">
                    <div
                        class="text-center icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center">
                        <i class="text-sm ni ni-single-copy-04 text-warning opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sign In</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="./pages/sign-up.html">
                    <div
                        class="text-center icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center">
                        <i class="text-sm ni ni-collection text-info opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Up</span>
                </a>
            </li>
        </ul>
    </div>


</aside>
