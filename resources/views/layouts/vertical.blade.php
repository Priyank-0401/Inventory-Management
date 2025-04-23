<!DOCTYPE html>
<html lang="en" data-menu-size="default">

<head>
    @include('layouts.partials/title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.partials/head-css')
    
    <!-- Force sidebar to always be expanded and visible -->
    <script>
        // Function to ensure the sidebar is always expanded
        function forceSidebarExpanded() {
            document.documentElement.setAttribute('data-menu-size', 'default');
            
            // Force config to always have default menu size
            const configStr = sessionStorage.getItem('__LARKON_CONFIG__');
            if (configStr) {
                try {
                    const config = JSON.parse(configStr);
                    if (config && config.menu) {
                        if (config.menu.size !== 'default') {
                            config.menu.size = 'default';
                            sessionStorage.setItem('__LARKON_CONFIG__', JSON.stringify(config));
                        }
                    }
                } catch (e) {}
            }
        }
        
        // Run immediately
        forceSidebarExpanded();
        
        // Run again after DOM is loaded
        document.addEventListener('DOMContentLoaded', forceSidebarExpanded);
        
        // Run periodically to prevent any changes
        setInterval(forceSidebarExpanded, 200);
        
        // Capture and override any attempts to change the menu size
        const originalSetAttribute = Element.prototype.setAttribute;
        Element.prototype.setAttribute = function(name, value) {
            if (this === document.documentElement && name === 'data-menu-size' && value !== 'default') {
                value = 'default';
            }
            return originalSetAttribute.call(this, name, value);
        };
    </script>
    
    <!-- Additional CSS to fix dashboard resizing issue -->
    <style>
        /* Lock sidebar in expanded state */
        .wrapper {
            min-height: 100%;
            position: relative;
        }
        
        /* Reduced sidebar width */
        :root {
            --bs-main-nav-width: 200px !important;
        }
        
        /* Content page margin adjustment for fixed sidebar */
        .content-page {
            transition: none;
            margin-left: var(--bs-main-nav-width, 200px);
        }
        
        /* Hide sidebar toggle button in all views */
        .button-toggle-menu, 
        .button-sm-hover {
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
            pointer-events: none !important;
        }
        
        /* Make sure sidebar is always visible with reduced width */
        .main-nav {
            width: var(--bs-main-nav-width, 200px) !important;
            min-width: var(--bs-main-nav-width, 200px) !important;
            position: fixed !important;
            margin-left: 0 !important;
            transform: none !important;
            z-index: 1030;
        }
        
        /* Fixed dashboard title in topbar with reduced margin */
        .topbar .topbar-item h4.topbar-button {
            font-size: 1rem;
            white-space: nowrap;
        }
        
        /* Topbar direct padding */
        .topbar {
            width: 100%;
            padding-left: 0;
            padding-right: 1.5rem;
        }
        
        /* Ensure title aligns properly */
        .topbar .navbar-header h4.topbar-button {
            text-align: left !important;
            margin-left: 5.5rem !important;
            padding-left: 0 !important;
            margin-top: 0.5rem !important;
            margin-bottom: 0.5rem !important;
            font-size: 1.25rem !important;
            color: #97a4b1 !important;
            letter-spacing: 0.5px !important;
            font-weight: 700 !important;
        }
        
        /* Ensure the navbar header takes full width */
        .topbar .navbar-header {
            width: 100%;
        }
        
        /* Match content container padding with topbar */
        .container-fluid {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
        
        /* Content specific padding adjustments for perfect alignment */
        .content .container-fluid {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
        
        /* Make sure logo is visible */
        .main-nav .logo-box .logo-lg {
            display: block !important;
        }
        
        .main-nav .logo-box .logo-sm {
            display: none !important;
        }
        
        /* Add top space to the logo box */
        .main-nav .logo-box {
            padding-top: 3rem !important;
            margin-bottom: 3rem !important;
        }
        
        /* Make menu items always visible */
        html[data-menu-size="condensed"] .main-nav,
        html[data-menu-size="sm-hover"] .main-nav,
        html[data-menu-size="hidden"] .main-nav {
            width: var(--bs-main-nav-width, 200px) !important;
            min-width: var(--bs-main-nav-width, 200px) !important;
        }
        
        html[data-menu-size="condensed"] .main-nav .nav-link .nav-text,
        html[data-menu-size="sm-hover"] .main-nav .nav-link .nav-text,
        html[data-menu-size="hidden"] .main-nav .nav-link .nav-text {
            display: inline-block !important;
        }
        
        html[data-menu-size="condensed"] .content-page,
        html[data-menu-size="sm-hover"] .content-page,
        html[data-menu-size="hidden"] .content-page {
            margin-left: var(--bs-main-nav-width, 200px) !important;
        }
        
        /* Mobile responsive adjustments */
        @media (max-width: 1140px) {
            .content-page {
                margin-left: 0;
            }
            
            .main-nav {
                margin-left: -200px !important;
                z-index: 1050;
            }
            
            html.sidebar-enable .main-nav {
                margin-left: 0 !important;
            }
            
            .topbar .container-fluid {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }
        
        /* Reduce sidebar menu text size */
        .main-nav .menu-title {
            font-size: 1rem !important;
            opacity: 0.8 !important;
            letter-spacing: 0.5px !important;
            margin-top: 1rem !important;
            margin-bottom: 0.5rem !important;
            padding-left: 1rem !important;
        }
        
        .main-nav .nav-link .nav-text {
            font-size: 1rem !important;
        }
        
        /* Make icons slightly smaller */
        .main-nav .nav-link .nav-icon {
            font-size: 1.2rem !important;
        }
        
        /* Reduce spacing between menu items */
        .main-nav .nav-item {
            margin-top: 0.2rem !important;
            margin-bottom: 0.2rem !important;
        }
        
        .main-nav .nav-link {
            padding-top: 0.45rem !important;
            padding-bottom: 0.45rem !important;
            padding-left: 1rem !important;
        }
        
        /* Reduce font size for dropdown submenu items */
        .main-nav .sub-navbar-nav .sub-nav-item .sub-nav-link {
            font-size: 0.9rem !important;
            padding-top: 0.35rem !important;
            padding-bottom: 0.35rem !important;
        }
        
        /* Adjust logo sizing for narrower sidebar */
        .main-nav .logo-box img.logo-lg {
            max-width: 85% !important;
            height: auto !important;
        }
        
        /* Make menu items always visible */
    </style>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">
        @include('layouts.partials.main-nav')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            @include('layouts.partials.topbar')
            
            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">
                    @include('layouts.partials.page-title')
                    @yield('content')
                </div> <!-- container -->
            </div> <!-- content -->

            @include('layouts.partials.footer')
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- Toast container - Fixed position but not affecting layout -->
    <div id="toastPlacement" class="toast-container position-fixed top-0 end-0 p-4" style="z-index: 9999; pointer-events: none; margin-top: 70px; max-width: 600px; width: 100%;">
        <style>
            /* Toast notification enhancements */
            .toast {
                opacity: 1 !important; /* Ensure the toast is fully visible */
                font-size: 1rem;
                transition: transform 0.3s ease, opacity 0.3s ease;
                transform: translateX(0);
            }
            
            /* Fade in animation */
            .toast.showing {
                transform: translateX(100px);
                opacity: 0 !important;
            }
            
            /* Fade out animation */
            .toast.hide {
                transform: translateX(100px);
                opacity: 0 !important;
            }
            
            /* Success toast specific styling */
            .toast.text-bg-success {
                background-color: #10b981 !important;
                border-left: 5px solid #047857 !important;
            }
            
            /* Error toast specific styling */
            .toast.text-bg-danger {
                background-color: #ef4444 !important;
                border-left: 5px solid #b91c1c !important;
            }
            
            /* Better close button visibility */
            .toast .btn-close-white {
                opacity: 0.8;
            }
            
            .toast .btn-close-white:hover {
                opacity: 1;
            }
        </style>
    </div>

    <!-- Barcode Scanner Modal -->
    <div class="modal fade" id="barcodeScannerModal" tabindex="-1" aria-labelledby="barcodeScannerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="barcodeScannerModalLabel">Scan Barcode</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div class="mb-3">
                        <iconify-icon icon="bx:barcode-reader" style="font-size: 80px; color: #727cf5;"></iconify-icon>
                    </div>
                    <p>Please scan a barcode using your barcode scanner device or enter a barcode manually below:</p>
                    <div class="mt-3">
                        <input type="text" id="manualBarcodeInput" class="form-control" placeholder="Enter barcode manually">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="submitManualBarcode">Submit</button>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.partials.right-sidebar')
    @include('layouts.partials.footer-scripts')
    @vite(['resources/js/app.js','resources/js/layout.js'])

    <script>
        // Initialize tooltips
        document.addEventListener('DOMContentLoaded', function() {
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
            
            // Setup barcode scanner button
            const barcodeScannerBtn = document.getElementById('barcode-scanner-btn');
            if (barcodeScannerBtn) {
                barcodeScannerBtn.addEventListener('click', function() {
                    const barcodeModal = new bootstrap.Modal(document.getElementById('barcodeScannerModal'));
                    barcodeModal.show();
                    
                    // Focus on the manual input when modal is shown
                    document.getElementById('barcodeScannerModal').addEventListener('shown.bs.modal', function() {
                        document.getElementById('manualBarcodeInput').focus();
                    });
                });
            }
            
            // Setup manual barcode submission
            const submitManualBarcodeBtn = document.getElementById('submitManualBarcode');
            if (submitManualBarcodeBtn) {
                submitManualBarcodeBtn.addEventListener('click', function() {
                    const barcode = document.getElementById('manualBarcodeInput').value.trim();
                    if (barcode.length > 0) {
                        fetchMedicineData(barcode);
                        // Close the modal
                        bootstrap.Modal.getInstance(document.getElementById('barcodeScannerModal')).hide();
                        // Clear the input
                        document.getElementById('manualBarcodeInput').value = '';
                    }
                });
            }
            
            // Handle Enter key in the manual input
            const manualBarcodeInput = document.getElementById('manualBarcodeInput');
            if (manualBarcodeInput) {
                manualBarcodeInput.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        submitManualBarcodeBtn.click();
                    }
                });
            }
        });
        
        // Barcode scanner handling
        let barcodeBuffer = '';
        let lastInputTime = Date.now();
        let isInputElement = false;
        
        // Only capture keypresses when not in an input field
        document.addEventListener('keypress', function(e) {
            // Skip barcode processing if user is typing in an input field
            isInputElement = e.target.tagName === 'INPUT' || 
                             e.target.tagName === 'TEXTAREA' || 
                             e.target.isContentEditable;
                            
            if (isInputElement && e.target.id !== 'manualBarcodeInput') {
                return; // Don't process barcode input when typing in fields other than the barcode input
            }
            
            const currentTime = Date.now();
            // Reset buffer if there's a pause in typing
            if (currentTime - lastInputTime > 100) {
                barcodeBuffer = '';
            }

            if (e.key.length === 1) {
                barcodeBuffer += e.key;
            } else if (e.key === 'Enter') {
                if (barcodeBuffer.length > 3) {
                    fetchMedicineData(barcodeBuffer);
                }
                barcodeBuffer = '';
            }

            lastInputTime = currentTime;
        });

        function fetchMedicineData(barcode) {
            // Log the attempt
            console.log(`Attempting to fetch medicine with barcode: ${barcode}`);
            
            // Create full URL with base URL - 127.0.0.1:8000 or your domain
            // Using the direct web route instead of the API route
            const baseUrl = window.location.protocol + "//" + window.location.hostname + (window.location.port ? ":" + window.location.port : "");
            const barcodeUrl = `${baseUrl}/api-barcode/lookup/${barcode}`;
            console.log(`Barcode URL: ${barcodeUrl}`);
            
            fetch(barcodeUrl, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            })
                .then(response => {
                    console.log(`Response status: ${response.status}`);
                    if (!response.ok) {
                        return response.json().then(errorData => {
                            throw new Error(`Medicine not found - Status: ${response.status}, Details: ${JSON.stringify(errorData)}`);
                        }).catch(e => {
                            throw new Error(`Medicine not found - Status: ${response.status}`);
                        });
                    }
                    return response.json();
                })
                .then(medicine => {
                    console.log(`Medicine found:`, medicine);
                    showMedicineNotification(medicine);
                })
                .catch(error => {
                    console.error('Error fetching medicine data:', error);
                    showErrorNotification(barcode, error.message);
                });
        }

        function showMedicineNotification(data) {
            // Create toast HTML structure
            const toastHTML = `
            <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" style="min-width: 380px; max-width: 480px; box-shadow: 0 12px 28px rgba(0,0,0,0.15), 0 5px 10px rgba(0,0,0,0.12); border-radius: 12px; overflow: hidden; border: none;">
                <div class="toast-header" style="background: linear-gradient(135deg, #20c997, #0d9b6d); padding: 16px; border: none;">
                    <strong class="me-auto" style="font-size: 1.1rem; font-weight: 600; letter-spacing: 0.5px; color: white; text-shadow: 0 1px 2px rgba(0,0,0,0.1);">Medicine Details</strong>
                    <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="toast" aria-label="Close" style="opacity: 0.9;"></button>
                </div>
                <div class="toast-body" style="padding: 0; background-color: #ffffff;">
                    <div style="padding: 18px 20px 10px; border-bottom: 1px solid rgba(0,0,0,0.06);">
                        <div style="font-size: 1.25rem; font-weight: 600; color: #2d3748; line-height: 1.3; margin-bottom: 5px;">
                            ${data.name}
                        </div>
                        <div style="font-size: 0.9rem; color: #718096; font-weight: 400; margin-top: 3px;">
                            Product Information
                        </div>
                    </div>
                    
                    <div style="padding: 15px 20px 18px;">
                        <div class="d-flex justify-content-between align-items-center py-2">
                            <span style="font-weight: 500; font-size: 0.95rem; color: #64748b;">Price</span>
                            <span style="font-weight: 600; font-size: 1.05rem; color: #10b981;">$${data.price}</span>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center py-2" style="border-top: 1px dashed rgba(0,0,0,0.06);">
                            <span style="font-weight: 500; font-size: 0.95rem; color: #64748b;">Stock</span>
                            <span style="font-weight: 600; font-size: 1.05rem; color: #334155; ${parseInt(data.stock) <= 10 ? 'color: #f43f5e;' : ''}">
                                ${data.stock} ${parseInt(data.stock) <= 10 ? '<span style="font-size: 0.8rem; font-weight: 500; margin-left: 4px; color: #f43f5e; opacity: 0.9;">(Low)</span>' : ''}
                            </span>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center py-2" style="border-top: 1px dashed rgba(0,0,0,0.06);">
                            <span style="font-weight: 500; font-size: 0.95rem; color: #64748b;">Barcode</span>
                            <span style="font-weight: 600; font-size: 1.05rem; color: #334155; font-family: monospace;">${data.barcode}</span>
                        </div>
                    </div>
                </div>
            </div>`;

            // Insert toast into toast placement container
            document.getElementById('toastPlacement').innerHTML = toastHTML;

            // Auto close toast after 12 seconds
            setTimeout(() => {
                const toast = document.querySelector('#toastPlacement .toast');
                if (toast) {
                    const bsToast = bootstrap.Toast.getInstance(toast);
                    if (bsToast) {
                        bsToast.hide();
                    } else {
                        toast.classList.remove('show');
                        toast.classList.add('hide');
                    }
                }
            }, 12000);
        }

        function showErrorNotification(barcode, errorDetails) {
            // Create toast HTML structure
            const toastHTML = `
            <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" style="min-width: 380px; max-width: 480px; box-shadow: 0 12px 28px rgba(0,0,0,0.15), 0 5px 10px rgba(0,0,0,0.12); border-radius: 12px; overflow: hidden; border: none;">
                <div class="toast-header" style="background: linear-gradient(135deg, #f87171, #dc2626); padding: 16px; border: none;">
                    <strong class="me-auto" style="font-size: 1.1rem; font-weight: 600; letter-spacing: 0.5px; color: white; text-shadow: 0 1px 2px rgba(0,0,0,0.1);">Medicine Not Found</strong>
                    <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="toast" aria-label="Close" style="opacity: 0.9;"></button>
                </div>
                <div class="toast-body" style="padding: 0; background-color: #ffffff;">
                    <div style="padding: 18px 20px;">
                        <div class="d-flex align-items-center mb-3">
                            <iconify-icon icon="mdi:alert-circle" style="font-size: 24px; color: #dc2626; margin-right: 12px;"></iconify-icon>
                            <div style="font-size: 1.05rem; font-weight: 500; color: #4b5563; line-height: 1.3;">
                                No product found with this barcode
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center" style="background-color: #fef2f2; border-radius: 8px; padding: 12px 16px; margin-bottom: 8px;">
                            <iconify-icon icon="mdi:barcode" style="font-size: 20px; color: #dc2626; margin-right: 10px;"></iconify-icon>
                            <div>
                                <div style="font-weight: 500; font-size: 0.9rem; color: #4b5563;">Barcode Scanned:</div>
                                <div style="font-weight: 600; font-size: 1.05rem; color: #1f2937; font-family: monospace; margin-top: 2px;">${barcode}</div>
                            </div>
                        </div>
                        
                        ${errorDetails ? `
                        <div style="font-size: 0.9rem; color: #6b7280; margin-top: 12px; padding: 8px 0;">
                            <div style="font-weight: 500; margin-bottom: 4px;">Details:</div>
                            <div style="opacity: 0.9;">${errorDetails}</div>
                        </div>` : ''}
                    </div>
                </div>
            </div>`;

            // Insert toast into toast placement container
            document.getElementById('toastPlacement').innerHTML = toastHTML;

            // Auto close toast after 8 seconds
            setTimeout(() => {
                const toast = document.querySelector('#toastPlacement .toast');
                if (toast) {
                    const bsToast = bootstrap.Toast.getInstance(toast);
                    if (bsToast) {
                        bsToast.hide();
                    } else {
                        toast.classList.remove('show');
                        toast.classList.add('hide');
                    }
                }
            }, 8000);
        }
    </script>
</body>
</html>

