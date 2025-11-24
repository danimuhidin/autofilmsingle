@extends('layouts.app')

@section('title', 'Mantra Sakti Autofilm - Spesialis Kaca Film Mobil & Gedung')
@section('page-title', 'Dashboard')

@section('content')
    <section class="page-hero container-fluid" style="background-image: url({{ asset('images/hero/brand.png') }});">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="display-4 font-weight-bold">Produk Kaca Film</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Produk</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="deskripsi-kategori py-md-5">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0 pr-md-3">
                    <h3 class="mb-4">Solusi Privasi dan Perlindungan Total Untuk Mobil & Gedung</h3>
                    <p class="text-muted-light">
                        Kaca film bukan hanya soal gaya atau membuat mobil & gedung terlihat lebih gelap. Ini adalah
                        investasi vital
                        untuk kenyamanan, privasi, dan keamanan Anda. Dengan teknologi canggih, kaca film modern memberikan
                        perlindungan maksimal.
                    </p>
                    <p>
                        Di Mantra Sakti Autofilm, kami menyediakan rangkaian produk kaca film premium yang dirancang khusus
                        untuk iklim tropis Indonesia. Produk kami menawarkan penolakan panas (TSER) superior, perlindungan
                        99.9% terhadap sinar UV yang berbahaya, serta berbagai tingkat kegelapan (VLT) untuk menyesuaikan
                        kebutuhan privasi Anda tanpa mengorbankan visibilitas di malam hari.
                    </p>
                </div>
                <div class="col-lg-5 text-center d-none d-lg-block">
                    <div class="icon-wrapper">
                        <img src="{{ asset('images/window-car.png') }}" alt="Icon Kaca Film Mobil" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="daftar-produk py-5">
        <div class="container py-4">
            <div class="section-title">
                <h2>Pilihan Produk Kaca Film Untuk Mobil & Gedung</h2>
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
                                <li><i class="fas fa-shield-alt fa-fw"></i> <strong>UVR (Tolak Sinar UV):</strong> 99.9%</li>
                                <li><i class="fas fa-thermometer-half fa-fw"></i> <strong>IRR (Tolak Panas):</strong>
                                    Hingga 62%</li>
                            </ul>
                            <a href="{{ URL::to('detail-produk/3m-autofilm') }}" class="btn btn-merah mt-auto">Lihat Detail</a>
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
                            <a href="{{ URL::to('detail-produk/iceview') }}" class="btn btn-merah mt-auto">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card product-card h-100">
                        <img src="{{ asset('images/brand/ilumi.png') }}" class="card-img-top" alt="Logo Ilumi Window Film">
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
                            <a href="{{ URL::to('detail-produk/ilumi-window-film') }}" class="btn btn-merah mt-auto">Lihat Detail</a>
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
                            <a href="{{ URL::to('detail-produk/llumar') }}" class="btn btn-merah mt-auto">Lihat Detail</a>
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
                            <a href="{{ URL::to('detail-produk/n1-window-film') }}" class="btn btn-merah mt-auto">Lihat Detail</a>
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
                            <a href="{{ URL::to('detail-produk/perfections') }}" class="btn btn-merah mt-auto">Lihat Detail</a>
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
                            <a href="{{ URL::to('detail-produk/solar-gard-premium') }}" class="btn btn-merah mt-auto">Lihat Detail</a>
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
                            <a href="{{ URL::to('detail-produk/una-gard') }}" class="btn btn-merah mt-auto">Lihat Detail</a>
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
                                <li><i class="fas fa-shield-alt fa-fw"></i> <strong>UVR (Tolak Sinar UV):</strong> 99.9%</li>
                                <li><i class="fas fa-thermometer-half fa-fw"></i> <strong>IRR (Tolak Panas):</strong>
                                    Hingga 70%</li>
                            </ul>
                            <a href="{{ URL::to('detail-produk/v-kool') }}" class="btn btn-merah mt-auto">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-kategori py-5">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="section-title">
                        <h2 class="font-weight-bold">Bingung Memilih Produk ?</h2>
                        <p class="mt-4">
                            Konsultan kami siap membantu Anda menemukan kaca film yang paling sesuai dengan kebutuhan, tipe
                            mobil, dan anggaran Anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
