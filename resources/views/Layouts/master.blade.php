<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>DESA DELISAOS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="{{asset('lepten')}}/img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lepten')}}/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="{{asset('lepten')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('lepten')}}/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{asset('lepten')}}/css/style.css" rel="stylesheet" />

    <style>
        .navbar-nav .nav-link.active {
            color: #ff0000; /* Ganti dengan warna yang diinginkan */
            font-weight: bold;
            /* Tambahkan gaya aktif sesuai keinginan Anda */
        }
    </style>
  </head>

  <body>
    <div class="container-xxl bg-white p-0">

      <!-- Navbar Start -->
      <div class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
          <a
            href="/"
            class="navbar-brand d-flex align-items-center text-center"
          >
            <div class="icon p-2 me-2">
              <img
                class="img-fluid"
                src="{{asset('lepten')}}/img/logos.png"
                alt="Icon"
                style="width: 50px; height: 50px"
              />
            </div>
            <h1 class="m-0 text-primary">DELISAOS</h1>
          </a>
          <button
            type="button"
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
              <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Beranda</a>
              <div class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle {{ request()->is(['profil', 'visi-misi', 'tugas-fungsi', 'struktur-pejabat']) ? 'active' : '' }}"
                  data-bs-toggle="dropdown"
                  >Tentang</a
                >
                <div class="dropdown-menu rounded-0 m-0">
                  <a href="/profil" class="dropdown-item">Profil</a>
                  <a href="/visi-misi" class="dropdown-item"
                    >Visi & Misi</a
                  >
                  <a href="/tugas-fungsi" class="dropdown-item"
                    >Tugas & Fungsi</a
                  >
                  <a href="/struktur-pejabat" class="dropdown-item"
                    >Struktur Pejabat</a
                  >
                </div>
              </div>
              <a href="/beritas" class="nav-item nav-link {{ request()->is('beritas') ? 'active' : '' }}">Berita</a>
              <a href="/galeri" class="nav-item nav-link {{ request()->is('galeri') ? 'active' : '' }}">Galeri</a>
              <a href="/kontak" class="nav-item nav-link {{ request()->is('kontak') ? 'active' : '' }}">Kontak</a>
              <button type="button" class="nav-item nav-link btn text-success ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </nav>
      </div>
      <!-- Navbar End -->

      @yield('content')

      <!-- Footer Start -->
      <div
        class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div class="container py-5">
          <div class="row g-5">
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Kontak Kami</h5>
              <p class="mb-2">
                <i class="fa fa-map-marker-alt me-3"></i>Jalan merdeka sekali Desa delisaos Bener Meriah ,Aceh
              </p>
              <p class="mb-2">
                <i class="fa fa-phone-alt me-3"></i>+012 345 67890
              </p>
              <p class="mb-2">
                <i class="fa fa-envelope me-3"></i>kontak@delisaos.com
              </p>
              <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-youtube"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Quick Links</h5>
              <a class="btn btn-link text-white-50" href="">About Us</a>
              <a class="btn btn-link text-white-50" href="">Contact Us</a>
              <a class="btn btn-link text-white-50" href="">Our Services</a>
              <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
              <a class="btn btn-link text-white-50" href=""
                >Terms & Condition</a
              >
            </div>
          </div>
        </div>
        <div class="container">
          <div class="copyright">
            <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom" href="#">DESA DELISAOS</a>, All
                Right Reserved.

                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed By
                <a class="border-bottom" href="https://htmlcodex.com"
                  >HTML Codex</a
                >
              </div>
              <div class="col-md-6 text-center text-md-end">
                <div class="footer-menu">
                  <a href="">Home</a>
                  <a href="">Help</a>
                  <a href="">FQAs</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->

      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
      ></a>
    </div>

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
      <div class="modal-dialog modal-fullscreen">
          <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
              <div class="modal-header border-0">
                  <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body d-flex align-items-center justify-content-center">
                  <form action="/pencarian" method="POST" class="input-group" style="max-width: 600px;">
                    @csrf
                      <input type="text" name="keyword" class="form-control text-white bg-transparent border-light p-3" placeholder="Type search keyword">
                      <button type="submit" class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <!-- Full Screen Search End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lepten')}}/lib/wow/wow.min.js"></script>
    <script src="{{asset('lepten')}}/lib/easing/easing.min.js"></script>
    <script src="{{asset('lepten')}}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{asset('lepten')}}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('lepten')}}/js/main.js"></script>
  </body>
</html>
