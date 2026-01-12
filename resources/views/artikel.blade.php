@extends('layouts.app')

@section('title', 'Artikel & Berita - Mantra Sakti Autofilm')
@section('meta_description', 'Baca artikel dan berita terkini seputar kaca film, tips perawatan mobil, teknologi window
    film, dan informasi industri otomotif dari Mantra Sakti Autofilm.')
@section('meta_keywords', 'artikel kaca film, berita otomotif, tips kaca film, perawatan kaca film, teknologi window
    film, informasi kaca film mobil')
@section('og_title', 'Artikel & Berita Kaca Film - Mantra Sakti Autofilm')
@section('og_description', 'Dapatkan informasi terkini seputar kaca film, tips perawatan, dan berita industri
    otomotif.')
@section('page-title', 'Artikel & Berita')

@section('content')

    <section class="page-hero container-fluid" style="background-image: url({{ asset('storage/' . $hero->image) }});">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="display-4 font-weight-bold">{{ $hero->title }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Artikel</li>
                </ol>
            </nav>
        </div>
    </section>

    <section id="daftar-artikel" class="section-padding bg-light">
        <div class="container">
            @forelse ($artikels as $artikel)
                <div class="artikel-item mb-4">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <div class="artikel-image-container">
                                @if ($artikel->img_cover)
                                    <img src="{{ asset($artikel->img_cover) }}" class="artikel-image"
                                        alt="{{ $artikel->title }}">
                                @else
                                    <div
                                        class="artikel-image bg-secondary d-flex align-items-center justify-content-center">
                                        <i class="fas fa-image fa-3x text-white-50"></i>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="artikel-content">
                                <div class="artikel-meta mb-2">
                                    <span class="text-muted small">
                                        <i class="far fa-calendar"></i> {{ $artikel->created_at->format('d M Y') }}
                                    </span>
                                    <span class="text-muted small ml-3">
                                        <i class="far fa-user"></i> {{ $artikel->author }}
                                    </span>
                                </div>
                                <h3 class="artikel-title">
                                    <a href="{{ route('artikel-detail', $artikel->slug) }}">{{ $artikel->title }}</a>
                                </h3>
                                <p class="artikel-excerpt text-muted-light">
                                    {{ Str::limit(strip_tags($artikel->content), 200) }}
                                </p>
                                <div class="artikel-tags">
                                    @foreach ($artikel->tags as $tag)
                                        <span class="badge badge-merah">{{ $tag->name }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-secondary text-center">
                    <i class="fas fa-info-circle fa-2x mb-3"></i>
                    <h5>Belum ada artikel tersedia</h5>
                    <p>Artikel akan segera hadir. Silakan cek kembali nanti.</p>
                </div>
            @endforelse

            @if ($artikels->hasPages())
                <div class="row mt-4">
                    <div class="col-12 d-flex justify-content-center">
                        {{ $artikels->links() }}
                    </div>
                </div>
            @endif
        </div>
    </section>

@endsection

@push('styles')
    <style>
        .hero-page {
            padding: 100px 0 60px;
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
        }

        .hero-page-content {
            text-align: center;
            color: white;
        }

        .hero-page-content h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: var(--warna-kuning-aksen);
        }

        .hero-page-content .lead {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .artikel-item {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .artikel-item:hover {
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        .artikel-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .artikel-content {
            padding: 1.5rem;
        }

        .artikel-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            line-height: 1.4;
        }

        .artikel-title a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .artikel-title a:hover {
            color: var(--warna-merah);
        }

        .artikel-excerpt {
            color: #666;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .artikel-meta {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .artikel-meta span {
            font-size: 0.85rem;
        }

        .artikel-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .artikel-tags .badge {
            font-size: 0.75rem;
            padding: 0.4rem 0.8rem;
            font-weight: normal;
            border-radius: 20px;
        }

        .badge-merah {
            background-color: var(--warna-merah);
            color: white;
        }

        .text-muted-light {
            color: #6c757d;
        }

        @media (max-width: 768px) {
            .hero-page {
                padding: 80px 0 40px;
            }

            .hero-page-content h1 {
                font-size: 2rem;
            }

            .hero-page-content .lead {
                font-size: 1rem;
            }
        }
    </style>
@endpush
