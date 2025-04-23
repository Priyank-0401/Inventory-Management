<header class="topbar">
    <div class="navbar-header d-flex justify-content-between align-items-center">
        <!-- App Title - Simplified structure -->
        <h4 class="fw-bold topbar-button pe-none text-uppercase mb-0">PHARMACY DASHBOARD</h4>

        <div class="d-flex align-items-center gap-1">
            <!-- Barcode Scanner -->
            <div class="topbar-item">
                <button type="button" class="topbar-button" id="barcode-scanner-btn" data-bs-toggle="tooltip" 
                       data-bs-placement="bottom" title="Scan Barcode">
                    <iconify-icon icon="bx:barcode-reader" class="fs-24 align-middle"></iconify-icon>
                </button>
            </div>

            <!-- Theme Color (Light/Dark) -->
            <div class="topbar-item">
                <button type="button" class="topbar-button" id="light-dark-mode">
                    <iconify-icon icon="solar:moon-bold-duotone" class="fs-24 align-middle"></iconify-icon>
                </button>
            </div>

            <!-- Theme Setting -->
            <div class="topbar-item d-none d-md-flex">
                <button type="button" class="topbar-button" id="theme-settings-btn" data-bs-toggle="offcanvas"
                        data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
                    <iconify-icon icon="solar:settings-bold-duotone" class="fs-24 align-middle"></iconify-icon>
                </button>
            </div>

            <!-- User -->
            <div class="dropdown topbar-item">
                <a type="button" class="topbar-button" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <span class="d-flex align-items-center">
                        <span class="rounded-circle d-flex align-items-center justify-content-center bg-primary text-white" style="width: 32px; height: 32px;">
                            <iconify-icon icon="solar:user-bold-duotone" class="fs-18"></iconify-icon>
                        </span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <h6 class="dropdown-header">Welcome Priyank!</h6>
                    <a class="dropdown-item" href="{{ route('second', ['users', 'pages-profile'])}}">
                        <i class="bx bx-user-circle text-muted fs-18 align-middle me-1"></i><span
                            class="align-middle">Profile</span>
                    </a>
                    <a class="dropdown-item" href="{{ route('second', ['users', 'chat'])}}">
                        <i class="bx bx-message-dots text-muted fs-18 align-middle me-1"></i><span
                            class="align-middle">Messages</span>
                    </a>

                    <a class="dropdown-item" href="{{ route('second', ['users', 'pricing'])}}">
                        <i class="bx bx-wallet text-muted fs-18 align-middle me-1"></i><span class="align-middle">Pricing</span>
                    </a>
                    <a class="dropdown-item" href="{{ route('second', ['users', 'faqs'])}}">
                        <i class="bx bx-help-circle text-muted fs-18 align-middle me-1"></i><span
                            class="align-middle">Help</span>
                    </a>
                    <a class="dropdown-item" href="{{ route('second', [ 'auth' , 'lock-screen']) }}">
                        <i class="bx bx-lock text-muted fs-18 align-middle me-1"></i><span class="align-middle">Lock screen</span>
                    </a>

                    <div class="dropdown-divider my-1"></div>

                    <a class="dropdown-item text-danger" href="{{ route('second', [ 'auth' , 'login']) }}">
                        <i class="bx bx-log-out fs-18 align-middle me-1"></i><span
                            class="align-middle">Logout</span>
                    </a>
                </div>
            </div>

            <!-- App Search-->
            <form class="app-search d-none d-md-block ms-2">
                <div class="position-relative">
                    <input type="search" class="form-control" placeholder="Search..." autocomplete="off" value="">
                    <iconify-icon icon="solar:magnifer-linear" class="search-widget-icon"></iconify-icon>
                </div>
            </form>
        </div>
    </div>
</header>

