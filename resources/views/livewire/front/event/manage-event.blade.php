<div>
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="more-events">
            <div class="main-title position-relative">
                <h3>Explorez Plus d’évènements</h3>
                <a href="{{ route('welcome') }}" class="view-all-link">Tout Rechercher<i
                        class="fa-solid fa-right-long ms-2"></i></a>
            </div>
            <div class="owl-carousel moreEvents-slider owl-theme">
                @foreach ($events as $event)
                    <div class="item">
                        <div class="main-card mt-4">
                            <div class="event-thumbnail">
                                <a href="venue_event_detail_view.html" class="thumbnail-img">
                                    <img src="{{ asset('images/event-imgs/img-1.jpg') }}" alt="">
                                </a>
                                <span class="bookmark-icon" title="Bookmark"></span>
                            </div>
                            <div class="event-content">
                                <a href="venue_event_detail_view.html" class="event-title">{{ $event->name }}</a>
                                <div class="duration-price-remaining">
                                    {{-- <span class="duration-price">AUD $100.00*</span> --}}
                                    <span class="remaining"></span>
                                </div>
                            </div>
                            <div class="event-footer">
                                <div class="event-timing">
                                    <div class="publish-date">
                                        <span><i
                                                class="fa-solid fa-calendar-day me-2"></i>{{ $event->formatDate($event->date) }}</span>
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
        </div>
    </div>
</div>
