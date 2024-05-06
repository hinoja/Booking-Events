@extends('layout.admin')
@section('title', 'Liste des Evenements')
@section('content')
    <!-- Body Start -->
    <div class="wrapper wrapper-body">
        <div class="dashboard-body">
            <div class="container-fluid">
                @include('include.front.flash-message')
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-main-title">
                            <h3><i
                                    class="fa-solid fa-calendar-days me-3"></i>{{ auth()->user()->role_id == 1 ? 'Liste des Evènements' : ' Evènement(s) que vous avez Organisé(s )' }}
                                ({{ auth()->user()->role_id == 2 ? $countbyOrganisator : $count }})
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-12">

                        @if (auth()->user()->role_id == 2)
                            @foreach ($eventsbyOrganisator as $event)
                                <div class="event-list">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="all-tab" role="tabpanel">
                                            <div class="main-card mt-4">
                                                <div class="contact-list">
                                                    <div
                                                        class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
                                                        <div class="d-md-flex align-items-center event-top-info">
                                                            <div class="card-event-img">
                                                                <img src="{{ $event->image ? Storage::url($event->image) : asset('images/event-imgs/big-2.jpg') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="card-event-dt">
                                                                <h5>{{ $event->name }}  @if ( now() > $event->date) <small class="badge rounded-pill bg-danger"> Daté</small> @endif </h5>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button class="option-btn" type="button"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i
                                                                    class="fa-solid fa-ellipsis-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="{{ route('admin.events.status', $event) }}"
                                                                    class="dropdown-item">
                                                                    <i class="fa-solid fa-gear me-3"></i>
                                                                    {{ $event->is_active ? __('Disable') : __('Unblock') }}</a>
                                                                <a href="{{ route('front.event.show', $event) }}"
                                                                    class="dropdown-item"><i
                                                                        class="fa-solid fa-eye me-3"></i>Détails</a>
                                                                {{-- <a href="#" class="dropdown-item"><i
                                                                class="fa-solid fa-clone me-3"></i>Duplicate</a> --}}

                                                                {{-- <a href="#" class="dropdown-item delete-event"><i
                                                                class="fa-solid fa-trash-can me-3"></i> --}}

                                                                <form method="POST"
                                                                    action="{{ route('admin.events.destroy', $event) }}">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <a href="{{ route('admin.events.destroy', $event) }}"
                                                                        onclick="event.preventDefault();
                                                                    this.closest('form').submit();"
                                                                        class="dropdown-item"><i
                                                                            class="fa-solid fa-trash-can me-3"></i>

                                                                        @lang('Delete')

                                                                    </a>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
                                                        <div class="icon-box ">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-location-dot"></i>
                                                            </span>
                                                            <p>Status</p>
                                                            <h6 class="coupon-status">
                                                                {{ $event->is_active ? 'Publie' : 'Non Publie' }} </h6>
                                                        </div>
                                                        <div class="icon-box">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-calendar-days"></i>
                                                            </span>
                                                            <p> Commence le </p>
                                                            <h6 class="coupon-status">
                                                                {{ $event->formatDate($event->date) }}
                                                                à
                                                                {{ $event->start_at }} </h6>
                                                        </div>
                                                        <div class="icon-box">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-ticket"></i>
                                                            </span>
                                                            <p>TYPE</p>
                                                            <h6 class="coupon-status">
                                                                {{ $event->price == 1 ? 'GRATUIT' : 'PAYANT' }}
                                                            </h6>
                                                        </div>
                                                        <div class="icon-box">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-tag"></i>
                                                            </span>
                                                            <p>Ticket(s) Vendu(s)</p>
                                                            <h6 class="coupon-status">
                                                                {{ DB::table('booking_event')->where('event_id', $event->id)->count() }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="online-tab" role="tabpanel">
                                            <div class="main-card d-none mt-4">
                                                <div
                                                    class="d-flex align-items-center justify-content-center flex-column min-height-430">
                                                    <div class="event-list-icon">
                                                        <img src="images/calendar.png" alt="">
                                                    </div>
                                                    <p class="font-16 mt-4 text-light3">No Event found</p>
                                                </div>
                                            </div>
                                            <div class="main-card mt-4">
                                                <div class="contact-list">
                                                    <div
                                                        class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
                                                        <div class="d-md-flex align-items-center event-top-info">
                                                            <div class="card-event-img">
                                                                <img src="images/event-imgs/img-2.jpg" alt="">
                                                            </div>
                                                            <div class="card-event-dt">
                                                                <h5>Earrings Workshop with Bronwyn David</h5>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button class="option-btn" type="button"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i
                                                                    class="fa-solid fa-ellipsis-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-gear me-3"></i>Manage</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-eye me-3"></i>Preview Event</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-clone me-3"></i>Duplicate</a>
                                                                <a href="#" class="dropdown-item delete-event"><i
                                                                        class="fa-solid fa-trash-can me-3"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
                                                        <div class="icon-box ">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-location-dot"></i>
                                                            </span>
                                                            <p>Status</p>
                                                            <h6 class="coupon-status">Publish</h6>
                                                        </div>
                                                        <div class="icon-box">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-calendar-days"></i>
                                                            </span>
                                                            <p>Starts on</p>
                                                            <h6 class="coupon-status">30 Jun, 2022 10:00 AM</h6>
                                                        </div>
                                                        <div class="icon-box">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-ticket"></i>
                                                            </span>
                                                            <p>Ticket</p>
                                                            <h6 class="coupon-status">250</h6>
                                                        </div>
                                                        <div class="icon-box">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-tag"></i>
                                                            </span>
                                                            <p>Tickets sold</p>
                                                            <h6 class="coupon-status">20</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="venue-tab" role="tabpanel">
                                            <div class="main-card mt-4">
                                                <div class="contact-list">
                                                    <div
                                                        class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
                                                        <div class="d-md-flex align-items-center event-top-info">
                                                            <div class="card-event-img">
                                                                <img src="images/event-imgs/img-7.jpg" alt="">
                                                            </div>
                                                            <div class="card-event-dt">
                                                                <h5>Tutorial on Canvas Painting for Beginners</h5>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button class="option-btn" type="button"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i
                                                                    class="fa-solid fa-ellipsis-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-gear me-3"></i>Manage</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-eye me-3"></i>Preview Event</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-clone me-3"></i>Duplicate</a>
                                                                <a href="#" class="dropdown-item delete-event"><i
                                                                        class="fa-solid fa-trash-can me-3"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
                                                        <div class="icon-box ">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-location-dot"></i>
                                                            </span>
                                                            <p>Status</p>
                                                            <h6 class="coupon-status">Publish</h6>
                                                        </div>
                                                        <div class="icon-box">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-calendar-days"></i>
                                                            </span>
                                                            <p>Starts on</p>
                                                            <h6 class="coupon-status">30 Jun, 2022 10:00 AM</h6>
                                                        </div>
                                                        <div class="icon-box">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-ticket"></i>
                                                            </span>
                                                            <p>Ticket</p>
                                                            <h6 class="coupon-status">250</h6>
                                                        </div>
                                                        <div class="icon-box">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-tag"></i>
                                                            </span>
                                                            <p>Tickets sold</p>
                                                            <h6 class="coupon-status">20</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            @foreach ($events as $event)
                                <div class="event-list">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="all-tab" role="tabpanel">
                                            <div class="main-card mt-4">
                                                <div class="contact-list">
                                                    <div
                                                        class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
                                                        <div class="d-md-flex align-items-center event-top-info">
                                                            <div class="card-event-img">
                                                                <img src="{{ $event->image ? Storage::url($event->image) : asset('images/event-imgs/big-2.jpg') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="card-event-dt">
                                                                <h5>{{ $event->name }}</h5>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button class="option-btn" type="button"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i
                                                                    class="fa-solid fa-ellipsis-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="{{ route('admin.events.status', $event) }}"
                                                                    class="dropdown-item">
                                                                    <i class="fa-solid fa-gear me-3"></i>
                                                                    {{ $event->is_active ? __('Disable') : __('Unblock') }}</a>
                                                                <a href="{{ route('front.event.show', $event) }}"
                                                                    class="dropdown-item"><i
                                                                        class="fa-solid fa-eye me-3"></i>Détails</a>
                                                                {{-- <a href="#" class="dropdown-item"><i
                                                                    class="fa-solid fa-clone me-3"></i>Duplicate</a> --}}

                                                                {{-- <a href="#" class="dropdown-item delete-event"><i
                                                                    class="fa-solid fa-trash-can me-3"></i> --}}

                                                                <form method="POST"
                                                                    action="{{ route('admin.events.destroy', $event) }}">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <a href="{{ route('admin.events.destroy', $event) }}"
                                                                        onclick="event.preventDefault();
                                                                        this.closest('form').submit();"
                                                                        class="dropdown-item"><i
                                                                            class="fa-solid fa-trash-can me-3"></i>

                                                                        @lang('Delete')

                                                                    </a>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
                                                        <div class="icon-box ">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-location-dot"></i>
                                                            </span>
                                                            <p>Status</p>
                                                            <h6 class="coupon-status">
                                                                {{ $event->is_active ? 'Publie' : 'Non Publie' }} </h6>
                                                        </div>
                                                        <div class="icon-box">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-calendar-days"></i>
                                                            </span>
                                                            <p> Commence le </p>
                                                            <h6 class="coupon-status">
                                                                {{ $event->formatDate($event->date) }} à
                                                                {{ $event->start_at }} </h6>
                                                        </div>
                                                        <div class="icon-box">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-ticket"></i>
                                                            </span>
                                                            <p>TYPE</p>
                                                            <h6 class="coupon-status">
                                                                {{ $event->price == 1 ? 'GRATUIT' : 'PAYANT' }}
                                                            </h6>
                                                        </div>
                                                        <div class="icon-box">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-tag"></i>
                                                            </span>
                                                            <p>Tickets sold</p>
                                                            <h6 class="coupon-status">20</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="online-tab" role="tabpanel">
                                            <div class="main-card d-none mt-4">
                                                <div
                                                    class="d-flex align-items-center justify-content-center flex-column min-height-430">
                                                    <div class="event-list-icon">
                                                        <img src="images/calendar.png" alt="">
                                                    </div>
                                                    <p class="font-16 mt-4 text-light3">No Event found</p>
                                                </div>
                                            </div>
                                            <div class="main-card mt-4">
                                                <div class="contact-list">
                                                    <div
                                                        class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
                                                        <div class="d-md-flex align-items-center event-top-info">
                                                            <div class="card-event-img">
                                                                <img src="images/event-imgs/img-2.jpg" alt="">
                                                            </div>
                                                            <div class="card-event-dt">
                                                                <h5>Earrings Workshop with Bronwyn David</h5>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button class="option-btn" type="button"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i
                                                                    class="fa-solid fa-ellipsis-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-gear me-3"></i>Manage</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-eye me-3"></i>Preview Event</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-clone me-3"></i>Duplicate</a>
                                                                <a href="#" class="dropdown-item delete-event"><i
                                                                        class="fa-solid fa-trash-can me-3"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
                                                        <div class="icon-box ">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-location-dot"></i>
                                                            </span>
                                                            <p>Status</p>
                                                            <h6 class="coupon-status">Publish</h6>
                                                        </div>
                                                        <div class="icon-box">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-calendar-days"></i>
                                                            </span>
                                                            <p>Starts on</p>
                                                            <h6 class="coupon-status">30 Jun, 2022 10:00 AM</h6>
                                                        </div>
                                                        <div class="icon-box">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-ticket"></i>
                                                            </span>
                                                            <p>Ticket</p>
                                                            <h6 class="coupon-status">250</h6>
                                                        </div>
                                                        <div class="icon-box">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-tag"></i>
                                                            </span>
                                                            <p>Tickets sold</p>
                                                            <h6 class="coupon-status">20</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="venue-tab" role="tabpanel">
                                            <div class="main-card mt-4">
                                                <div class="contact-list">
                                                    <div
                                                        class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
                                                        <div class="d-md-flex align-items-center event-top-info">
                                                            <div class="card-event-img">
                                                                <img src="images/event-imgs/img-7.jpg" alt="">
                                                            </div>
                                                            <div class="card-event-dt">
                                                                <h5>Tutorial on Canvas Painting for Beginners</h5>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button class="option-btn" type="button"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i
                                                                    class="fa-solid fa-ellipsis-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-gear me-3"></i>Manage</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-eye me-3"></i>Preview Event</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-clone me-3"></i>Duplicate</a>
                                                                <a href="#" class="dropdown-item delete-event"><i
                                                                        class="fa-solid fa-trash-can me-3"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
                                                        <div class="icon-box ">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-location-dot"></i>
                                                            </span>
                                                            <p>Status</p>
                                                            <h6 class="coupon-status">Publish</h6>
                                                        </div>
                                                        <div class="icon-box">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-calendar-days"></i>
                                                            </span>
                                                            <p>Starts on</p>
                                                            <h6 class="coupon-status">30 Jun, 2022 10:00 AM</h6>
                                                        </div>
                                                        <div class="icon-box">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-ticket"></i>
                                                            </span>
                                                            <p>Ticket</p>
                                                            <h6 class="coupon-status">250</h6>
                                                        </div>
                                                        <div class="icon-box">
                                                            <span class="icon">
                                                                <i class="fa-solid fa-tag"></i>
                                                            </span>
                                                            <p>Tickets sold</p>
                                                            <h6 class="coupon-status">20</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{ $events->links() }}
                        @endif
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- Body End -->
@endsection
