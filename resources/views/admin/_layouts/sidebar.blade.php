<div class="sidebar-wrapper" data-simplebar="true">
  <div class="sidebar-header">
    <div>
      <h4 class="logo-text">Admin</h4>
    </div>
    <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
    </div>
  </div>
  <ul class="metismenu" id="menu">
    <li class="{{ Request::routeIs(['admin.dashboard']) ? 'mm-active' : '' }}">
      <a href="{{ route('admin.dashboard') }}">
        <div class="parent-icon"><i class="bx bx-home"></i>
        </div>
        <div class="menu-title">Dashboard</div>
      </a>
    </li>
    <li class="{{ Request::routeIs(['admin.images']) ? 'mm-active' : '' }}">
      <a href="{{ route('admin.images') }}">
        <div class="parent-icon"><i class="bx bx-images"></i>
        </div>
        <div class="menu-title">Gambar Homestay</div>
      </a>
    </li>
    <li class="{{ Request::routeIs('admin.room') ? 'mm-active' : '' }}">
      <a href="{{ route('admin.room') }}">
        <div class="parent-icon"><i class="bx bx-home-smile"></i>
        </div>
        <div class="menu-title">Manage Rooms</div>
      </a>
    </li>
    <li class="{{ Request::routeIs(['admin.booking']) ? 'mm-active' : '' }}">
      <a href="{{ route('admin.booking') }}">
        <div class="parent-icon"><i class="bx bx-shopping-bag"></i>
        </div>
        <div class="menu-title">Manage Booking</div>
      </a>
    </li>
    <li class="{{ Request::routeIs(['admin.contact']) ? 'mm-active' : '' }}">
      <a href="{{ route('admin.contact') }}">
        <div class="parent-icon"><i class="bx bx-phone"></i>
        </div>
        <div class="menu-title">Manage Contact</div>
      </a>
    </li>
    <li class="{{ Request::routeIs(['admin.customer']) ? 'mm-active' : '' }}">
      <a href="{{ route('admin.customer') }}">
        <div class="parent-icon"><i class="bx bx-user"></i>
        </div>
        <div class="menu-title">Customers</div>
      </a>
    </li>
  </ul>
</div>