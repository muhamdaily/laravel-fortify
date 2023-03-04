<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">{{ $site->title }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home') }}">
                <i class="fab fa-laravel text-success"></i>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="fas fa-th-large"></i><span>Beranda</span>
                </a>
            </li>

            @if (auth()->user()->role == 'superadmin' || auth()->user()->role == 'admin')
                <li class="menu-header">Menu Utama</li>
                <li class="nav-item {{ Request::is('pengguna*') ? 'active' : '' }}">
                    <a href="{{ route('pengguna.index') }}" class="nav-link">
                        <i class="fas fa-users"></i><span>Pengguna</span>
                    </a>
                </li>
            @endif

            @if (auth()->user()->role == 'superadmin')
                <li class="menu-header">Pengaturan Umum</li>
                <li
                    class="nav-item {{ Request::is('pengaturan*') || Request::is('mail*') || Request::is('umum*') ? 'active' : '' }}">
                    <a href="{{ route('pengaturan') }}" class="nav-link">
                        <i class="fas fa-cog"></i><span>Pengaturan Web</span>
                    </a>
                </li>
            @endif

        </ul>
    </aside>
</div>
