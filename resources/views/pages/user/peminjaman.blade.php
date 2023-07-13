@extends('layouts.user')

@section('title', 'List Loan')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>List Peminjaman Arsip</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item active">List Peminjaman</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">

      <div class="col-lg-12">
        <div class="row">

          <!-- input klasifikasi -->
          <div class="col-12">
            <div class="card info-card sales-card">

          <!-- Recent Sales -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">

              <div class="card-body">
                <h5 class="card-title">List Peminjaman Arsip | {{ Auth::user()->name }}</h5>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">Id Pinjam</th>
                      <th scope="col">Kode Arsip</th>
                      <th scope="col">Nama Arsip</th>
                      <th scope="col">Status Pinjaman</th>
                      <th scope="col">Tanggal Pinjam</th>
                      <th scope="col">Tanggal Kembali</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($items as $item)
                    <tr>
                      <th scope="row">{{ $item->id }}</th>
                      <td>{{ $item->kode_arsip }}</td>
                      <td>{{ $item->archive->nama_arsip }}</td>
                      <td id="status" class="badge-primary">{{ $item->status_pinjaman }}</td>
                      <td>{{ $item->tanggal_pinjam }}</td>
                      <td>{{ $item->tanggal_kembali }}</td>
                      </tr>
                    @endforeach
                    
                  </tbody>
                </table>

              </div>

            </div>
          </div><!-- End Recent Sales -->
        </div>
      </div><!-- End input klasifikasi -->

  </section>

</main><!-- End #main -->
@endsection