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
                    <li class="breadcrumb-item"><a href="{{ url('produk') }}">Produk</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <figure class="w-100">
                        <img src="{{ asset('storage/' . $product->img1) }}" id="mainProductImage"
                            class="w-100 rounded shadow-lg" alt="Gambar Utama {{ $product->name }}">
                    </figure>

                    <div class="d-flex mt-3">
                        <img src="{{ asset('storage/' . $product->img1) }}"
                            data-large-src="{{ asset('storage/' . $product->img1) }}" class="product-thumbnail mr-2 active"
                            alt="{{ $product->name }}">
                        <img src="{{ asset('storage/' . $product->img2) }}"
                            data-large-src="{{ asset('storage/' . $product->img2) }}" class="product-thumbnail mr-2"
                            alt="{{ $product->name }}">
                        <img src="{{ asset('storage/' . $product->img3) }}"
                            data-large-src="{{ asset('storage/' . $product->img3) }}" class="product-thumbnail mr-2"
                            alt="{{ $product->name }}">
                        <img src="{{ asset('storage/' . $product->img4) }}"
                            data-large-src="{{ asset('storage/' . $product->img4) }}" class="product-thumbnail mr-2"
                            alt="{{ $product->name }}">
                        <img src="{{ asset('storage/' . $product->img5) }}"
                            data-large-src="{{ asset('storage/' . $product->img5) }}" class="product-thumbnail"
                            alt="{{ $product->name }}">
                    </div>
                </div>

                <div class="col-lg-7 pl-4">
                    <h2 class="font-weight-bold mb-2">{{ $product->name }}</h2>
                    <p class="mb-2">
                        {!! $product->item_desc !!}
                    </p>

                    <ul class="list-unstyled text-white my-3" style="font-size: .9rem;">
                        <li class="mb-1">
                            <i class="fas fa-sun text-yellow mr-2"></i>
                            <strong>VLT (Kegelapan):</strong> {{ $product->vlt }}
                        </li>
                        <li class="mb-1">
                            <i class="fas fa-shield-alt text-yellow mr-2"></i>
                            <strong>UV Rejection:</strong> {{ $product->uvr }}
                        </li>
                        <li class="mb-1">
                            <i class="fas fa-star text-yellow mr-2"></i>
                            <strong>IRR (Inframerah Rejection):</strong> {{ $product->irr }}
                        </li>
                        <li class="mb-1">
                            <i class="fas fa-thermometer-half text-yellow mr-2"></i>
                            <strong>TSER (Tolak Panas):</strong> {{ $product->tser }}
                        </li>
                    </ul>

                    <p class="text-white-50 mt-2">
                        {!! $product->price_desc !!}
                    </p>
                    <div class="mt-2">
                        <a href="#" class="btn btn-merah btn-lg mr-2 mb-2 shadow">
                            <i class="fas fa-calendar-alt mr-2"></i>Harga: {{ $product->price }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-dark-secondary">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="productTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="deskripsi-tab" data-toggle="tab" href="javascript:void(0);"
                                data-target="#deskripsi" role="tab" aria-controls="deskripsi"
                                aria-selected="true">Deskripsi Lengkap</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="spesifikasi-tab" data-toggle="tab" href="javascript:void(0);"
                                data-target="#spesifikasi" role="tab" aria-controls="spesifikasi"
                                aria-selected="false">Spesifikasi Teknis</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="garansi-tab" data-toggle="tab" href="javascript:void(0);"
                                data-target="#garansi" role="tab" aria-controls="garansi" aria-selected="false">Garansi
                                & Perawatan</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="productTabsContent">
                        <div class="tab-pane fade show active" id="deskripsi" role="tabpanel"
                            aria-labelledby="deskripsi-tab">
                            <p>
                                {!! $product->full_desc !!}
                            </p>
                        </div>

                        <div class="tab-pane fade" id="spesifikasi" role="tabpanel" aria-labelledby="spesifikasi-tab">
                            <p>{!! $product->spec_desc !!}:</p>
                        </div>

                        <div class="tab-pane fade" id="garansi" role="tabpanel" aria-labelledby="garansi-tab">
                            <p>{!! $product->maintenance_desc !!}</p>
                        </div>
                        <small class="text-white-50">
                            {{ $product->term_desc }}
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center text-white mb-4">Produk Lainnya yang Mungkin Anda Suka</h2>
            <div class="owl-carousel owl-theme" id="produkTerkaitCarousel">
                @foreach ($otherProducts as $otherProduct)
                    <div class="item">
                        <div class="card product-card text-white h-100">
                            <img src="{{ asset('storage/' . $otherProduct->icon) }}" class="card-img-top"
                                alt="Logo {{ $otherProduct->name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $otherProduct->name }}</h5>
                                <p class="card-text text-white-50 small">
                                    {{ $otherProduct->short_desc }}
                                </p>
                                <a href="{{ URL::to('detail-produk/' . $otherProduct->id) }}"
                                    class="btn btn-merah mt-2">Lihat
                                    Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

            // 0. Script untuk Tab Navigation (mencegah scroll)
            $('#productTabs a[data-toggle="tab"]').on('click', function(e) {
                e.preventDefault();
                $(this).tab('show');
            });

            // 1. Script untuk Galeri Produk
            $('.product-thumbnail').on('click', function() {
                // Hapus kelas 'active' dari semua thumbnail
                $('.product-thumbnail').removeClass('active');
                // Tambah kelas 'active' ke thumbnail yang diklik
                $(this).addClass('active');

                // Ganti gambar utama
                var newImageSrc = $(this).data('large-src');
                $('#mainProductImage').attr('src', newImageSrc);
            });

            // 2. Script untuk Inisialisasi Owl Carousel (Produk Terkait)
            $('#produkTerkaitCarousel').owlCarousel({
                loop: true,
                margin: 20,
                nav: false, // Sembunyikan panah nav
                dots: true, // Tampilkan titik-titik nav
                autoplay: true,
                autoplayTimeout: 5000,
                responsive: {
                    0: {
                        items: 1 // 1 item di mobile
                    },
                    768: {
                        items: 2 // 2 item di tablet
                    },
                    992: {
                        items: 3 // 3 item di desktop
                    }
                }
            });

        });
    </script>
@endpush
