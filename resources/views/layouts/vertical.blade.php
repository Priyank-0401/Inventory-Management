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
    <div id="toastPlacement" class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 9999; pointer-events: none;"></div>

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
            fetch(`/api/medicines/barcode/${barcode}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Medicine not found');
                    }
                    return response.json();
                })
                .then(medicine => {
                    showMedicineNotification(medicine);
                })
                .catch(error => {
                    console.error('Error fetching medicine data:', error);
                    showErrorNotification(barcode);
                });
        }

        function showMedicineNotification(medicine) {
            const toastContainer = document.getElementById('toastPlacement');
            if (!toastContainer) {
                console.error('Toast container not found.');
                return;
            }

            const toastId = `toast-${Date.now()}`;
            const toastHtml = `
                <div id="${toastId}" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true" style="pointer-events: auto;">
                    <div class="d-flex">
                        <div class="toast-body">
                            <strong>${medicine.name}</strong><br>
                            Price: $${medicine.price} | Stock: ${medicine.stock}<br>
                            Barcode: ${medicine.barcode}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            `;

            toastContainer.insertAdjacentHTML('beforeend', toastHtml);
            const toastElement = document.getElementById(toastId);
            const toast = new bootstrap.Toast(toastElement, { delay: 5000 });
            toast.show();
            toastElement.addEventListener('hidden.bs.toast', () => toastElement.remove());
        }

        function showErrorNotification(barcode) {
            const toastContainer = document.getElementById('toastPlacement');
            if (!toastContainer) {
                console.error('Toast container not found.');
                return;
            }
            
            const toastId = `toast-error-${Date.now()}`;
            const toastHtml = `
                <div id="${toastId}" class="toast align-items-center text-bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true" style="pointer-events: auto;">
                    <div class="d-flex">
                        <div class="toast-body">
                            Medicine with barcode <strong>${barcode}</strong> not found.
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            `;
            
            toastContainer.insertAdjacentHTML('beforeend', toastHtml);
            const toastElement = document.getElementById(toastId);
            const toast = new bootstrap.Toast(toastElement, { delay: 5000 });
            toast.show();
            toastElement.addEventListener('hidden.bs.toast', () => toastElement.remove());
        }
    </script>
</body>
</html>
