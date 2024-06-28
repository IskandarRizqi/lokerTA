<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.cvats.layout.headadmin')
</head>

<body class="alt-menu sidebar">
    {{-- @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"]) --}}
    @include('front.cvats.layout.navbaradmin')


    <!--  BEGIN MAIN CONTAINER  -->
 

        @include('front.cvats.layout.sidebaradmin')


        @yield('content')


        @include('front.cvats.layout.footer')
    <!-- END MAIN CONTAINER -->

    @include('front.cvats.layout.scriptadmin')
    @yield('vaper')

</body>

</html>