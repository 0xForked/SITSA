<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">{{ config('app.name', 'laravel') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">V{{ config('app.version', '1') }}</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ (Request::segment(2) == 'home') ? 'active' : '' }}">
                <a href="{{route('route-verify')}}" class="nav-link">
                    <i class="fas fa-fire"></i>
                    <span>Beranda</span>
                </a>
            </li>
            <li class="menu-header">Data</li>
            <li>
                <a class="nav-link" href="blank.html">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Sensus</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="blank.html">
                    <i class="fas fa-suitcase-rolling"></i>
                    <span>Pindah</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="blank.html">
                    <i class="fas fa-user-alt-slash"></i>
                    <span>Meniggal</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="blank.html">
                    <i class="fas fa-sort-amount-up"></i>
                    <span>Pelatihan</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-church"></i>
                    <span>Jemaat</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="">Tentang Jemaat</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">Aset</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">Komisi BIPRA</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">Komisi Kerja</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Pelaporan</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-print"></i>
                    <span>Rekap</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="#">Kolom</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">HUT Pribadi</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">HUT Pernikahan</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Meninggal Dunia</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Pindah Keluar</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Pendidikan Terakhir</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Pekerjaan</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Keahlian</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Penyakit</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Cacat</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Golongan Darah</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Etnis</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Situs</li>
            <li class="nav-item dropdown {{ (Request::segment(2) == 'users') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-users"></i>
                    <span>Pengguna</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ (Request::segment(2) == 'users' && Request::segment(3) == '') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.users') }}">Pengguna</a>
                    </li>
                    <li class="{{ (Request::segment(3) == 'roles') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.users.roles') }}">Peran</a>
                    </li>
                    <li class="{{ (Request::segment(3) == 'permissions') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.users.permissions') }}">Izin</a>
                    </li>
                </ul>
            </li>
            <li class="{{ (Request::segment(2) == 'settings') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.app.setting') }}">
                    <i class="fas fa-cogs"></i>
                    <span>Pengaturan</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
