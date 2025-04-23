@extends('layouts.vertical', ['title' => 'Just-in-Time Orders'])

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Just-in-Time Orders List</h4>
                        <p class="text-muted mb-0">Manage urgent medicine orders that need immediate attention</p>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createJITOrderModal">
                            <i class="bx bx-plus me-1"></i> Create JIT Order
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-hover table-centered">
                        <thead class="bg-light-subtle">
                            <tr>
                                <th>Order ID</th>
                                <th>Medicine ID</th>
                                <th>Medicine Name</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#JIT-001</td>
                                <td>MED-5678</td>
                                <td>Antibiotics X-500</td>
                                <td>$87.50</td>
                                <td>Antibiotics</td>
                                <td>5</td>
                                <td><span class="badge bg-info text-light px-2 py-1 fs-13">Pending</span></td>
                                <td>Dr. Smith</td>
                                <td>May 15, 2023</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><i class="bx bx-show fs-18"></i></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-18"></i></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-18"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#JIT-002</td>
                                <td>MED-2341</td>
                                <td>Pain Relief Gel</td>
                                <td>$45.00</td>
                                <td>Pain Management</td>
                                <td>3</td>
                                <td><span class="badge bg-success text-light px-2 py-1 fs-13">Approved</span></td>
                                <td>Dr. Johnson</td>
                                <td>May 14, 2023</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><i class="bx bx-show fs-18"></i></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-18"></i></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-18"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#JIT-003</td>
                                <td>MED-7890</td>
                                <td>Insulin Regular</td>
                                <td>$120.75</td>
                                <td>Diabetes</td>
                                <td>8</td>
                                <td><span class="badge bg-danger text-light px-2 py-1 fs-13">Denied</span></td>
                                <td>Dr. Williams</td>
                                <td>May 13, 2023</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><i class="bx bx-show fs-18"></i></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-18"></i></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-18"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#JIT-004</td>
                                <td>MED-4567</td>
                                <td>Epinephrine Injection</td>
                                <td>$95.25</td>
                                <td>Emergency</td>
                                <td>10</td>
                                <td><span class="badge bg-info text-light px-2 py-1 fs-13">Pending</span></td>
                                <td>Dr. Brown</td>
                                <td>May 12, 2023</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><i class="bx bx-show fs-18"></i></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-18"></i></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-18"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#JIT-005</td>
                                <td>MED-3210</td>
                                <td>Cough Syrup Plus</td>
                                <td>$28.99</td>
                                <td>Respiratory</td>
                                <td>15</td>
                                <td><span class="badge bg-success text-light px-2 py-1 fs-13">Approved</span></td>
                                <td>Dr. Garcia</td>
                                <td>May 11, 2023</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><i class="bx bx-show fs-18"></i></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-18"></i></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-18"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#JIT-006</td>
                                <td>MED-9875</td>
                                <td>Soliris (Eculizumab)</td>
                                <td>$18,750.50</td>
                                <td>Rare Disease</td>
                                <td>2</td>
                                <td><span class="badge bg-info text-light px-2 py-1 fs-13">Pending</span></td>
                                <td>Dr. Rodriguez</td>
                                <td>May 10, 2023</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><i class="bx bx-show fs-18"></i></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-18"></i></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-18"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#JIT-007</td>
                                <td>MED-6432</td>
                                <td>Zolgensma (Onasemnogene)</td>
                                <td>$2,125,000.00</td>
                                <td>Gene Therapy</td>
                                <td>1</td>
                                <td><span class="badge bg-success text-light px-2 py-1 fs-13">Approved</span></td>
                                <td>Dr. Chen</td>
                                <td>May 09, 2023</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><i class="bx bx-show fs-18"></i></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-18"></i></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-18"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#JIT-008</td>
                                <td>MED-5123</td>
                                <td>Danyelza (Naxitamab)</td>
                                <td>$235,800.00</td>
                                <td>Oncology</td>
                                <td>3</td>
                                <td><span class="badge bg-info text-light px-2 py-1 fs-13">Pending</span></td>
                                <td>Dr. Kim</td>
                                <td>May 08, 2023</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><i class="bx bx-show fs-18"></i></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-18"></i></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-18"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#JIT-009</td>
                                <td>MED-7721</td>
                                <td>Ravicti (Glycerol Phenylbutyrate)</td>
                                <td>$794,200.00</td>
                                <td>Metabolic Disorder</td>
                                <td>2</td>
                                <td><span class="badge bg-danger text-light px-2 py-1 fs-13">Denied</span></td>
                                <td>Dr. Thompson</td>
                                <td>May 07, 2023</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><i class="bx bx-show fs-18"></i></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-18"></i></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-18"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
        </div>
    </div>
</div>

<!-- Create JIT Order Modal -->
<div class="modal fade" id="createJITOrderModal" tabindex="-1" aria-labelledby="createJITOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createJITOrderModalLabel">Create Just-in-Time Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="medicine_id" class="form-label">Medicine ID</label>
                            <input type="text" class="form-control" id="medicine_id" placeholder="Enter medicine ID">
                        </div>
                        <div class="col-md-6">
                            <label for="medicine_name" class="form-label">Medicine Name</label>
                            <input type="text" class="form-control" id="medicine_name" placeholder="Enter medicine name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="price" class="form-label">Price</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" id="price" placeholder="0.00">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" id="category">
                                <option selected>Select category</option>
                                <option value="Antibiotics">Antibiotics</option>
                                <option value="Pain Management">Pain Management</option>
                                <option value="Diabetes">Diabetes</option>
                                <option value="Emergency">Emergency</option>
                                <option value="Respiratory">Respiratory</option>
                                <option value="Rare Disease">Rare Disease</option>
                                <option value="Gene Therapy">Gene Therapy</option>
                                <option value="Oncology">Oncology</option>
                                <option value="Metabolic Disorder">Metabolic Disorder</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="quantity" placeholder="Enter quantity">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="reason" class="form-label">Reason for Urgent Order</label>
                        <textarea class="form-control" id="reason" rows="3" placeholder="Explain why this medicine is needed urgently"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Submit Order</button>
            </div>
        </div>
    </div>
</div>

@endsection
