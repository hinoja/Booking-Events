@extends('layout.front')
@section('title', 'Acceuil')
@section('content')
    <div class="wrapper">
        <div class="hero-banner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10">
                        <div class="hero-banner-content">
                            <h2>Découvrez des événements pour tout ce que vous aimez</h2>
                            <div class="search-form main-form">
                                <div class="row g-3">
                                    <div class="col-lg-5 col-md-12">
                                        <div class="form-group search-category">
                                            <select class="selectpicker" data-width="100%" data-size="5">
                                                <option value="browse_all" data-icon="fa-solid fa-tower-broadcast" selected>
                                                    Tout Rechercher</option>
                                                <option value="online_events" data-icon="fa-solid fa-video">Online Events
                                                </option>
                                                <option value="venue_events" data-icon="fa-solid fa-location-dot">Venue
                                                    Events</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12">
                                        <div class="form-group">
                                            <select class="selectpicker" data-width="100%" data-size="5"
                                                data-live-search="true">
                                                <option value="#">Tout</option>

                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-12">
                                        <a href="#" class="main-btn btn-hover w-100">Rechercher</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="explore-events p-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="event-filter-items">
                            <div class="featured-controls">
                                <div class="controls">
                                    <button type="button" class="control" data-filter="all">All</button>
                                    <button type="button" class="control" data-filter=".arts">Arts</button>
                                    <button type="button" class="control" data-filter=".business">Business</button>
                                    <button type="button" class="control" data-filter=".concert">Concert</button>
                                    <button type="button" class="control" data-filter=".workshops">Workshops</button>
                                    <button type="button" class="control" data-filter=".coaching_consulting">Coaching and
                                        Consulting</button>
                                    <button type="button" class="control" data-filter=".health_Wellness">Health and
                                        Wellbeing</button>
                                    <button type="button" class="control" data-filter=".volunteer">Volunteer</button>
                                    <button type="button" class="control" data-filter=".sports">Sports</button>
                                    <button type="button" class="control" data-filter=".free">Free</button>
                                </div>
                                {{-- @livewire('front.event.manage-event') --}}
                                {{-- The whole world belongs to you. --}}
                                <div class="row" data-ref="event-filter-content">
                                    @foreach ($events as $event)
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix  {{ $event->category->name }} "
                                            data-ref="mixitup-target">
                                            <div class="main-card mt-4">
                                                <div class="event-thumbnail">
                                                    <a href="{{ route('front.event.show', $event->id) }}"
                                                        class="thumbnail-img">
                                                        <img src="images/event-imgs/img-1.jpg" alt="">
                                                    </a>
                                                    <span class="bookmark-icon" title="Bookmark"></span>
                                                </div>
                                                <div class="event-content">
                                                    <a href="{{ route('front.event.show', $event->id) }}"
                                                        class="event-title">
                                                        {{ $event->name }}</a>
                                                    <div class="duration-price-remaining">
                                                        <span class="duration-price">AUD $100.00*</span>
                                                        <span class="remaining"></span>
                                                    </div>
                                                </div>
                                                <div class="event-footer">
                                                    <div class="event-timing">
                                                        <div class="publish-date">
                                                            <span><i class="fa-solid fa-calendar-day me-2"></i>15
                                                                {{ $event->FormatDate($event->date) }}</span>
                                                            <span class="dot"><i class="fa-solid fa-circle"></i></span>
                                                            <span>{{ $event->start_at }}</span>

                                                        </div>
                                                        <span class="publish-time"><i
                                                                class="fa-solid fa-clock me-2"></i>{{ $event->duration }}h</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="mt-5 browse-btn" style="float: right;">
                                    {{ $events->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
