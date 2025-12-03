@extends('layouts.app')

@section('title', 'Mantra Sakti Autofilm - Spesialis Kaca Film Mobil & Gedung')
@section('page-title', 'Dashboard')

@section('content')
    <section class="page-hero container-fluid" style="background-image: url({{ asset('storage/' . $hero->image) }});">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="display-4 font-weight-bold">{{ $hero->title }}</h1>
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
                        Di {{ $bio->brand_name }}, kami menyediakan rangkaian produk kaca film premium yang dirancang khusus
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
