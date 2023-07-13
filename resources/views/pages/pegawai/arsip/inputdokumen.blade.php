@extends('layouts.pegawai')

@section('title', 'Input Document')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Arsip Dokumen</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Home</a></li>
        <li class="breadcrumb-item">Arsip Dokumen</li>
        <li class="breadcrumb-item active">Input Dokumen</li>
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
                <h5 class="card-title">Input Dokumen </h5>

                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

                  <form class="row g-3" action="{{ route('admin-archive.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="col-md-3">
                    <label for="">Kode Arsip</label>
                    <input type="text" 
                      name="kode_arsip" 
                      class="form-control @error('kode_arsip') is-invalid @enderror"
                      value="{{ old('kode_arsip') }}"  >
                  </div>
                  <div class="col-md-3">
                    Nomor Arsip
                    <input type="text" 
                      name="nomor_arsip" 
                      class="form-control @error('nomor_arsip') is-invalid @enderror"
                      value="{{ old('nomor_arsip') }}"  >
                  </div>
                  <div class="col-md-6">
                    <label for="">Klasifikasi</label>
                    <select id="inputState" name="kode_klasifikasi" class="form-select">
                      <option value="">Pilih Klasifikasi Arsip</option>
                      @foreach ($classifications as $classification)
                        <option value="{{ $classification->kode_klasifikasi }}">
                          {{ $classification->nama_klasifikasi }}
                        </option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-12 mt-4">
                    <label for="">Nama Arsip</label>
                    <input type="text" 
                      name="nama_arsip" 
                      class="form-control @error('nama_arsip') is-invalid @enderror"
                      value="{{ old('nama_arsip') }}"   >
                  </div>
                  <div>
                    <label for="">Upload File</label>
                    <input type="file" 
                    name="file_arsip" 
                    class="form-control @error('file_arsip') is-invalid @enderror" 
                    id="inputGroupFile04" 
                    value="{{ old('file_arsip') }}"  
                    aria-describedby="inputGroupFileAddon04" 
                    aria-label="Upload">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary inti p-3 ps-5 pe-5">Submit</button>
                  </div>
                </form><!-- End No Labels Form -->
              </div>
            </div>
          </div><!-- End input klasifikasi -->

        </div>
      </div><!-- End Left side columns -->


    </div>
  </section>

</main><!-- End #main -->
@endsection