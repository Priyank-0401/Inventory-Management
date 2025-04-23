@extends('layouts.vertical', ['title' => 'Pharmaceutical Suppliers'])

@section('content')


<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center gap-1">
                <h4 class="card-title flex-grow-1">Medication Suppliers</h4>

                <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                    Add New Supplier
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-centered mb-0 table-hover">
                        <thead class="bg-light-subtle">
                            <tr>
                                <th>Supplier</th>
                                <th>Specialty</th>
                                <th>Contact Information</th>
                                <th>Products Supplied</th>
                                <th>Rating</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm bg-primary-subtle rounded me-2 d-flex align-items-center justify-content-center">
                                            <i class="bx bx-capsule fs-4 text-primary"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0 fs-14">BioGenix Pharmaceuticals</h5>
                                            <p class="mb-0 text-muted fs-13">ID: #BGP2023</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Rare Disease Medications</td>
                                <td>
                                    <p class="mb-0">Dr. Richard Hayes</p>
                                    <p class="mb-0 text-muted fs-13">rhayes@biogenix.com</p>
                                </td>
                                <td>Eculizumab, Ravulizumab</td>
                                <td>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star-half text-warning"></i>
                                    <span class="ms-1">4.5</span>
                                </td>
                                <td><span class="badge bg-success">Verified</span></td>
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
                                            <i class="bx bx-vial fs-4 text-success"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0 fs-14">MedRare Solutions</h5>
                                            <p class="mb-0 text-muted fs-13">ID: #MRS2023</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Orphan Disease Treatments</td>
                                <td>
                                    <p class="mb-0">Dr. Karen White</p>
                                    <p class="mb-0 text-muted fs-13">kwhite@medrare.com</p>
                                </td>
                                <td>Idursulfase, Galsulfase, Laronidase</td>
                                <td>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-muted"></i>
                                    <span class="ms-1">4.0</span>
                                </td>
                                <td><span class="badge bg-success">Verified</span></td>
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
                                            <i class="bx bx-dna fs-4 text-info"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0 fs-14">GeneTherapeutics Inc.</h5>
                                            <p class="mb-0 text-muted fs-13">ID: #GTI2023</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Gene Therapy Products</td>
                                <td>
                                    <p class="mb-0">Dr. Samuel Jackson</p>
                                    <p class="mb-0 text-muted fs-13">sjackson@genetherapeutics.com</p>
                                </td>
                                <td>Alglucosidase Alfa</td>
                                <td>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <span class="ms-1">5.0</span>
                                </td>
                                <td><span class="badge bg-success">Verified</span></td>
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
                                            <i class="bx bx-test-tube fs-4 text-warning"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0 fs-14">MetabolicTx Pharmaceuticals</h5>
                                            <p class="mb-0 text-muted fs-13">ID: #MTP2023</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Metabolic Disorder Treatments</td>
                                <td>
                                    <p class="mb-0">Dr. Lisa Brown</p>
                                    <p class="mb-0 text-muted fs-13">lbrown@metabolictx.com</p>
                                </td>
                                <td>Tyrosinase Inhibitor, Eliglustat</td>
                                <td>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star-half text-warning"></i>
                                    <span class="ms-1">4.6</span>
                                </td>
                                <td><span class="badge bg-success">Verified</span></td>
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
                                            <i class="bx bx-brain fs-4 text-danger"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0 fs-14">NeuroPharm Solutions</h5>
                                            <p class="mb-0 text-muted fs-13">ID: #NPS2023</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Neurological Medications</td>
                                <td>    
                                    <p class="mb-0">Dr. David Miller</p>
                                    <p class="mb-0 text-muted fs-13">dmiller@neuropharm.com</p>
                                </td>
                                <td>Cannabidiol Oral Solution</td>
                                <td>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-muted"></i>
                                    <span class="ms-1">4.1</span>
                                </td>
                                <td><span class="badge bg-warning">Under Review</span></td>
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
                                            <i class="bx bx-pulse fs-4 text-secondary"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0 fs-14">Wilson's Disease Alliance</h5>
                                            <p class="mb-0 text-muted fs-13">ID: #WDA2023</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Wilson's Disease Treatments</td>
                                <td>
                                    <p class="mb-0">Dr. Jennifer Clark</p>
                                    <p class="mb-0 text-muted fs-13">jclark@wilsonsalliance.org</p>
                                </td>
                                <td>Trientine</td>
                                <td>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star-half text-warning"></i>
                                    <span class="ms-1">4.3</span>
                                </td>
                                <td><span class="badge bg-success">Verified</span></td>
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
                                            <i class="bx bx-injection fs-4 text-purple"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0 fs-14">Enzyme Replacement Therapeutics</h5>
                                            <p class="mb-0 text-muted fs-13">ID: #ERT2023</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Enzyme Replacement Therapies</td>
                                <td>
                                    <p class="mb-0">Dr. Michael Anderson</p>
                                    <p class="mb-0 text-muted fs-13">manderson@enzymetherapeutics.com</p>
                                </td>
                                <td>MPS I, MPS II, MPS VI Treatments</td>
                                <td>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-muted"></i>
                                    <span class="ms-1">4.0</span>
                                </td>
                                <td><span class="badge bg-success">Verified</span></td>
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
                                            <i class="bx bx-globe fs-4 text-info"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0 fs-14">Global Rare Pharmaceuticals</h5>
                                            <p class="mb-0 text-muted fs-13">ID: #GRP2023</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Global Orphan Drug Distributor</td>
                                <td>
                                    <p class="mb-0">Dr. Elizabeth Taylor</p>
                                    <p class="mb-0 text-muted fs-13">etaylor@globalrare.com</p>
                                </td>
                                <td>Multiple Rare Disease Medications</td>
                                <td>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star-half text-warning"></i>
                                    <i class="bx bxs-star text-muted"></i>
                                    <span class="ms-1">3.5</span>
                                </td>
                                <td><span class="badge bg-danger">Suspended</span></td>
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
                                            <i class="bx bx-atom fs-4 text-success"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0 fs-14">Advanced Genetic Solutions</h5>
                                            <p class="mb-0 text-muted fs-13">ID: #AGS2023</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Genetic Disorder Therapies</td>
                                <td>
                                    <p class="mb-0">Dr. Robert Zhang</p>
                                    <p class="mb-0 text-muted fs-13">rzhang@advancedgenetic.com</p>
                                </td>
                                <td>Various Genetic Disorder Treatments</td>
                                <td>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <span class="ms-1">4.9</span>
                                </td>
                                <td><span class="badge bg-warning">Under Review</span></td>
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

@section('script-bottom')
@vite(['resources/js/pages/app-ecommerce-seller.js'])
@endsection