@extends('layouts.pegawai')

@section('title', 'Edit Loan')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Arsip Dokumen</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Home</a></li>
        <li class="breadcrumb-item">Arsip Dokumen</li>
        <li class="breadcrumb-item ">Edit Peminjaman</li>
        <li class="breadcrumb-item active">{{ $item->user->name }}</li>
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
            <div class="card info-card sales-card">

          <!-- Recent Sales -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">

              <div class="card-body">
                <h5 class="card-title">Edit Peminjaman {{ $item->user->name }}</h5>
                <table class="table">
                  <tr>
                    <td>ID Pinjaman</td>
                    <td>{{ $item->id }}</td>
                  </tr>
                  <tr>
                    <td>ID User</td>
                    <td>{{ $item->user->id }}</td>
                  </tr>
                  <tr>
                    <td>Kode Arsip</td>
                    <td>{{ $item->kode_arsip }}</td>
                  </tr>
                  <tr>
                    <td>Nama Arsip</td>
                    <td>{{ $item->archive->nama_arsip }}</td>
                  </tr>
                  <tr>
                    <td>Tanggal Pinjam</td>
                    <td>{{ $item->tanggal_pinjam }}</td>
                  </tr>
                  <form action="{{ route('admin-loan.update', $item->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <tr>
                      <td>Tanggal Kembali</td>
                      <td><input type="date" class="form-control" name="tanggal_kembali" value="{{ $item->tanggal_kembali }}"></td>
                    </tr>
                    <tr>
                      <td>Status Pinjaman</td>
                      <td>                
                        <select name="status_pinjaman" class="form-select">
                          <option value="{{ $item->status_pinjaman }}">{{ $item->status_pinjaman }}</option>
                          <option value="dipinjam">dipinjam</option>
                          <option value="dikembalikan">dikembalikan</option>
                        </select>
                      </td>
                    </tr>
                </table>
                  <button type="submit" class="btn btn-primary">Simpan</button>
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