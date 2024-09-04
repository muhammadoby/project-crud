<div class="row" wire:poll.1s>
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
                    <h1 class="  mb-1 fw-bold">{{ number_format($products->count(), 0, ',', '.') }}</h1>
                    <p class="mb-0"><a href="{{route('menu.index')}}" class="text-primary me-2">Kelola Menu</a></p>
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
                        <h4 class="mb-0">Varian</h4>
                    </div>
                    <div
                        class="icon-shape icon-md bg-primary-soft text-primary
  rounded-2">
                        <i data-feather="users" height="20" width="20"></i>
                    </div>
                </div>
                <!-- project number -->
                <div class="lh-1">
                    <h1 class="  mb-1 fw-bold">{{ number_format($variants->count(), 0, ',', '.') }}</h1>
                    <p class="mb-0"><a href="{{route('variant.index')}}" class="text-primary me-2">Kelola Varian</a></p>
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
                        <h4 class="mb-0">Additional</h4>
                    </div>
                    <div
                        class="icon-shape icon-md bg-primary-soft text-primary
  rounded-2">
                        <i data-feather="target" height="20" width="20"></i>
                    </div>
                </div>
                <!-- project number -->
                <div class="lh-1">
                    <h1 class="  mb-1 fw-bold">{{ number_format($additionals->count(), 0, ',', '.') }}</h1>
                    <p class="mb-0"><span class="text-success me-2">5%</span>Completed</p>
                </div>
            </div>
        </div>
    </div>
</div>