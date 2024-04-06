<!DOCTYPE html>
<html lang="fr" class="h-100">

<head>
    @include('include.front.beforeHeader')
    @stack('css')
    @livewireStyles()
</head>

<body class="d-flex flex-column h-100">
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

    @livewireScripts()
</body>

</html>
