<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li>
                <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown dropdown-list-toggle">
            <a class="nav-link nav-link-md" style="margin-top: 4px">
                <div id="MyClockDisplay" class="clock text-light" onload="showTime()"></div>
            </a>
        </li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ asset('assets/avatar/' . auth()->user()->image) }}"
                    class="rounded-circle profile-widget-picture" style="aspect-ratio: 1/1;">
                <div class="d-sm-none d-lg-inline-block">{{ auth()->user()->name }}</div>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Pengaturan Akun</div>
                <a href="{{ route('akun') }}" class="dropdown-item has-icon">
                    <i class="fas fa-user-circle"></i> Profil Saya
                </a>
                <a href="{{ route('pengaturan.akun') }}" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Pengaturan
                </a>
                <div class="dropdown-divider"></div>


                <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Keluar
                </a>

                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
