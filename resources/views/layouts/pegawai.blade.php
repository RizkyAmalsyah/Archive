<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title') - ArsipFasilkom</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('includes.pegawai.style')

</head>

<body>

  @include('includes.pegawai.header')

  @include('includes.pegawai.sidebar')

  @yield('content')

  @include('includes.pegawai.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('includes.pegawai.script')

</body>

</html>