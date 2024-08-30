@extends('layouts.app')
@push('styles')
    <!-- Libs CSS -->
    <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <link href="{{ asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <!-- Libs JS -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/dist/feather.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('assets/libs/%40popperjs/core/dist/umd/popper.min.js') }}"></script>
    <!-- tippy js -->
    <script src="{{ asset('assets/libs/tippy.js/dist/tippy-bundle.umd.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/tooltip.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/datatable.js') }}"></script>
@endpush

@section('content')
    <div id="app-content">
        <!-- Container fluid -->
        <div class="app-content-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page header -->
                        <div class="mb-5">
                            <h3 class="mb-0">Menu</h3>
                        </div>
                    </div>
                </div>
                <div>
                    <!-- row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header d-md-flex border-bottom-0">
                                    <div class="flex-grow-1">
                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#addMenu"
                                            class="btn btn-primary">+ Tambah Menu</a>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="addMenu" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table id="example" class="table text-nowrap table-centered mt-0"
                                            style="width: 100%">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="pe-0">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="checkAll">
                                                            <label class="form-check-label" for="checkAll">
                                                            </label>
                                                        </div>
                                                    </th>
                                                    <th class="ps-1">Name</th>
                                                    <th>Category</th>
                                                    <th>Added Date</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="pe-0">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="contactCheckbox2">
                                                            <label class="form-check-label" for="contactCheckbox2">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="ps-0">
                                                        <div class="d-flex align-items-center">
                                                            <img src="../assets/images/ecommerce/product-1.jpg"
                                                                alt="" class="img-4by3-sm rounded-3">
                                                            <div class="ms-3">
                                                                <h5 class="mb-0">
                                                                    <a href="#!" class="text-inherit">Women Shoes</a>
                                                                </h5>
                                                                <span class="text-warning">
                                                                    <i class="mdi mdi-star"> </i>
                                                                    <i class="mdi mdi-star ms-n1"> </i>
                                                                    <i class="mdi mdi-star ms-n1"> </i>
                                                                    <i class="mdi mdi-star ms-n1"> </i>
                                                                    <i class="mdi mdi-star ms-n1"> </i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Accessories</td>
                                                    <td>19 July, 2023</td>
                                                    <td>$65.29</td>
                                                    <td>235</td>
                                                    <td>
                                                        <span class="badge badge-success-soft">Active</span>
                                                    </td>
                                                    <td>
                                                        <a href="#!"
                                                            class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                                            data-template="eyeOne">
                                                            <i data-feather="eye" class="icon-xs"></i>
                                                            <div id="eyeOne" class="d-none">
                                                                <span>View</span>
                                                            </div>
                                                        </a>
                                                        <a href="#!"
                                                            class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                                            data-template="editOne">
                                                            <i data-feather="edit" class="icon-xs"></i>
                                                            <div id="editOne" class="d-none">
                                                                <span>Edit</span>
                                                            </div>
                                                        </a>
                                                        <a href="#!"
                                                            class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                                            data-template="trashOne">
                                                            <i data-feather="trash-2" class="icon-xs"></i>
                                                            <div id="trashOne" class="d-none">
                                                                <span>Delete</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
