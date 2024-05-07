@extends('layout.front')
@section('title', __('Subscriber profile'))
@section('content')
    <!-- Follow People Model Start-->
    <div class="modal fade" id="FFModal" tabindex="-1" aria-labelledby="FFModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="FFModalLabel">Following & Followers</h5>
                    <button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i
                            class="uil uil-multiply"></i></button>
                </div>
                <div class="modal-body">
                    <div class="model-content follow-people-content">
                        <div class="">
                            <ul class="nav nav-pills ff-tablist mb-2" role="tablist">
                                <li class="nav-item d-flex me-4">
                                    <a class="nav-link px-0 pt-0 pb-3 active" id="pills-following-tab" data-bs-toggle="pill"
                                        href="#following" role="tab" aria-controls="following"
                                        aria-selected="true">Following <span class="following_count">(2)</span></a>
                                </li>
                                <li class="nav-item d-flex">
                                    <a class="nav-link px-0 pt-0 pb-3" id="pills-followers-tab" data-bs-toggle="pill"
                                        href="#followers" role="tab" aria-controls="followers"
                                        aria-selected="false">Followers </a>
                                </li>
                            </ul>
                            <div class="tab-content mt-4">
                                <div class="tab-pane fade active show" id="following" role="tabpanel"
                                    aria-labelledby="pills-following-tab">
                                    <div class="users-list min-height-430">
                                        <div class="user-follow-card mb-4">
                                            <div class="follow-card-left">
                                                <div class="follow-avatar">
                                                    <img src="images/profile-imgs/img-2.jpg" alt="">
                                                </div>
                                                <div class="follow-name">
                                                    <h5>Jassica William</h5>
                                                    <span>1 Follower</span>
                                                </div>
                                            </div>
                                            <div class="follow-card-btn">
                                                <button class="follow-btn">Following</button>
                                            </div>
                                        </div>
                                        <div class="user-follow-card mb-4">
                                            <div class="follow-card-left">
                                                <div class="follow-avatar">
                                                    <img src="images/profile-imgs/img-1.jpg" alt="">
                                                </div>
                                                <div class="follow-name">
                                                    <h5>Rock Smith</h5>
                                                    <span>3 Followers</span>
                                                </div>
                                            </div>
                                            <div class="follow-card-btn">
                                                <button class="follow-btn">Following</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="followers" role="tabpanel"
                                    aria-labelledby="pills-followers-tab">
                                    <div id="followers-empty-state"
                                        class="d-flex align-items-center justify-content-center flex-column min-height-430">
                                        <span>
                                            <svg width="60" height="47" viewBox="0 0 60 47" fill="none">
                                                <path
                                                    d="M41.8884 39.501C41.2649 38.8161 41.1572 37.7618 41.9808 37.0461L48.8852 30.1433C50.44 28.5811 52.8108 30.9436 51.2559 32.4981L47.1225 36.6306H56.1899C56.467 35.6917 56.644 35.0145 56.644 34.0064C56.644 28.0732 50.5247 24.6256 45.152 24.6256C40.9724 24.6256 36.4387 26.5956 34.5067 30.4819C36.5234 33.0521 37.7088 36.138 37.7088 39.4702C37.7088 41.6788 37.1623 43.8566 36.1693 45.8267C35.1918 47.7967 32.1976 46.3038 33.1828 44.3337C33.9525 42.8023 34.3528 41.1863 34.3528 39.4702C34.3528 31.4515 26.1321 26.7188 18.8505 26.7188C11.5767 26.7188 3.36369 31.4515 3.36369 39.4702C3.36369 41.2017 3.74856 42.7793 4.52598 44.326C5.51892 46.2961 2.5247 47.7967 1.53945 45.8344C0.546504 43.8643 0 41.6711 0 39.4702C0 32.3749 5.23412 26.8573 11.6228 24.5948C7.8127 22.1322 5.49583 17.9151 5.49583 13.3594C5.49583 5.98709 11.4843 0 18.8505 0C26.2322 0 32.2207 5.98709 32.2207 13.3594C32.2207 17.9228 29.8961 22.1322 26.086 24.5948C28.3412 25.3874 30.3656 26.5495 32.0744 27.9808C33.6369 25.4798 36.0616 23.6098 38.7787 22.5016C36.1001 20.4854 34.5221 17.3533 34.5221 13.9904C34.5221 8.11875 39.2867 3.35524 45.152 3.35524C51.0327 3.35524 55.7896 8.11105 55.7896 13.9904C55.7896 17.3533 54.2117 20.4931 51.5253 22.5016C56.2668 24.4332 60 28.6811 60 34.0064C60 34.8683 59.8922 35.7379 59.6921 36.5921C59.492 37.4386 59.1841 38.262 58.7838 39.0623C58.4913 39.6472 57.9063 39.9858 57.2906 39.9858L47.1302 39.9935L51.2559 44.1183C52.8185 45.6805 50.4477 48.0507 48.8852 46.4885L41.8884 39.501ZM18.8505 3.36293C13.3239 3.36293 8.85183 7.83401 8.85183 13.3594C8.85183 18.9001 13.3085 23.3481 18.8505 23.3481C24.3926 23.3481 28.857 18.9001 28.857 13.3594C28.857 7.84171 24.3772 3.36293 18.8505 3.36293ZM45.152 6.71047C41.1418 6.71047 37.8781 9.97336 37.8781 13.9904C37.8781 18.0152 41.1341 21.255 45.1597 21.255C49.1931 21.255 52.4336 18.0228 52.4336 13.9904C52.4336 9.97336 49.1777 6.71047 45.152 6.71047Z"
                                                    fill="#6ac045"></path>
                                            </svg>
                                        </span>
                                        <p class="font-16 mt-4 text-light3">No followers yet</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Follow People Model End-->
    <!-- About Details Model Start-->
    <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aboutModalLabel">Modifier vos informations </h5>
                    <button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i
                            class="uil uil-multiply"></i></button>
                </div>
                <form action="{{ route('profile.update') }}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="modal-body">
                        <div class="model-content main-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">NOM*</label>
                                        <input name="name" class="form-control h_40" type="text" placeholder=""
                                            value="{{ auth()->user()->name }}">
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Email*</label>
                                        <input name="email" class="form-control h_40" type="text" placeholder=""
                                            value="{{ auth()->user()->email }}">
                                    </div>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Biographie *</label>
                                        <textarea name="biographie" class="form-textarea" placeholder=""></textarea>
                                    </div>
                                    <x-input-error :messages="$errors->get('biographie')" class="mt-2" />

                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">TelePhone*</label>
                                        <input name="phone_number" class="form-control h_40" type="text"
                                            placeholder="" value="">
                                        <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Date de Naissance </label>
                                        <input name="birthDate" class="form-control h_40" type="date" placeholder=""
                                            value="">
                                    </div>
                                    <x-input-error :messages="$errors->get('birthDate')" class="mt-2" />

                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-target="#aboutModal"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="main-btn min-width btn-hover h_40">Mettre a jour</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- About Details Model End-->

    <!-- Body Start-->
    <div class="wrapper">
        <div class="profile-banner">
            <div class="hero-cover-block">
                <div class="hero-cover">
                    <div class="hero-cover-img"></div>
                </div>
                <div class="upload-cover">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-dt-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-12">
                            <div class="main-card user-left-dt">
                                <div class="user-avatar-img">
                                    <img src="{{ auth()->user()->avatar ? Storage::url(auth()->user()->avatar) : asset('images/profile-imgs/img-13.png') }}"
                                        alt="">

                                </div>
                                <div class="user-dts">
                                    <h4 class="user-name">{{ Auth::user()->name }}<span class="verify-badge"><i
                                                class="fa-solid fa-circle-check"></i></span></h4>
                                    <span class="user-email">{{ Auth::user()->email }}</span>
                                </div>

                                <div class="user-description">
                                    <p>Hey Je suis un {{ auth()->user()->role->name }}</p>
                                </div>
                                @if (auth()->user()->role_id === 2)
                                    {{-- organisator --}}
                                    <div class="user-btns">
                                        <a href="{{ route('admin.events.index') }}"
                                            class="co-main-btn co-btn-width min-width d-inline-block h_40">Mon
                                            environnement de Gestion
                                            <i class="fa-solid fa-right-left ms-3"></i></a>
                                    </div>
                                @endif

                                <div class="profile-social-link">
                                    <h6>Les reseaux sociaux</h6>
                                    <div class="social-links">
                                        <a href="#" class="social-link" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Facebook"><i
                                                class="fab fa-facebook-square"></i></a>
                                        <a href="#" class="social-link" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Instagram"><i
                                                class="fab fa-instagram"></i></a>
                                        <a href="#" class="social-link" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Twitter"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="social-link" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="LinkedIn"><i
                                                class="fab fa-linkedin-in"></i></a>
                                        <a href="#" class="social-link" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Youtube"><i class="fab fa-youtube"></i></a>
                                        <a href="#" class="social-link" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Website"><i class="fa-solid fa-globe"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-12">
                            <div class="right-profile">
                                <div class="profile-tabs">
                                    <ul class="nav nav-pills nav-fill p-2 garren-line-tab" id="myTab" role="tablist">
                                        {{-- @if (auth()->user()->role_id === 2) --}}
                                        <li class="nav-item">
                                            <a class="nav-link active" id="feed-tab" data-bs-toggle="tab"
                                                href="#feed" role="tab" aria-controls="feed"
                                                aria-selected="true"><i class="fa-solid fa-house"></i>Acceuil</a>
                                        </li>
                                        {{-- @endif --}}
                                        <li class="nav-item">
                                            <a class="nav-link" id="about-tab" data-bs-toggle="tab" href="#about"
                                                role="tab" aria-controls="about" aria-selected="false"><i
                                                    class="fa-solid fa-circle-info"></i>@lang('About')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="setting-tab" data-bs-toggle="tab" href="#setting"
                                                role="tab" aria-controls="setting" aria-selected="false"><i
                                                    class="fa-solid fa-gear"></i>Paramètres</a>
                                        </li>

                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade active show" id="feed" role="tabpanel"
                                            aria-labelledby="feed-tab">

                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="saved" role="tabpanel">
                                                    <div class="row">
                                                        @foreach ($events as $event)
                                                            <div class="col-md-12">
                                                                <div class="main-card mt-4">
                                                                    <div class="card-top p-4">
                                                                        <div class="card-event-img">
                                                                            <img src="{{ $event->image ? Storage::url($event->image) : asset('images/event-imgs/img-1.jpg') }}"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="card-event-dt">
                                                                            <h5>{{ $event->name }}</h5>
                                                                            <div class="evnt-time">
                                                                                {{ $event->formatDate($event->date) }}
                                                                                {{ $event->start_at }}
                                                                            </div>
                                                                            <div class="event-btn-group">
                                                                                @if (auth()->user()->role_id == 2)
                                                                                    <button class="esv-btn saved-btn me-2"
                                                                                        onclick="window.location.href='{{ route('admin.events.index') }}'">


                                                                                        <i
                                                                                            class="fa-regular fa-bookmark me-2"></i>Gérer</button>
                                                                                @endif
                                                                                <button class="esv-btn me-2"
                                                                                    onclick="window.location.href='{{ route('front.event.show', $event) }}'">
                                                                                    <i
                                                                                        class="fa-solid fa-arrow-up-from-bracket me-2"></i>Voir</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                    {{-- <div class="mt-5 browse-btn" style="float: right;">
                                                        {{ $events->links() }}
                                                    </div> --}}
                                                </div>
                                                <div class="tab-pane fade" id="organised" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="main-card mt-4">
                                                                <div class="card-top p-4">
                                                                    <div class="card-event-img">
                                                                        <img src="images/event-imgs/img-6.jpg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="card-event-dt">
                                                                        <h5>Step Up Open Mic Show</h5>
                                                                        <div class="evnt-time">Thu, Jun 30, 2022 4:30 AM
                                                                        </div>
                                                                        <div class="event-btn-group">
                                                                            <button class="esv-btn me-2"
                                                                                onclick="window.location.href='create_online_event.html'"><i
                                                                                    class="fa-solid fa-gear me-2"></i>Manage
                                                                                Event</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="main-card mt-4">
                                                                <div class="card-top p-4">
                                                                    <div class="card-event-img">
                                                                        <img src="images/event-imgs/img-7.jpg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="card-event-dt">
                                                                        <h5>Tutorial on Canvas Painting for Beginners</h5>
                                                                        <div class="evnt-time">Sun, Jul 17, 2022 5:30 AM
                                                                        </div>
                                                                        <div class="event-btn-group">
                                                                            <button class="esv-btn me-2"
                                                                                onclick="window.location.href='create_online_event.html'"><i
                                                                                    class="fa-solid fa-gear me-2"></i>Manage
                                                                                Event</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="attending" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="main-card mt-4">
                                                                <div class="card-top p-4">
                                                                    <div class="card-event-img">
                                                                        <img src="images/event-imgs/img-6.jpg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="card-event-dt">
                                                                        <h5>Step Up Open Mic Show</h5>
                                                                        <div class="evnt-time">Thu, Jun 30, 2022 4:30 AM
                                                                        </div>
                                                                        <div class="event-btn-group">
                                                                            <button class="esv-btn me-2"
                                                                                onclick="window.location.href='invoice.html'"><i
                                                                                    class="fa-solid fa-arrow-up-from-bracket me-2"></i>View
                                                                                Ticket</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="about" role="tabpanel"
                                            aria-labelledby="about-tab">
                                            <div class="main-card mt-4">
                                                <div class="bp-title position-relative">
                                                    <h4>About</h4>
                                                    <button class="main-btn btn-hover ms-auto edit-btn me-3 pe-4 ps-4 h_40"
                                                        data-bs-toggle="modal" data-bs-target="#aboutModal">
                                                        <i class="fa-regular fa-pen-to-square me-2"></i>Edit
                                                    </button>
                                                </div>
                                                <div class="about-details">
                                                    <div class="about-step">
                                                        <h5>@lang('Name')</h5>
                                                        <span>{{ Auth::user()->name }}</span>
                                                        {{-- <span>{{ Auth::user()->role }}</span> --}}
                                                    </div>
                                                    <div class="about-step">
                                                        <h5>Dites nous quelques chose a propos de vous et laissez les gens
                                                            le savoir</h5>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit. Ut tincidunt interdum nunc et auctor. Phasellus
                                                            quis pharetra sapien. Integer ligula sem, sodales vitae varius
                                                            in, varius eget augue.</p>
                                                    </div>
                                                    <div class="about-step">
                                                        <h5>Disponible sur reseaux sociaux</h5>
                                                        <div class="social-links">
                                                            <a href="#" class="social-link"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Facebook"><i
                                                                    class="fab fa-facebook-square"></i></a>
                                                            <a href="#" class="social-link"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Instagram"><i class="fab fa-instagram"></i></a>
                                                            <a href="#" class="social-link"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Twitter"><i class="fab fa-twitter"></i></a>
                                                            <a href="#" class="social-link"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                                            <a href="#" class="social-link"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Youtube"><i class="fab fa-youtube"></i></a>
                                                            <a href="#" class="social-link"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Website"><i class="fa-solid fa-globe"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="about-step">
                                                        <h5>Address</h5>
                                                        <p class="mb-0">00 Challis St, Newport, Victoria, 0000, Australia
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="setting" role="tabpanel"
                                            aria-labelledby="setting-tab">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="main-card mt-4 p-0">
                                                        <div class="nav custom-tabs" role="tablist">
                                                            <button class="tab-link active" data-bs-toggle="tab"
                                                                data-bs-target="#tab-01" type="button" role="tab"
                                                                aria-controls="tab-01" aria-selected="true"><i
                                                                    class="fa-solid fa-key me-3"></i>Paramètres du Mot de
                                                                Passe </button>

                                                            <button class="tab-link" data-bs-toggle="tab"
                                                                data-bs-target="#tab-03" type="button" role="tab"
                                                                aria-controls="tab-03" aria-selected="false"><i
                                                                    class="fa-solid fa-trash me-3"></i>
                                                                Suppression du compte</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="main-card mt-4">
                                                        <div class="tab-content">
                                                            @include('profile.partials.update-profile-information-form')
                                                            {{-- @include('profile.partials.update-password-form') --}}
                                                            @include('profile.partials.delete-user-form')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="orders" role="tabpanel"
                                            aria-labelledby="orders-tab">
                                            <div class="main-card mt-4">
                                                <div class="card-top p-4">
                                                    <div class="card-event-img">
                                                        <img src="images/event-imgs/img-7.jpg" alt="">
                                                    </div>
                                                    <div class="card-event-dt">
                                                        <h5>Tutorial on Canvas Painting for Beginners</h5>
                                                        <div class="invoice-id">Invoice ID : <span>BRCCRW-11111111</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-bottom">
                                                    <div class="card-bottom-item">
                                                        <div class="card-icon">
                                                            <i class="fa-solid fa-calendar-days"></i>
                                                        </div>
                                                        <div class="card-dt-text">
                                                            <h6>Event Starts on</h6>
                                                            <span>01 June 2022</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-bottom-item">
                                                        <div class="card-icon">
                                                            <i class="fa-solid fa-ticket"></i>
                                                        </div>
                                                        <div class="card-dt-text">
                                                            <h6>Total Tickets</h6>
                                                            <span>1</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-bottom-item">
                                                        <div class="card-icon">
                                                            <i class="fa-solid fa-money-bill"></i>
                                                        </div>
                                                        <div class="card-dt-text">
                                                            <h6>Paid Amount</h6>
                                                            <span>AUD $50.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-bottom-item">
                                                        <div class="card-icon">
                                                            <i class="fa-solid fa-money-bill"></i>
                                                        </div>
                                                        <div class="card-dt-text">
                                                            <h6>Invoice</h6>
                                                            <a href="invoice.html">Download</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Body End-->
@endsection
