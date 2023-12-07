@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
@endpush

<header>
  <div class="topbar d-flex align-items-center">
    <nav class="navbar navbar-expand gap-3">
      <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
      </div>

      <div class="top-menu ms-auto">
        <ul class="navbar-nav align-items-center gap-1">
        </ul>
      </div>
      <div class="user-box dropdown px-3">
        <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <div class="user-info">
            <p class="user-name mb-0">Admin</p>
            Admin
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li>
            <form action="{{ route('logout') }}" method="POST" style="display: none;" id="logout-form">
              @csrf
            </form>
            <a class="dropdown-item d-flex align-items-center" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="bx bx-log-out-circle"></i><span>Logout</span>
            </a>
          </li>
        </ul>

      </div>
    </nav>
  </div>
</header>


@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('assets/plugins/select2/js/select2-custom.js') }}"></script>

@endpush