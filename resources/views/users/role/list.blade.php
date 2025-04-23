@extends('layouts.vertical', ['title' => 'Pharmaceutical Roles'])

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center gap-1">
                <h4 class="card-title flex-grow-1">Staff Roles & Responsibilities</h4>

                <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                    Add New Role
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-centered mb-0 table-hover">
                        <thead class="bg-light-subtle">
                            <tr>
                                <th>Role</th>
                                <th>Description</th>
                                <th>Access Level</th>
                                <th>Users Count</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm bg-primary-subtle rounded me-2 d-flex align-items-center justify-content-center">
                                            <i class="bx bx-user-circle fs-4 text-primary"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-1 fs-15">Pharmacy Manager</h5>
                                        </div>
                                    </div>
                                </td>
                                <td>Oversees all pharmaceutical operations, inventory management, and staff supervision</td>
                                <td><span class="badge bg-success">Full Access</span></td>
                                <td>2</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm bg-success-subtle rounded me-2 d-flex align-items-center justify-content-center">
                                            <i class="bx bx-user-voice fs-4 text-success"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-1 fs-15">Lead Pharmacist</h5>
                                        </div>
                                    </div>
                                </td>
                                <td>Approves prescriptions, oversees dispensing of medications, and ensures regulatory compliance</td>
                                <td><span class="badge bg-info">High Access</span></td>
                                <td>4</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm bg-warning-subtle rounded me-2 d-flex align-items-center justify-content-center">
                                            <i class="bx bx-id-card fs-4 text-warning"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-1 fs-15">Inventory Specialist</h5>
                                        </div>
                                    </div>
                                </td>
                                <td>Manages medicine stock levels, tracks rare medication inventory, and places purchase orders</td>
                                <td><span class="badge bg-primary">Medium Access</span></td>
                                <td>6</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm bg-danger-subtle rounded me-2 d-flex align-items-center justify-content-center">
                                            <i class="bx bx-briefcase fs-4 text-danger"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-1 fs-15">Pharmaceutical Technician</h5>
                                        </div>
                                    </div>
                                </td>
                                <td>Prepares medications, assists pharmacists, and handles basic customer inquiries</td>
                                <td><span class="badge bg-warning">Limited Access</span></td>
                                <td>12</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm bg-info-subtle rounded me-2 d-flex align-items-center justify-content-center">
                                            <i class="bx bx-dollar-circle fs-4 text-info"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-1 fs-15">Billing Specialist</h5>
                                        </div>
                                    </div>
                                </td>
                                <td>Handles insurance claims, payments, and financial records for medication purchases</td>
                                <td><span class="badge bg-warning">Limited Access</span></td>
                                <td>5</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm bg-secondary-subtle rounded me-2 d-flex align-items-center justify-content-center">
                                            <i class="bx bx-user-pin fs-4 text-secondary"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-1 fs-15">Rare Disease Coordinator</h5>
                                        </div>
                                    </div>
                                </td>
                                <td>Specializes in rare disease medications, patient education, and supplier coordination</td>
                                <td><span class="badge bg-primary">Medium Access</span></td>
                                <td>3</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm bg-purple-subtle rounded me-2 d-flex align-items-center justify-content-center">
                                            <i class="bx bx-package fs-4 text-purple"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-1 fs-15">Procurement Officer</h5>
                                        </div>
                                    </div>
                                </td>
                                <td>Manages relationships with pharmaceutical suppliers and negotiates prices for medications</td>
                                <td><span class="badge bg-primary">Medium Access</span></td>
                                <td>2</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection