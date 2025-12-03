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
                        {{ $bio->tagline }}
                    </h4>
                    <p>
                        {!! $bio->greeting_about !!}
                    </p>
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0 pl-lg-4">
                    <img src="{{ asset('storage/' . $bio->img_about) }}" alt="Workshop Mantra Sakti Autofilm"
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
                    <p>
                        {{ $vision->desc }}
                    </p>
                </div>
                <!-- Kolom Kanan: Misi -->
                <div class="col-md-6 text-center text-md-left">
                    <i class="fas fa-bullseye vision-mission-icon"></i>
                    <h3 class="font-weight-bold mb-3">Misi Kami</h3>
                    <ul class="mission-list">
                        @foreach ($mission as $item)
                            <li>{{ $item->desc }}</li>
                        @endforeach
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
                @foreach ($keunggulans as $keunggulan)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="feature-box">
                            <div class="icon mb-3">
                                <img src="{{ asset('storage/' . $keunggulan->image) }}" alt="{{ $keunggulan->title }}"
                                    style="width: 60px; height: 60px;">
                            </div>
                            <h5>{{ $keunggulan->title }}</h5>
                            <p>
                                {{ $keunggulan->desc }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
