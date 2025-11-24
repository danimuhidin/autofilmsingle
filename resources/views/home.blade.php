@extends('layouts.app')

@section('title', 'Mantra Sakti Autofilm - Spesialis Kaca Film Mobil & Gedung')
@section('page-title', 'Dashboard')

@section('content')

    <section class="hero-carousel p-0" id="home">
        <div class="owl-carousel owl-theme" id="hero-slider">
            <div class="item" style="background-image: url('{{ asset('images/car.jpg') }}');">
                <div class="hero-overlay">
                    <div class="container hero-content">
                        <h1>Privasi dan Perlindungan Terbaik</h1>
                        <p>Rasakan kenyamanan berkendara premium dengan kaca film terbaik.</p>
                        <a href="#kontak-outlet" class="btn btn-merah">Konsultasi Gratis</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url('{{ asset('images/hero2.webp') }}');">
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

    <section id="tentang-kami" class="section-padding bg-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0 pr-lg-4">
                    <img src="{{ asset('images/pasang-mobil.webp') }}" class="img-fluid rounded"
                        alt="Gedung Mantra Sakti Autofilm">
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-3" style="color: var(--warna-kuning-aksen);">Selamat Datang di Mantra Sakti Autofilm
                    </h3>
                    <h4 class="mb-4">Ahlinya Kaca Film Mobil Dan Gedung</h4>
                    <p class="text-white-50">
                        Perusahaan spesialis kaca film untuk otomotif dan gedung yang berdiri sejak Mei 2022. Dengan
                        pengalaman dan kepercayaan dari ribuan pelanggan,
                        kami hadir sebagai authorized dealer resmi berbagai merek
                        kaca film ternama yaitu Perfections Window Film, Llumar
                        Indonesia, 3M Autofilm Indonesia, Ilumi Indonesia, Una Gard,
                        dan Ice View Indonesia.
                    </p>
                    <p class="text-white-50">
                        Kami tidak hanya melayani pelanggan retail, tetapi juga menjadi mitra terpercaya bagi jaringan
                        outlet kami yang tersebar di berbagai kota. Percayakan kebutuhan privasi, keamanan, dan estetika
                        Anda pada ahlinya.
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
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/outlet/bandung.png') }}">
                        <div class="card-body">
                            <h3 class="title">Mantra Sakti - Bandung</h3>
                            <p class="desc"> Jl. Mekar Puspita No.23, Cibaduyut, Kec. Bojongloa Kidul</p>
                            <div class="meta">
                                <a href="https://wa.me/6281244000805" target="_blank" class="me-2">
                                    <span>📞 0812-4400-0805</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/outlet/bekasi.png') }}">
                        <div class="card-body">
                            <h3 class="title">Mantra Sakti - Bekasi</h3>
                            <p class="desc"> Grand Wisata, Ruko AA 15 No.16, Lambangsari, Tambun Selatan</p>
                            <div class="meta">
                                <a href="https://wa.me/6281323230805" target="_blank" class="me-2">
                                    <span>📞 0813-2323-0805</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/outlet/tangerang.png') }}">
                        <div class="card-body">
                            <h3 class="title">Mantra Sakti - Tangerang</h3>
                            <p class="desc"> Ruko Mendrisio, Jl. Boulevard iL Lago No.68, Cihuni, Kec. Pagedangan</p>
                            <div class="meta">
                                <a href="https://wa.me/6282110002805" target="_blank" class="me-2">
                                    <span>📞 0821-1000-2805</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/outlet/cibubur.png') }}">
                        <div class="card-body">
                            <h3 class="title">Mantra Sakti - Cibubur</h3>
                            <p class="desc"> Jl Alternatif Cibubur, Cibubur Point Automotif Center Ruko Blok B5</p>
                            <div class="meta">
                                <a href="https://wa.me/6281211009805" target="_blank" class="me-2">
                                    <span>📞 0812-1100-9805</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
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
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card product-card h-100">
                        <img src="{{ asset('images/brand/3m.png') }}" class="card-img-top" alt="Logo 3M Autofilm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">3M Autofilm</h5>
                            <p class="card-text text-muted-light small">
                                Pelopor, menawarkan perlindungan panas & privasi superior dengan teknologi non-metalik
                                canggih.
                            </p>
                            <ul class="list-unstyled small my-2">
                                <li><i class="fas fa-sun fa-fw"></i> <strong>VLT (Kegelapan):</strong> 20% - 70%</li>
                                <li><i class="fas fa-shield-alt fa-fw"></i> <strong>UVR (Tolak Sinar UV):</strong> 99.9%
                                </li>
                                <li><i class="fas fa-thermometer-half fa-fw"></i> <strong>IRR (Tolak Panas):</strong>
                                    Hingga 62%</li>
                            </ul>
                            <a href="{{ URL::to('detail-produk/3m-autofilm') }}" class="btn btn-merah mt-auto">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card product-card h-100">
                        <img src="{{ asset('images/brand/ice.png') }}" class="card-img-top" alt="Logo Iceview">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Iceview</h5>
                            <p class="card-text text-muted-light small">
                                Kaca film berkualitas tinggi, fokus pada penolakan panas maksimal dan kejernihan pandangan
                                yang optimal.
                            </p>
                            <ul class="list-unstyled small my-2">
                                <li><i class="fas fa-sun fa-fw"></i> <strong>VLT (Kegelapan):</strong> 20% - 80%</li>
                                <li><i class="fas fa-shield-alt fa-fw"></i> <strong>UVR (Tolak Sinar UV):</strong> 99%</li>
                                <li><i class="fas fa-thermometer-half fa-fw"></i> <strong>IRR (Tolak Panas):</strong>
                                    Hingga 55%</li>
                            </ul>
                            <a href="{{ URL::to('detail-produk/iceview') }}" class="btn btn-merah mt-auto">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card product-card h-100">
                        <img src="{{ asset('images/brand/ilumi.png') }}" class="card-img-top"
                            alt="Logo Ilumi Window Film">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Ilumi Window Film</h5>
                            <p class="card-text text-muted-light small">
                                Menawarkan perlindungan UV yang baik dengan harga kompetitif, pilihan seimbang antara
                                performa dan biaya.
                            </p>
                            <ul class="list-unstyled small my-2">
                                <li><i class="fas fa-sun fa-fw"></i> <strong>VLT (Kegelapan):</strong> 20% - 80%</li>
                                <li><i class="fas fa-shield-alt fa-fw"></i> <strong>UVR (Tolak Sinar UV):</strong> 99%</li>
                                <li><i class="fas fa-thermometer-half fa-fw"></i> <strong>IRR (Tolak Panas):</strong>
                                    Hingga 55%</li>
                            </ul>
                            <a href="{{ URL::to('detail-produk/ilumi-window-film') }}"
                                class="btn btn-merah mt-auto">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card product-card h-100">
                        <img src="{{ asset('images/brand/llumar.png') }}" class="card-img-top" alt="Logo Llumar">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Llumar</h5>
                            <p class="card-text text-muted-light small">
                                Kaca film global teruji, dikenal karena daya tahan, kejernihan optik, dan tolak panas yang
                                konsisten.
                            </p>
                            <ul class="list-unstyled small my-2">
                                <li><i class="fas fa-sun fa-fw"></i> <strong>VLT (Kegelapan):</strong> 20% - 80%</li>
                                <li><i class="fas fa-shield-alt fa-fw"></i> <strong>UVR (Tolak Sinar UV):</strong> 99%</li>
                                <li><i class="fas fa-thermometer-half fa-fw"></i> <strong>IRR (Tolak Panas):</strong>
                                    Hingga 55%</li>
                            </ul>
                            <a href="{{ URL::to('detail-produk/llumar') }}" class="btn btn-merah mt-auto">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card product-card h-100">
                        <img src="{{ asset('images/brand/n1.png') }}" class="card-img-top" alt="Logo N1 Window Film">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">N1 Window Film</h5>
                            <p class="card-text text-muted-light small">
                                Pilihan ekonomis dengan performa dasar yang memadai, menolak panas harian dan memberikan
                                privasi.
                            </p>
                            <ul class="list-unstyled small my-2">
                                <li><i class="fas fa-sun fa-fw"></i> <strong>VLT (Kegelapan):</strong> 20% - 80%</li>
                                <li><i class="fas fa-shield-alt fa-fw"></i> <strong>UVR (Tolak Sinar UV):</strong> 99%</li>
                                <li><i class="fas fa-thermometer-half fa-fw"></i> <strong>IRR (Tolak Panas):</strong>
                                    Hingga 55%</li>
                            </ul>
                            <a href="{{ URL::to('detail-produk/n1-window-film') }}" class="btn btn-merah mt-auto">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card product-card h-100">
                        <img src="{{ asset('images/brand/perfect.png') }}" class="card-img-top" alt="Logo Perfections">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Perfections</h5>
                            <p class="card-text text-muted-light small">
                                Menyediakan kaca film yang menggabungkan estetika premium dengan kemampuan tolak panas
                                tinggi.
                            </p>
                            <ul class="list-unstyled small my-2">
                                <li><i class="fas fa-sun fa-fw"></i> <strong>VLT (Kegelapan):</strong> 20% - 80%</li>
                                <li><i class="fas fa-shield-alt fa-fw"></i> <strong>UVR (Tolak Sinar UV):</strong> 99%</li>
                                <li><i class="fas fa-thermometer-half fa-fw"></i> <strong>IRR (Tolak Panas):</strong>
                                    Hingga 55%</li>
                            </ul>
                            <a href="{{ URL::to('detail-produk/perfections') }}" class="btn btn-merah mt-auto">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card product-card h-100">
                        <img src="{{ asset('images/brand/solar.png') }}" class="card-img-top"
                            alt="Logo Solar Gard Premium">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Solar Gard Premium</h5>
                            <p class="card-text text-muted-light small">
                                Merek terkemuka, menawarkan rangkaian lengkap solusi tolak panas, keamanan, dan perlindungan
                                interior.
                            </p>
                            <ul class="list-unstyled small my-2">
                                <li><i class="fas fa-sun fa-fw"></i> <strong>VLT (Kegelapan):</strong> 20% - 80%</li>
                                <li><i class="fas fa-shield-alt fa-fw"></i> <strong>UVR (Tolak Sinar UV):</strong> 99%</li>
                                <li><i class="fas fa-thermometer-half fa-fw"></i> <strong>IRR (Tolak Panas):</strong>
                                    Hingga 55%</li>
                            </ul>
                            <a href="{{ URL::to('detail-produk/solar-gard-premium') }}"
                                class="btn btn-merah mt-auto">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card product-card h-100">
                        <img src="{{ asset('images/brand/una.png') }}" class="card-img-top" alt="Logo Una Gard">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Una Gard</h5>
                            <p class="card-text text-muted-light small">
                                Kaca film nano-keramik modern yang fokus pada tolak panas tanpa mengganggu sinyal
                                elektronik.
                            </p>
                            <ul class="list-unstyled small my-2">
                                <li><i class="fas fa-sun fa-fw"></i> <strong>VLT (Kegelapan):</strong> 20% - 80%</li>
                                <li><i class="fas fa-shield-alt fa-fw"></i> <strong>UVR (Tolak Sinar UV):</strong> 99%</li>
                                <li><i class="fas fa-thermometer-half fa-fw"></i> <strong>IRR (Tolak Panas):</strong>
                                    Hingga 55%</li>
                            </ul>
                            <a href="{{ URL::to('detail-produk/una-gard') }}" class="btn btn-merah mt-auto">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card product-card h-100">
                        <img src="{{ asset('images/brand/vkool.png') }}" class="card-img-top" alt="Logo V-Kool">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">V-Kool</h5>
                            <p class="card-text text-muted-light small">
                                Pelopor kaca film spektral selektif, terkenal akan tolak panas tinggi dengan transmisi
                                cahaya tampak yang jernih.
                            </p>
                            <ul class="list-unstyled small my-2">
                                <li><i class="fas fa-sun fa-fw"></i> <strong>VLT (Kegelapan):</strong> 40% - 70%</li>
                                <li><i class="fas fa-shield-alt fa-fw"></i> <strong>UVR (Tolak Sinar UV):</strong> 99.9%
                                </li>
                                <li><i class="fas fa-thermometer-half fa-fw"></i> <strong>IRR (Tolak Panas):</strong>
                                    Hingga 70%</li>
                            </ul>
                            <a href="{{ URL::to('detail-produk/v-kool') }}" class="btn btn-merah mt-auto">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>
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
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="keunggulan-item">
                        <div class="icon"><i class="fas fa-certificate"></i></div>
                        <h4>Authorizerd Dealer</h4>
                        <p class="text-white-50">
                            Kami adalah dealre resmi untuk produk-produk kaca film terkemuka. Melalui kerjasama resmi dengan
                            produsen, kami memiliki akses langsung ke produk asli berkualitas tinggi, keaslian produk kami
                            dijamin, memberikan Anda keyakinan akan kualitas yang bertanding.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="keunggulan-item">
                        <div class="icon"><i class="fas fa-shield-alt"></i></div>
                        <h4>Teknisi Profesional</h4>
                        <p class="text-white-50">
                            Kami memberikan garansi resmi atas produk dan layanan pemasangan kami. Ini menjamin bahwa Anda
                            mendapatkan layanan purna jual yang memadai, serta jaminan bahwa produk yang Anda beli
                            terlindung dengan baik.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="keunggulan-item">
                        <div class="icon"><i class="fas fa-user-cog"></i></div>
                        <h4>Teknisi Profesional</h4>
                        <p class="text-white-50">
                            Tim kami terdiri dari teknisi-teknisi berpengalaman dan terlatih dengan baik dalam pemasangan
                            kaca film. Mereka menguasai teknik pemasangan yang tepat dan memastikan setiap langkah proses
                            pemasangan dilakukan dengan presisi tinggi, sehingga memberikan hasil yang memuaskan.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="keunggulan-item">
                        <div class="icon"><i class="fas fa-check-circle"></i></div>
                        <h4>Produk Original 100%</h4>
                        <p class="text-white-50">
                            Kami menawarkan kaca film yang sepenuhnya asli dengan standar kualitas yang diberikan oleh
                            produsen. Produk ini dirancang untuk memberikan perlindungan maksimal dan kenyamanan Bagi
                            Pelanggan kami.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="keunggulan-item">
                        <div class="icon"><i class="fas fa-ruler-combined"></i></div>
                        <h4>Hasil Presisi</h4>
                        <p class="text-white-50">
                            Detail adalah kunci. Kami menggunakan SOP ketat dan alat modern untuk menjamin hasil pemasangan
                            yang rapi, bersih, dan sempurna. Setiap sudut dan lekukan diperhatikan dengan seksama untuk
                            memastikan tampilan akhir yang profesional dan estetis.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="keunggulan-item">
                        <div class="icon"><i class="fas fa-dollar-sign"></i></div>
                        <h4>Harga Kompetitif</h4>
                        <p class="text-white-50">
                            Kami Berkomitmen untuk memberikan harga yang kompetitif tanpa memngorbankan kualitas. Kami
                            mengerti bahwa pelanggan mencari nilai terbaik untuk uang mereka, dan kami menawarkan harga yang
                            bersaing untuk memberikan solusi kaca film yang berkualitas tanpa menguras kantong.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="galeri" class="section-padding bg-dark">
        <div class="container">
            <div class="section-title">
                <h2>Portofolio Pemasangan Kami</h2>
                <p>Lihat hasil kerja presisi dari tim profesional kami.</p>
            </div>

            <div class="row gallery-container mb-3">

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper">
                    <div class="gallery-item">
                        <a href="{{ asset('images/galeri/g1.jpg') }}" data-lightbox="galeri-portofolio"
                            data-title="Pemasangan Kaca Film Llumar">
                            <img src="{{ asset('images/galeri/g1.jpg') }}" class="img-fluid" alt="Pemasangan Llumar">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper">
                    <div class="gallery-item">
                        <a href="{{ asset('images/galeri/g2.jpg') }}" data-lightbox="galeri-portofolio"
                            data-title="Pemasangan Kaca Film Di Kaca Depan">
                            <img src="{{ asset('images/galeri/g2.jpg') }}" class="img-fluid"
                                alt="Pemasangan Kaca Film Depan">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper">
                    <div class="gallery-item">
                        <a href="{{ asset('images/galeri/g3.jpg') }}" data-lightbox="galeri-portofolio"
                            data-title="Pemasangan Kaca Film 3M Cristalline">
                            <img src="{{ asset('images/galeri/g3.jpg') }}" class="img-fluid"
                                alt="Pemasangan Kaca Film 3M Cristalline">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper">
                    <div class="gallery-item">
                        <a href="{{ asset('images/galeri/g7.jpg') }}" data-lightbox="galeri-portofolio"
                            data-title="Pemasangan Solar Gard">
                            <img src="{{ asset('images/galeri/g7.jpg') }}" class="img-fluid"
                                alt="Pemasangan Solar Gard">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper">
                    <div class="gallery-item">
                        <a href="{{ asset('images/galeri/g5.jpg') }}" data-lightbox="galeri-portofolio"
                            data-title="Pemasangan Kaca Film Ilumi">
                            <img src="{{ asset('images/galeri/g5.jpg') }}" class="img-fluid"
                                alt="Pemasangan Kaca Film Ilumi">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper">
                    <div class="gallery-item">
                        <a href="{{ asset('images/galeri/g6.jpg') }}" data-lightbox="galeri-portofolio"
                            data-title="Pemasangan Kaca Film di Kaca Samping">
                            <img src="{{ asset('images/galeri/g6.jpg') }}" class="img-fluid"
                                alt="Pemasangan Kaca Film di Kaca Samping">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0 video-wrapper">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lfI6FlKeUnA"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 video-wrapper">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LXmXIq9rKhM"
                            allowfullscreen></iframe>
                    </div>
                </div>
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

    <section id="partner" class="section-padding bg-dark">
        <div class="container">
            <div class="section-title">
                <h2>Brand Partner Resmi Kami</h2>
                <p>Kami hanya bekerja dengan brand terbaik dan terpercaya.</p>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-2 col-md-4 col-6 partner-logo">
                    <img src="{{ asset('images/brand/3m.png') }}" alt="Partner 1" class="img-fluid">
                </div>
                <div class="col-lg-2 col-md-4 col-6 partner-logo">
                    <img src="{{ asset('images/brand/ice.png') }}" alt="Partner 2" class="img-fluid">
                </div>
                <div class="col-lg-2 col-md-4 col-6 partner-logo">
                    <img src="{{ asset('images/brand/ilumi.png') }}" alt="Partner 3" class="img-fluid">
                </div>
                <div class="col-lg-2 col-md-4 col-6 partner-logo">
                    <img src="{{ asset('images/brand/llumar.png') }}" alt="Partner 4" class="img-fluid">
                </div>
                <div class="col-lg-2 col-md-4 col-6 partner-logo">
                    <img src="{{ asset('images/brand/n1.png') }}" alt="Partner 5" class="img-fluid">
                </div>
                <div class="col-lg-2 col-md-4 col-6 partner-logo">
                    <img src="{{ asset('images/brand/solar.png') }}" alt="Partner 6" class="img-fluid">
                </div>
                <div class="col-lg-2 col-md-4 col-6 partner-logo">
                    <img src="{{ asset('images/brand/perfect.png') }}" alt="Partner 6" class="img-fluid">
                </div>
                <div class="col-lg-2 col-md-4 col-6 partner-logo">
                    <img src="{{ asset('images/brand/una.png') }}" alt="Partner 6" class="img-fluid">
                </div>
                <div class="col-lg-2 col-md-4 col-6 partner-logo">
                    <img src="{{ asset('images/brand/vkool.png') }}" alt="Partner 6" class="img-fluid">
                </div>
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
                            Jl. Mekar Puspita No.23, Cibaduyut, Kec. Bojongloa Kidul,
                            Kota Bandung, Jawa Barat 40236, Bandung, Jawa Barat 40236
                        </p>
                        <p>
                            <i class="fas fa-phone-alt"></i>
                            <a class="text-white-50" href="https://wa.me/6281244000805" target="_blank">
                                0812-4400-0805
                            </a>
                        </p>
                        <p>
                            <i class="fab fa-instagram"></i>
                            <a class="text-white-50"
                                href="https://www.instagram.com/mantrasaktiautofilm?igshid=ZmVmZTY5ZGE%3D"
                                target="_blank">
                                @mantrasaktiautofilm
                            </a>
                        </p>
                        <p><i class="fas fa-clock"></i> <strong>Jam Operasional</strong><br>
                            Senin - Jumat: 08.00 - 17.00<br>
                            Sabtu: 08.00 - 14.00<br>
                            Minggu/Libur: Tutup</p>
                    </div>
                </div>
            </div>

            {{-- <div id="daftar-outlet" class="pt-5">
                <h3 class="text-center mb-4">Jaringan Outlet Resmi Kami</h3>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card outlet-card h-100">
                            <div class="card-body">
                                <h5 class="card-title mb-2" style="color: var(--warna-kuning-aksen);">
                                    <b>Mantra Sakti - Bekasi</b>
                                </h5>
                                <p class="card-text text-white-50">
                                    Grand Wisata, Ruko AA 15 No.16, Lambangsari, Tambun Selatan, Bekasi Regency, West Java
                                    17510
                                </p>
                                <p class="card-text text-white-50">
                                    <i class="fas fa-phone-alt"></i> 0813-2323-0805
                                </p>
                                <a target="_blank"
                                    href="https://www.google.com/maps?ll=-6.283755,107.043247&z=20&t=m&hl=id&gl=US&mapclient=embed&q=Grand+Wisata,+Ruko+AA+15+No.16,+Lambangsari,+Tambun+Selatan,+Bekasi+Regency,+West+Java+17510,+Indonesia"
                                    class="btn btn-kuning btn-sm">
                                    Lihat Google Maps
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card outlet-card h-100">
                            <div class="card-body">
                                <h5 class="card-title mb-2" style="color: var(--warna-kuning-aksen);">
                                    <b>Mantra Sakti - Tangerang</b>
                                </h5>
                                <p class="card-text text-white-50">
                                    Ruko Mendrisio, Jl. Boulevard iL Lago No.68, Cihuni, Kec. Pagedangan, Kabupaten
                                    Tangerang, Banten 15334
                                </p>
                                <p class="card-text text-white-50">
                                    <i class="fas fa-phone-alt"></i> 0821-1000-2805
                                </p>
                                <a target="_blank"
                                    href="https://www.google.com/maps?ll=-6.26797,106.630905&z=19&t=m&hl=id&gl=US&mapclient=embed&q=Ruko+Mendrisio,+Jl.+Boulevard+iL+Lago+No.68,+Cihuni,+Kec.+Pagedangan,+Kabupaten+Tangerang,+Banten+15334,+Indonesia"
                                    class="btn btn-kuning btn-sm">
                                    Lihat Google Maps
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card outlet-card h-100">
                            <div class="card-body">
                                <h5 class="card-title mb-2" style="color: var(--warna-kuning-aksen);">
                                    <b>Mantra Sakti - Cibubur</b>
                                </h5>
                                <p class="card-text text-white-50">
                                    Jl Alternatif Cibubur, Cibubur Point Automotif Center Ruko Blok B5, Kota Depok, Jawa
                                    Barat 16454
                                </p>
                                <p class="card-text text-white-50">
                                    <i class="fas fa-phone-alt"></i> 0812-1100-9805
                                </p>
                                <a target="_blank"
                                    href="https://www.google.com/maps?ll=-6.376698,106.897967&z=21&t=m&hl=id&gl=US&mapclient=embed&q=Jl+Alternatif+Cibubur,+Cibubur+Point+Automotif+Center+Ruko+Blok+B5,+Kota+Depok,+Jawa+Barat+16454,+Indonesia"
                                    class="btn btn-kuning btn-sm">Lihat Google Maps</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
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
