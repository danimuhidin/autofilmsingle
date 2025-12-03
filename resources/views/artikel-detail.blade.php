@extends('layouts.app')

@section('title', $artikel->title . ' - Mantra Sakti Autofilm')
@section('page-title', $artikel->title)

@section('content')

    <section class="section-padding bg-light mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <article class="artikel-detail-content">
                        <div class="artikel-header">
                            <h1 class="artikel-title">{{ $artikel->title }}</h1>

                            <div class="artikel-meta mb-3">
                                <span class="meta-item">
                                    <i class="far fa-user"></i> {{ $artikel->author }}
                                </span>
                                <span class="meta-item ml-3">
                                    <i class="far fa-calendar"></i> {{ $artikel->created_at->format('d F Y') }}
                                </span>
                            </div>

                            <div class="artikel-tags mb-4">
                                @foreach ($artikel->tags as $tag)
                                    <span class="badge badge-merah">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                        </div>

                        @if ($artikel->img_cover)
                            <div class="artikel-cover mb-4">
                                <img src="{{ asset($artikel->img_cover) }}" alt="{{ $artikel->title }}"
                                    class="img-fluid rounded">
                            </div>
                        @endif

                        <div class="artikel-body">
                            {!! $artikel->content !!}
                        </div>

                        <div class="artikel-footer mt-5 pt-4 border-top">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <strong>Tags:</strong>
                                    @foreach ($artikel->tags as $tag)
                                        <span class="badge badge-merah">{{ $tag->name }}</span>
                                    @endforeach
                                </div>
                                <div>
                                    <a href="{{ route('artikel') }}" class="btn btn-merah">
                                        <i class="fas fa-arrow-left"></i> Kembali ke Artikel
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h4 class="widget-title">Artikel Terbaru</h4>
                            <div class="recent-articles">
                                @foreach ($recentArtikels as $recent)
                                    <div class="recent-article-item">
                                        <div class="row">
                                            <div class="col-4">
                                                @if ($recent->img_cover)
                                                    <img src="{{ asset($recent->img_cover) }}" alt="{{ $recent->title }}"
                                                        class="img-fluid rounded">
                                                @else
                                                    <div
                                                        class="recent-article-thumb bg-secondary d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-image text-white-50"></i>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-8">
                                                <h6 class="recent-article-title">
                                                    <a href="{{ route('artikel-detail', $recent->slug) }}">
                                                        {{ Str::limit($recent->title, 60) }}
                                                    </a>
                                                </h6>
                                                <small class="text-muted">
                                                    <i class="far fa-calendar"></i>
                                                    {{ $recent->created_at->format('d M Y') }}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

        .breadcrumb {
            margin-bottom: 0;
        }

        .breadcrumb-item a {
            color: var(--warna-kuning-aksen);
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: rgba(255, 255, 255, 0.7);
        }

        .breadcrumb-item+.breadcrumb-item::before {
            color: rgba(255, 255, 255, 0.5);
        }

        .artikel-detail-content {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .artikel-header {
            margin-bottom: 2rem;
        }

        .artikel-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            line-height: 1.3;
            margin-bottom: 1rem;
        }

        .artikel-meta {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            color: #666;
        }

        .meta-item {
            font-size: 0.95rem;
        }

        .meta-item i {
            margin-right: 0.5rem;
        }

        .artikel-tags .badge {
            font-size: 0.85rem;
            padding: 0.5rem 1rem;
            margin-right: 0.5rem;
            font-weight: normal;
            border-radius: 20px;
        }

        .badge-merah {
            background-color: var(--warna-merah);
            color: white;
        }

        .artikel-cover img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .artikel-body {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #444;
        }

        .artikel-body h2,
        .artikel-body h3,
        .artikel-body h4 {
            margin-top: 2rem;
            margin-bottom: 1rem;
            color: #333;
            font-weight: bold;
        }

        .artikel-body p {
            margin-bottom: 1.5rem;
        }

        .artikel-body img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 1.5rem 0;
        }

        .artikel-body ul,
        .artikel-body ol {
            margin-bottom: 1.5rem;
            padding-left: 2rem;
        }

        .artikel-body li {
            margin-bottom: 0.5rem;
        }

        .artikel-body blockquote {
            border-left: 4px solid var(--warna-merah);
            padding-left: 1.5rem;
            margin: 1.5rem 0;
            font-style: italic;
            color: #666;
        }

        .artikel-footer {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 8px;
        }

        /* Sidebar Styles */
        .sidebar-widget {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .widget-title {
            font-size: 1.3rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 1.5rem;
            padding-bottom: 0.75rem;
            border-bottom: 2px solid var(--warna-merah);
        }

        .recent-article-item {
            padding: 1rem 0;
            border-bottom: 1px solid #eee;
        }

        .recent-article-item:last-child {
            border-bottom: none;
        }

        .recent-article-thumb {
            width: 100%;
            height: 60px;
        }

        .recent-article-title {
            font-size: 0.95rem;
            margin-bottom: 0.5rem;
            line-height: 1.4;
        }

        .recent-article-title a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .recent-article-title a:hover {
            color: var(--warna-merah);
        }

        @media (max-width: 768px) {
            .hero-page {
                padding: 80px 0 40px;
            }

            .artikel-detail-content {
                padding: 1.5rem;
            }

            .artikel-title {
                font-size: 1.8rem;
            }

            .artikel-body {
                font-size: 1rem;
            }

            .artikel-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }
        }
    </style>
@endpush
