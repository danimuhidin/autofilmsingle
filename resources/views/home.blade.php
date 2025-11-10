@extends('layouts.app')

@section('title', 'Mantra Sakti Autofilm - Spesialis Kaca Film Mobil & Gedung')
@section('page-title', 'Dashboard')

@section('content')

    <section class="hero-carousel p-0" id="home">
        <div class="owl-carousel owl-theme" id="hero-slider">
            <div class="item"
                style="background-image: url('{{ asset('images/hero1.webp') }}');">
                <div class="hero-overlay">
                    <div class="container hero-content">
                        <h1>Privasi dan Perlindungan Terbaik</h1>
                        <p>Rasakan kenyamanan berkendara premium dengan kaca film terbaik.</p>
                        <a href="#kontak-outlet" class="btn btn-merah">Konsultasi Gratis</a>
                    </div>
                </div>
            </div>
            <div class="item"
                style="background-image: url('{{ asset('images/hero2.webp') }}');">
                <div class="hero-overlay">
                    <div class="container hero-content">
                        <h1>Solusi Efisiensi Energi Gedung</h1>
                        <p>Kurangi panas dan hemat biaya operasional dengan kaca film arsitektural.</p>
                        <a href="#kontak-outlet" class="btn btn-merah">Hubungi Tim Proyek</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang-kami" class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0 pr-lg-4">
                    <img src="{{ asset('images/hq.jpg') }}" class="img-fluid rounded" alt="Gedung Mantra Sakti Autofilm">
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-3" style="color: var(--warna-kuning-aksen);">Selamat Datang di Mantra Sakti Autofilm
                    </h3>
                    <h4 class="mb-4">Ahlinya Kaca Film Mobil Dan Gedung</h4>
                    <p class="text-white-50">Mantra Sakti Autofilm salah satu spesialis kaca film mobil & gedung. Kami
                        menerima jasa panggilan pemasangan kaca film mobil & gedung , dengan menyediakan berbagai merk di
                        antaranya Solar Gard, Llumar, Perfections, Ilumi, 3M Autofilm, Ice View, N1, Una Gard dan merk
                        lainnya yang sesuai dengan keinginan anda. Produk yang di sediakan 100% Original dan tentunya dengan
                        kualitas terbaik.</p>
                    <p class="text-white-50">Kami tidak hanya melayani pelanggan retail, tetapi juga menjadi mitra
                        terpercaya bagi jaringan outlet kami yang tersebar di berbagai kota. Percayakan kebutuhan privasi,
                        keamanan, dan estetika Anda pada ahlinya.</p>
                    {{-- <a href="#produk-kami" class="btn btn-outline-warning mt-3">Lihat Produk Kami</a> --}}
                </div>
            </div>
        </div>
    </section>

    <section id="produk-kami" class="section-padding" style="background-color: var(--warna-latar-sekunder);">
        <div class="container">
            <div class="section-title">
                <h2>Produk & Layanan Kami</h2>
                <p>Solusi lengkap untuk kebutuhan kaca film Anda.</p>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-5 col-md-6 mb-4">
                    <div class="card produk-card h-100">
                        <img src="{{ asset('images/pasang-mobil.webp') }}" class="card-img-top"
                            alt="Kaca Film Mobil">
                        <div class="card-body">
                            <h4 class="card-title w-100 text-center mb-2"><b>Kaca Film Mobil</b></h4>
                            <p class="card-text text-center text-white-50">Tingkatkan privasi, tolak panas UV, dan tampil lebih elegan.
                                Tersedia berbagai brand premium dengan tingkat kegelapan bervariasi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 mb-4">
                    <div class="card produk-card h-100">
                        <img src="{{ asset('images/pasang-gedung.webp') }}" class="card-img-top"
                            alt="Kaca Film Gedung">
                        <div class="card-body">
                            <h4 class="card-title w-100 text-center mb-2"><b>Kaca Film Gedung</b></h4>
                            <p class="card-text text-center text-white-50">Solusi hemat energi untuk kantor, ruko, dan residensial.
                                Menjaga suhu ruangan tetap sejuk dan melindungi interior dari pudar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="keunggulan" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Mengapa Memilih Mantra Sakti?</h2>
                <p>Komitmen kami adalah kepuasan dan jaminan kualitas.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="keunggulan-item">
                        <div class="icon"><i class="fas fa-shield-alt"></i></div>
                        <h4>Garansi Resmi</h4>
                        <p class="text-white-50">Jaminan garansi produk resmi hingga 7 tahun dari brand partner terkemuka.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="keunggulan-item">
                        <div class="icon"><i class="fas fa-users-cog"></i></div>
                        <h4>Teknisi Profesional</h4>
                        <p class="text-white-50">Tim installer kami terlatih dan tersertifikasi untuk hasil pemasangan
                            terbaik.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="keunggulan-item">
                        <div class="icon"><i class="fas fa-thumbs-up"></i></div>
                        <h4>Produk Original</h4>
                        <p class="text-white-50">Kami hanya menyediakan produk 100% asli dan berkualitas tinggi dari brand
                            terpercaya.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="keunggulan-item">
                        <div class="icon"><i class="fas fa-check-circle"></i></div>
                        <h4>Hasil Presisi</h4>
                        <p class="text-white-50">Pemasangan detail dan rapi tanpa celah, gelembung, atau cacat sedikitpun.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="galeri" class="section-padding" style="background-color: var(--warna-latar-sekunder);">
        <div class="container">
            <div class="section-title">
                <h2>Portofolio Pemasangan Kami</h2>
                <p>Lihat hasil kerja presisi dari tim profesional kami.</p>
            </div>

            <div class="row mb-5">
                <div class="col-lg-4 col-md-6 col-6">
                    <a href="https://placehold.co/600x400/888/FFF?text=Galeri+1" class="gallery-img">
                        <img src="https://placehold.co/600x400/888/FFF?text=Galeri+1" class="img-fluid" alt="Galeri 1">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <a href="https://placehold.co/600x400/888/FFF?text=Galeri+2" class="gallery-img">
                        <img src="https://placehold.co/600x400/888/FFF?text=Galeri+2" class="img-fluid" alt="Galeri 2">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <a href="https://placehold.co/600x400/888/FFF?text=Galeri+3" class="gallery-img">
                        <img src="https://placehold.co/600x400/888/FFF?text=Galeri+3" class="img-fluid" alt="Galeri 3">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <a href="https://placehold.co/600x400/888/FFF?text=Galeri+4" class="gallery-img">
                        <img src="https://placehold.co/600x400/888/FFF?text=Galeri+4" class="img-fluid" alt="Galeri 4">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <a href="https://placehold.co/600x400/888/FFF?text=Galeri+5" class="gallery-img">
                        <img src="https://placehold.co/600x400/888/FFF?text=Galeri+5" class="img-fluid" alt="Galeri 5">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <a href="https://placehold.co/600x400/888/FFF?text=Galeri+6" class="gallery-img">
                        <img src="https://placehold.co/600x400/888/FFF?text=Galeri+6" class="img-fluid" alt="Galeri 6">
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0 video-wrapper">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 video-wrapper">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimoni" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Apa Kata Pelanggan Kami</h2>
                <p>Kepuasan mereka adalah prioritas utama kami.</p>
            </div>
            <div class="owl-carousel owl-theme" id="testimoni-slider">
                <div class="item">
                    <div class="testimoni-item">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="quote">"Pemasangan sangat rapi dan presisi. Mobil jadi jauh lebih adem dan tampilannya
                            makin gagah. Pelayanan di HQ sangat profesional!"</p>
                        <h5 class="author">Budi Setiawan</h5>
                    </div>
                </div>
                <div class="item">
                    <div class="testimoni-item">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="quote">"Konsultasi untuk kaca film gedung sangat membantu. Tim Mantra Sakti memberikan
                            solusi yang tepat untuk kantor kami. Sangat direkomendasikan."</p>
                        <h5 class="author">Citra Lestari</h5>
                    </div>
                </div>
                <div class="item">
                    <div class="testimoni-item">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="quote">"Produk 100% original, garansi resmi jelas. Teknisi ramah dan sangat teliti.
                            Tidak salah pilih Mantra Sakti sebagai pusatnya."</p>
                        <h5 class="author">Andi Wijaya</h5>
                    </div>
                </div>
                <div class="item">
                    <div class="testimoni-item">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="quote">"Pelayanan cepat dan hasilnya memuaskan. Dari sekian banyak tempat, di sinilah
                            yang paling terpercaya kualitas dan orisinalitasnya."</p>
                        <h5 class="author">Rina Maheswari</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="partner" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Brand Partner Resmi Kami</h2>
                <p>Kami hanya bekerja dengan brand terbaik dan terpercaya.</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-4 col-6 partner-logo">
                    <img src="https://placehold.co/150x80/eee/aaa?text=Brand+1" alt="Partner 1" class="img-fluid">
                </div>
                <div class="col-lg-2 col-md-4 col-6 partner-logo">
                    <img src="https://placehold.co/150x80/eee/aaa?text=Brand+2" alt="Partner 2" class="img-fluid">
                </div>
                <div class="col-lg-2 col-md-4 col-6 partner-logo">
                    <img src="https://placehold.co/150x80/eee/aaa?text=Brand+3" alt="Partner 3" class="img-fluid">
                </div>
                <div class="col-lg-2 col-md-4 col-6 partner-logo">
                    <img src="https://placehold.co/150x80/eee/aaa?text=Brand+4" alt="Partner 4" class="img-fluid">
                </div>
                <div class="col-lg-2 col-md-4 col-6 partner-logo">
                    <img src="https://placehold.co/150x80/eee/aaa?text=Brand+5" alt="Partner 5" class="img-fluid">
                </div>
                <div class="col-lg-2 col-md-4 col-6 partner-logo">
                    <img src="https://placehold.co/150x80/eee/aaa?text=Brand+6" alt="Partner 6" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="kontak-outlet" class="section-padding" style="background-color: var(--warna-latar-sekunder);">
        <div class="container">
            <div class="section-title">
                <h2>Hubungi Kami & Temukan Outlet</h2>
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
                    <p class="text-white-50">Hubungi kami langsung di kantor pusat untuk layanan korporat, kemitraan, atau
                        konsultasi proyek skala besar.</p>
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Raya Pusat No. 123, Jakarta, Indonesia</p>
                        <p><i class="fas fa-phone-alt"></i> (021) 1234 5678</p>
                        <p><i class="fas fa-envelope"></i> hq@mantrasakti.com</p>
                        <p><i class="fas fa-clock"></i> <strong>Jam Operasional HQ:</strong><br>
                            Senin - Jumat: 08.00 - 17.00<br>
                            Sabtu: 08.00 - 14.00<br>
                            Minggu/Libur: Tutup</p>
                    </div>
                </div>
            </div>

            <div id="daftar-outlet" class="pt-5">
                <h3 class="text-center mb-4">Jaringan Outlet Resmi Kami</h3>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card outlet-card h-100">
                            <div class="card-body">
                                <h5 class="card-title" style="color: var(--warna-kuning-aksen);">
                                    Mantra Sakti - Jakarta
                                </h5>
                                <p class="card-text text-white-50">
                                    Jl. Otomotif Raya No. 1, Kelapa Gading, Jakarta Utara
                                </p>
                                <p class="card-text text-white-50">
                                    <i class="fas fa-phone-alt"></i> (021) 9876 5432
                                </p>
                                <a href="#" class="btn btn-kuning btn-sm">
                                    Lihat Google Maps
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card outlet-card h-100">
                            <div class="card-body">
                                <h5 class="card-title" style="color: var(--warna-kuning-aksen);">
                                    Mantra Sakti - Surabaya
                                </h5>
                                <p class="card-text text-white-50">
                                    Jl. Raya Darmo No. 45, Wonokromo, Surabaya
                                </p>
                                <p class="card-text text-white-50">
                                    <i class="fas fa-phone-alt"></i> (031) 1234 5678
                                </p>
                                <a href="#" class="btn btn-kuning btn-sm">
                                    Lihat Google Maps
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card outlet-card h-100">
                            <div class="card-body">
                                <h5 class="card-title" style="color: var(--warna-kuning-aksen);">
                                    Mantra Sakti - Bandung
                                </h5>
                                <p class="card-text text-white-50">
                                    Jl. Sukajadi No. 99, Sukasari, Bandung
                                </p>
                                <p class="card-text text-white-50">
                                    <i class="fas fa-phone-alt"></i> (022) 8765 4321
                                </p>
                                <a href="#" class="btn btn-kuning btn-sm">Lihat Google Maps</a>
                            </div>
                        </div>
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
