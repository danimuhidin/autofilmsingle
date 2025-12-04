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
                    <li class="breadcrumb-item active" aria-current="page">Daftar Outlet</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="section-title mt-5">
                <h2>Hubungi Kami & Temukan Outlet</h2>
                <p>Siap membantu kebutuhan Anda di Kantor Pusat atau cabang terdekat.</p>
            </div>

            @foreach ($outlets as $key => $outlet)
                @if ($key != 0)
                    <hr class="custom-hr">
                @endif

                <div class="row my-5 align-items-center">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="{{ $outlet->link1 }}" class="embed-responsive-item map-embed" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6 outlet-info">
                        <h3>{{ $outlet->name }}</h3>
                        <ul class="mt-4">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <strong>Alamat:</strong><br>
                                    {{ $outlet->address }}
                                </div>
                            </li>
                            <li>
                                <i class="fab fa-whatsapp"></i>
                                <div><strong>WhatsApp:</strong> {{ $outlet->telp }}</div>
                            </li>
                            <li>
                                <i class="fas fa-clock"></i>
                                <div><strong>Jam Operasional:</strong> {{ $outlet->operation_hours }}</div>
                            </li>
                        </ul>
                        <a href="https://wa.me/{{ format_whatsapp($outlet->telp) }}" target="_blank"
                            class="btn btn-merah mr-2 mt-3 outlet-detail-wa-track" data-outlet-name="{{ $outlet->name }}"
                            data-action="whatsapp">
                            <i class="fab fa-whatsapp"></i>
                            Hubungi via WhatsApp
                        </a>
                        <a href="{{ $outlet->link2 }}" target="_blank"
                            class="btn btn-outline-light mt-3 outlet-detail-map-track"
                            data-outlet-name="{{ $outlet->name }}" data-action="map_directions">
                            <i class="fas fa-map-marked-alt"></i>
                            Buka di Google Maps
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // --- PELACAKAN WHATSAPP DETAIL (outlet-detail-wa-track) ---
            const waDetailLinks = document.querySelectorAll('.outlet-detail-wa-track');

            waDetailLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    const outletName = link.getAttribute('data-outlet-name');
                    const actionType = link.getAttribute('data-action'); // 'whatsapp'

                    if (typeof gtag === 'function') {
                        gtag('event', 'outlet_detail_interaction', {
                            'event_category': 'Outlet Detail',
                            'event_label': 'Klik ' + actionType + ' di ' + outletName,
                            'outlet_name': outletName,
                            'interaction_type': actionType
                        });
                        console.log(`Tracked WA click on detail for: ${outletName}`);
                    }
                });
            });


            // --- PELACAKAN GOOGLE MAPS (outlet-detail-map-track) ---
            const mapLinks = document.querySelectorAll('.outlet-detail-map-track');

            mapLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    const outletName = link.getAttribute('data-outlet-name');
                    const actionType = link.getAttribute('data-action'); // 'map_directions'

                    if (typeof gtag === 'function') {
                        gtag('event',
                        'outlet_detail_interaction', { // Menggunakan nama event yang sama
                            'event_category': 'Outlet Detail',
                            'event_label': 'Klik ' + actionType + ' di ' + outletName,
                            'outlet_name': outletName,
                            'interaction_type': actionType
                        });
                        console.log(`Tracked Map click on detail for: ${outletName}`);
                    }
                });
            });
        });
    </script>
@endpush
