<div class="container sticky">
  <nav class="row navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home')}}">
        <img src="frontend/images/logo@2x.png" alt="">
      </a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item mx-md-2 ">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}#home">Home</a>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="{{ route('home') }}#popular" >Paket Travel</a>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="{{ route('home') }}#contact">Komentar</a>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="{{ route('home') }}#testimonialContent">Testimonial</a>
          </li>
        </ul>

        @guest
        <!-- Mobile Button -->
        <form class="form-inline d-sm-block d-md-none">
          <button class="btn btn-login my-2 my-sm-0" type="button"
            onclick="event.preventDefault(); location.href='{{ url('login')}}';">
            Masuk
          </button>
        </form>

        <!-- Dekstop Button -->
        <form class="form-inline my-2 my-lg-0 d-none d-md-block">
          <button class="btn btn-login btn-navbar-right my-lg-2 my-md-0 ms-2" type="button"
            onclick="event.preventDefault(); location.href='{{ url('login')}}';">
            Masuk
          </button>
        </form>
        @endguest

        @auth
        <!-- Mobile Button -->
        <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
          @csrf
          <button class="btn btn-login my-2 my-sm-0" type="submit">
            Keluar
          </button>
        </form>

        <!-- Dekstop Button -->
        <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
          @csrf
          <button class="btn btn-login btn-navbar-right my-lg-2 my-md-0 ms-2" type="submit">
            Keluar
          </button>
        </form>
        @endauth

      </div>
    </div>
  </nav>
</div>