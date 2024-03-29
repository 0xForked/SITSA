<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">{{ app_settings()['site_title']->value }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <img src="{{ asset('assets/img/sites/' . app_settings()['site_logo']->value) }}" alt="logo" width="30">
        </div>
        <ul class="sidebar-menu">
            <li class="{{ (Request::segment(2) == 'home') ? 'active' : '' }}">
                <a href="{{route('route-verify')}}" class="nav-link">
                    <i class="fas fa-fire"></i>
                    <span>Beranda</span>
                </a>
            </li>
            <li class="menu-header">FITUR</li>
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
            <li class="menu-header">Fungsionalitas</li>
            <li class="{{ (Request::segment(2) == 'verification') ? 'active' : '' }}">
                <a class="nav-link beep beep-sidebar" href="">
                    <i class="fas fa-check-square"></i>
                    <span>Verifikasi</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-print"></i>
                    <span>Pelaporan</span>
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
                    <li >
                        <a class="nav-link" href="#">Etnis</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">DATA</li>
            <li class="nav-item dropdown {{ (Request::segment(2) == 'profile') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-id-card"></i>
                    <span>Profil</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Route::is('admin.profile.congregations.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.profile.congregations.index') }}">Jemaat</a>
                    </li>
                    <li class="{{ Route::is('admin.profile.assets.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.profile.assets.index') }}">Aset</a>
                    </li>
                    <li class="{{ Route::is('admin.profile.commissions.bipra.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.profile.commissions.bipra.index') }}">Komisi BIPRA</a>
                    </li>
                    <li class="{{ Route::is('admin.profile.commissions.work.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.profile.commissions.work.index') }}">Komisi Kerja</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{
                (
                    Route::is('admin.users.*')
                    || Route::is('admin.roles.*')
                    || Route::is('admin.permissions.*')
                ) ? 'active' : ''
            }}
            ">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-users"></i>
                    <span>Pengguna</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Route::is('admin.users.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.users.index') }}">Pengguna</a>
                    </li>
                    <li class="{{ Route::is('admin.roles.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.roles.index') }}">Peran</a>
                    </li>
                    <li class="{{ Route::is('admin.permissions.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.permissions.index') }}">Izin</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ (Request::segment(2) == 'general') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-layer-group"></i>
                    <span>Umum</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Route::is('admin.general.assets.conditions.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.general.assets.conditions.index') }}" class="menu-item">Kondisi Aset</a>
                    </li>
                    <li class="{{ Route::is('admin.general.assets.managers.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.general.assets.managers.index') }}" class="menu-item">Pengelola Aset</a>
                    </li>
                    <li class="{{ Route::is('admin.general.assets.obtains.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.general.assets.obtains.index') }}" class="menu-item">Cara dapat Aset</a>
                    </li>
                    <li class="{{ Route::is('admin.general.assets.types.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.general.assets.types.index') }}" class="nav-link">Jenis Aset</a>
                    </li>
                    <li class="{{ Route::is('admin.general.ethnics.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.general.ethnics.index') }}">Jenis Etnis</a>
                    </li>
                    <li class="{{ Route::is('admin.general.bloods.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.general.bloods.index') }}">Jenis Darah</a>
                    </li>
                    <li class="{{ Route::is('admin.general.disabilities.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.general.disabilities.index') }}">Jenis Disabilitas</a>
                    </li>
                    <li class="{{ Route::is('admin.general.trainings.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.general.trainings.index') }}">Jenis Pelatihan</a>
                    </li>
                    <li class="{{ Route::is('admin.general.jobs.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.general.jobs.index') }}">Jenis Pekerjaan</a>
                    </li>
                    <li class="{{ Route::is('admin.general.educations.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.general.educations.index') }}">Jenis Pendidikan</a>
                    </li>
                    <li class="{{ Route::is('admin.general.member-moves.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.general.member-moves.index') }}" class="nav-link">Jenis Pindah Anggota</a>
                    </li>
                    <li class="{{ Route::is('admin.general.family-trees.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.general.family-trees.index') }}" class="nav-link">Pohon Keluarga Anggota</a>
                    </li>
                    <li class="{{ Route::is('admin.general.maritals.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.general.maritals.index') }}">Status Menikah</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ (Request::segment(2) == 'region') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-map"></i>
                    <span>Wilayah</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Route::is('admin.region.districts.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.region.districts.index') }}" class="menu-item">Kabupaten/Kota</a>
                    </li>
                    <li class="{{ Route::is('admin.region.subdistricts.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.region.subdistricts.index') }}" class="menu-item">Kecamatan</a>
                    </li>
                    <li class="{{ Route::is('admin.region.urbanvillages.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.region.urbanvillages.index') }}" class="menu-item">Kelurahan/Desa</a>
                    </li>
                    <li class="{{ Route::is('admin.region.topographies.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.region.topographies.index') }}" class="menu-item">Topografi</a>
                    </li>
                    <li class="{{ Route::is('admin.region.regions.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.region.regions.index') }}" class="menu-item">Wilayah</a>
                    </li>
                    <li class="{{ Route::is('admin.region.positions.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.region.positions.index') }}" class="menu-item">Kedudukan</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">SITUS</li>
            <li class="{{ (Request::segment(2) == 'settings') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.app.setting') }}">
                    <i class="fas fa-cogs"></i>
                    <span>Pengaturan</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
