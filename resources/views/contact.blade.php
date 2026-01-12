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
                    <li class="breadcrumb-item active" aria-current="page">Kontak</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="contact-hq py-5">
        <div class="container">
            <h2 class="section-title">Hubungi Kami</h2>
            <div class="row">
                <div class="col-md-7 mb-5 mb-md-0">
                    <h3 class="contact-subtitle">Kirim Pertanyaan Anda</h3>
                    <p class="text-secondary mb-4">Punya pertanyaan umum, kritik, saran, atau peluang bisnis? Silakan isi
                        formulir di bawah ini.</p>
                    <form action="#" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formNama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="formNama" placeholder="Nama Anda" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formEmail">Alamat Email</label>
                                <input type="email" class="form-control" id="formEmail" placeholder="email@anda.com"
                                    required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formTelepon">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="formTelepon" placeholder="0812xxxxxx">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formSubjek">Subjek</label>
                                <input type="text" class="form-control" id="formSubjek" placeholder="Subjek Pesan"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="formPesan">Pesan Anda</label>
                            <textarea class="form-control" id="formPesan" rows="6" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-merah">Kirim Pesan</button>
                    </form>
                </div>

                <div class="col-md-5">
                    <h3 class="contact-subtitle">Informasi Outlet</h3>
                    <ul class="contact-info-list">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>
                                <strong>Alamat:</strong><br>
                                {{ $bio->address }}
                            </span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>
                                <strong>Telepon:</strong><br>
                                {{ $bio->telp }}
                            </span>
                        </li>
                        <li>
                            <i class="fab fa-instagram"></i>
                            <span>
                                <strong>Instagram:</strong><br>
                                {{ $bio->ig_name }}
                            </span>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <span>
                                <strong>Jam Operasional:</strong><br>
                                {{ $bio->operation_time }}
                            </span>
                        </li>
                    </ul>

                    <div class="map-responsive mt-4">
                        <iframe src="{{ $bio->link_maps_embed }}" width="600" height="450" style="border:0;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
