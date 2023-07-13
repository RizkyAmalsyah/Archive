@extends('layouts.pegawai')

@section('title', 'Account User')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Akun User</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Akun User</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">

    
    <!-- input klasifikasi -->
    <div class="col-12">

      @if (session('status'))
        <div class="alert alert-primary mb-3">
            {{ session('status') }}
        </div>
      @endif

      <div class="card info-card sales-card">

        <div class="card-body">
          <h5 class="card-title">Buat Akun </h5>

          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>  
          @endif
    
          <form method="POST" action="{{ route('admin-akun.store') }}">
            @csrf
            <div class="row">
              <div class="col-lg-6 mb-3">
                  <label>NIP</label>
                  <input type="text" 
                    name="nip" 
                    class="form-control @error('nip') is-invalid @enderror"
                    value="{{ old('nip') }}"                  
                  />
              </div>
              <div class="col-lg-6 mb-3">
                  <label>Nama Lengkap</label>
                  <input type="text" 
                    name="name" 
                    class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name') }}"  
                  />
              </div>
              <div class="col-lg-12 mb-3">
                <label>Unit Kerja</label>
                <select name="unit" class="form-select">
                  <option selected value="Unit Kerja Kepegawaian">Unit Kerja Kepegawaian</option>
                  <option value="Unit Kerja Pengarsipan">Unit Kerja Pengarsipan</option>
                  <option value="Unit Kerja Keuangan">Unit Kerja Keuangan</option>
                  <option value="Unit Kerja Akademik">Unit Kerja Akademik</option>
                </select>
              </div>
              <div class="col-lg-6 mb-3">
                <p>
                  <label>Email</label>
                  <input type="text"  
                    class="form-control @error('email') is-invalid @enderror" 
                    name="email"
                    value="{{ old('email') }}"  
                  />
                </p>
              </div>
              <div class="col-lg-6 mb-3">
                <p>
                  <label>Password</label>
                  <input type="text"  class="form-control" name="password"/>
                </p>
              </div>
              <div class="col-lg-12 d-grid">
                <button  id="notificationButton" class="btn btn-primary inti" type="submit">Buat Akun</button>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div><!-- End input klasifikasi -->


    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- input klasifikasi -->
          <div class="col-12">
            <div class="card info-card sales-card">

          <!-- Recent Sales -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">

              <div class="card-body">
                <h5 class="card-title">Akun User</h5>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">NIP</th>
                      <th scope="col">Nama User</th>
                      <th scope="col">Email</th>
                      <th scope="col">Unit Kerja</th>
                      <th scope="col">Role Akun</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($items as $item)
                      <tr>
                        <th scope="row">{{ $item->nip }}</></th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</></td>
                        <td>{{ $item->unit }}</td>
                        <td>{{ $item->role }}</button></td>
                      </tr>
                    @endforeach
                    
                  </tbody>
                </table>

              </div>

            </div>
          </div><!-- End Recent Sales -->
            </div>
          </div><!-- End input klasifikasi -->

        </div>
      </div><!-- End Left side columns -->


    </div>
  </section>

</main><!-- End #main -->

@endsection