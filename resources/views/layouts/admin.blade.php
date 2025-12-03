<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Panel')</title>
    <link rel="icon" type="image/png" href="{{ asset('storage/' . $bio->favicon) }}">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet"
        href="{{ asset('vendor/plugins/fontawesome-free/css/all.min.css') }}?v={{ env('ASSET_VERSION') }}">
    <link rel="stylesheet"
        href="{{ asset('vendor/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}?v={{ env('ASSET_VERSION') }}">
    <link rel="stylesheet" href="{{ asset('vendor/dist/css/adminlte.min.css') }}?v={{ env('ASSET_VERSION') }}">
    <link rel="stylesheet"
        href="{{ asset('vendor/plugins/summernote/summernote-bs4.css') }}?v={{ env('ASSET_VERSION') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}?v={{ env('ASSET_VERSION') }}">

    @yield('styles')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @if (Auth::check())
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <a href="{{ route('admin.dashboard') }}" class="brand-link">
                    <img src="{{ asset('storage/' . $bio->brand_img) }}" alt="{{ $bio->brand_name }}"
                        class="img-fluid">
                </a>

                <div class="sidebar">

                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <li class="nav-item">
                                <a href="{{ route('admin.dashboard') }}"
                                    class="nav-link {{ request()->is('admin/dashboard*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('bios.index') }}"
                                    class="nav-link {{ request()->is('admin/bios*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-info-circle"></i>
                                    <p>
                                        General
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}"
                                    class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Kelola User
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contacts.index') }}"
                                    class="nav-link {{ request()->is('admin/contacts*') ? 'active' : '' }}">
                                    <i class="nav-icon fab fa-whatsapp"></i>
                                    <p>
                                        WhatsApp Bubble
                                    </p>
                                </a>
                            </li>
                            <li
                                class="nav-item {{ request()->is('admin/galleries*') || request()->is('admin/jumbotrons*') || request()->is('admin/heroes*') || request()->is('admin/youtubes*') || request()->is('admin/artikels*') ? 'menu-open' : '' }}">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon far fa-image"></i>
                                    <p>
                                        Media
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('galleries.index') }}"
                                            class="nav-link {{ request()->is('admin/galleries*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Gallery</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('jumbotrons.index') }}"
                                            class="nav-link {{ request()->is('admin/jumbotrons*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Jumbotron</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('heroes.index') }}"
                                            class="nav-link {{ request()->is('admin/heroes*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Hero</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('youtubes.index') }}"
                                            class="nav-link {{ request()->is('admin/youtubes*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Youtube</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('artikels.index') }}"
                                            class="nav-link {{ request()->is('admin/artikels*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Artikel</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('outlets.index') }}"
                                    class="nav-link {{ request()->is('admin/outlets*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-store"></i>
                                    <p>
                                        Kelola Outlet
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('products.index') }}"
                                    class="nav-link {{ request()->is('admin/products*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-box"></i>
                                    <p>
                                        Produk
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('partners.index') }}"
                                    class="nav-link {{ request()->is('admin/partners*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-handshake"></i>
                                    <p>
                                        Kelola Partner
                                    </p>
                                </a>
                            </li>
                            <li
                                class="nav-item {{ request()->is('admin/visions*') || request()->is('admin/missions*') || request()->is('admin/posts*') ? 'menu-open' : '' }} ">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon far fas fa-eye"></i>
                                    <p>
                                        Visi Misi & Keunggulan
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('visions.index') }}"
                                            class="nav-link {{ request()->is('admin/visions*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Visi</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('missions.index') }}"
                                            class="nav-link {{ request()->is('admin/missions*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Misi</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('posts.index') }}"
                                            class="nav-link {{ request()->is('admin/posts*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Keunggulan</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('testimonials.index') }}"
                                    class="nav-link {{ request()->is('admin/testimonials*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-comment-dots"></i>
                                    <p>
                                        Testimoni
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
        @endif

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('page-title')</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">

                    @yield('content')

                </div>
            </section>
        </div>
        <footer class="main-footer">
            <strong>Copyright &copy; 2025 <a href="{{ URL::to('/') }}">{{ $bio->brand_name }}</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>

    </div>
    <script src="{{ asset('vendor/plugins/jquery/jquery.min.js') }}?v={{ env('ASSET_VERSION') }}"></script>

    <script src="{{ asset('vendor/plugins/bootstrap/js/bootstrap.bundle.min.js') }}?v={{ env('ASSET_VERSION') }}">
    </script>
    <script src="{{ asset('vendor/plugins/sweetalert2/sweetalert2.min.js') }}?v={{ env('ASSET_VERSION') }}"></script>
    <script src="{{ asset('vendor/plugins/chart.js/Chart.min.js') }}?v={{ env('ASSET_VERSION') }}"></script>
    <script src="{{ asset('vendor/plugins/summernote/summernote-bs4.min.js') }}?v={{ env('ASSET_VERSION') }}"></script>
    <script src="{{ asset('vendor/dist/js/adminlte.min.js') }}?v={{ env('ASSET_VERSION') }}"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                toolbar: [
                    ['style', ['bold', 'italic']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['table']]
                ],
                popover: {
                    air: [
                        ['style', ['bold', 'italic']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['insert', ['table']]
                    ]
                }
            });
        });
    </script>
    @stack('scripts')

</body>

</html>
