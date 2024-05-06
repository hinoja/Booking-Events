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
                                @include('include.front.searchBar')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="explore-events p-80">
            <div class="container">
                <div class="row">
                    @if ($category = request()->category)
                        <h4 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">@lang('For category')
                            <strong class="a-link">{{ $category->name }}
                                ({{ $events->count() }})</strong>
                        </h4>
                    @elseif (request()->isMethod('post'))
                        <h4 class="text-center wow fadeInUp" data-wow-delay="0.1s">@lang('Search results') : <strong
                                class="a-link">
                                @if ($events === '')
                                    0
                                @else
                                    {{ $events->count() }}
                                @endif
                            </strong> @lang('Evènement(s) trouvé(s)')
                        </h4>
                        <p class="text-center mb-5 fst-italic">
                            <span>
                                @lang('Catégorie') : <strong
                                    class="a-link">{{ request()->category_id ? App\Models\Category::find(request()->category_id)->name : trans('Empty') }}</strong>,

                                Nom : <strong class="a-link">{{ request()->search ?? trans('Empty') }}</strong>

                            </span>
                        </p>
                    @endif

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

                                {{-- The whole world belongs to you. --}}
                                <div class="row" data-ref="event-filter-content">
                                    @foreach ($events as $event)
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix  {{ $event->category->name }} "
                                            data-ref="mixitup-target">
                                            <div class="main-card mt-4">
                                                <div class="event-thumbnail">
                                                    <a href="{{ route('front.event.show', $event) }}" class="thumbnail-img">
                                                        <img src="{{ $event->image ? Storage::url($event->image) : asset('images/event-imgs/img-1.jpg') }}"
                                                            alt="">
                                                    </a>
                                                    <span class="bookmark-icon" title="Bookmark"></span>

                                                </div>
                                                <div class="event-content">
                                                    <a href="{{ route('front.event.show', $event) }}" class="event-title">
                                                        {{ $event->name }}</a>
                                                    <div class="duration-price-remaining">
                                                        <span class="duration-price link-success">
                                                            {{ $event->tickets->last()->price > 0 ? 'PAYANT' : 'GRATUIT' }}
                                                        </span>
                                                        <span class="remaining">
                                                            @if (now() > $event->date)
                                                                <small class="badge rounded-pill bg-danger"> Daté</small>
                                                            @endif
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="event-footer">
                                                    <div class="event-timing">
                                                        <div class="publish-date">
                                                            <span><i class="fa-solid fa-calendar-day me-2"></i>
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
