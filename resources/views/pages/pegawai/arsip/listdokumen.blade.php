@extends('layouts.pegawai')

@section('title', 'List Document')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Arsip Dokumen</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin-dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">Arsip Dokumen</li>
        <li class="breadcrumb-item active">List Arsip</li>
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
                <h5 class="card-title">List Arsip</h5>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Kode</th>
                      <th scope="col">Nomor Arsip</th>
                      <th scope="col">Nama Arsip</th>
                      <th scope="col">Klasifikasi</th>
                      <th scope="col">Download</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($items as $item)
                    <tr>
                      <th>{{ $item->id }}</th>
                      <td>{{ $item->kode_arsip }}</td>
                      <td>{{ $item->nomor_arsip }}</td>
                      <td>{{ $item->nama_arsip }}</td>
                      <td>{{ $item->classification->nama_klasifikasi }}</td>
                      <td>
                        <a href="{{route('downloadfile',$item->file_path)}}" class="btn btn-primary text-white rounded">Download</a>
                      </td>
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