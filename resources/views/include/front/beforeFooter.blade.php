<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/OwlCarousel/owl.carousel.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
{{-- <script src="{{ asset('vendor/mixitup/dist/mixitup.min.js') }}"></script> --}}
<script src="{{ asset('js/custom.js') }}"></script>
@stack('js')
<script src="{{ asset('js/night-mode.js') }}"></script>
{{-- <script>
    var containerEl = document.querySelector('[data-ref~="event-filter-content"]');

    var mixer = mixitup(containerEl, {
        selectors: {
            target: '[data-ref~="mixitup-target"]'
        }
    });
</script> --}}


