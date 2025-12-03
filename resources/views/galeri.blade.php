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
                    <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="filter-controls text-center py-4">
        <div class="container">
            <div class="btn-group filter-btn-group" role="group" aria-label="Filter Galeri">
                <button type="button" class="btn active" data-filter="*">Semua</button>
                <button type="button" class="btn" data-filter=".Mobil">Kaca Film Mobil</button>
                <button type="button" class="btn" data-filter=".Gedung">Kaca Film Gedung</button>
            </div>
        </div>
    </section>

    <section class="gallery-grid">
        <div class="container">
            <div class="row gallery-container">
                @foreach ($galleries as $gallery)
                    <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper {{ $gallery->category }}">
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
        </div>
    </section>

@endsection


@push('scripts')
    <script>
        lightbox.option({
            'resizeDuration': 250,
            'wrapAround': true, // Kembali ke awal setelah gambar terakhir
            'fadeDuration': 300,
            'imageFadeDuration': 300,
            'albumLabel': 'Gambar %1 dari %2' // Label kustom Indonesia
        });

        // Skrip Filter Galeri (jQuery)
        $('.filter-btn-group .btn').on('click', function() {
            // Atur status aktif pada tombol
            $('.filter-btn-group .btn').removeClass('active');
            $(this).addClass('active');

            // Dapatkan nilai filter dari atribut data-filter
            var filterValue = $(this).attr('data-filter');

            // Logika filter
            if (filterValue === '*') {
                // Tampilkan semua item
                $('.gallery-container .gallery-item-wrapper').fadeIn('slow');
            } else {
                // Sembunyikan semua item terlebih dahulu
                $('.gallery-container .gallery-item-wrapper').fadeOut('fast');
                // Tampilkan hanya item yang sesuai dengan filter
                $('.gallery-container .gallery-item-wrapper').filter(filterValue).fadeIn('slow');
            }
        });
    </script>
@endpush
