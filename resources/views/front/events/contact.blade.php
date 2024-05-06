@extends('layout.front')
@section('title', __('Contact us'))
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
                                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">@lang('Home')</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">@lang('Contact us')</li>
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
                    <div class="col-lg-12 col-md-12">
                        <div class="main-title checkout-title text-center">
                            <h3>@lang('Contact us')</h3>
                            <p class="mb-0">Avez-vous une question ? Nous nous ferons une joie de vous écouter.</p>
                        </div>
                    </div>
                    @livewire('front.save-contact')

                </div>
            </div>
        </div>
    </div>
    <!-- Body End-->
@endsection
