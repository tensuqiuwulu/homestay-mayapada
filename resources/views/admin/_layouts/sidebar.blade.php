<div class="sidebar-wrapper" data-simplebar="true">
  <div class="sidebar-header">
    <div>
      <h4 class="logo-text">Rocker</h4>
    </div>
    <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
    </div>
  </div>
  <!--navigation-->
  <ul class="metismenu" id="menu">
    <li class="{{ Request::routeIs(['admin.images']) ? 'mm-active' : '' }}">
      <a href="{{ route('admin.images') }}">
        <div class="parent-icon"><i class="bx bx-images"></i>
        </div>
        <div class="menu-title">Gambar Homestay</div>
      </a>
    </li>
    <li class="{{ Request::routeIs(['admin.room']) ? 'mm-active' : '' }}">
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
  </ul>
  <!--end navigation-->
</div>