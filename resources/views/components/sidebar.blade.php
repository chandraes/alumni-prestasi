<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Prestasi & Alumni</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">
                <img class="d-inline-block" width="32px" height="30.61px" src="{{asset('unsri.png')}}" alt="">
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::routeIs('dashboard') ? 'active' : '' }}">
                <a href="/dashboard" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
        </ul>
        <ul class="sidebar-menu">
            <li class="menu-header">Mahasiswa</li>
            <li class="dropdown {{ Request::routeIs('mahasiswa-prestasi') |
                                    Request::routeIs('list-mahasiswa-prestasi') |
                                    Request::routeIs('export-mahasiswa-prestasi') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-university"></i>
                    <span>Mahasiswa Prestasi</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::routeIs('mahasiswa-prestasi') ? 'active' : '' }}">
                        <a href="{{route('mahasiswa-prestasi')}}" class="nav-link">
                            <span>Input Data</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('list-mahasiswa-prestasi') ? 'active' : '' }}">
                        <a href="{{route('list-mahasiswa-prestasi')}}" class="nav-link">
                            <span>List Mahasiswa Prestasi</span>
                        </a>
                    </li>
                    @can('admin')
                    <li class="{{ Request::routeIs('export-mahasiswa-prestasi') ? 'active' : '' }}">
                        <a href="{{route('export-mahasiswa-prestasi')}}" class="nav-link">
                            <span>Export Data</span>
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>
        </ul>
        <ul class="sidebar-menu">
            <li class="menu-header" :active="request()->routeIs('alumni-data')">Alumni</li>
            <li class="{{ Request::routeIs('alumni-data') ? 'active' : '' }}">
                <a href="/alumni/data" class="nav-link"><i class="fas fa-graduation-cap"></i><span>Daftar Alumni</span></a>
            </li>
        </ul>

        @can("admin")
        <ul class="sidebar-menu">
            <li class="menu-header">Master Data</li>
            <li class="dropdown
                {{ Request::routeIs('jurusan-prodi') | Request::routeIs('kegiatan') | Request::routeIs('user-data') | Request::routeIs('tambah-user') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-database"></i>
                    <span>Data</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::routeIs('jurusan-prodi') ? 'active' : '' }}">
                        <a href="{{route('jurusan-prodi')}}" class="nav-link">
                            <span>Jurusan / Prodi</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('kegiatan') ? 'active' : '' }}">
                        <a href="{{route('kegiatan')}}" class="nav-link">
                            <span>Kegiatan</span>
                        </a>
                    </li>
                    <!-- <li class="{{ Request::routeIs('user') ? 'active' : '' }}">
                        <a href="{{route('user')}}" class="nav-link">
                            <span>Data User</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('user.new') ? 'active' : '' }}">
                        <a href="{{route('user.new')}}" class="nav-link">
                            <span>Buat User</span>
                        </a>
                    </li> -->
                    <li class="{{ Request::routeIs('user-data') ? 'active' : '' }}">
                        <a href="{{route('user-data')}}" class="nav-link">
                            <span>User Data</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('tambah-user') ? 'active' : '' }}">
                        <a href="{{route('tambah-user')}}" class="nav-link">
                            <span>Tambah User</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        @endcan
    </aside>
</div>
