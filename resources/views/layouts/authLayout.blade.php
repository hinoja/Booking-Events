@php
    use Brian2694\Toastr\Facades\Toastr;
@endphp
<!DOCTYPE html>
<html lang="fr" class="h-100">

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/sign_in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jan 2024 06:56:46 GMT -->

<head>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    @include('include.front.beforeHeader')
</head>

<body>
    <div class="form-wrapper">
        <div class="app-form">
            <div class="app-form-sidebar">
                <div class="sidebar-sign-logo">
                    <a href="{{ route('welcome') }}"><img src="{{ asset('images/sign-logo.svg') }}" alt=""></a>
                </div>
                <div class="sign_sidebar_text">
                    <h1>La façon la plus simple de créer des événements et de vendre plus de billets en ligne</h1>
                </div>
            </div>
            <div class="app-form-content">
                <div class="container">
                    @yield('content')
                </div>

            </div>
        </div>
    </div>


    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/OwlCarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('vendor/mixitup/dist/mixitup.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>


</html>