<!-- Activity Timeline -->
<div>
    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-activity-offcanvas"
         style="max-width: 450px; width: 100%;">
        <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
            <h5 class="text-white m-0 fw-semibold">Activity Stream</h5>
            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
        </div>

        <div class="offcanvas-body p-0">
            <div data-simplebar class="h-100 p-4">
                <div class="position-relative ms-2">
                    <span class="position-absolute start-0  top-0 border border-dashed h-100"></span>
                    <div class="position-relative ps-4">
                        <div class="mb-4">
                            <span
                                class="position-absolute start-0 avatar-sm translate-middle-x bg-danger d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon
                                    icon="iconamoon:folder-check-duotone"></iconify-icon></span>
                            <div class="ms-2">
                                <h5 class="mb-1 text-dark fw-semibold fs-15 lh-base">Report-Fix / Update </h5>
                                <p class="d-flex align-items-center">Add 3 files to <span
                                        class=" d-flex align-items-center text-primary ms-1"><iconify-icon
                                            icon="iconamoon:file-light"></iconify-icon> Tasks</span></p>
                                <div class="bg-light bg-opacity-50 rounded-2 p-2">
                                    <div class="row">
                                        <div class="col-lg-6 border-end border-light">
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="bx bxl-figma fs-20 text-red"></i>
                                                <a href="#!" class="text-dark fw-medium">Concept.fig</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="bx bxl-file-doc fs-20 text-success"></i>
                                                <a href="#!" class="text-dark fw-medium">larkon.docs</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="mt-2 text-muted">Monday , 4:24 PM</h6>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative ps-4">
                        <div class="mb-4">
                            <span
                                class="position-absolute start-0 avatar-sm translate-middle-x bg-success d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon
                                    icon="iconamoon:check-circle-1-duotone"></iconify-icon></span>
                            <div class="ms-2">
                                <h5 class="mb-1 text-dark fw-semibold fs-15 lh-base">Project Status
                                </h5>
                                <p class="d-flex align-items-center mb-0">Marked<span
                                        class=" d-flex align-items-center text-primary mx-1"><iconify-icon
                                            icon="iconamoon:file-light"></iconify-icon> Design </span> as <span
                                        class="badge bg-success-subtle text-success px-2 py-1 ms-1"> Completed</span>
                                </p>
                                <div class="d-flex align-items-center gap-3 mt-1 bg-light bg-opacity-50 p-2 rounded-2">
                                    <a href="#!" class="fw-medium text-dark">UI/UX Figma Design</a>
                                    <div class="ms-auto">
                                        <a href="#!" class="fw-medium text-primary fs-18" data-bs-toggle="tooltip"
                                           data-bs-title="Download" data-bs-placement="bottom">
                                            <iconify-icon icon="iconamoon:cloud-download-duotone"></iconify-icon>
                                        </a>
                                    </div>
                                </div>
                                <h6 class="mt-3 text-muted">Monday , 3:00 PM</h6>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative ps-4">
                        <div class="mb-4">
                            <span
                                class="position-absolute start-0 avatar-sm translate-middle-x bg-primary d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-16">UI</span>
                            <div class="ms-2">
                                <h5 class="mb-1 text-dark fw-semibold fs-15">Larkon Application UI v2.0.0 <span
                                        class="badge bg-primary-subtle text-primary px-2 py-1 ms-1"> Latest</span>
                                </h5>
                                <p>Get access to over 20+ pages including a dashboard layout, charts, kanban board,
                                    calendar, and pre-order E-commerce & Marketing pages.</p>
                                <div class="mt-2">
                                    <a href="#!" class="btn btn-light btn-sm">Download Zip</a>
                                </div>
                                <h6 class="mt-3 text-muted">Monday , 2:10 PM</h6>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative ps-4">
                        <div class="mb-4">
                            <span
                                class="position-absolute start-0 translate-middle-x bg-success bg-gradient d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><img
                                    src="/images/users/avatar-7.jpg" alt="avatar-5"
                                    class="avatar-sm rounded-circle"></span>
                            <div class="ms-2">
                                <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Alex Smith Attached Photos
                                </h5>
                                <div class="row g-2 mt-2">
                                    <div class="col-lg-4">
                                        <a href="#!">
                                            <img src="/images/small/img-6.jpg" alt="" class="img-fluid rounded">
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#!">
                                            <img src="/images/small/img-3.jpg" alt="" class="img-fluid rounded">
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#!">
                                            <img src="/images/small/img-4.jpg" alt="" class="img-fluid rounded">
                                        </a>
                                    </div>
                                </div>
                                <h6 class="mt-3 text-muted">Monday 1:00 PM</h6>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative ps-4">
                        <div class="mb-4">
                            <span
                                class="position-absolute start-0 translate-middle-x bg-success bg-gradient d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><img
                                    src="/images/users/avatar-6.jpg" alt="avatar-5"
                                    class="avatar-sm rounded-circle"></span>
                            <div class="ms-2">
                                <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Rebecca J. added a new team member
                                </h5>
                                <p class="d-flex align-items-center gap-1">
                                    <iconify-icon icon="iconamoon:check-circle-1-duotone"
                                                  class="text-success"></iconify-icon>
                                    Added a new member to Front Dashboard
                                </p>
                                <h6 class="mt-3 text-muted">Monday 10:00 AM</h6>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative ps-4">
                        <div class="mb-4">
                            <span
                                class="position-absolute start-0 avatar-sm translate-middle-x bg-warning d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon
                                    icon="iconamoon:certificate-badge-duotone"></iconify-icon></span>
                            <div class="ms-2">
                                <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Achievements
                                </h5>
                                <p class="d-flex align-items-center gap-1 mt-1">Earned a
                                    <iconify-icon icon="iconamoon:certificate-badge-duotone"
                                                  class="text-danger fs-20"></iconify-icon>
                                    " Best Product Award"
                                </p>
                                <h6 class="mt-3 text-muted">Monday 9:30 AM</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#!" class="btn btn-outline-dark w-100">View All</a>
            </div>
        </div>
    </div>
</div>
