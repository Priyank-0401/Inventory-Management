@extends('layouts.vertical', ['title' => 'Pharmaceutical Customers'])

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center gap-1">
                <h4 class="card-title flex-grow-1">Customer Accounts</h4>

                <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                    Add New Customer
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-centered mb-0 table-hover">
                        <thead class="bg-light-subtle">
                            <tr>
                                <th>Customer</th>
                                <th>Institution Type</th>
                                <th>Primary Contact</th>
                                <th>Rare Disease Focus</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm bg-primary-subtle rounded me-2 d-flex align-items-center justify-content-center">
                                            <i class="bx bx-building-house fs-4 text-primary"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0 fs-14">Metropolitan General Hospital</h5>
                                            <p class="mb-0 text-muted fs-13">ID: #MGH2023</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Regional Medical Center</td>
                                <td>
                                    <p class="mb-0">Dr. Robert Johnson</p>
                                    <p class="mb-0 text-muted fs-13">rjohnson@metrohospital.com</p>
                                </td>
                                <td>Metabolic Disorders, Hemoglobinuria</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm"><i class="bx bx-show fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm bg-success-subtle rounded me-2 d-flex align-items-center justify-content-center">
                                            <i class="bx bx-building fs-4 text-success"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0 fs-14">Children's Research Institute</h5>
                                            <p class="mb-0 text-muted fs-13">ID: #CRI2023</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Specialized Research Center</td>
                                <td>
                                    <p class="mb-0">Dr. Sarah Williams</p>
                                    <p class="mb-0 text-muted fs-13">swilliams@childrensri.org</p>
                                </td>
                                <td>Pompe Disease, MPS I, MPS II</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm"><i class="bx bx-show fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm bg-info-subtle rounded me-2 d-flex align-items-center justify-content-center">
                                            <i class="bx bx-plus-medical fs-4 text-info"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0 fs-14">Westside Medical Center</h5>
                                            <p class="mb-0 text-muted fs-13">ID: #WMC2023</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Community Hospital</td>
                                <td>
                                    <p class="mb-0">Dr. Michael Chen</p>
                                    <p class="mb-0 text-muted fs-13">mchen@westsidemc.com</p>
                                </td>
                                <td>Wilson's Disease, Gaucher's Disease</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm"><i class="bx bx-show fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm bg-warning-subtle rounded me-2 d-flex align-items-center justify-content-center">
                                            <i class="bx bx-clinic fs-4 text-warning"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0 fs-14">Neurological Treatment Center</h5>
                                            <p class="mb-0 text-muted fs-13">ID: #NTC2023</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Specialized Clinic</td>
                                <td>
                                    <p class="mb-0">Dr. Emily Rodriguez</p>
                                    <p class="mb-0 text-muted fs-13">erodriguez@neurotc.org</p>
                                </td>
                                <td>Dravet Syndrome, Lennox-Gastaut Syndrome</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm"><i class="bx bx-show fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm bg-danger-subtle rounded me-2 d-flex align-items-center justify-content-center">
                                            <i class="bx bx-heart fs-4 text-danger"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0 fs-14">Rare Disease Foundation</h5>
                                            <p class="mb-0 text-muted fs-13">ID: #RDF2023</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Non-profit Organization</td>
                                <td>
                                    <p class="mb-0">Dr. Amanda Thompson</p>
                                    <p class="mb-0 text-muted fs-13">athompson@rdfoundation.org</p>
                                </td>
                                <td>Multiple Rare Diseases</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm"><i class="bx bx-show fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm bg-secondary-subtle rounded me-2 d-flex align-items-center justify-content-center">
                                            <i class="bx bx-building-house fs-4 text-secondary"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0 fs-14">University Medical Research Hospital</h5>
                                            <p class="mb-0 text-muted fs-13">ID: #UMRH2023</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Academic Medical Center</td>
                                <td>
                                    <p class="mb-0">Dr. James Wilson</p>
                                    <p class="mb-0 text-muted fs-13">jwilson@umrh.edu</p>
                                </td>
                                <td>Tyrosinemia Type 1, Maroteaux-Lamy Syndrome</td>
                                <td><span class="badge bg-warning">Pending Approval</span></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm"><i class="bx bx-show fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm bg-purple-subtle rounded me-2 d-flex align-items-center justify-content-center">
                                            <i class="bx bx-buildings fs-4 text-purple"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0 fs-14">Eastern Regional Health System</h5>
                                            <p class="mb-0 text-muted fs-13">ID: #ERHS2023</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Healthcare Network</td>
                                <td>
                                    <p class="mb-0">Dr. Olivia Davis</p>
                                    <p class="mb-0 text-muted fs-13">odavis@easternhealth.org</p>
                                </td>
                                <td>Genetic and Metabolic Disorders</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm"><i class="bx bx-show fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm bg-info-subtle rounded me-2 d-flex align-items-center justify-content-center">
                                            <i class="bx bx-vial fs-4 text-info"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0 fs-14">LifeScience Pharmaceuticals</h5>
                                            <p class="mb-0 text-muted fs-13">ID: #LSP2023</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Research Laboratory</td>
                                <td>
                                    <p class="mb-0">Dr. Thomas Lee</p>
                                    <p class="mb-0 text-muted fs-13">tlee@lifescience.com</p>
                                </td>
                                <td>Experimental Treatments</td>
                                <td><span class="badge bg-danger">Inactive</span></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm"><i class="bx bx-show fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm bg-success-subtle rounded me-2 d-flex align-items-center justify-content-center">
                                            <i class="bx bx-first-aid fs-4 text-success"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0 fs-14">Central Pediatric Hospital</h5>
                                            <p class="mb-0 text-muted fs-13">ID: #CPH2023</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Children's Hospital</td>
                                <td>
                                    <p class="mb-0">Dr. Rebecca Martinez</p>
                                    <p class="mb-0 text-muted fs-13">rmartinez@cph.org</p>
                                </td>
                                <td>Pediatric Rare Diseases</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm"><i class="bx bx-show fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-primary btn-sm"><i class="bx bx-edit fs-16"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-sm"><i class="bx bx-trash fs-16"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer border-top">
                <nav aria-label="Page navigation">
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