<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Mantra Sakti Autofilm')</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('vendor/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/plugins/OwlCarousel2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/plugins/OwlCarousel2/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/plugins/lightbox2/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('vendor/plugins/jquery/jquery.min.js') }}"></script>
    @yield('styles')
</head>

<body class="hold-transition sidebar-mini" data-spy="scroll" data-target="#mainNavbar" data-offset="80">
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNavbar">
                <div class="container">
                    <a class="navbar-brand" href="{{ URL::to('/') }}">
                        {{-- img  --}}
                        <img src="{{ asset('images/logo.png') }}" alt="Mantra Sakti Autofilm" height="40">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/') }}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProduk"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Produk Kami
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownProduk">
                                    <a class="dropdown-item" href="{{ URL::to('kategori-produk') }}">Kaca Film Mobil</a>
                                    <a class="dropdown-item" href="{{ URL::to('detail-produk') }}">Kaca Film Gedung</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('galeri') }}">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('about') }}">Tentang Kami</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownKontak"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Kontak & Outlet
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownKontak">
                                    <a class="dropdown-item" href="{{ URL::to('contact') }}">Hubungi Kami (HQ)</a>
                                    <a class="dropdown-item" href="{{ URL::to('outlet') }}">Daftar Outlet</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('partner') }}">Partner</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        @yield('content')

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <img class="mb-2" src="{{ asset('images/logo.png') }}" alt="Mantra Sakti Autofilm" height="50">
                        <p>Pusat distributor dan spesialis pemasangan kaca film premium untuk otomotif dan gedung.
                            Kualitas, orisinalitas, dan garansi adalah prioritas kami.</p>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-4">
                        <h5>Quick Links</h5>
                        <ul>
                            <li><a href="{{ URL::to('/') }}">Home</a></li>
                            <li><a href="{{ URL::to('galeri') }}">Galeri</a></li>
                            <li><a href="{{ URL::to('about') }}">Tentang Kami</a></li>
                            <li><a href="{{ URL::to('contact') }}">Kontak</a></li>
                            <li><a href="{{ URL::to('outlet') }}">Outlet</a></li>
                            <li><a href="{{ URL::to('partner') }}">Partner</a></li>
                            <li><a href="{{ URL::to('dashboard') }}">Administrator</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5>Kontak</h5>
                        <p>
                            <i class="fas fa-map-marker-alt"></i> Jl. Mekar Puspita No.23, Bandung
                        </p>
                        <p>
                            <i class="fas fa-phone-alt"></i> 081244000805
                        </p>
                        <p>
                            <i class="fas fa-envelope"></i> hq@mantrasakti.com
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5>Ikuti Kami</h5>
                        <p>Dapatkan info terbaru dan promo menarik.</p>
                        <div class="social-icons">
                            <a target="_blank" href="https://www.facebook.com/mantra.sakti.autofilm.antapani/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://www.instagram.com/mantrasaktiautofilm?igshid=ZmVmZTY5ZGE"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://www.youtube.com/@mantrasaktiautofilm4841"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>&copy; 2025 Mantra Sakti Autofilm. All Rights Reserved.</p>
                </div>
            </div>
        </footer>

        <div class="wa-bubble-wrapper">
            <!-- Div menu yang awalnya tersembunyi -->
            <div id="wa-menu">
                <!-- Ganti 62... dengan nomor WA yang sesuai -->
                <a href="https://wa.me/6281234567001" target="_blank">
                    <i class="fas fa-car"></i> Admin 1 (Mobil)
                </a>
                <a href="https://wa.me/6281234567002" target="_blank">
                    <i class="fas fa-building"></i> Admin 2 (Gedung)
                </a>
                <a href="https://wa.me/6281234567003" target="_blank">
                    <i class="fas fa-map-pin"></i> Outlet Jakarta
                </a>
                <a href="https://wa.me/6281234567004" target="_blank">
                    <i class="fas fa-map-pin"></i> Outlet Surabaya
                </a>
                <a href="https://wa.me/6281234567005" target="_blank">
                    <i class="fas fa-exclamation-circle"></i> Layanan Komplain
                </a>
            </div>
            <!-- Bubble utama untuk toggle -->
            <div id="wa-toggle">
                <i class="fab fa-whatsapp"></i>
            </div>
        </div>
    </div>

    <script src="{{ asset('vendor/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/OwlCarousel2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/lightbox2/lightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/dist/js/adminlte.min.js') }}"></script>
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('.navbar').addClass('scrolled');
            } else {
                $('.navbar').removeClass('scrolled');
            }
        });

        $('a.nav-link[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 70
                }, 800);
            }

            if ($('.navbar-toggler').is(':visible')) {
                $('.navbar-collapse').collapse('hide');
            }
        });

        $('#wa-toggle').on('click', function() {
            $('#wa-menu').slideToggle(300);
        });
    </script>
    @stack('scripts')

</body>

</html>
