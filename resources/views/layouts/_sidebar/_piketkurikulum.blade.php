<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item {{ (request()->routeIs('piketkurikulum.index')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('piketkurikulum.index') }}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item {{ (request()->routeIs('piketkurikulum.absensi')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('piketkurikulum.absensi') }}">
                <i class="material-icons">check</i>
                <p>Absensi</p>
            </a>
        </li>
        <li class="nav-item {{ (request()->routeIs('piketkurikulum.laporan')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('piketkurikulum.laporan') }}">
                <i class="material-icons">book</i>
                <p>Laporan</p>
            </a>
        </li>
        <li class="nav-item {{ (request()->routeIs('piketkurikulum.daftar-guru')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('piketkurikulum.daftar-guru') }}">
                <i class="material-icons">person</i>
                <p>Daftar Guru</p>
            </a>
        </li>
        <li class="nav-item {{ (request()->routeIs('piketkurikulum.daftar-siswa')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('piketkurikulum.daftar-siswa') }}">
                <i class="material-icons">people</i>
                <p>Daftar Siswa</p>
            </a>
        </li>
    </ul>
</div>