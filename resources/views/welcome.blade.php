<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="{{ asset('assets/icons/logo_pmi.ico') }}">

        <title>PMI PROVINSI JAWA TENGAH</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
       
    </head>

    <body>

        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color : #bd0001">
          <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/icons/logo.png') }}" height="45" alt="Logo PMI">
              </a> 
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <div class="d-flex" >
                    <button class="nav-link" href="/JadwalDonor" style="color: white;" >Jadwal Donor </button>
                  </div>
                  <div class="d-flex" >
                    <button class="nav-link" href="/StcokDarah" style="color: white;" >Stock Darah</button>
                  </div>
                 
                </ul>
                <div class="d-flex" >
                  <a href="{{ route('filament.admin.auth.login') }}" class="btn btn-primary">Login</a>
                </div>
            </div>
          </div>
        </nav>

        {{-- Navbar --}}

        <section id="hero" class="px-0">
            <div class="container text-center text-white">
                <div class="hero-title">
                  <div class="hero-text">Selamat Datang <br> Di UDD PMI JAWA TENGAH</div>
                    <h4>Darah Anda Menyelamatkan Nyawa Mereka</p>
                </div>
            </div>
        </section>

        {{-- Tabel Jadwal Donor --}}

        <h2 id="JadwalDonor" style="text-align: center;">Jadwal Donor Darah</h2>

        <table class="table table-bordered table-stripped mt-3" id="table">
          <thead>
              <tr>
                  <th>No</th>
                  <th style="text-align: center;">Lokasi</th>
                  <th style="text-align: center;">Alamat</th>
                  <th style="text-align: center;">Jam Mulai</th>
                  <th style="text-align: center;">Jam Selesai</th>
                  <th style="text-align: center;">Peruntukan</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($dataJadwal as $jadwal)
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td style="text-align: center;">{{ $jadwal->Lokasi }}</td>
                  <td style="text-align: center;">{{ $jadwal->Alamat }}</td>
                  <td style="text-align: center;">{{ $jadwal->Jam_Mulai }}</td>
                  <td style="text-align: center;">{{ $jadwal->Jam_Selesai }}</td>
                  <td style="text-align: center;">{{ $jadwal->Peruntukan }}</td>
              </tr>
              @endforeach
          </tbody>
        </table>

      {{-- Stock Darah --}}

      <h2 id="StockDarah" style="text-align: center;">Stok Darah</h2>

      <table class="table table-bordered table-stripped mt-3" id="table">
          <thead>
              <tr>
                  <th>No</th>
                  <th style="text-align: center;">Kab/Kota</th>
                  <th style="text-align: center;">Golda A</th>
                  <th style="text-align: center;">Golda B</th>
                  <th style="text-align: center;">Golda AB</th>
                  <th style="text-align: center;">Golda O</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($dataStock as $stock)
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td style="text-align: center;">{{ $stock->KabKota}}</td>
                  <td style="text-align: center;">{{ $stock->Golda_a}}</td>
                  <td style="text-align: center;">{{ $stock->Golda_b}}</td>
                  <td style="text-align: center;">{{ $stock->Golda_ab}}</td>
                  <td style="text-align: center;">{{ $stock->Golda_o}}</td>
                  <td style="text-align: center;">{{ $stock->Tgl_Upate}}</td>
                 
              </tr>
              @endforeach
          </tbody>
      </table>
      


    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity=
        "sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    
    </body>
</html>
