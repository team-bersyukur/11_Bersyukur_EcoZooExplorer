<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard-admin">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('assets/img/nsparkel_logo.png') }}" alt="NSParkel" width="90" class="rounded-circle">
        </div>
        {{-- <div class="sidebar-brand-text mx-3">NS<sub>parkel</sub></div> --}}
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard-admin') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard-admin">
            <i class="fas fa-fw fa-th-large"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <div class="sidebar-heading mt-3">
        Admin
    </div>

    <li class="nav-item {{ Request::Is('master*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-database"></i>
            <span>Master Data</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/master/data-hewan">Data Hewan</a>
                <a class="collapse-item" href="/master/data-zona">Data Zona</a>
            </div>
        </div>
    </li>
    <li class="nav-item {{ Request::Is('seluruh-user') ? 'active' : '' }}">
        <a class="nav-link" href="/seluruh-user">
            <i class="fas fa-solid fa-users"></i>
            <span>Seluruh User</span>
        </a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
