@extends('layouts.pegawai')

@section('title', 'List Loans')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Arsip Dokumen</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Home</a></li>
        <li class="breadcrumb-item">Arsip Dokumen</li>
        <li class="breadcrumb-item active">List Peminjaman</li>
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

          <!-- Recent Sales -->
              <div class="col-12">
                <div class="card recent-sales overflow-auto">

                  <div class="card-body">
                    <h5 class="card-title">List Peminjaman</h5>

                    <table class="table table-borderless datatable">
                      <thead>
                        <tr>
                          <th scope="col">Id Pinjam</th>
                          <th scope="col">Nama Peminjam</th>
                          <th scope="col">Nama Arsip</th>
                          <th scope="col">Tanggal Pinjam</th>
                          <th scope="col">Status</th>
                          <th scope="col">Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($items as $item)
                        <tr>
                          <th scope="row">{{ $item->id }}</th>
                          <td>{{ $item->user->name }}</td>
                          <td>{{ $item->archive->nama_arsip }}</td>
                          <td>{{ $item->tanggal_pinjam }}</td>
                          <td>{{ $item->status_pinjaman }}</td>
                          <td>
                            <a href="{{ route('admin-loan.show', $item->id) }}" class="btn btn-primary inti">
                              <i class="fa fa-eye"></i>Edit
                            </a>
                          </td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                    
                    </div>
                  </div>

                </div>
              </div><!-- End Recent Sales -->
            </div>
          </div><!-- End input klasifikasi -->

        </div>
  </div><!-- End Left side columns -->

  </section>

</main><!-- End #main -->

@endsection