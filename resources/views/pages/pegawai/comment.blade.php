@extends('layouts.pegawai')

@section('title', 'List Comment')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>List Comment</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">List Comment</li>
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
                      <th scope="col">Nama</th>
                      <th scope="col">Subject</th>
                      <th scope="col">Email</th>
                      <th scope="col">Pesan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($items as $item)
                    <tr>
                      <th scope="row">{{ $item->id }}</th>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->subject }}</td>
                      <td>{{ $item->email }}</td>
                      <td>{{ $item->message }}</td>
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