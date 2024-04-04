<div class="sidebar">
    <!-- SidebarSearch Form -->
    <div class="form-inline mt-2">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link {{ ($activeMenu == 'home') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Home</p>
                </a>
            </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ url('/absence') }}" class="nav-link {{ ($activeMenu == 'absence') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-calendar"></i>
                    <p>Absence</p>
                </a>
            </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ url('/ofpi') }}" class="nav-link {{ ($activeMenu == 'ofpi') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-book"></i>
                    <p>OFPI</p>
                </a>
            </li>
        </ul>
    </nav>
</div>