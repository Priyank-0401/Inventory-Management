@extends('layouts.vertical', ['title' => 'Pharmacy Dashboard'])

@section('content')
    <div class="row">
        <div class="col-xxl-5">
            <div class="row">
                <div class="col-12">
                </div>

                <div class="col-md-6">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-md bg-soft-primary rounded">
                                        <iconify-icon icon="solar:cart-5-bold-duotone"
                                                      class="avatar-title fs-32 text-primary"></iconify-icon>
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-6 text-end">
                                    <p class="text-muted mb-0 text-truncate">Total Prescriptions</p>
                                    <h3 class="text-dark mt-1 mb-0">8,472</h3>
                                </div> <!-- end col -->
                            </div> <!-- end row-->
                        </div> <!-- end card body -->
                        <div class="card-footer py-2 bg-light bg-opacity-50">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-success"> <i class="bx bxs-up-arrow fs-12"></i> 3.2%</span>
                                    <span class="text-muted ms-1 fs-12">Last Week</span>
                                </div>
                                <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                            </div>
                        </div> <!-- end card body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
                <div class="col-md-6">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-md bg-soft-primary rounded">
                                        <iconify-icon icon="solar:pill-bold-duotone" class="avatar-title fs-32 text-primary"></iconify-icon>
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-6 text-end">
                                    <p class="text-muted mb-0 text-truncate">Total Products</p>
                                    <h3 class="text-dark mt-1 mb-0">1,284</h3>
                                </div> <!-- end col -->
                            </div> <!-- end row-->
                        </div> <!-- end card body -->
                        <div class="card-footer py-2 bg-light bg-opacity-50">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-success"> <i class="bx bxs-up-arrow fs-12"></i> 5.3%</span>
                                    <span class="text-muted ms-1 fs-12">Last Month</span>
                                </div>
                                <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                            </div>
                        </div> <!-- end card body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
                <div class="col-md-6">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-md bg-soft-primary rounded">
                                        <i class="bx bx-package avatar-title fs-32 text-primary"></i>
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-6 text-end">
                                    <p class="text-muted mb-0 text-truncate">Low Stock Items</p>
                                    <h3 class="text-dark mt-1 mb-0">43</h3>
                                </div> <!-- end col -->
                            </div> <!-- end row-->
                        </div> <!-- end card body -->
                        <div class="card-footer py-2 bg-light bg-opacity-50">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-danger"> <i class="bx bxs-down-arrow fs-12"></i> 8.4%</span>
                                    <span class="text-muted ms-1 fs-12">Last Month</span>
                                </div>
                                <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                            </div>
                        </div> <!-- end card body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
                <div class="col-md-6">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-md bg-soft-primary rounded">
                                        <iconify-icon icon="solar:dollar-minimalistic-bold-duotone" class="avatar-title fs-32 text-primary"></iconify-icon>
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-6 text-end">
                                    <p class="text-muted mb-0 text-truncate">Total Revenue</p>
                                    <h3 class="text-dark mt-1 mb-0">$352.8k</h3>
                                </div> <!-- end col -->
                            </div> <!-- end row-->
                        </div> <!-- end card body -->
                        <div class="card-footer py-2 bg-light bg-opacity-50">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-success"> <i class="bx bxs-up-arrow fs-12"></i> 12.3%</span>
                                    <span class="text-muted ms-1 fs-12">Last Month</span>
                                </div>
                                <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                            </div>
                        </div> <!-- end card body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end col -->

        <div class="col-xxl-7">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Sales by Category ($ in thousands)</h4>
                        <div>
                            <button type="button" class="btn btn-sm btn-outline-light">ALL</button>
                            <button type="button" class="btn btn-sm btn-outline-light">1M</button>
                            <button type="button" class="btn btn-sm btn-outline-light">6M</button>
                            <button type="button" class="btn btn-sm btn-outline-light active">1Y</button>
                        </div>
                    </div> <!-- end card-title-->

                    <div dir="ltr">
                        <div id="dash-performance-chart" class="apex-charts" style="height: 300px;"></div>
                        
                        <div class="row text-center mt-3">
                            <div class="col-4">
                                <span class="d-inline-block rounded-circle mr-1" style="width: 10px; height: 10px; background-color: #3B82F6;"></span>
                                <span class="text-muted">Category A</span>
                                <h5 class="font-weight-bold mb-0">$2.6M</h5>
                            </div>
                            <div class="col-4">
                                <span class="d-inline-block rounded-circle mr-1" style="width: 10px; height: 10px; background-color: #10B981;"></span>
                                <span class="text-muted">Category B</span>
                                <h5 class="font-weight-bold mb-0">$1.3M</h5>
                            </div>
                            <div class="col-4">
                                <span class="d-inline-block rounded-circle mr-1" style="width: 10px; height: 10px; background-color: #F59E0B;"></span>
                                <span class="text-muted">Category C</span>
                                <h5 class="font-weight-bold mb-0">$0.7M</h5>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Inventory Distribution</h5>
                    <div id="inventory-donut-chart" class="apex-charts mb-2 mt-n2" style="height: 240px;"></div>
                    <div class="row text-center">
                        <div class="col-4">
                            <p class="text-muted mb-2">Category A</p>
                            <h3 class="text-dark mb-3">15%</h3>
                        </div> <!-- end col -->
                        <div class="col-4">
                            <p class="text-muted mb-2">Category B</p>
                            <h3 class="text-dark mb-3">42%</h3>
                        </div> <!-- end col -->
                        <div class="col-4">
                            <p class="text-muted mb-2">Category C</p>
                            <h3 class="text-dark mb-3">43%</h3>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    <div class="text-center">
                        <button type="button" class="btn btn-light shadow-none w-100">View Details</button>
                    </div> <!-- end row -->
                </div>
            </div>
        </div> <!-- end left chart card -->

        <div class="col-lg-4">
            <div class="card card-height-100">
                <div class="card-header d-flex align-items-center justify-content-between gap-2">
                    <h4 class="card-title flex-grow-1">Smart Carton Alerts</h4>
                    <a href="#" class="btn btn-sm btn-soft-danger">View All Alerts</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-nowrap table-centered m-0">
                        <thead class="bg-light bg-opacity-50">
                        <tr>
                            <th class="text-muted ps-3">Shipment ID</th>
                            <th class="text-muted">Medication</th>
                            <th class="text-muted">Issue Type</th>
                            <th class="text-muted">Time</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="ps-3"><a href="#" class="text-reset">#SC7845</a></td>
                            <td>Zolgensma</td>
                            <td><span class="badge bg-danger">Temperature Alert</span></td>
                            <td>10 min ago</td>
                        </tr>
                        <tr>
                            <td class="ps-3"><a href="#" class="text-reset">#SC6532</a></td>
                            <td>Luxturna</td>
                            <td><span class="badge bg-warning">Shock Detection</span></td>
                            <td>1 hour ago</td>
                        </tr>
                        <tr>
                            <td class="ps-3"><a href="#" class="text-reset">#SC9021</a></td>
                            <td>Soliris</td>
                            <td><span class="badge bg-danger">Tamperature Alert</span></td>
                            <td>3 hours ago</td>
                        </tr>
                        <tr>
                            <td class="ps-3"><a href="#" class="text-reset">#SC3478</a></td>
                            <td>Kymriah</td>
                            <td><span class="badge bg-warning">Humidity Alert</span></td>
                            <td>5 hours ago</td>
                        </tr>
                        <tr>
                            <td class="ps-3"><a href="#" class="text-reset">#SC5289</a></td>
                            <td>Spinraza</td>
                            <td><span class="badge bg-danger">Temperature Alert</span></td>
                            <td>Yesterday</td>
                        </tr>
                        <tr>
                            <td class="ps-3"><a href="#" class="text-reset">#SC4176</a></td>
                            <td>Kymriah</td>
                            <td><span class="badge bg-warning">Shock Detection</span></td>
                            <td>2 days ago</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-4">
            <div class="card card-height-100">
                <div class="card-header d-flex align-items-center justify-content-between gap-2">
                    <h4 class="card-title flex-grow-1">Out of Stock Alerts</h4>
                    <a href="#" class="btn btn-sm btn-soft-primary">Reorder All</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-nowrap table-centered m-0">
                        <thead class="bg-light bg-opacity-50">
                        <tr>
                            <th class="text-muted ps-3">Product</th>
                            <th class="text-muted">Category</th>
                            <th class="text-muted">Priority</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="ps-3"><a href="#" class="text-reset">Zolgensma</a></td>
                            <td>A</td>
                            <td><span class="badge badge-soft-danger">High</span></td>
                        </tr>
                        <tr>
                            <td class="ps-3"><a href="#" class="text-reset">Luxturna</a></td>
                            <td>A</td>
                            <td><span class="badge badge-soft-danger">High</span></td>
                        </tr>
                        <tr>
                            <td class="ps-3"><a href="#" class="text-reset">Herceptin</a></td>
                            <td>B</td>
                            <td><span class="badge badge-soft-warning">Medium</span></td>
                        </tr>
                        <tr>
                            <td class="ps-3"><a href="#" class="text-reset">Insulin</a></td>
                            <td>B</td>
                            <td><span class="badge badge-soft-danger">High</span></td>
                        </tr>
                        <tr>
                            <td class="ps-3"><a href="#" class="text-reset">Amoxicillin</a></td>
                            <td>C</td>
                            <td><span class="badge badge-soft-warning">Medium</span></td>
                        </tr>
                        <tr>
                            <td class="ps-3"><a href="#" class="text-reset">Metformin</a></td>
                            <td>C</td>
                            <td><span class="badge badge-soft-success">Low</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">
                            Recent Orders
                        </h4>

                        <a href="#!" class="btn btn-sm btn-soft-primary">
                            <i class="bx bx-plus me-1"></i>Create Order
                        </a>
                    </div>
                </div>
                <!-- end card body -->
                <div class="table-responsive table-centered">
                    <table class="table mb-0">
                        <thead class="bg-light bg-opacity-50">
                        <tr>
                            <th class="ps-3">
                                Order ID
                            </th>
                            <th>
                                Date
                            </th>
                            <th>
                                Medication
                            </th>
                            <th>
                                Customer Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Phone
                            </th>
                            <th>
                                Category
                            </th>
                            <th>
                                Payment Type
                            </th>
                            <th>
                                Status
                            </th>
                        </tr>
                        </thead>
                        <!-- end thead-->
                        <tbody>
                        <tr>
                            <td class="ps-3">
                                <a href="#!">#RX5625</a>
                            </td>
                            <td>29 April 2024</td>
                            <td>
                                <img src="/images/product/p-1.png" alt="medication"
                                     class="img-fluid avatar-sm">
                            </td>
                            <td>
                                <a href="#!">Robert Johnson</a>
                            </td>
                            <td>robert.j@example.com</td>
                            <td>(+1)-555-3842-661</td>
                            <td>Category A</td>
                            <td>Insurance</td>
                            <td>
                                <i class="bx bxs-circle text-success me-1"></i>Completed
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-3">
                                <a href="#!">#RX9652</a>
                            </td>
                            <td>25 April 2024</td>
                            <td>
                                <img src="/images/product/p-4.png" alt="medication"
                                     class="img-fluid avatar-sm">
                            </td>
                            <td>
                                <a href="#!">Sarah Miller</a>
                            </td>
                            <td>sarah.m@example.com</td>
                            <td>(+1)-305-7842-259</td>
                            <td>Category B</td>
                            <td>Credit Card</td>
                            <td>
                                <i class="bx bxs-circle text-success me-1"></i>Completed
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-3">
                                <a href="#!">#RX5984</a>
                            </td>
                            <td>25 April 2024</td>
                            <td>
                                <img src="/images/product/p-6.png" alt="medication"
                                     class="img-fluid avatar-sm">
                            </td>
                            <td>
                                <a href="#!">John Thompson</a>
                            </td>
                            <td>john.t@example.com</td>
                            <td>(+1)-655-4587-93</td>
                            <td>Category B</td>
                            <td>Insurance</td>
                            <td>
                                <i class="bx bxs-circle text-success me-1"></i>Completed
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-3">
                                <a href="#!">#RX3625</a>
                            </td>
                            <td>21 April 2024</td>
                            <td>
                                <img src="/images/product/p-7.png" alt="medication"
                                     class="img-fluid avatar-sm">
                            </td>
                            <td>
                                <a href="#!">Maria Garcia</a>
                            </td>
                            <td>
                                maria.g@example.com
                            </td>
                            <td>(+1)-693-3853-637</td>
                            <td>Category C</td>
                            <td>Cash</td>
                            <td>
                                <i class="bx bxs-circle text-primary me-1"></i>Processing
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-3">
                                <a href="#!">#RX8652</a>
                            </td>
                            <td>18 April 2024</td>
                            <td>
                                <img src="/images/product/p-9.png" alt="medication"
                                     class="img-fluid avatar-sm">
                            </td>
                            <td>
                                <a href="#!">David Wilson</a>
                            </td>
                            <td>david.w@example.com</td>
                            <td>(+1)-855-5746-150</td>
                            <td>Category C</td>
                            <td>Credit Card</td>
                            <td>
                                <i class="bx bxs-circle text-primary me-1"></i>Processing
                            </td>
                        </tr>
                        </tbody>
                        <!-- end tbody -->
                    </table>
                    <!-- end table -->
                </div>
                <!-- table responsive -->

                <div class="card-footer border-top">
                    <div class="row g-3">
                        <div class="col-sm">
                            <div class="text-muted">
                                Showing
                                <span class="fw-semibold">5</span>
                                of
                                <span class="fw-semibold">8,472</span>
                                orders
                            </div>
                        </div>

                        <div class="col-sm-auto">
                            <ul class="pagination m-0">
                                <li class="page-item">
                                    <a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end row -->

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Sales by Category Line Chart
        if (document.getElementById('dash-performance-chart')) {
            var options = {
                chart: {
                    height: 300,
                    type: 'line',
                    toolbar: {
                        show: false
                    }
                },
                stroke: {
                    curve: 'smooth',
                    width: 3
                },
                series: [{
                    name: 'Category A',
                    data: [280, 320, 295, 350, 340, 380, 310, 335, 400, 370, 390, 285]
                }, {
                    name: 'Category B',
                    data: [120, 135, 130, 120, 140, 135, 150, 145, 130, 135, 140, 145]
                }, {
                    name: 'Category C',
                    data: [45, 50, 55, 60, 55, 65, 70, 65, 75, 80, 75, 65]
                }],
                colors: ['#3B82F6', '#10B981', '#F59E0B'],
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                },
                yaxis: {
                    title: {
                        text: 'Sales ($ thousands)'
                    }
                },
                tooltip: {
                    shared: true,
                    intersect: false,
                    y: {
                        formatter: function (y) {
                            if (typeof y !== "undefined") {
                                return "$" + y + "k";
                            }
                            return y;
                        }
                    }
                },
                grid: {
                    borderColor: '#f1f1f1'
                },
                legend: {
                    show: false
                }
            };
            
            var chart = new ApexCharts(
                document.querySelector("#dash-performance-chart"),
                options
            );
            
            chart.render();
        }
        
        // Inventory Distribution Donut Chart
        if (document.getElementById('inventory-donut-chart')) {
            var donutOptions = {
                chart: {
                    height: 240,
                    type: 'donut',
                },
                series: [15, 42, 43],
                labels: ['Category A', 'Category B', 'Category C'],
                colors: ['#3B82F6', '#10B981', '#F59E0B'],
                legend: {
                    show: false,
                },
                dataLabels: {
                    enabled: false
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: '80%'
                        }
                    }
                }
            };
            
            var donutChart = new ApexCharts(
                document.querySelector("#inventory-donut-chart"),
                donutOptions
            );
            
            donutChart.render();
        }
    });
</script>
@endsection
