<div id="sidebar" class="active">
  <div class="sidebar-wrapper active">
    <div class="sidebar-header">
      <div class="d-flex justify-content-between">
        <div class="logo">
          <a href="{{ route('dashboard') }}">
            {{-- <img src="{{ url('frontend/images/logo.png') }}" alt="Logo" srcset=""> --}}
            <div class="app-logo d-flex align-items-center">
              <img src="{{ url('frontend/images/logo.png') }}" alt="Logo" srcset="">
              <div class="logo-text">
                <p class="top-text">Kitabisa</p>
                <p class="bot-text">CariAmbulance</p>
              </div>
            </div>
          </a>
        </div>
        <div class="toggler">
          <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
        </div>
      </div>
    </div>
    <div class="sidebar-menu">
      <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item {{ Request::is('/') ? 'active' : '' }}">
          <a href="{{ route('dashboard') }}" class='sidebar-link'>
            <i class="fad fa-objects-column"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <li class="sidebar-item {{ Request::is('riwayat-pesanan') ? 'active' : '' }}">
          <a href="{{ route('riwayat-pesanan') }}" class='sidebar-link'>
            <i class="fad fa-clock-rotate-left"></i>
            <span>Riwayat Pesanan</span>
          </a>
        </li>

        @if (auth()->user()->role === 'Super Admin')
          <li class="sidebar-item {{ Request::is('admin') ? 'active' : '' }}">
            <a href="{{ route('admin.index') }}" class='sidebar-link'>
              <i class="fad fa-user-lock"></i>
              <span>Admin</span>
            </a>
          </li>
        @endif

        <li class="sidebar-item {{ Request::is('rumah-sakit-tujuan') ? 'active' : '' }}">
          <a href="{{ route('rumah-sakit-tujuan.index') }}" class='sidebar-link'>
            <i class="fad fa-hospital"></i>
            <span>RS Tujuan</span>
          </a>
        </li>

        <li class="sidebar-item {{ Request::is('penyedia') ? 'active' : '' }}">
          <a href="{{ route('penyedia.index') }}" class='sidebar-link'>
            <i class="fad fa-buildings"></i>
            <span>Penyedia</span>
          </a>
        </li>

        <li class="sidebar-item {{ Request::is('driver') ? 'active' : '' }}">
          <a href="{{ route('driver.index') }}" class='sidebar-link'>
            <i class="fad fa-truck-medical"></i>
            <span>Driver</span>
          </a>
        </li>

        <li class="sidebar-item {{ Request::is('pengguna') ? 'active' : '' }}">
          <a href="{{ route('pengguna') }}" class='sidebar-link'>
            <i class="fad fa-users"></i>
            <span>Pengguna</span>
          </a>
        </li>

      </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
  </div>
</div>