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

           <!-- DataTables CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

            <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

            <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

       
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
                  <li class="nav-item">
                    <a class="nav-link" href="#JadwalDonor" style="color: white;">Jadwal Donor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#StockDarah" style="color: white;">Stok Darah</a>
                  </li>
                </ul>                
                 
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

        <div class="content-box" > 

        <h2 id="JadwalDonor" style="text-align: center;">Jadwal Donor Darah</h2>

        <table class="table table-bordered table table-striped mt-3" id="tabelJadwal">
          <thead>
              <tr>
                  <th style="text-align: center;">No</th>
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
                  <td style="text-align: center;">{{ $loop->iteration }}</td>
                  <td>{{ $jadwal->Lokasi }}</td>
                  <td>{{ $jadwal->Alamat }}</td>
                  <td>{{ $jadwal->Jam_Mulai }}</td>
                  <td>{{ $jadwal->Jam_Selesai }}</td>
                  <td>{{ $jadwal->Peruntukan }}</td>
              </tr>
              @endforeach
          </tbody>
        </table>

      </div>

      {{-- Stock Darah --}}

      <div class="content-box" >

      <h2 id="StockDarah" style="text-align: center;">Stok Darah</h2>

      <table class="table table-bordered table table-striped mt-3" id="tabelStock">
          <thead>
              <tr>
                  <th style="text-align: center;">No</th>
                  <th style="text-align: center;">Kab/Kota</th>
                  <th style="text-align: center;">Golda A</th>
                  <th style="text-align: center;">Golda B</th>
                  <th style="text-align: center;">Golda AB</th>
                  <th style="text-align: center;">Golda O</th>
                  <th style="text-align: center;">Tgl Update</th> <!-- tambahkan ini -->
              </tr>
          </thead>
          <tbody>
              @foreach ($dataStock as $stock)
              <tr>
                  <td style="text-align: center;">{{ $loop->iteration }}</td>
                  <td>{{ $stock->KabKota}}</td>
                  <td style="text-align: center;">{{ $stock->Golda_a}}</td>
                  <td style="text-align: center;">{{ $stock->Golda_b}}</td>
                  <td style="text-align: center;">{{ $stock->Golda_ab}}</td>
                  <td style="text-align: center;">{{ $stock->Golda_o}}</td>
                  <td>{{ $stock->Tgl_Update}}</td>
                 
              </tr>
              @endforeach
          </tbody>
      </table>
      
      </div>

    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity=
        "sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    
        <script>
          document.querySelectorAll('a[href^="#"]').forEach(anchor => {
              anchor.addEventListener('click', function (e) {
                  e.preventDefault();
      
                  const target = document.querySelector(this.getAttribute('href'));
                  if (target) {
                      target.scrollIntoView({
                          behavior: 'smooth'
                      });
                  }
              });
          });
      </script>

      <script>
        document.querySelectorAll('a.nav-link').forEach(link => {
            link.addEventListener('click', function () {
               document.querySelectorAll('a.nav-link').forEach(el => el.classList.remove('active'));
                this.classList.add('active');
            });
        });
      </script>

<script>
  $(document).ready(function () {
      $('#tabelJadwal').DataTable({
          "pageLength": 5,
          "lengthMenu": [5, 10, 25, 50],
          "language": {
              "search": "Cari:",
              "lengthMenu": "Tampilkan _MENU_ entri",
              "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
              "paginate": {
                  "first": "Awal",
                  "last": "Akhir",
                  "next": "Berikutnya",
                  "previous": "Sebelumnya"
              },
              "zeroRecords": "Tidak ada data yang ditemukan",
          }
      });

      $('#tabelStock').DataTable({
          "pageLength": 5,
          "lengthMenu": [5, 10, 25, 50],
          "language": {
              "search": "Cari:",
              "lengthMenu": "Tampilkan _MENU_ entri",
              "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
              "paginate": {
                  "first": "Awal",
                  "last": "Akhir",
                  "next": "Berikutnya",
                  "previous": "Sebelumnya"
              },
              "zeroRecords": "Tidak ada data yang ditemukan",
          }
      });
  });
</script>


    </body>
</html>
