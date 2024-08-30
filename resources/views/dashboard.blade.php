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
                        <div class="d-flex justify-content-between align-items-center mb-5">
                            <h3 class="mb-0 ">Dashboard</h3>
                        </div>
                    </div>
                </div>
                <div class="bg-primary rounded-3">
                    <div class="row mb-5 ">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="p-6 d-lg-flex justify-content-between align-items-center ">
                                <div class="d-md-flex align-items-center">
                                    <img src="https://i2.wp.com/vdostavka.ru/wp-content/uploads/2019/05/no-avatar.png?fit=512%2C512&ssl=1"
                                        alt="Image" class="rounded-circle avatar avatar-xl bg-light">
                                    <div class="ms-md-4 mt-3 mt-md-0 lh-1">
                                        <h3 class="text-white mb-0">{{ $greeting }}, {{ auth()->user()->name }}</h3>
                                        <small class="text-white"> Selamat datang di dashboard</small>
                                        </br>
                                        <small class="text-white"> Peran: {{ auth()->user()->getRoleNames()[0] }}</small>
                                    </div>
                                </div>
                                <div class="d-none d-lg-block">
                                    <a href="#!" class="btn btn-white">👋</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                        <!-- card -->
                        <div class="card h-100 card-lift">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h4 class="mb-0">Menu Produk</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                        <i data-feather="briefcase" height="20" width="20"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div class="lh-1">
                                    <h1 class=" mb-1 fw-bold">18</h1>
                                    <p class="mb-0"><span class="text-dark me-2">2</span>Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                        <!-- card -->
                        <div class="card h-100 card-lift">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center
                mb-3">
                                    <div>
                                        <h4 class="mb-0">User</h4>
                                    </div>
                                    <div
                                        class="icon-shape icon-md bg-primary-soft text-primary
                  rounded-2">
                                        <i data-feather="list" height="20" width="20"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div class="lh-1">
                                    <h1 class="  mb-1 fw-bold">{{ number_format($users->count(), 0, ',', '.') }}</h1>
                                    <p class="mb-0"><a href="#" class="text-primary me-2">Kelola Pengguna</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                        <!-- card -->
                        <div class="card h-100 card-lift">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center
                mb-3">
                                    <div>
                                        <h4 class="mb-0">Teams</h4>
                                    </div>
                                    <div
                                        class="icon-shape icon-md bg-primary-soft text-primary
                  rounded-2">
                                        <i data-feather="users" height="20" width="20"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div class="lh-1">
                                    <h1 class="  mb-1 fw-bold">12</h1>
                                    <p class="mb-0"><span class="text-dark me-2">1</span>Completed</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                        <!-- card -->
                        <div class="card h-100 card-lift">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center
                mb-3">
                                    <div>
                                        <h4 class="mb-0">Productivity</h4>
                                    </div>
                                    <div
                                        class="icon-shape icon-md bg-primary-soft text-primary
                  rounded-2">
                                        <i data-feather="target" height="20" width="20"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div class="lh-1">
                                    <h1 class="  mb-1 fw-bold">76%</h1>
                                    <p class="mb-0"><span class="text-success me-2">5%</span>Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
