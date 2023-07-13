  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <div class="header-sidebar">
      <h5 class="text-center fw-bold">{{ Auth::user()->role }}</h5>
      <h5 class="text-center">{{ Auth::user()->unit }}</h5>
      <hr>
    </div>

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ (request()->is('user')) ? '' : 'collapsed' }}" href="{{ route('dashboard') }}">
          <i class="bi bi-speedometer2"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ (request()->is('user/archive')) ? '' : 'collapsed' }}" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-archive"></i></i><span>Arsip Dokumen</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('archive.index') }}" class="{{ (request()->is('user/listdokumen')) ? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>List Dokumen</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link {{ (request()->is('user/loan')) ? '' : 'collapsed' }}" href="{{ route('loan.index') }}">
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