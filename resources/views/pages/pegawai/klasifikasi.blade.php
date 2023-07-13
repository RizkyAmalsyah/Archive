@extends('layouts.pegawai')

@section('title', 'Classification')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Klasifikasi</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Klasifikasi</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- input klasifikasi -->
          <div class="col-12">

            @if (session('status'))
                <div class="alert alert-primary mb-3">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Buat Klasifikasi </h5>

                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif

                <form method="post" action="{{ route('admin-classification.store') }}" class="mt-6 space-y-6">
                  @csrf
                  <div class="row">
                    <div class="col-lg-6 mb-3">
                      <label for="kode_klasifikasi">Kode Klasifikasi</label>
                      <input type="text" 
                        class="form-control @error('kode_klasifikasi') is-invalid @enderror" 
                        name="kode_klasifikasi"
                        value="{{ old('kode_klasifikasi') }}"  />
                    </div>
                    <div class="col-lg-6">
                      <label for="nama_klasifikasi">Nama Klasifikasi</label>
                      <input type="text" 
                        class="form-control @error('nama_klasifikasi') is-invalid @enderror" 
                        name="nama_klasifikasi"
                        value="{{ old('nama_klasifikasi') }}"  />
                    </div>
                    <div class="d-grid mt-3 col-3 mx-auto">
                      <button class="btn btn-primary ps-4 pe-4 inti">Create</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div><!-- End input klasifikasi -->

          <!-- list klasifikasi -->
          <div class="col-12">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">List Klasifikasi </h5>

                <div class="row row-cols-1 row-cols-md-2 g-3 justify-content-center">

                  @forelse($items as $item)
                  <div class="col">
                    <div class="card rounded inti-s text-center p-4">
                        <h4 class="inti-p fw-bold mt-2">{{ $item->kode_klasifikasi }}</h4>
                        <h2 class="inti-p fw-bold">{{ $item->nama_klasifikasi }}</h2>
                        <h4 class="inti-p fw-bold mt-2">Total Dokumen <span class="text-white badge inti">{{ $archive }}</span></h4>
                    </div>
                  </div>
                  @empty
                  <div class="col">
                    <div class="card rounded inti-s text-center p-4">
                        <h2 class="inti-p fw-bold mt-2">Data Kosong</h2>
                    </div>
                  </div>
                  @endforelse

                </div>
              </div>
            </div>
          </div><!-- End list klasifikasi -->

        </div>
      </div><!-- End Left side columns -->


    </div>
  </section>

</main><!-- End #main -->
@endsection