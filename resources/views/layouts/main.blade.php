<<<<<<< HEAD
=======

>>>>>>> 3caeca8 (add some features)
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500&display=swap" rel="stylesheet" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Title -->
    <title>Xplore Surabaya</title>
    <link rel="icon" href="img/logo.png" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark position-fixed mx-auto w-100">
      <div class="container">
        <a class="navbar-brand" href="#"> <img src="img/logo.png" alt="" width="30" class="d-inline-block align-text-top me-3" /> Xplore Surabaya</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-3">
              <a class="nav-link active" aria-current="page" href="/">BERANDA</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="/layanan">LAYANAN</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="/explore">EXPLORE</a>
            </li>
            <li class="nav-item mx-3">
<<<<<<< HEAD
              <a class="nav-link" href="/kontak-kami">KONTAK</a>
=======
              <a class="nav-link" href="/komentar">KOMENTAR</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="/kontak">KONTAK</a>
>>>>>>> 3caeca8 (add some features)
            </li>
          </ul>
        </div>
        <div>
          @auth
          <a href="/dashboard">
            <button class="btn-pri" >Dashboard</button>
          </a>
          @endauth
          @guest
          <a href="/register">
            <button class="btn-sec" >Daftar</button>
          </a>
          <a href="/login">
            <button class="btn-pri" >Masuk</button>
          </a>
          @endguest
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    
        @yield('container')
    
        <footer class="bg-grey-200 text-center lg:text-left">
          <div class="text-grey-700 text-center p-4" style="background-color: #0488535b;">
            © 2022 Copyright <br>
            <a class="text-gray-800" href="/">Xplore Surabaya</a>
          </div>
        </footer>

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
  </body>
</html>
