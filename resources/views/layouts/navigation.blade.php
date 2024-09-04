<div class="navbar-vertical navbar nav-dashboard">
    <div class="h-100" data-simplebar>
        <!-- Brand logo -->
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <h2>Steak House</h2>
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">

            <li class="nav-item">
                <div class="navbar-heading">Master Data</div>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <i data-feather="home" class="nav-icon me-2 icon-xxs"></i>
                    Dashboard
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#!">
                    <i data-feather="user" class="nav-icon me-2 icon-xxs"></i>
                    Pengguna
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link {{ Route::is('menu.index') ? 'active' : '' }}" href="{{ route('menu.index') }}">
                    <i data-feather="menu" class="nav-icon me-2 icon-xxs"></i>
                    Menu
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('additional.index') ? 'active' : '' }}" href="{{ route('additional.index') }}">
                    <i data-feather="menu" class="nav-icon me-2 icon-xxs"></i>
                    Additional
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('variant.index') ? 'active' : '' }}" href="{{ route('variant.index') }}">
                    <i data-feather="menu" class="nav-icon me-2 icon-xxs"></i>
                    Varian
                </a>
            </li>
        </ul>

    </div>
</div>
