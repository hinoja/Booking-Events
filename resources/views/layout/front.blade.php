<!DOCTYPE html>
<html lang="fr" class="h-100">

<head>
    @include('include.front.beforeHeader')
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    @stack('css')
    @livewireStyles()
</head>

<body class="d-flex flex-column h-100">


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Header Start-->
    @include('include.front.header')
    <!-- Header End-->
    <!-- Body Start-->
    @yield('content')
    <!-- Body End-->
    <!-- Footer Start-->
    @include('include.front.footer')
    <!-- Footer End-->

    @include('include.front.beforeFooter')
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    @livewireScripts()

    {!! Toastr::message() !!}


</body>

</html>
