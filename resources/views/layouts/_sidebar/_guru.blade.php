    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ (request()->routeIs('guru.index')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('guru') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
        </ul>
    </div>