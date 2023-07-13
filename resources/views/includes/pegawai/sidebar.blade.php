  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <div class="header-sidebar">
      <h5 class="text-center fw-bold">{{ Auth::user()->role }}</h5>
      <h5 class="text-center">{{ Auth::user()->unit }}</h5>
      <hr>
    </div>

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ (request()->is('admin')) ? '' : 'collapsed' }}" href="{{ route('admin-dashboard') }}">
          <i class="bi bi-speedometer2"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ (request()->is('admin/admin-classification')) ? '' : 'collapsed' }}" href="{{ route('admin-classification.index') }}">
          <i class="bi bi-grid"></i><span>Klasifikasi</span>
        </a>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link {{ (request()->is('admin/archive/*')) ? '' : 'collapsed' }}" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-archive"></i></i><span>Arsip Dokumen</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('admin-archive.index') }}" class="{{ (request()->is('admin/archive/admin-archive')) ? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Input Dokumen</span>
            </a>
          </li>
          <li>
            <a href="{{ route('admin-listdokumen.index') }}" class="{{ (request()->is('admin/archive/admin-listdokumen')) ? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>List Dokumen</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link {{ (request()->is('admin/admin-akun')) ? '' : 'collapsed' }}" href="{{ route('admin-akun.index') }}">
          <i class="bi bi-person-lines-fill"></i></i></i><span>Akun User</span>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link {{ (request()->is('admin/admin-loan')) ? '' : 'collapsed' }}" href="{{ route('admin-loan.index') }}">
          <i class="bi bi-card-list"></i></i><span>Peminjaman</span>
        </a>
      </li><!-- End Tables Nav -->

      <hr>

      <li class="nav-item">
        <form class="" action="{{ url('logout') }}" method="POST">
          @csrf
          <div class="text-center d-grid">
            <button class="btn btn-light collapsed" href="#">
              <i class="bi bi-box-arrow-left"></i>
              <span>Logout</span>
            </button>
          </div>
        </form>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->