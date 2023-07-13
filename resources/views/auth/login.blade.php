<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  
  <link href="{{ url('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('backend/assets/css/style.css') }}" rel="stylesheet">


</head>
<body class="">
<main class="login-container">
    <img class="mx-auto d-block mb-3 mt-5 rounded-circle border border-5" src="{{ url('backend/assets/img/logos.png') }}" alt="" width="150px">
  <div class="container">
    <div class="row page-login align-items-center justify-content-center">
      <div class="section-right col-12 col-md-4">
        <div class="card justify-content-center">
          <div class="card-body p-3">
            <div class="text-center">
              <img src="{{ url('frontend/images/logo@2x.png') }}" alt="" class="w-50 mb-4">
            </div>
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="mb-4">
                <label for="exampleInputEmail1" class="">Email address</label>
                <input 
                  type="email" 
                  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                  id="exampleInputEmail1" 
                  aria-describedby="emailHelp"
                  autocomplete="email" autofocus>
                @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="">Password</label>
                <input 
                  type="password" 
                  class="form-control @error('password') is-invalid @enderror"
                  name="password"
                  id="exampleInputPassword1"
                  autocomplete="current-password">
                @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="mb-4 form-check">
                <input 
                  type="checkbox" 
                  class="form-check-input" 
                  id="remember"
                  name="remember"
                  {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">Remember me</label>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn inti btn-primary mb-3">Sign In</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
</body>
</html>