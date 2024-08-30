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
                <a class="nav-link has-arrow " href="#!" data-bs-toggle="collapse" data-bs-target="#navUsers"
                    aria-expanded="false" aria-controls="navUsers">
                    <i data-feather="user" class="nav-icon me-2 icon-xxs"></i>
                    Pengguna
                </a>

                <div id="navUsers" class="collapse  show " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="dashboard-analytics.html">
                                Admin </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>

    </div>
</div>
