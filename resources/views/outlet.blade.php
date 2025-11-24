@extends('layouts.app')

@section('title', 'Mantra Sakti Autofilm - Spesialis Kaca Film Mobil & Gedung')
@section('page-title', 'Dashboard')

@section('content')

    <section class="page-hero container-fluid" style="background-image: url({{ asset('images/hero/outlet.png') }});">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="display-4 font-weight-bold">Jaringan Outlet Resmi</h1>
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

            <div class="row my-5 align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.485569049595!2d107.5983019!3d-6.9519062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9d6ec743431%3A0x34a4164586e6d0d4!2sMantra%20Sakti%20Autofilm%20Mekarwangi%20Bandung!5e0!3m2!1sid!2sid!4v1763987433226!5m2!1sid!2sid"
                            class="embed-responsive-item map-embed" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!-- Kolom Kanan: Informasi -->
                <div class="col-md-6 outlet-info">
                    <h3>Mantra Sakti Autofilm Pusat - Bandung</h3>
                    <ul class="mt-4">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Alamat:</strong><br>
                                Jl. Mekar Puspita No.23, Cibaduyut, Kec. Bojongloa Kidul,
                                Kota Bandung, Jawa Barat 40236, Bandung, Jawa Barat 40236
                            </div>
                        </li>
                        <li>
                            <i class="fab fa-whatsapp"></i>
                            <div><strong>WhatsApp:</strong> 0812-4400-0805</div>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <div><strong>Jam Operasional:</strong> Senin - Minggu (09.00 - 18.00)</div>
                        </li>
                    </ul>
                    <a href="https://wa.me/081244000805" target="_blank" class="btn btn-merah mr-2 mt-3">
                        <i class="fab fa-whatsapp"></i>
                        Hubungi via WhatsApp
                    </a>
                    <a href="https://maps.app.goo.gl/ciC3NfRPtTpgAzhw6"
                        target="_blank" class="btn btn-outline-light mt-3">
                        <i class="fas fa-map-marked-alt"></i>
                        Buka di Google Maps
                    </a>
                </div>
            </div>

            <hr class="custom-hr">

            <div class="row my-5 align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d495.7309506151819!2d107.043247!3d-6.283755!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698f3e81e4bb11%3A0x90c8f8f9499ef3b3!2sMantra%20Sakti%20Autofilm%20Bekasi!5e0!3m2!1sid!2sus!4v1763556425191!5m2!1sid!2sus"
                            class="embed-responsive-item map-embed" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-6 outlet-info">
                    <h3>Mantra Sakti - Bekasi</h3>
                    <ul class="mt-4">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Alamat:</strong><br>
                                Jl. Basuki Rahmat No. 8-12, Tunjungan Plaza 4, Lt. 3, Surabaya, Jawa Timur 60261
                            </div>
                        </li>
                        <li>
                            <i class="fab fa-whatsapp"></i>
                            <div><strong>WhatsApp:</strong> 0813-2323-0805</div>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <div><strong>Jam Operasional:</strong> Senin - Minggu (10.00 - 20.00)</div>
                        </li>
                    </ul>
                    <a href="https://wa.me/6281323230805" target="_blank" class="btn btn-merah mr-2 mt-3">
                        <i class="fab fa-whatsapp"></i>
                        Hubungi via WhatsApp
                    </a>
                    <a href="https://maps.app.goo.gl/pD8kd49jh9NFmbi17"
                        target="_blank" class="btn btn-outline-light mt-3">
                        <i class="fas fa-map-marked-alt"></i>
                        Buka di Google Maps
                    </a>
                </div>
            </div>

            <hr class="custom-hr">

            <div class="row my-5 align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!4v1763987544314!6m8!1m7!1slqxPVf8lRxek0drZTvYosA!2m2!1d-6.267916920764849!2d106.6308107396977!3f113.34!4f-3.0900000000000034!5f0.7820865974627469"
                            class="embed-responsive-item map-embed" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-6 outlet-info">
                    <h3>Mantra Sakti - Tangerang</h3>
                    <ul class="mt-4">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Alamat:</strong><br>
                                Ruko Mendrisio, Jl. Boulevard iL Lago No.68, Cihuni, Kec. Pagedangan, Kabupaten
                                Tangerang, Banten 15334
                            </div>
                        </li>
                        <li>
                            <i class="fab fa-whatsapp"></i>
                            <div><strong>WhatsApp:</strong> 0821-1000-2805</div>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <div><strong>Jam Operasional:</strong> Senin - Minggu (10.00 - 20.00)</div>
                        </li>
                    </ul>
                    <a href="https://wa.me/628211002805" target="_blank" class="btn btn-merah mr-2 mt-3">
                        <i class="fab fa-whatsapp"></i>
                        Hubungi via WhatsApp
                    </a>
                    <a href="https://maps.app.goo.gl/8rhsdS2HoSb9ntJY9"
                        target="_blank" class="btn btn-outline-light mt-3">
                        <i class="fas fa-map-marked-alt"></i>
                        Buka di Google Maps
                    </a>
                </div>
            </div>

            <hr class="custom-hr">

            <div class="row my-5 align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247.82086291869345!2d106.89795811194173!3d-6.376722566974596!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69edc96e91a8b5%3A0x26190ba37c5c9145!2sMantra%20sakti%20autofilm%20cibubur!5e0!3m2!1sid!2sus!4v1763556692441!5m2!1sid!2sus"
                            class="embed-responsive-item map-embed" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-6 outlet-info">
                    <h3>Mantra Sakti - Cibubur</h3>
                    <ul class="mt-4">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Alamat:</strong><br>
                                Jl Alternatif Cibubur, Cibubur Point Automotif Center Ruko Blok B5, Kota Depok, Jawa
                                Barat 16454
                            </div>
                        </li>
                        <li>
                            <i class="fab fa-whatsapp"></i>
                            <div><strong>WhatsApp:</strong> 0812-1100-9805</div>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <div><strong>Jam Operasional:</strong> Senin - Minggu (10.00 - 20.00)</div>
                        </li>
                    </ul>
                    <a href="https://wa.me/6281211009805" target="_blank" class="btn btn-merah mr-2 mt-3">
                        <i class="fab fa-whatsapp"></i>
                        Hubungi via WhatsApp
                    </a>
                    <a href="https://maps.app.goo.gl/23v6Vzd5qYoupWw1A"
                        target="_blank" class="btn btn-outline-light mt-3">
                        <i class="fas fa-map-marked-alt"></i>
                        Buka di Google Maps
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
