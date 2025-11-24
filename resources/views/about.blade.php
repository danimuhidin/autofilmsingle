@extends('layouts.app')

@section('title', 'Mantra Sakti Autofilm - Spesialis Kaca Film Mobil & Gedung')
@section('page-title', 'Dashboard')

@section('content')

    <section class="page-hero container-fluid" style="background-image: url({{ asset('images/hero/tentang.png') }});">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="display-4 font-weight-bold">Tentang Mantra Sakti Autofilm</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <h4 class="mb-3" style="color: var(--warna-kuning-aksen);">
                        Ahlinya Kaca Film Mobil Dan Gedung
                    </h4>
                    <h4 class="mb-3" style="color: var(--warna-kuning-aksen);">

                    </h4>
                    <p>Perusahaan spesialis kaca film untuk otomotif dan gedung yang berdiri sejak Mei 2022. Dengan
                        pengalaman dan kepercayaan dari ribuan pelanggan,
                        kami hadir sebagai authorized dealer resmi berbagai merek
                        kaca film ternama yaitu Perfections Window Film, Llumar
                        Indonesia, 3M Autofilm Indonesia, Ilumi Indonesia, Una Gard,
                        dan Ice View Indonesia.</p>
                    <p>Kami mengutamakan kualitas
                        produk, keahlian teknisi, dan pelayanan prima kepada setiap
                        pelanggana.Perfections Window Film, Llumar Indonesia, 3M
                        Autofilm Indonesia, Ilumi Indonesia, Una Gard, dan Ice View
                        Indonesia.</p>
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0 pl-lg-4">
                    <img src="{{ asset('images/sertifikat.png') }}" alt="Workshop Mantra Sakti Autofilm"
                        class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background-color: var(--warna-latar-sekunder);">
        <div class="container">
            <div class="row">
                <!-- Kolom Kiri: Visi -->
                <div class="col-md-6 text-center text-md-left mb-5 mb-md-0">
                    <i class="fas fa-eye vision-mission-icon"></i>
                    <h3 class="font-weight-bold mb-3">Visi Kami</h3>
                    <p>Komitmen kami adalah menjadi layanan
                        kaca film terdepan di indonesia dengan
                        menyediakan produk kaca film berkualitas
                        tinggi, pelayanan pelangan yang superior,
                        dan harga yang kompetitif.</p>
                </div>
                <!-- Kolom Kanan: Misi -->
                <div class="col-md-6 text-center text-md-left">
                    <i class="fas fa-bullseye vision-mission-icon"></i>
                    <h3 class="font-weight-bold mb-3">Misi Kami</h3>
                    <ul class="mission-list">
                        <li>Memberikan pelayabab ramah dan professional
                            kepada pelangan dengan optimal.</li>
                        <li>Memberikan informasi yang akurat serta memberikan
                            saran dan rekomendasi yang tepat sesuai dengan
                            kebutuhan pelanggan.</li>
                        <li>Menjaga kualias kaca film dengan mengikuti standar
                            yang ketat dalam pemasangan.</li>
                        <li>Membangun reputasi sebagai penyedia layanan kaca
                            film yang dapat di percaya.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Nilai-Nilai Inti Kami</h2>
                <p>
                    Pilar yang menjadi fondasi kepercayaan pelanggan kami.
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-box">
                        <span class="feature-icon"><i class="fas fa-certificate"></i></span>
                        <h5>Authorizerd Dealer</h5>
                        <p>Kami adalah dealre resmi untuk produk-produk kaca film terkemuka. Melalui kerjasama resmi dengan
                            produsen, kami memiliki akses langsung ke produk asli berkualitas tinggi, keaslian produk kami
                            dijamin, memberikan Anda keyakinan akan kualitas yang bertanding.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-box">
                        <span class="feature-icon"><i class="fas fa-shield-alt"></i></span>
                        <h5>Garansi Resmi</h5>
                        <p>Kami memberikan garansi resmi atas produk dan layanan pemasangan kami. Ini menjamin bahwa Anda
                            mendapatkan layanan purna jual yang memadai, serta jaminan bahwa produk yang Anda beli
                            terlindung dengan
                            baik.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-box">
                        <span class="feature-icon"><i class="fas fa-user-cog"></i></span>
                        <h5>Teknisi Profesional</h5>
                        <p>Tim kami terdiri dari teknisi-teknisi berpengalaman dan terlatih dengan baik dalam pemasangan
                            kaca film. Mereka menguasai teknik pemasangan yang tepat dan memastikan setiap langkah proses
                            pemasangan dilakukan dengan presisi tinggi, sehingga memberikan hasil yang memuaskan.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-box">
                        <span class="feature-icon"><i class="fas fa-thumbs-up"></i></span>
                        <h5>Produk Original 100%</h5>
                        <p>Kami menawarkan kaca film yang sepenuhnya asli dengan standar kualitas yang diberikan oleh
                            produsen. Produk ini dirancang untuk memberikan perlindungan maksimal dan kenyamanan Bagi
                            Pelanggan kami.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-box">
                        <span class="feature-icon"><i class="fas fa-ruler-combined"></i></span>
                        <h5>Hasil Presisi</h5>
                        <p>Detail adalah kunci. Kami menggunakan SOP ketat dan alat modern untuk menjamin hasil pemasangan
                            yang rapi, bersih, dan sempurna. Setiap sudut dan lekukan diperhatikan dengan seksama untuk
                            memastikan tampilan akhir yang profesional dan estetis.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-box">
                        <span class="feature-icon"><i class="fas fa-dollar-sign"></i></span>
                        <h5>Harga Kompetitif</h5>
                        <p>Kami Berkomitmen untuk memberikan harga yang kompetitif tanpa memngorbankan kualitas. Kami
                            mengerti bahwa pelanggan mencari nilai terbaik untuk uang mereka, dan kami menawarkan harga yang
                            bersaing untuk memberikan solusi kaca film yang berkualitas tanpa menguras kantong.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="section-padding section-bg-dark">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="font-weight-bold">Tim Profesional Kami</h2>
                    <p class="lead" style="color: #ccc;">Wajah di balik layanan premium Mantra Sakti Autofilm.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- Tim 1: Founder -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card team-card h-100">
                        <img src="https://placehold.co/400x400/555/777?text=Budi+S." class="card-img-top"
                            alt="Foto Budi Santoso">
                        <div class="card-body">
                            <h5 class="card-title">Budi Santoso</h5>
                            <h6 class="card-subtitle mb-2">Founder & CEO</h6>
                            <p class="card-text">"Kepuasan Anda adalah prioritas utama kami. Kami tidak hanya menjual
                                produk, kami menjual kepercayaan."</p>
                        </div>
                    </div>
                </div>
                <!-- Tim 2: Lead Technician -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card team-card h-100">
                        <img src="https://placehold.co/400x400/555/777?text=Andi+P." class="card-img-top"
                            alt="Foto Andi Permana">
                        <div class="card-body">
                            <h5 class="card-title">Andi Permana</h5>
                            <h6 class="card-subtitle mb-2">Lead Technician</h6>
                            <p class="card-text">"Presisi dan kebersihan adalah tanda tangan saya di setiap mobil yang kami
                                kerjakan. Tidak ada kompromi."</p>
                        </div>
                    </div>
                </div>
                <!-- Tim 3: Customer Relations -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card team-card h-100">
                        <img src="https://placehold.co/400x400/555/777?text=Citra+L." class="card-img-top"
                            alt="Foto Citra Lestari">
                        <div class="card-body">
                            <h5 class="card-title">Citra Lestari</h5>
                            <h6 class="card-subtitle mb-2">Customer Relations</h6>
                            <p class="card-text">"Kami di sini untuk mendengarkan dan memberikan solusi terbaik untuk
                                kebutuhan kenyamanan dan keamanan Anda."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
