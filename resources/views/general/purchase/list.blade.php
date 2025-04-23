@extends('layouts.vertical', ['title' => 'Purchase List'])

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="d-flex card-header justify-content-between align-items-center">
                <div>
                    <h4 class="card-title">All Purchase Items</h4>
                </div>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown" aria-expanded="false">
                        This Month
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="#!" class="dropdown-item">Download</a>
                        <!-- item-->
                        <a href="#!" class="dropdown-item">Export</a>
                        <!-- item-->
                        <a href="#!" class="dropdown-item">Import</a>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-hover table-centered">
                        <thead class="bg-light-subtle">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                        <label class="form-check-label" for="customCheck1"></label>
                                    </div>
                                </th>
                                <th>ID</th>
                                <th>Order By</th>
                                <th>Items</th>
                                <th>Purchase Status</th>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Payment Method</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body">#INV2540</a> </td>
                                <td>
                                    <div>
                                        <h5 class="mb-0 fs-14">Michael A. Miner</h5>
                                        <p class="mb-0 text-muted fs-13">Order #INV2540</p>
                                    </div>
                                </td>
                                <td> T-shirt , Wallet</td>
                                <td> <span class="badge bg-success text-white py-1 px-2">Items Received</span> </td>
                                <td> 07 Jan, 2023</td>
                                <td> $621 </td>
                                <td> Mastercard </td>
                                <td> <span class="badge bg-success-subtle text-success py-1 px-2">Completed</span> </td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><i class="bx bx-show fs-16"></i></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck3">
                                        <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body">#INV3924</a> </td>
                                <td>
                                    <div>
                                        <h5 class="mb-0 fs-14">Theresa T. Brose</h5>
                                        <p class="mb-0 text-muted fs-13">Order #INV3924</p>
                                    </div>
                                </td>
                                <td>Golden Dress , Sunglass</td>
                                <td> <span class="badge bg-success text-white py-1 px-2">Items Received</span> </td>
                                <td> 03 Dec, 2023</td>
                                <td> $502 </td>
                                <td> Visa </td>
                                <td> <span class="badge bg-danger-subtle text-danger px-2 py-1">Cancel</span> </td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><i class="bx bx-show fs-16"></i></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck4">
                                        <label class="form-check-label" for="customCheck4">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body">#INV5032</a> </td>
                                <td>
                                    <div>
                                        <h5 class="mb-0 fs-14">James L. Erickson</h5>
                                        <p class="mb-0 text-muted fs-13">Order #INV5032</p>
                                    </div>
                                </td>
                                <td> Shoes , Cargo Pent</td>
                                <td> <span class="badge bg-success text-white py-1 px-2">Items Received</span> </td>
                                <td> 28 Sep, 2023 </td>
                                <td> $218 </td>
                                <td> Paypal </td>
                                <td><span class="badge bg-success-subtle text-success py-1 px-2">Completed</span></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><i class="bx bx-show fs-16"></i></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck5">
                                        <label class="form-check-label" for="customCheck5">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body">#INV1695</a> </td>
                                <td>
                                    <div>
                                        <h5 class="mb-0 fs-14">Lily W. Wilson</h5>
                                        <p class="mb-0 text-muted fs-13">Order #INV1695</p>
                                    </div>
                                </td>
                                <td> Watch , T-shirt </td>
                                <td> <span class="badge bg-success text-white py-1 px-2">Items Received</span> </td>
                                <td>10 Aug, 2023</td>
                                <td> $428 </td>
                                <td> Mastercard</td>
                                <td><span class="badge bg-primary-subtle text-primary py-1 px-2">Pending</span></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><i class="bx bx-show fs-16"></i></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck6">
                                        <label class="form-check-label" for="customCheck6">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body">#INV8473</a> </td>
                                <td>
                                    <div>
                                        <h5 class="mb-0 fs-14">Sarah M. Brooks</h5>
                                        <p class="mb-0 text-muted fs-13">Order #INV8473</p>
                                    </div>
                                </td>
                                <td> Hand Bag , Watch</td>
                                <td> <span class="badge bg-success text-white py-1 px-2">Items Received</span> </td>
                                <td> 22 May, 2023 </td>
                                <td> $314 </td>
                                <td> Visa</td>
                                <td> <span class="badge bg-danger-subtle text-danger px-2 py-1 ">Cancel</span></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><i class="bx bx-show fs-16"></i></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck7">
                                        <label class="form-check-label" for="customCheck7">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body">#INV2150</a> </td>
                                <td>
                                    <div>
                                        <h5 class="mb-0 fs-14">Joe K. Hall</h5>
                                        <p class="mb-0 text-muted fs-13">Order #INV2150</p>
                                    </div>
                                </td>
                                <td>Headphone , Dress</td>
                                <td> <span class="badge bg-success text-white py-1 px-2">Items Received</span> </td>
                                <td>15 Mar, 2023</td>
                                <td> $591 </td>
                                <td> Paypal </td>
                                <td> <span class="badge bg-success-subtle text-success py-1 px-2">Completed</span> </td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><i class="bx bx-show fs-16"></i></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck7">
                                        <label class="form-check-label" for="customCheck7">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body">#INV5636</a> </td>
                                <td>
                                    <div>
                                        <h5 class="mb-0 fs-14">Ralph Hueber</h5>
                                        <p class="mb-0 text-muted fs-13">Order #INV5636</p>
                                    </div>
                                </td>
                                <td>Headphone</td>
                                <td> <span class="badge bg-success text-white py-1 px-2">Items Received</span> </td>
                                <td>19 Dec, 2023</td>
                                <td> $815 </td>
                                <td> Visa </td>
                                <td> <span class="badge bg-success-subtle text-success py-1 px-2">Completed</span> </td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><i class="bx bx-show fs-16"></i></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck7">
                                        <label class="form-check-label" for="customCheck7">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body">#INV2940</a> </td>
                                <td>
                                    <div>
                                        <h5 class="mb-0 fs-14">Sarah Drescher</h5>
                                        <p class="mb-0 text-muted fs-13">Order #INV2940</p>
                                    </div>
                                </td>
                                <td>Cap , Sunglass , Hand Bag</td>
                                <td> <span class="badge bg-success text-white py-1 px-2">Items Received</span> </td>
                                <td>11 Jun, 2023</td>
                                <td> $715 </td>
                                <td> Mastercard </td>
                                <td> <span class="badge bg-success-subtle text-success py-1 px-2">Completed</span> </td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><i class="bx bx-show fs-16"></i></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck7">
                                        <label class="form-check-label" for="customCheck7">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body">#INV9027</a> </td>
                                <td>
                                    <div>
                                        <h5 class="mb-0 fs-14">Leonie Meister</h5>
                                        <p class="mb-0 text-muted fs-13">Order #INV9027</p>
                                    </div>
                                </td>
                                <td>Headphone , T-shirt</td>
                                <td> <span class="badge bg-success text-white py-1 px-2">Items Received</span> </td>
                                <td>19 Mar, 2023 </td>
                                <td> $351 </td>
                                <td> Paypal </td>
                                <td><span class="badge bg-primary-subtle text-primary py-1 px-2">Pending</span></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><i class="bx bx-show fs-16"></i></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
            <div class="card-footer border-top">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</div>

@endsection