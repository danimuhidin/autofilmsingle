<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta Tags -->
    <title>@yield('title', $bio->title)</title>
    <meta name="description" content="@yield('meta_description', $bio->tagline . ' - Distributor resmi kaca film berkualitas tinggi untuk mobil dan gedung. Layanan profesional, garansi resmi, dan harga terbaik.')">
    <meta name="keywords" content="@yield('meta_keywords', 'kaca film mobil, kaca film gedung, window film, 3M, VKool, Llumar, tinting mobil, kaca film premium, kaca film termurah, pemasangan kaca film, auto film')">
    <meta name="author" content="{{ $bio->brand_name }}">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Indonesian">
    <link rel="canonical" href="@yield('canonical', url()->current())">

    <!-- Open Graph / Facebook Meta Tags -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', $bio->title)">
    <meta property="og:description" content="@yield('og_description', $bio->tagline . ' - Distributor resmi kaca film berkualitas tinggi untuk mobil dan gedung.')">
    <meta property="og:image" content="@yield('og_image', asset('storage/' . $bio->brand_img))">
    <meta property="og:site_name" content="{{ $bio->brand_name }}">
    <meta property="og:locale" content="id_ID">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('twitter_title', $bio->title)">
    <meta name="twitter:description" content="@yield('twitter_description', $bio->tagline)">
    <meta name="twitter:image" content="@yield('twitter_image', asset('storage/' . $bio->brand_img))">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('storage/' . $bio->favicon) }}">
    <link rel="apple-touch-icon" href="{{ asset('storage/' . $bio->favicon) }}">
    <link rel="icon" type="image/png" sizes="180x180" href="{{ asset('storage/' . $bio->favicon) }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/' . $bio->favicon) }}">
    <link rel="shortcut icon" href="{{ asset('storage/' . $bio->favicon) }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('storage/' . $bio->favicon) }}" type="image/png">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet"
        href="{{ asset('vendor/plugins/fontawesome-free/css/all.min.css') }}?v={{ env('ASSET_VERSION') }}">
    <link rel="stylesheet"
        href="{{ asset('vendor/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}?v={{ env('ASSET_VERSION') }}">
    <link rel="stylesheet" href="{{ asset('vendor/dist/css/adminlte.min.css') }}?v={{ env('ASSET_VERSION') }}">
    <link rel="stylesheet"
        href="{{ asset('vendor/plugins/OwlCarousel2/owl.carousel.min.css') }}?v={{ env('ASSET_VERSION') }}">
    <link rel="stylesheet"
        href="{{ asset('vendor/plugins/OwlCarousel2/owl.theme.default.min.css') }}?v={{ env('ASSET_VERSION') }}">
    <link rel="stylesheet"
        href="{{ asset('vendor/plugins/lightbox2/lightbox.min.css') }}?v={{ env('ASSET_VERSION') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ env('ASSET_VERSION') }}">

    <!-- SEO Fix for Lightbox Links - Hide navigation links from crawlers -->
    <style>
        /* Lightbox works normally, we just fix the links via JavaScript */
    </style>

    <script src="{{ asset('vendor/plugins/jquery/jquery.min.js') }}?v={{ env('ASSET_VERSION') }}"></script>

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => $bio->brand_name,
        'image' => asset('storage/' . $bio->brand_img),
        'description' => $bio->tagline,
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => $bio->address,
            'addressLocality' => 'Indonesia',
            'addressCountry' => 'ID'
        ],
        'telephone' => $bio->whatsapp,
        'email' => $bio->email,
        'url' => url('/'),
        'priceRange' => '$$',
        'openingHours' => $bio->operation_time,
        'sameAs' => [
            $bio->fb_link,
            $bio->ig_link,
            $bio->youtube_link
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    @yield('styles')
    @stack('structured_data')

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KC5R4T8Z');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body class="hold-transition sidebar-mini" data-spy="scroll" data-target="#mainNavbar" data-offset="80">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KC5R4T8Z" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNavbar">
                <div class="container">
                    <a class="navbar-brand" href="{{ URL::to('/') }}">
                        <img src="{{ asset('storage/' . $bio->brand_img) }}" alt="{{ $bio->brand_name }}"
                            height="40">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                    href="{{ URL::to('/') }}">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('produk') ? 'active' : '' }}"
                                    href="{{ URL::to('produk') }}">Produk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('galeri') ? 'active' : '' }}"
                                    href="{{ URL::to('galeri') }}">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('artikel') ? 'active' : '' }}"
                                    href="{{ URL::to('artikel') }}">Artikel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                                    href="{{ URL::to('about') }}">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                                    href="{{ URL::to('contact') }}">Kontak</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('partner') ? 'active' : '' }}"
                                    href="{{ URL::to('partner') }}">Partner</a>
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
                        <img class="mb-2" src="{{ asset('storage/' . $bio->brand_img) }}"
                            alt="{{ $bio->brand_name }}" height="50">
                        <p>{!! $bio->greeting_about !!}</p>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-4">
                        <h5>Quick Links</h5>
                        <ul>
                            <li><a href="{{ URL::to('/') }}">Home</a></li>
                            <li><a href="{{ URL::to('produk') }}">Produk</a></li>
                            <li><a href="{{ URL::to('galeri') }}">Galeri</a></li>
                            <li><a href="{{ URL::to('artikel') }}">Artikel</a></li>
                            <li><a href="{{ URL::to('about') }}">Tentang Kami</a></li>
                            <li><a href="{{ URL::to('contact') }}">Kontak</a></li>
                            <li><a href="{{ URL::to('partner') }}">Partner</a></li>
                            <li><a href="{{ URL::to('admin/dashboard') }}">Administrator</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5>Kontak</h5>
                        <p>
                            <i class="fas fa-map-marker-alt"></i> {{ $bio->address }}
                        </p>
                        <p>
                            <i class="fas fa-phone-alt"></i>
                            <a class="text-white-50" href="https://wa.me/{{ format_whatsapp($bio->whatsapp) }}"
                                target="_blank">{{ $bio->whatsapp }}</a>
                        </p>
                        <p>
                            <i class="fas fa-envelope"></i>
                            <a class="text-white-50" href="mailto:{{ $bio->email }}">{{ $bio->email }}</a>
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5>Ikuti Kami</h5>
                        <p>Dapatkan info terbaru dan promo menarik.</p>
                        <div class="social-icons">
                            <a target="_blank" href="{{ $bio->fb_link }}"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="{{ $bio->ig_link }}"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="{{ $bio->youtube_link }}"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>&copy; 2025 {{ $bio->brand_name }}. All Rights Reserved.</p>
                </div>
            </div>
        </footer>

        <div class="wa-bubble-wrapper">
            <div id="wa-menu">
                @foreach ($waBubble as $contact)
                    <a class="wa-link-track" data-name="{{ $contact->name }}"
                        href="https://wa.me/{{ format_whatsapp($contact->telp) }}" target="_blank">
                        <i class="fas fa-map-pin"></i> {{ $contact->name }}
                    </a>
                @endforeach
            </div>
            <div id="wa-toggle">
                <i class="fab fa-whatsapp"></i>
            </div>
        </div>
    </div>

    <script src="{{ asset('vendor/plugins/bootstrap/js/bootstrap.bundle.min.js') }}?v={{ env('ASSET_VERSION') }}">
    </script>
    <script src="{{ asset('vendor/plugins/sweetalert2/sweetalert2.min.js') }}?v={{ env('ASSET_VERSION') }}"></script>
    <script src="{{ asset('vendor/plugins/chart.js/Chart.min.js') }}?v={{ env('ASSET_VERSION') }}"></script>
    <script src="{{ asset('vendor/plugins/OwlCarousel2/owl.carousel.min.js') }}?v={{ env('ASSET_VERSION') }}"></script>
    <script src="{{ asset('vendor/plugins/lightbox2/lightbox.min.js') }}?v={{ env('ASSET_VERSION') }}"></script>
    <script src="{{ asset('vendor/dist/js/adminlte.min.js') }}?v={{ env('ASSET_VERSION') }}"></script>
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
        $(document).on('click', function(event) {
            if (!$(event.target).closest('.wa-bubble-wrapper').length) {
                if ($('#wa-menu').is(':visible')) {
                    $('#wa-menu').slideUp(300);
                }
            }
        });

        // SEO & Accessibility Fixes
        $(document).ready(function() {
            // Monitor lightbox state and add class to body when active
            var checkLightboxInterval = setInterval(function() {
                if (typeof lightbox !== 'undefined') {
                    // Hook into lightbox events
                    $(document).on('click', 'a[data-lightbox]', function() {
                        setTimeout(function() {
                            $('body').addClass('lightboxActive');
                        }, 50);
                    });

                    // Remove class when lightbox closes
                    $(document).on('click', '.lb-close, .lb-cancel, .lb-overlay', function() {
                        $('body').removeClass('lightboxActive');
                    });

                    // Also check for escape key
                    $(document).on('keyup', function(e) {
                        if (e.keyCode === 27 && $('body').hasClass('lightboxActive')) {
                            $('body').removeClass('lightboxActive');
                        }
                    });

                    clearInterval(checkLightboxInterval);
                }
            }, 100);

            // Fix lightbox UI links - prevent crawler access
            setTimeout(function() {
                // Target all lightbox control elements and remove href
                $('.lb-cancel, .lb-close, .lb-prev, .lb-next, .lb-data .lb-close').each(function() {
                    var $elem = $(this);

                    // Remove href attribute completely so crawlers ignore it
                    $elem.removeAttr('href');

                    // Add SEO blocking attributes
                    $elem.attr({
                        'rel': 'nofollow noindex',
                        'aria-hidden': 'true',
                        'data-nosnippet': 'true',
                        'role': 'button',
                        'tabindex': '-1'
                    });
                });

                // Hide lightbox containers from crawlers
                $('.lightbox, .lb-container, .lb-overlay, .lb-outerContainer').attr({
                    'data-nosnippet': 'true',
                    'aria-hidden': 'true'
                });
            }, 100);

            // Fix Owl Carousel accessibility
            setTimeout(function() {
                // Add aria-labels to owl carousel dots
                $('.owl-dot').each(function(index) {
                    $(this).attr({
                        'aria-label': 'Go to slide ' + (index + 1),
                        'role': 'button',
                        'title': 'Slide ' + (index + 1)
                    });
                });

                // Add aria-labels to owl carousel navigation
                $('.owl-prev').attr({
                    'aria-label': 'Previous slide',
                    'title': 'Previous'
                });
                $('.owl-next').attr({
                    'aria-label': 'Next slide',
                    'title': 'Next'
                });

                // Fix links without discernible names
                $('a:not([aria-label]):not([title])').each(function() {
                    var $this = $(this);
                    var text = $this.text().trim();
                    var img = $this.find('img');

                    if (text) {
                        // Link has text, use it as aria-label
                        $this.attr('aria-label', text);
                    } else if (img.length > 0) {
                        // Link has image, use img alt as aria-label
                        var altText = img.attr('alt') || 'Image link';
                        $this.attr('aria-label', altText);
                    } else if ($this.hasClass('lb-') || $this.parents('.lightbox').length > 0) {
                        // Lightbox elements, skip
                        return;
                    } else {
                        // Generic fallback
                        var href = $this.attr('href');
                        if (href && href !== '#' && href !== 'javascript:void(0)') {
                            $this.attr('aria-label', 'Link to ' + href);
                        }
                    }
                });
            }, 500);
        });
    </script>

    @stack('scripts')

</body>

</html>
