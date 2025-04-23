<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials/title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.partials/head-css')
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        @include('layouts.partials.topbar')
        @include('layouts.partials.main-nav')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
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

    <!-- Toast container -->
    <div id="toastPlacement" class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 9999"></div>

    @include('layouts.partials.right-sidebar')

    @include('layouts.partials.footer-scripts')

    @vite(['resources/js/app.js','resources/js/layout.js'])

    <script>
        let barcodeBuffer = '';
        let lastInputTime = Date.now();

        document.addEventListener('keypress', function(e) {
            const currentTime = Date.now();
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
                console.error('Toast container not found. Add <div id="toastPlacement" class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 9999"></div> to your layout.');
                return;
            }

            const toastId = `toast-${Date.now()}`;
            const toastHtml = `
                <div id="${toastId}" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
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
            const toast = new bootstrap.Toast(toastElement);
            toast.show();
            toastElement.addEventListener('hidden.bs.toast', () => toastElement.remove());
        }

        function showErrorNotification(barcode) {
            const toastContainer = document.getElementById('toastPlacement');
            if (!toastContainer) {
                console.error('Toast container not found.');
                alert(`Medicine with barcode ${barcode} not found.`);
                return;
            }
            const toastId = `toast-error-${Date.now()}`;
            const toastHtml = `
                <div id="${toastId}" class="toast align-items-center text-bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
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
            const toast = new bootstrap.Toast(toastElement);
            toast.show();
            toastElement.addEventListener('hidden.bs.toast', () => toastElement.remove());
        }
    </script>

</body>
</html>
