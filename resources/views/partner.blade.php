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
                    <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Partner</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="container py-5">
        <div class="row">
            <div class="col-md-10 offset-md-1 text-center">
                <h2 class="mb-4">Komitmen pada Keaslian dan Kemitraan</h2>
                <p class="lead" style="color: var(--light-gray);">Di {{ $bio->brand_name }}, kami percaya bahwa bisnis
                    yang
                    hebat dibangun di atas kepercayaan. Itulah mengapa kami hanya bermitra dengan brand-brand terbaik dunia
                    dan memastikan setiap produk yang kami distribusikan adalah 100% otentik dan bergaransi resmi.</p>
                <p>Kami mendedikasikan diri untuk membangun kemitraan jangka panjang yang saling menguntungkan, baik dengan
                    principal brand kami maupun dengan jaringan reseller dan workshop di seluruh Indonesia. Kami bukan hanya
                    pemasok; kami adalah partner strategis Anda untuk bertumbuh.</p>
            </div>
        </div>
    </section>

    <section class="container pb-5">
        <div class="row">
            <div class="col-12 text-center mb-3">
                <h2>Dipercaya oleh Jaringan Workshop</h2>
                <p>Kami mendukung ratusan workshop dan reseller di seluruh penjuru negeri.</p>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            @foreach ($partners as $partner)
                <div class="col-lg-3 col-md-4 mb-4">
                    <div class="card partner-card h-100">
                        <div class="card-body text-center">
                            <h6 class="text-center mb-2">
                                <b>{{ $partner->name }}</b>
                            </h6>
                            <p class="card-text text-white-50">
                                {{ $partner->address }}
                            </p>
                            <a target="_blank" href="https://wa.me/{{ format_whatsapp($partner->telp) }}"
                                class="btn btn-kuning btn-sm">
                                <i class="fas fa-phone-alt"></i> {{ $partner->telp }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="logo-carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2>Brand yang Kami Distribusikan Secara Resmi</h2>
                    <p>Kami bangga menjadi distributor resmi untuk brand kaca film terkemuka di dunia.</p>
                </div>
            </div>
            <div class="owl-carousel owl-theme logo-carousel">
                @foreach ($products as $product)
                    <div class="item">
                        <img src="{{ asset('storage/' . $product->icon) }}" alt="{{ $product->name }}">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2>Tertarik Menjadi Partner Kami?</h2>
                <p>Bergabunglah dengan jaringan distributor dan reseller resmi Mantra Sakti Autofilm.</p>
            </div>
        </div>
        <div class="row align-items-center">
            <!-- Kolom Kiri: Keuntungan -->
            <div class="col-md-6 mb-4 mb-md-0 b2b-features">
                <h3 class="mb-4">Keuntungan Menjadi Partner</h3>
                <ul>
                    <li><i class="fas fa-check"></i> 100% Produk Original & Bergaransi Resmi</li>
                    <li><i class="fas fa-check"></i> Harga Distributor Khusus (B2B)</li>
                    <li><i class="fas fa-check"></i> Dukungan Marketing & Materi Promosi</li>
                    <li><i class="fas fa-check"></i> Pelatihan Produk & Teknik Pemasangan</li>
                    <li><i class="fas fa-check"></i> Program Insentif & Reward Menarik</li>
                    <li><i class="fas fa-check"></i> Prioritas Stok dan Dukungan Teknis</li>
                </ul>
            </div>

            <!-- Kolom Kanan: Formulir -->
            <div class="col-md-6">
                <h3 class="mb-4">Formulir Pengajuan Kemitraan</h3>
                <form action="#" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" id="namaBisnis" placeholder="Nama Bisnis / Workshop"
                            required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="namaKontak" placeholder="Nama Anda (Kontak Person)"
                            required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" id="email" placeholder="Email Bisnis" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="tel" class="form-control" id="telepon" placeholder="No. Telepon / WA"
                                required>
                        </div>
                    </div>
                    <div class="form-group">
                        <select id="tipeKemitraan" class="custom-select" required>
                            <option value="" selected disabled>Pilih Tipe Kemitraan...</option>
                            <option value="reseller">Reseller / Toko</option>
                            <option value="workshop">Workshop / Jasa Pemasangan</option>
                            <option value="corporate">Corporate / Fleet</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="pesan" rows="4"
                            placeholder="Tulis pesan singkat mengenai bisnis Anda..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-merah btn-block">Ajukan Kemitraan</button>
                </form>
            </div>
        </div>
    </section>

@endsection


@push('scripts')
    <script>
        $(document).ready(function() {

            // 1. Inisialisasi Owl Carousel untuk Logo Partner
            $('.logo-carousel').owlCarousel({
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayHoverPause: true,
                nav: false, // Anda bisa set ke true jika ingin panah navigasi
                dots: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            });

            // 2. Fungsionalitas Floating WA Bubble
            var waBubble = $('#waBubble');

            // Tampilkan bubble setelah 2 detik
            setTimeout(function() {
                waBubble.addClass('show');
            }, 2000);

            // Atau bisa juga tampilkan setelah scroll
            /*
            $(window).scroll(function() {
                if ($(this).scrollTop() > 200) { // Tampil setelah scroll 200px
                    waBubble.addClass('show');
                } else {
                    waBubble.removeClass('show');
                }
            });
            */

        });
    </script>
@endpush
