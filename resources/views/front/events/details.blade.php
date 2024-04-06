
@php
    use Carbon\Carbon;
@endphp
@extends('layout.front')
@section('title', 'Details')
@section('content')
    <!-- Body Start-->
    <div class="wrapper">
        <div class="breadcrumb-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-10">
                        <div class="barren-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Acceuil</a></li>
                                    {{-- <li class="breadcrumb-item"><a href="explore_events.html">Explorer des Evènements</a>
                                    </li> --}}
                                    <li class="breadcrumb-item active" aria-current="page"> Détails
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="event-dt-block p-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="event-top-dts">
                            <div class="event-top-date" >
                                <span class="event-month">Apr
                                     {{-- {{ ($event->formatDate(Carbon::parse($event->date)->format('m'))) }} --}}
                                     {{-- {{ ( (Carbon::parse($event->date->format('d')))->translatedFormat('d M Y'))  }} --}}
                                    </span>
                                <span class="event-date">{{ Carbon::parse($event->date)->format('d') }}</span>
                            </div>
                            <div class="event-top-dt">
                                <h3 class="event-main-title">{{ $event->name }}</h3>
                                <div class="event-top-info-status">
                                    <span class="event-type-name"><i
                                            class="fa-solid fa-location-dot"></i>{{ $event->place }}</span>
                                    <span class="event-type-name details-hr">Debute le <span
                                            class="ev-event-date">{{ $event->formatDate($event->date) }} <strong
                                                style="color: green"> à partir de </strong>
                                            {{ $event->start_at }} </span></span>
                                    <span class="event-type-name details-hr">{{ $event->duration }}h</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-12">
                        <div class="main-event-dt">
                            <div class="event-img">
                                <img src="{{ asset('images/event-imgs/big-2.jpg') }}" alt="">
                            </div>
                            <div class="share-save-btns dropdown">
                                {{-- <button class="sv-btn me-2"><i class="fa-regular fa-bookmark me-2"></i>Save</button> --}}
                                <button class="sv-btn" data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="fa-solid fa-share-nodes me-2"></i>Partager</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fa-brands fa-facebook me-3"></i>Facebook</a></li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fa-brands fa-twitter me-3"></i>Twitter</a></li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fa-brands fa-linkedin-in me-3"></i>LinkedIn</a></li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-envelope me-3"></i>Email</a></li>
                                </ul>
                            </div>
                            <div class="main-event-content">
                                <h4>A propos de cet évènement</h4>
                                <p style="text-align:justify" class="text-justify"> {{ $event->description }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-12">
                        <div class="main-card event-right-dt">
                            <div class="bp-title">
                                <h4>Details de l’évènement</h4>
                            </div>

                            <div class="time-left">
                                <div class="countdown">
                                    <div class="countdown-item">
                                        {{-- {{   Carbon::parse($event->date) - Carbon::parse(now()) }} --}}
                                        <span id="day"></span>Jours
                                    </div>
                                    <div class="countdown-item">
                                        <span id="hour"></span>Heure
                                    </div>
                                    <div class="countdown-item">
                                        <span id="minute"></span>Minute
                                    </div>
                                    <div class="countdown-item">
                                        <span id="second"></span>Seconde
                                    </div>
                                </div>
                            </div>
                            <div class="event-dt-right-group mt-5">
                                <div class="event-dt-right-icon">
                                    <i class="fa-solid fa-circle-user"></i>
                                </div>
                                <div class="event-dt-right-content">
                                    <h4>Organisé par</h4>
                                    <h5>{{ $event->user->name }}</h5>
                                    <a href="attendee_profile_view.html">Voir Profile</a>
                                </div>
                            </div>
                            <div class="event-dt-right-group">
                                <div class="event-dt-right-icon">
                                    <i class="fa-solid fa-calendar-day"></i>
                                </div>
                                <div class="event-dt-right-content">
                                    <h4>Date et Heure</h4>
                                    <h5>{{ $event->formatDate($event->date) }} à {{ $event->start_at }}</h5>
                                    <div class="add-to-calendar">
                                        <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{-- <i class="fa-regular fa-calendar-days me-3"></i>Add to Calendar --}}
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fa-brands fa-windows me-3"></i>Outlook</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fa-brands fa-apple me-3"></i>Apple</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fa-brands fa-google me-3"></i>Google</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fa-brands fa-yahoo me-3"></i>Yahoo</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="event-dt-right-group">
                                <div class="event-dt-right-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="event-dt-right-content">
                                    <h4>Lieu </h4>
                                    <h5 class="mb-0">{{ $event->place }}</h5>
                                    <a href="#"><i class="fa-solid fa-location-dot me-2"></i>Voir la Carte</a>
                                </div>
                            </div>
                            <div class="select-tickets-block">
                                <h6>Selectionnez les Tickets</h6>
                                <div class="select-ticket-action">
                                    <div class="ticket-price">AUD $75.00</div>
                                    <div class="quantity">
                                        <div class="counter">
                                            <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                            <input type="text" value="0">
                                            <span class="up" onClick='increaseCount(event, this)'>+</span>
                                        </div>
                                    </div>
                                </div>
                                <p>2 x pair hand painted leather earrings 1 x glass of bubbles / or coffee Individual
                                    grazing box / fruit cup</p>
                                <div class="xtotel-tickets-count">
                                    <div class="x-title">1x Ticket(s)</div>
                                    <h4>AUD <span>$0.00</span></h4>
                                </div>
                            </div>
                            <div class="booking-btn">
                                <a href="checkout.html" class="main-btn btn-hover w-100">Réserver Maintenant </a>
                            </div>
                        </div>
                    </div>
                    @livewire('front.event.manage-event')

                </div>
            </div>
        </div>
    </div>
    <!-- Body End-->
@endsection
@push('js')
    <script src="{{ asset('js/timer.js') }}"></script>
@endpush
