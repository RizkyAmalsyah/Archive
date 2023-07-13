@extends('layouts.user')

@section('title', 'Request Document')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Arsip Dokumen</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item">Arsip Dokumen</li>
        <li class="breadcrumb-item active ">Request Peminjaman</li>
        {{-- <li class="breadcrumb-item active">{{ $item->nama_arsip }}</li> --}}
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Recent Sales -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">

              <div class="card-body">
                <h5 class="card-title">Request Peminjaman Arsip | {{ $item->nama_arsip }}</h5>
                <table class="table">
                  <tr>
                    <td>NIP</td>
                    <td>{{ Auth::user()->nip }}</td>
                  </tr>
                  <tr>
                    <td>Nama User</td>
                    <td>{{ Auth::user()->name }}</td>
                  </tr>
                  <tr>
                    <td>Nama Arsip</td>
                    <td>{{ $item->nama_arsip }}</td>
                  </tr>
                </table>
                  <form action="{{ route('archive.store') }}" method="post">
                    @csrf
                      <input type="text" 
                      class="form-control d-none @error('kode_arsip') is-invalid @enderror" 
                      name="kode_arsip" 
                      value="{{ $item->kode_arsip }}">
                      <label>Tanggal Pinjam</label>
                        <input type="date" class="form-control @error('tanggal_pinjam') is-invalid @enderror" name="tanggal_pinjam" value="">
                    <button type="submit" class="btn btn-primary mt-3">Request</button>
                  </form>
              </div>

            </div>
          </div>
        </div><!-- End input klasifikasi -->

      </div>
    </div><!-- End Left side columns -->

  </section>

</main><!-- End #main -->

@endsection