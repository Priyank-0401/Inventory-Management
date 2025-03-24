@extends('layouts.vertical', ['title' => 'Product List'])

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center gap-1">
                <h4 class="card-title flex-grow-1">All Product List</h4>

                <a href="{{ route('third', ['general', 'products', 'create'])}}" class="btn btn-sm btn-primary">
                    Add Product
                </a>

                <div class="dropdown">
                    <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false">
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
            <div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-hover table-centered">
                        <thead class="bg-light-subtle">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="form-check ms-1">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                        <label class="form-check-label" for="customCheck1"></label>
                                    </div>
                                </th>
                                <th>Medicine Name</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Disease Type</th>
                                <th>Rating</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check ms-1">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                            <img src="/images/product/p-1.png" alt="" class="avatar-md">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Tyrosinase Inhibitor (NTBC)</a>
                                            <!-- <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>S , M , L , Xl </p> -->
                                        </div>
                                    </div>

                                </td>
                                <td>Rs. 2,50,000</td>
                                <td>
                                    <p class="mb-1 text-muted"><span class="text-dark fw-medium">486 Item</span> Left</p>
                                    <p class="mb-0 text-muted">155 Sold</p>
                                </td>
                                <td> Tyrosinemia Type 1</td>
                                <td> <span class="badge p-1 bg-light text-dark fs-12 me-1"><i class="bx bxs-star align-text-top fs-14 text-warning me-1"></i> 4.5</span> 55 Review</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check ms-1">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                            <img src="/images/product/p-2.png" alt="" class="avatar-md">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Eliglustat (Cerdelga)</a>
                                            <!-- <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>S , M </p> -->
                                        </div>
                                    </div>

                                </td>
                                <td>Rs. 4,50,000</td>
                                <td>
                                    <p class="mb-1 text-muted"><span class="text-dark fw-medium">784 Item</span> Left</p>
                                    <p class="mb-0 text-muted">674 Sold</p>
                                </td>
                                <td> Gaucher's Disease</td>
                                <td> <span class="badge p-1 bg-light text-dark fs-12 me-1"><i class="bx bxs-star align-text-top fs-14 text-warning me-1"></i> 4.1</span> 143 Review</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check ms-1">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                            <img src="/images/product/p-3.png" alt="" class="avatar-md">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Trientine (Syprine)</a>
                                            <!-- <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>S , M </p> -->
                                        </div>
                                    </div>

                                </td>
                                <td>Rs. 2,20,000</td>
                                <td>
                                    <p class="mb-1 text-muted"><span class="text-dark fw-medium">769 Item</span> Left</p>
                                    <p class="mb-0 text-muted">180 Sold</p>
                                </td>
                                <td> Wilson’s Disease</td>
                                <td> <span class="badge p-1 bg-light text-dark fs-12 me-1"><i class="bx bxs-star align-text-top fs-14 text-warning me-1"></i> 4.4</span> 174 Review</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check ms-1">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                            <img src="/images/product/p-4.png" alt="" class="avatar-md">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Cannabidiol Oral Solution</a>
                                            <!-- <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>S , M , L</p> -->
                                        </div>
                                    </div>

                                </td>
                                <td>Rs. 1,50,000</td>
                                <td>
                                    <p class="mb-1 text-muted"><span class="text-dark fw-medium">571 Item</span> Left</p>
                                    <p class="mb-0 text-muted">87 Sold</p>
                                </td>
                                <td> Dravet and Lennox-Gastaut Syndromes</td>
                                <td> <span class="badge p-1 bg-light text-dark fs-12 me-1"><i class="bx bxs-star align-text-top fs-14 text-warning me-1"></i> 4.2</span> 23 Review</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="form-check ms-1">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                            <img src="/images/product/p-5.png" alt="" class="avatar-md">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Eculizumab (Soliris)</a>
                                            <!-- <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>S , M , L , Xl </p> -->
                                        </div>
                                    </div>

                                </td>
                                <td>Rs. 2,00,00,000</td>
                                <td>
                                    <p class="mb-1 text-muted"><span class="text-dark fw-medium">241 Item</span> Left</p>
                                    <p class="mb-0 text-muted">342 Sold</p>
                                </td>
                                <td> Paroxysmal Nocturnal Hemoglobinuria (PNH)</td>
                                <td> <span class="badge p-1 bg-light text-dark fs-12 me-1"><i class="bx bxs-star align-text-top fs-14 text-warning me-1"></i> 4.4</span> 109 Review</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="form-check ms-1">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                            <img src="/images/product/p-6.png" alt="" class="avatar-md">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Ravulizumab (Ultomiris)</a>
                                            <!-- <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>S , M </p> -->
                                        </div>
                                    </div>

                                </td>
                                <td>Rs. 2,31,00,000</td>
                                <td>
                                    <p class="mb-1 text-muted"><span class="text-dark fw-medium">821 Item</span> Left</p>
                                    <p class="mb-0 text-muted">231 Sold</p>
                                </td>
                                <td> Paroxysmal Nocturnal Hemoglobinuria (PNH)</td>
                                <td> <span class="badge p-1 bg-light text-dark fs-12 me-1"><i class="bx bxs-star align-text-top fs-14 text-warning me-1"></i> 4.2</span> 200 Review</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="form-check ms-1">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                            <img src="/images/product/p-7.png" alt="" class="avatar-md">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Alglucosidase Alfa (Myozyme/Lumizyme)</a>
                                            <!-- <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>18 , 19 , 20 , 21</p> -->
                                        </div>
                                    </div>

                                </td>
                                <td>Rs. 89,00,000</td>
                                <td>
                                    <p class="mb-1 text-muted"><span class="text-dark fw-medium">321 Item</span> Left</p>
                                    <p class="mb-0 text-muted">681 Sold</p>
                                </td>
                                <td> Pompe Disease</td>
                                <td> <span class="badge p-1 bg-light text-dark fs-12 me-1"><i class="bx bxs-star align-text-top fs-14 text-warning me-1"></i> 4.5</span> 321 Review</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check ms-1">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                            <img src="/images/product/p-8.png" alt="" class="avatar-md">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Laronidase (Aldurazyme)</a>
                                            <!-- <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>S , M</p> -->
                                        </div>
                                    </div>

                                </td>
                                <td>Rs. 1,32,00,000</td>
                                <td>
                                    <p class="mb-1 text-muted"><span class="text-dark fw-medium">190 Item</span> Left</p>
                                    <p class="mb-0 text-muted">212 Sold</p>
                                </td>
                                <td> Mucopolysaccharidosis I (MPS I)</td>
                                <td> <span class="badge p-1 bg-light text-dark fs-12 me-1"><i class="bx bxs-star align-text-top fs-14 text-warning me-1"></i> 4.1</span> 190 Review</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check ms-1">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                            <img src="/images/product/p-9.png" alt="" class="avatar-md">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Idursulfase (Elaprase)</a>
                                            <!-- <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>S , M </p> -->
                                        </div>
                                    </div>

                                </td>
                                <td>Rs. 77,00,000</td>
                                <td>
                                    <p class="mb-1 text-muted"><span class="text-dark fw-medium">784 Item</span> Left</p>
                                    <p class="mb-0 text-muted">443 Sold</p>
                                </td>
                                <td> Mucopolysaccharidosis II (MPS II)</td>
                                <td> <span class="badge p-1 bg-light text-dark fs-12 me-1"><i class="bx bxs-star align-text-top fs-14 text-warning me-1"></i> 3.5</span> 298 Review</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check ms-1">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                            <img src="/images/product/p-10.png" alt="" class="avatar-md">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Galsulfase (Naglazyme)</a>
                                            <!-- <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>S </p> -->
                                        </div>
                                    </div>

                                </td>
                                <td>Rs. 1,10,00,000</td>
                                <td>
                                    <p class="mb-1 text-muted"><span class="text-dark fw-medium">650 Item</span> Left</p>
                                    <p class="mb-0 text-muted">365 Sold</p>
                                </td>
                                <td> Maroteaux-Lamy Syndrome (MPS VI)</td>
                                <td> <span class="badge p-1 bg-light text-dark fs-12 me-1"><i class="bx bxs-star align-text-top fs-14 text-warning me-1"></i> 4.1</span> 156 Review</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
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