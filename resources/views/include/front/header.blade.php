@php
    $currentRouteName = Route::currentRouteName();
@endphp

<header class="header">
    <div class="header-inner">
        <nav class="navbar navbar-expand-lg bg-barren barren-head navbar fixed-top justify-content-sm-start pt-0 pb-0">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon">
                        <i class="fa-solid fa-bars"></i>
                    </span>
                </button>
                <a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 me-auto" href="{{ route('welcome') }}">
                    <div class="res-main-logo">
                        <img src="{{ asset('images/logo-icon.svg') }}" alt="">
                    </div>
                    <div class="main-logo" id="logo">
                        <img src="{{ asset('images/dark-logo.svg') }}" alt="">
                        <img class="logo-inverse" src="{{ asset('images/dark-logo.svg') }}" alt="">
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
                            <li class="nav-item">
                                <a class="nav-link @if (Str::endsWith($currentRouteName, 'welcome')) active @endif" aria-current="page"
                                    href="{{ route('welcome') }}">@lang('Home')</a>
                            </li>
                            @auth
                                @if (auth()->user()->role->id == 1 || auth()->user()->role->id == 2)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('profile.edit') }}">
                                            <i class="fa-solid fa-right-left me-2"></i>Ma Maison
                                        </a>
                                    </li>
                                @endif
                            @endauth

                            <li class="nav-item">
                                <a class="nav-link @if (Str::endsWith($currentRouteName, 'contact')) active @endif" aria-current="page"
                                    href="{{ route('contact') }}">@lang('Contact us')</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if (Str::endsWith($currentRouteName, 'faq')) active @endif" aria-current="page"
                                    href="{{ route('faq') }}">FAQ</a>
                            </li>


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
                                    <img src="{{ auth()->user()->avatar ? Storage::url(auth()->user()->avatar) : asset('images/profile-imgs/img-13.png') }}"
                                        alt="">
                                    <i class="fas fa-caret-down arrow-icon"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-account dropdown-menu-end"
                                    aria-labelledby="accountClick">
                                    <li>
                                        <div class="dropdown-account-header">
                                            <div class="account-holder-avatar">
                                                <img src="{{ auth()->user()->avatar ? Storage::url(auth()->user()->avatar) : asset('images/profile-imgs/img-13.png') }}"
                                                    alt="">
                                            </div>
                                            <h5>{{ Auth::user()->name }}</h5>
                                            <p>{{ Auth::user()->email }}</p>
                                        </div>
                                    </li>
                                    <li class="profile-link">
                                        @if (Auth()->user()->role_id == 2)
                                            <a href="{{ route('admin.users') }}" class="link-item">@lang('dashboard')</a>
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
