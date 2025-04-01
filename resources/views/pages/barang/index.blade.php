@extends('layouts.app')

@section('title', 'Daftar Barang')

@section('content')
    <div class="page-container">


        <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
            <div class="flex-grow-1">
                <h4 class="fs-18 text-uppercase fw-bold mb-0">Products</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="/">Kembali</a></li>

                    <li class="breadcrumb-item active">Daftar Barang</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="d-flex flex-wrap justify-content-between gap-2">
                            <div class="position-relative">
                                <input type="text" class="form-control ps-4" placeholder="Search products">
                                <i class="ti ti-search position-absolute top-50 translate-middle-y ms-2"></i>
                            </div>

                            <div>
                                <a href="apps-ecommerce-products-add.html" class="btn btn-primary"><i
                                        class="ti ti-plus me-1"></i>Tambah Barang</a>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover text-nowrap mb-0">
                            <thead class="bg-dark-subtle">
                                <tr>
                                    <th class="ps-3" style="width: 50px;">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                    </th>
                                    <th>Product ID</th>
                                    <th>Name</th>
                                    <th>Description </th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th class="text-center" style="width: 120px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-3">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                    </td>
                                    <td>PRD001</td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-3">
                                            <div class="avatar-md">
                                                <img src="assets/images/products/p-1.png" alt="Product-1"
                                                    class="img-fluid rounded-2">
                                            </div>
                                            Men White Slim Fit T-shirt
                                        </div>
                                    </td>
                                    <td>100% cotton t-shirt in white</td>
                                    <td>$70.90</td>
                                    <td>890</td>
                                    <td>Fashion</td>
                                    <td>
                                        <span class="badge bg-success-subtle text-success fs-12 p-1">Active</span>
                                    </td>
                                    <td class="pe-3">
                                        <div class="hstack gap-1 justify-content-end">
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-primary btn-icon btn-sm rounded-circle"> <i
                                                    class="ti ti-eye"></i></a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-success btn-icon btn-sm rounded-circle"> <i
                                                    class="ti ti-edit fs-16"></i></a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-soft-danger btn-icon btn-sm rounded-circle"> <i
                                                    class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item disabled">
                                    <a href="#" class="page-link"><i class="ti ti-chevrons-left"></i></a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link"><i class="ti ti-chevrons-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end card-->
            </div><!-- end col -->
        </div><!-- end row -->

    </div>
@endsection
