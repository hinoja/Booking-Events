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


    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/OwlCarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('vendor/mixitup/dist/mixitup.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    @stack('js')
    <script src="{{ asset('js/night-mode.js') }}"></script>
    <script>
        var containerEl = document.querySelector('[data-ref~="event-filter-content"]');

        var mixer = mixitup(containerEl, {
            selectors: {
                target: '[data-ref~="mixitup-target"]'
            }
        });
    </script>
    @livewireScripts()
</body>

</html>
