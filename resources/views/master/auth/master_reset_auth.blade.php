<!--
=========================================================
* Soft UI Dashboard - v1.0.7
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('master/dashboard/template/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('master/dashboard/template/assets/img/favicon.png') }}">
  <title>
    {{ $halaman }} | Arsiparis StaffMin
  </title>

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('master/dashboard/template/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('master/dashboard/template/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('master/dashboard/template/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('master/dashboard/template/assets/css/soft-ui-dashboard.css?v=1.0.7') }}"
    rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  {{-- <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script> --}}

  {{-- TODO | CUSTOM CSS --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- TODO | NOTIFICATIONS --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

  {{-- TODO | CUSTOM SELECT2 --}}
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
  <!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->

        <nav
          class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3">
              Pangkalan TNI AL Kota Semarang
            </a>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
                <li class="nav-item">
                  <a class="nav-link me-2" href="https://id.wikipedia.org/wiki/Pangkalan_TNI_AL_Semarang"
                    target="_blank">
                    <i class="fa fa-info-circle opacity-6 text-dark me-1"></i>
                    Sejarah Mako Lanal
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" aria-current="page" href="https://www.instagram.com/lanal_semarang/"
                    target="_blank">
                    <i class="fa fa-instagram opacity-6 text-dark me-1"></i>
                    Instagram
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="https://maps.app.goo.gl/SaRhMTG7H19hXvaN6" target="_blank">
                    <i class="fas fa-map-pin opacity-6 text-dark me-1"></i>
                    Pangkalan TNI AL
                  </a>
                </li>
              </ul>
              <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                  <a href="/" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-dark">Login</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <!-- End Navbar -->

  <main class="main-content  mt-0">
    <section class="min-vh-100">
      <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg mb-0"
        style="background-image: url('{{ asset('master/dashboard/template/assets/img/curved-images/curved-11.jpg') }}');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center mx-auto mt-2">
              <h1 class="text-white mb-2 mt-5">Kata Sandi Baru</h1>
              <p class="text-lead text-white">Jika password lupa, silahkan masukkan email yang terdaftar untuk menerima
                kode verifikasi dan membuat password baru.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
          <div class="col-xl-7 col-lg-7 col-md-8 mx-auto">
            <div class="card z-index-0">
              <div class="text-center mt-3">
                <h1>
                  <h3><strong>Verifikasi Email Anda</strong></h3>
                </h1>
              </div>

              <div class="card-body">

                <form role="form text-left">
                  @csrf

                  <div class="mb-3">
                    <label for="email" class="form-label">
                      Alamat Email <strong class="text-danger">*</strong>
                    </label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email"
                      aria-label="Email" aria-describedby="email-addon">

                    @error('email')
                    <small class="text-danger fst-italic">
                      {{ $message }}
                    </small>
                    @enderror

                    <p class="text-sm fst-italic mt-1">
                      Silakan buat password baru dengan memasukkan email anda
                      dan ikuti tautan yang disediakan pada kotak pesan
                      Gmail.
                    </p>

                  </div>

                  {{-- <div class="form-check form-check-info text-left">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                    <label class="form-check-label" for="flexCheckDefault">
                      I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                    </label>
                  </div> --}}

                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-dark w-100 my-3 mb-2">Kirim Kode Verifikasi</button>
                  </div>
                  <p class="text-sm text-center mt-3 mb-0">Belum mendapatkan kode? <a href="javascript:;"
                      class="text-dark font-weight-bolder">Kirim ulang</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer py-5">
      <div class="container">
        <div class="row">
          <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
              Copyright © <script>
                document.write(new Date().getFullYear())
              </script> Soft by Creative Tim | Staff MinPers.
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  </main>
  <!--   Core JS Files   -->
  <script src="{{ asset('master/dashboard/template/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('master/dashboard/template/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('master/dashboard/template/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('master/dashboard/template/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('master/dashboard/template/assets/js/soft-ui-dashboard.min.js?v=1.0.7') }}"></script>

  {{-- ! JQUERY --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
    integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.map"></script>

  {{-- TODO | SWEATALERT2 + TOASTR --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>

</html>