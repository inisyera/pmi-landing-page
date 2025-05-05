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
        <nav class="navbar navbar-expand-lg navbar-dark py-3 bg-dark">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/icons/logo_pmi.jpg') }}" height="55" width="115" alt="">
              </a> 
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <div class="d-flex" >
                    <button class="nav-link" >Jadwal Donor </button>
                  </div>
                  <div class="d-flex" >
                    <button class="nav-link" >Stock Darah</button>
                  </div>
                 
                </ul>
                <div class="d-flex" >
                  <button class="btn btn-danger" >Login</button>
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
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity=
        "sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    
    </body>
</html>
