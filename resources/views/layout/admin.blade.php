<!DOCTYPE html>
<html lang="en" class="h-100">

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/my_organisation_dashboard_promotion.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jan 2024 06:57:25 GMT -->

<head>
		<link href="{{ asset('css/vertical-responsive-menu.min.css') }}" rel="stylesheet">

    @include('include.front.beforeHeader')
    @stack('css')
</head>

<body class="d-flex flex-column h-100">

    <!-- Header Start-->
    @include('include.front.header')
    <header class="header">
		<div class="header-inner">
			<nav class="navbar navbar-expand-lg bg-barren barren-head navbar fixed-top justify-content-sm-start pt-0 pb-0 ps-lg-0 pe-2">
				<div class="container-fluid ps-0">
					<button type="button" id="toggleMenu" class="toggle_menu">
						<i class="fa-solid fa-bars-staggered"></i>
					</button>
					<button id="collapse_menu" class="collapse_menu me-4">
						<i class="fa-solid fa-bars collapse_menu--icon "></i>
						<span class="collapse_menu--label"></span>
					</button>
					<button class="navbar-toggler order-3 ms-2 pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<span class="navbar-toggler-icon">
							<i class="fa-solid fa-bars"></i>
						</span>
					</button>
					<a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 me-auto" href="index.html">
						<div class="res-main-logo">
							<img src="images/logo-icon.svg" alt="">
						</div>
						<div class="main-logo" id="logo">
							<img src="images/logo.svg" alt="">
							<img class="logo-inverse" src="images/dark-logo.svg" alt="">
						</div>
					</a>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <div class="offcanvas-logo" id="offcanvasNavbarLabel">
                            <img class="logo-inverse" src="{{ asset('images/dark-logo.svg') }}" alt="">
                        </div>
                        <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="offcanvas-top-area">
                            <div class="create-bg">
                                <a href="create.html" class="offcanvas-create-btn">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <span>Create Event</span>
                                </a>
                            </div>
                        </div>
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe_5">
                           @if (auth()->user()->role->id== 1 || auth()->user()->role->id== 2 )
                           <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.edit') }}">
                                <i class="fa-solid fa-right-left me-2"></i>Ma Maison
                            </a>
                        </li>
                           @endif
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="{{ route('welcome') }}">@lang('Home')</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page"
                                    href="{{ route('contact') }}">@lang('Contact us')</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('faq') }}">FAQ</a>
                            </li>

                            {{-- <li class="nav-item">
                                <a class="nav-link" href="pricing.html">Pricing</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Blog
                                </a>
                                <ul class="dropdown-menu dropdown-submenu">
                                    <li><a class="dropdown-item" href="our_blog.html">Our Blog</a></li>
                                    <li><a class="dropdown-item" href="blog_detail_view.html">Blog Detail View</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pages
                                </a>
                                <ul class="dropdown-menu dropdown-submenu">
                                    <li>
                                        <a class="dropdown-item submenu-item" href="#">Other Pages</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item pe-5" href="sign_in.html">Sign In</a></li>
                                            <li><a class="dropdown-item pe-5" href="sign_up.html">Sign Up</a></li>
                                            <li><a class="dropdown-item pe-5" href="forgot_password.html">Forgot Password</a></li>
                                            <li><a class="dropdown-item pe-5" href="about_us.html">About Us</a></li>
                                            <li><a class="dropdown-item pe-5" href="checkout.html">Checkout</a></li>
                                            <li><a class="dropdown-item pe-5" href="checkout_premium.html">Checkout Premium</a></li>
                                            <li><a class="dropdown-item pe-5" href="invoice.html">Invoice</a></li>
                                            <li><a class="dropdown-item pe-5" href="coming_soon.html">Coming Soon</a></li>
                                            <li><a class="dropdown-item pe-5" href="error_404.html">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item submenu-item" href="#">Create Event</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item pe-5" href="create.html">Create</a></li>
                                            <li><a class="dropdown-item pe-5" href="create_venue_event.html">Create Venue Event</a></li>
                                            <li><a class="dropdown-item pe-5" href="create_online_event.html">Create Online Event</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item submenu-item" href="#">Events View</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item pe-5" href="online_event_detail_view.html">Online Event Detail View</a></li>
                                            <li><a class="dropdown-item pe-5" href="venue_event_detail_view.html">Venue Event Detail View</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="booking_confirmed.html">Booking Confirmed</a></li>
                                    <li><a class="dropdown-item" href="attendee_profile_view.html">Attendee Profile View</a></li>
                                    <li><a class="dropdown-item" href="organiser_profile_view.html">Organiser Profile View</a></li>
                                    <li><a class="dropdown-item" href="my_organisation_dashboard.html">Organization Dashboard</a></li>
                                    <li><a class="dropdown-item" href="sell_tickets_online.html">Sell Tickets Online</a></li>
                                    <li><a class="dropdown-item" href="refer_a_friend.html">Refer a Friend</a></li>
                                    <li><a class="dropdown-item" href="term_and_conditions.html">Terms & Conditions</a></li>
                                    <li><a class="dropdown-item" href="privacy_policy.html">Privacy Policy</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="offcanvas-footer">
                        <div class="offcanvas-social">
                            <h5>Follow Us</h5>
                            <ul class="social-links">
                                <li><a href="#" class="social-link"><i class="fab fa-facebook-square"></i></a>
                                <li><a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                                <li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                                <li><a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                                <li><a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                            </ul>
                        </div>
                    </div>
                </div>

					<div class="right-header order-2">
                        <ul class="align-self-stretch">
                            @auth
                                @if (Auth()->user()->role_id == 2)
                                    <li>
                                        <a href="{{ route('front.event.create') }}" class="create-btn btn-hover">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span>Creer un Evènement </span>
                                        </a>
                                    </li>
                                @endif
                                <li class="dropdown account-dropdown">
                                    <a href="#" class="account-link" role="button" id="accountClick"
                                        data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{  auth()->user()->avatar ? Storage::url(auth()->user()->avatar) : asset('images/profile-imgs/img-13.png') }}" alt="">
                                        <i class="fas fa-caret-down arrow-icon"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-account dropdown-menu-end"
                                        aria-labelledby="accountClick">
                                        <li>
                                            <div class="dropdown-account-header">
                                                <div class="account-holder-avatar">
                                                    <img src="{{auth()->user()->avatar ? Storage::url(auth()->user()->avatar) :  asset('images/profile-imgs/img-13.png') }}" alt="">
                                                </div>
                                                <h5>{{ Auth::user()->name }}</h5>
                                                <p>{{ Auth::user()->email }}</p>
                                            </div>
                                        </li>
                                        <li class="profile-link">
                                            @if (Auth()->user()->role_id == 2)
                                                <a href="my_organisation_dashboard.html" class="link-item">My Organisation</a>
                                            @endif
                                            <a href="{{ route('profile.edit') }}" class="link-item">Mon Profile</a>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();"
                                                    class="dropdown-item has-icon text-danger">
                                                    <i class="fas fa-sign-out-alt"></i> @lang('Log Out')
                                                </a>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('login') }}" class="create-btn btn-hover">
                                        <i class="fa-solid fa-user"></i>
                                        <span>Se connecter </span>
                                    </a>
                                </li>
                            @endauth

                            <li>
                                <div class="night_mode_switch__btn">
                                    <div id="night-mode" class="fas fa-moon fa-sun"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
				</div>
			</nav>
			<div class="overlay"></div>
		</div>
	</header>
	<!-- Header End-->
    <!-- Header End-->
    <!-- Left Sidebar Start -->
    @include('include.admin.navbar')
    <!-- Left Sidebar End -->
    <!-- Body Start -->
    @yield('content')
    <!-- Body End -->



</body>
<script src="{{ asset('js/vertical-responsive-menu.min.js') }}"></script>

@include('include.front.beforeFooter')

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/my_organisation_dashboard_promotion.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jan 2024 06:57:25 GMT -->

</html>









