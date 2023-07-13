@extends('layouts.pegawai')

@section('title', 'Dashboard')

@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-lg-12 col-md-12">
              <div class="card info-card sales-card">
                <div class="card-body text-center mt-5">
                  <div class="mb-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75"
                        fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                    </svg>
                </div>
                <div class="text-center">
                    <h1>Terima Kasih !</h1>
                    <p>Terima kasih telah meluangkan waktunya untuk mencoba website saya </p>
                    <p>Absen Dulu nih ditombol bawah ini dan berikan masukan ke saya </p>
                    <a class="btn btn-outline-success" href="{{ route('comment.index') }}">Komentar</a>
                </div>
                </div>
              </div>
            </div><!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-lg-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Total Arsip</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-archive"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $archive }} Arsip</h6>
                      <span class="text-success pt-1 fw-bold">+{{ $archive_date }}</span> <span class="text-muted small pt-2 ps-1">hari ini</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-lg-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Total Peminjaman</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-card-list"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $loan }} Peminjaman</h6>
                      <span class="text-success pt-1 fw-bold">+{{ $loan_date }}</span> <span class="text-muted small pt-2 ps-1">request hari ini</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-lg-4 col-md-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Total Pengguna</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $user }} Pengguna</h6>
                      <span class="text-success pt-1 fw-bold">+{{ $user_date }}</span> <span class="text-muted small pt-2 ps-1">hari ini</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Recent Sales -->
            <div class="col-lg-6 col-md-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Arsip Yang Belum Dikembalikan</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nomor Arsip</th>
                        <th scope="col">Nama Arsip</th>
                        <th scope="col">Nama Peminjam</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($items1 as $item)
                        <tr>
                          <th scope="row"><a href="#">{{ $item->id }}</a></th>
                          <td>{{ $item->archive->nomor_arsip }}</td>
                          <td>{{ $item->archive->nama_arsip }}</td>
                          <td>{{ $item->user->name }}</td>
                          <td>{{ $item->tanggal_kembali }}</td>
                          <td><span class="badge bg-warning">{{ $item->status_pinjaman }}</span></td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <div class="col-lg-6 col-md-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Arsip Yang Belum Diberikan</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nomor Arsip</th>
                        <th scope="col">Nama Arsip</th>
                        <th scope="col">Nama Peminjam</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($items2 as $item)
                        <tr>
                          <th scope="row"><a href="#">{{ $item->id }}</a></th>
                          <td>{{ $item->archive->nomor_arsip }}</td>
                          <td>{{ $item->archive->nama_arsip }}</td>
                          <td>{{ $item->user->name }}</td>
                          <td>{{ $item->tanggal_kembali }}</td>
                          <td><span class="badge bg-warning">{{ $item->status_pinjaman }}</span></td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->
@endsection