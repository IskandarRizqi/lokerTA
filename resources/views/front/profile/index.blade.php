<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.layouts.head')
    <style>
        .menu-kiri:hover {
            background-color: blue;
            color: white;
            border-radius: 10px;
        }

        .menu-kiri .active {
            background-color: blue;
            color: white;
            border-radius: 10px;
        }

        .br-10 {
            border-radius: 10px;
        }

        .br-20 {
            border-radius: 20px;
        }
    </style>
</head>

<body id="bg">
    {{-- <div id="loading-area"></div> --}}
    {{-- <div class="page-wraper"> --}}
        @include('front.layouts.navbar')

        <!-- Content Wrapper -->
        <main id="main">
            @if(Session::has('info'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Info!</strong> {{Session::get('info')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="container mb-2">
                <div class="row">
                    {{-- Menu user --}}
                    <div class="col-lg-3">
                        <div class="card br-10">
                            <div class="card-body">
                                <a href="/profile" class="menu-kiri btn-block">
                                    <div class="p-2 {{Request::is('profile') ? 'active' : ''}}">
                                        Profile
                                    </div>
                                </a>
                                <a href="" class="menu-kiri btn-block">
                                    <div class="p-2">
                                        History Lamaran
                                    </div>
                                </a>
                                <a href="" class="menu-kiri btn-block">
                                    <div class="p-2">
                                        Kriteria
                                    </div>
                                </a>
                                <a href="" class="menu-kiri btn-block">
                                    <div class="p-2">
                                        CV ATS
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        @yield('content-user')
                    </div>
                </div>
            </div>
        </main>
        @include('front.layouts.footer')

        <!-- scroll top button -->
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>
    </div>

    @include('front.layouts.script')

</body>

</html>