<!DOCTYPE html>
<html lang="en" class="h-100">

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/explore_events.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jan 2024 06:56:16 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">
		<title>Barren - Simple Online Event Ticketing System</title>

		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/fav.png">

		<!-- Stylesheets -->
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
		<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
		<link href="{{ asset('css/night-mode.css') }}" rel="stylesheet">

		<!-- Vendor Stylesheets -->
		<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
		<link href="{{ asset('vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet">
		<link href="{{ asset('vendor/OwlCarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
		<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
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


	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/mixitup/dist/mixitup.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/night-mode.js"></script>
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

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/explore_events.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jan 2024 06:56:16 GMT -->
</html>
