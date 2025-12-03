@extends('layouts.app')

@section('title', 'Mantra Sakti Autofilm - Spesialis Kaca Film Mobil & Gedung')
@section('page-title', 'Dashboard')

@section('content')

    <section class="hero-carousel p-0" id="home">
        <div class="owl-carousel owl-theme" id="hero-slider">
            @foreach ($jumbotrons as $jumbotron)
                <div class="item" style="background-image: url('{{ asset('storage/' . $jumbotron->image) }}');">
                    <div class="hero-overlay">
                        <div class="container hero-content">
                            <h1>{{ $jumbotron->title }}</h1>
                            <p>{{ $jumbotron->desc }}</p>
                            <a href="{{ $jumbotron->link }}" class="btn btn-merah">
                                Explore Now
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section id="tentang-kami" class="section-padding bg-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0 pr-lg-4">
                    <img src="{{ asset('storage/' . $bio->img_home) }}" class="img-fluid rounded"
                        alt="{{ $bio->brand_name }}">
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-3" style="color: var(--warna-kuning-aksen);">Selamat Datang di {{ $bio->brand_name }}
                    </h3>
                    <h4 class="mb-4">{{ $bio->tagline }}</h4>
                    <p class="text-white-50">
                        {!! $bio->greeting_home !!}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="outlet-kami" class="section-padding bg-light">
        <div class="container">
            <div class="section-title">
                <h2>
                    Outlet Tersedia di Berbagai Kota
                </h2>
                <p>
                    Temukan lokasi outlet resmi Mantra Sakti terdekat di kota Anda.
                </p>
            </div>
            <div class="row">
                @foreach ($outlets as $outlet)
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ asset('storage/' . $outlet->image) }}" alt="{{ $outlet->name }}"/>
                            <div class="card-body">
                                <h3 class="title">{{ $outlet->name }}</h3>
                                <p class="desc"> {{ $outlet->address }}</p>
                                <div class="meta">
                                    <a href="https://wa.me/{{ format_whatsapp($outlet->telp) }}" target="_blank"
                                        class="me-2">
                                        <span>📞 {{ $outlet->telp }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="produk-kami" class="section-padding bg-dark">
        <div class="container">
            <div class="section-title">
                <h2>Pilihan Produk Kaca Film</h2>
                <p>
                    Berikut adalah beberapa produk kaca film unggulan yang kami tawarkan. Setiap produk dirancang
                    untuk memberikan performa terbaik dalam menolak panas, melindungi dari sinar UV, dan meningkatkan
                    kenyamanan.
                </p>
            </div>
            <div class="row d-flex justify-content-center">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card product-card h-100">
                            <img src="{{ asset('storage/' . $product->icon) }}" class="card-img-top"
                                alt="Logo {{ $product->name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text text-muted-light small">
                                    {{ $product->short_desc }}
                                </p>
                                <ul class="list-unstyled small my-2">
                                    <li><i class="fas fa-sun fa-fw"></i> <strong>VLT :</strong> {{ $product->vlt }}</li>
                                    <li><i class="fas fa-shield-alt fa-fw"></i> <strong>UVR :</strong> {{ $product->uvr }}
                                    </li>
                                    <li><i class="fas fa-thermometer-half fa-fw"></i> <strong>IRR :</strong>
                                        {{ $product->irr }}</li>
                                    <li><i class="fas fa-star fa-fw"></i> <strong>TSER :</strong> {{ $product->tser }}</li>
                                </ul>
                                <a href="{{ URL::to('detail-produk/' . $product->id) }}"
                                    class="btn btn-merah mt-auto">Lihat
                                    Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="keunggulan" class="section-padding bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Mengapa Memilih Mantra Sakti?</h2>
                <p>Komitmen kami adalah kepuasan dan jaminan kualitas.</p>
            </div>
            <div class="row justify-content-center">
                @foreach ($keunggulans as $keunggulan)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="keunggulan-item">
                            <div class="icon">
                                <img src="{{ asset('storage/' . $keunggulan->image) }}" alt="{{ $keunggulan->title }}"
                                    style="width: 60px; height: 60px;">
                            </div>
                            <h4>{{ $keunggulan->title }}</h4>
                            <p class="text-white-50">
                                {{ $keunggulan->desc }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="galeri" class="section-padding bg-dark">
        <div class="container">
            <div class="section-title">
                <h2>Portofolio Pemasangan Kami</h2>
                <p>Lihat hasil kerja presisi dari tim profesional kami.</p>
            </div>

            <div class="row gallery-container mb-3 d-flex justify-content-center">
                @foreach ($galleries as $gallery)
                    <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper">
                        <div class="gallery-item">
                            <a href="{{ asset('storage/' . $gallery->image) }}" data-lightbox="galeri-portofolio"
                                data-title="{{ $gallery->title }}">
                                <img src="{{ asset('storage/' . $gallery->image) }}" class="img-fluid"
                                    alt="{{ $gallery->title }}">
                                <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                @foreach ($youtubes as $youtube)
                    <div class="col-lg-6 mb-4 mb-lg-0 video-wrapper">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe title="YouTube video player" class="embed-responsive-item" src="{{ $youtube->link }}" allowfullscreen></iframe>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="testimoni" class="section-padding bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Apa Kata Pelanggan Kami</h2>
                <p>Kepuasan mereka adalah prioritas utama kami.</p>
            </div>
            <div class="owl-carousel owl-theme" id="testimoni-slider">
                @foreach ($testimonials as $testimonial)
                    <div class="item">
                        <div class="testimoni-item">
                            <div class="stars">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="quote">"{{ $testimonial->desc }}"</p>
                            <h5 class="author">{{ $testimonial->name }}</h5>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section id="partner" class="section-padding bg-dark">
        <div class="container">
            <div class="section-title">
                <h2>Brand Partner Resmi Kami</h2>
                <p>Kami hanya bekerja dengan brand terbaik dan terpercaya.</p>
            </div>
            <div class="row align-items-center justify-content-center">
                @foreach ($products as $product)
                    <div class="col-lg-2 col-md-4 col-6 partner-logo">
                        <img src="{{ asset('storage/' . $product->icon) }}" alt="{{ $product->name }}"
                            class="img-fluid">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="kontak-outlet" class="section-padding bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Hubungi Kami</h2>
                <p>Siap membantu kebutuhan Anda di Kantor Pusat atau cabang terdekat.</p>
            </div>

            <div class="row mb-5">
                <div class="col-lg-7 mb-4 mb-lg-0 contact-form">
                    <h4>Kirim Pertanyaan (Kantor Pusat)</h4>
                    <form action="#" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputNama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="inputNama" placeholder="Nama Anda"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email Anda"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputTelepon">Nomor Telepon</label>
                            <input type="tel" class="form-control" id="inputTelepon" placeholder="cth: 08123456789">
                        </div>
                        <div class="form-group">
                            <label for="inputPesan">Pesan Anda</label>
                            <textarea class="form-control" id="inputPesan" rows="5"
                                placeholder="Tuliskan kebutuhan atau pertanyaan Anda..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-merah">Kirim Pesan</button>
                    </form>
                </div>

                <div class="col-lg-5">
                    <h4>Informasi Kantor Pusat (HQ)</h4>
                    <p class="text-white-50">
                        Hubungi kami langsung di kantor pusat untuk layanan korporat, kemitraan, atau
                        konsultasi proyek skala besar.
                    </p>
                    <div class="contact-info">
                        <p>
                            <i class="fas fa-map-marker-alt"></i>
                            {{ $bio->address }}
                        </p>
                        <p>
                            <i class="fas fa-phone-alt"></i>
                            <a class="text-white-50" href="https://wa.me/{{ format_whatsapp($bio->whatsapp) }}" target="_blank">
                                0812-4400-0805
                            </a>
                        </p>
                        <p>
                            <i class="fab fa-instagram"></i>
                            <a class="text-white-50"
                                href="{{ $bio->ig_link }}"
                                target="_blank">
                                {{ $bio->ig_name }}
                            </a>
                        </p>
                        <p><i class="fas fa-clock"></i> <strong>Jam Operasional</strong><br>
                            {{ $bio->operation_time }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#hero-slider').owlCarousel({
                items: 1,
                loop: true,
                margin: 0,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayTimeout: 7000,
                autoplayHoverPause: true,
                animateOut: 'fadeOut',
                navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>']
            });

            $('#testimoni-slider').owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });
        });
    </script>
@endpush
