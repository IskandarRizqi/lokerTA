<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.cvats.layout.headadmin')
</head>

<body class="alt-menu sidebar">
    {{-- @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"]) --}}
    @include('front.cvats.layout.navbaradmin')


    <!--  BEGIN MAIN CONTAINER  -->


    @if(Session::has('info'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Info!</strong>{{Session::get('info')}}
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">x</button>
    </div>
    @endif
    @if(Session::has('ss'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Info!</strong>{{Session::get('ss')}}
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">x</button>
    </div>
    @endif
    @include('front.cvats.layout.sidebaradmin')

    @yield('content')


    @include('front.cvats.layout.footer')
    <!-- END MAIN CONTAINER -->

    @include('front.cvats.layout.scriptadmin')
    @yield('vaper')

</body>

</html>