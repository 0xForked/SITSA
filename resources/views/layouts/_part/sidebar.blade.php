<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">{{ config('app.name', 'laravel') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">V{{ config('app.version', '1') }}</a>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="#" class="nav-link">
                    <i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-header">Data</li>
            <li>
                <a class="nav-link" href="blank.html">
                    <i class="far fa-square"></i>
                    <span>Blank Page</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-building"></i>
                    <span>Kedinasan</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="#">Kantor</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Bidang</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Jabatan</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Sites</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-users"></i>
                    <span>Pengguna</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="#">Pengguna</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Peran</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Izin</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="nav-link" href="blank.html">
                    <i class="fas fa-cogs"></i>
                    <span>Pengaturan</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
