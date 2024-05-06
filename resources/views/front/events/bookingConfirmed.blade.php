@extends('layout.front')
@section('title', 'Reservation Confirmée')
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
                                    <li class="breadcrumb-item"><a href="{{ route('front.event.show', $event) }}">Détails</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Confirmation de la réservation
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
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-7 col-md-10">
                        <div class="booking-confirmed-content">
                            <div class="main-card">
                                <div class="booking-confirmed-top text-center p_30">
                                    <div class="booking-confirmed-img mt-4">
                                        <img src="{{ asset('images/confirmed.png') }}" alt="">
                                    </div>
                                    <h4>Reservation Confirmée</h4>
                                    <p class="ps-lg-4 pe-lg-4">Nous avons le plaisir de vous annoncer que votre requête de
                                        réservation a été reçu et confirmée.</p>

                                </div>
                                <div class="booking-confirmed-bottom">
                                    <div class="booking-confirmed-bottom-bg p_30">
                                        <div class="event-order-dt">
                                            <div class="event-thumbnail-img">
                                                <img src="{{ $event->image ? Storage::url($event->image) : asset('images/event-imgs/img-1.jpg') }}"
                                                    alt="">

                                            </div>
                                            <div class="event-order-dt-content">
                                                <h5>{{ $event->name }}</h5>
                                                <span>{{ $event->formatDate($event->date) }} à {{ $event->start_at }} .
                                                    Durée {{ $event->duration }}h</span>
                                                <div class="buyer-name">{{ Auth::user()->name }}</div>
                                                <div class="booking-total-tickets">
                                                    <i class="fa-solid fa-ticket rotate-icon"></i>
                                                    <span class="booking-count-tickets mx-2">1</span>x Ticket
                                                </div>
                                                <div class="booking-total-grand">
                                                    Total : <span>{{ $event->tickets->last()->price }}</span> XAF
                                                </div>
                                            </div>
                                        </div>
                                        <a href="invoice.html" class="main-btn btn-hover h_50 w-100 mt-5"><i
                                                class="fa-solid fa-ticket rotate-icon me-3"></i>Voir le Ticket</a>
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
@push('js')
    <script src="{{ asset('js/timer.js') }}"></script>
@endpush
