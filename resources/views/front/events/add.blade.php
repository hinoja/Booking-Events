@extends('layout.front')
@section('title', 'Créer un Evènement')
@section('content')
    <!-- Body Start-->
    <div class="wrapper">

        @include('include.front.navbar')
        {{-- @livewire('front.event.add') --}}


        <div class="event-dt-block p-80">
            <div class="container">
                @include('include.front.flash-message')
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="main-title text-center">

                            {{-- @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">
                                    <li> {{ $error }}</li>
                                </div>
                            @endforeach --}}

                            <h3>Création d'un lieu d'évènement
                                {{-- <span class="ml-2" style="color: #7ad254">Etape :{{ $step + 1 }} sur 3</span> --}}
                            </h3>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9 col-md-12">
                        <div class=" ">

                            <div id="add-event-tab" class="step-app">

                                <div class="step-content">
                                    {{-- @if ($step == 0) --}}
                                    <div class=" step-tab-info active" id="tab_step1">
                                        <div class="tab-from-content">
                                            <div class="main-card">
                                                <div class="bp-title">
                                                    <h4><i class="fa-solid fa-circle-info step_icon me-3"></i>Détails
                                                    </h4>
                                                </div>
                                                <form method="POST" action="{{ route('front.save') }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="p-4 bp-form main-form">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group border_bottom pb_30">
                                                                    <label for="name" class="form-label fs-16">Donnez un
                                                                        nom à
                                                                        votre
                                                                        événement<span class="text text-success">
                                                                            *</span></label>
                                                                    <p class="mt-2 d-block fs-14 mb-3">Voyez comment
                                                                        votre
                                                                        nom apparaitra sur la page de l'événement et la
                                                                        liste de tous les endroits où le nom de votre
                                                                        événement sera utilisé. </p>
                                                                    <input required
                                                                        class="form-control h_50  @error('name') is-invalid @enderror"
                                                                        id="name" type="text" name="name"
                                                                        value="{{ old('name') }}"
                                                                        placeholder="Entrez le nom de l'évènement ici ...">
                                                                    @error('name')
                                                                        <span
                                                                            class="text-danger d-flex justify-content-start"><small>{{ $message }}</small></span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group border_bottom pt_30 pb_30">
                                                                    <label for="category_id" class="form-label fs-16">
                                                                        Choisissez une
                                                                        catégorie pour votre événement.*</label>
                                                                    <p class="mt-2 d-block fs-14 mb-3">Le choix de
                                                                        catégories pertinentes permet d'améliorer la
                                                                        visibilité de votre événement. votre événement.

                                                                    </p>
                                                                    <select required id="category_id" name="category_id"
                                                                        class=" selectpicker @error('category_id') is-invalid @enderror"
                                                                        data-size="5" title="Select category"
                                                                        data-live-search="true">
                                                                        @foreach ($categories as $category)
                                                                            <option value="{{ $category->id }}">
                                                                                {{ $category->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('category_id')
                                                                        <span
                                                                            class="text-danger d-flex justify-content-start"><small>{{ $message }}</small></span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group border_bottom pt_30 pb_30">
                                                                    <label for="date" class="form-label fs-16">When is
                                                                        your
                                                                        event?*</label>
                                                                    <p class="mt-2 fs-14 d-block mb-3">Tell your
                                                                        attendees
                                                                        when your event starts so they can get ready to
                                                                        attend.</p>
                                                                    <div class="row g-2">
                                                                        <div class="col-md-6">
                                                                            <label class="form-label mt-3 fs-6">Event
                                                                                Date.*</label>
                                                                            <div class="loc-group position-relative">
                                                                                <input type="date" required
                                                                                    name="date"
                                                                                    value="{{ old('date') }}"
                                                                                    class="form-control h_50 "
                                                                                    id="date" data-language="fr"
                                                                                    placeholder="DD/MM/YYYY" value="">
                                                                                <span class="absolute-icon"><i
                                                                                        class="fa-solid fa-calendar-days"></i></span>
                                                                            </div>
                                                                            <span><x-input-error :messages="$errors->get('date')"
                                                                                    class="mt-2" /></span>

                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="row g-2">
                                                                                <div class="col-md-6">
                                                                                    <div class="clock-icon">
                                                                                        <label class="form-label mt-3 fs-6"
                                                                                            for="time">Time</label>
                                                                                        <div
                                                                                            class="loc-group position-relative">
                                                                                            <input type="time"
                                                                                                id="time"
                                                                                                value="{{ old('start_at') }}"
                                                                                                required name="start_at"
                                                                                                class="form-control h_50"
                                                                                                data-language="fr"
                                                                                                placeholder="H:m:s">
                                                                                            <span class="absolute-icon"><i
                                                                                                    class="fa-solid fa-colk"></i></span>
                                                                                        </div>
                                                                                        @error('time')
                                                                                            <span
                                                                                                class="text-danger d-flex justify-content-start"><small>{{ $message }}</small></span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <label for="duration"
                                                                                        class="form-label mt-3 fs-6">Duration</label>
                                                                                    <div
                                                                                        class="loc-group position-relative">
                                                                                        <input type="number" required
                                                                                            value="{{ old('duration') }}"
                                                                                            name="duration" min="0"
                                                                                            max="10"
                                                                                            class="form-control h_50 @error('duration') is-invalid @enderror"
                                                                                            id="duration"
                                                                                            placeholder="3 heure(s)">
                                                                                    </div>
                                                                                    @error('duration')
                                                                                        <span
                                                                                            class="text-danger d-flex justify-content-start"><small>{{ $message }}</small></span>
                                                                                    @enderror

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group pt_30 pb_30">
                                                                    <label for="image" class="form-label fs-16"
                                                                        for="image">Add a few
                                                                        images to
                                                                        your
                                                                        event banner.</label>
                                                                    <p class="mt-2 fs-14 d-block mb-3 pe_right">Upload
                                                                        colorful and vibrant images as the banner for
                                                                        your
                                                                        event! See how beautiful images help your event
                                                                        details page.
                                                                    <div class="content-holder mt-4">
                                                                        <div class="">
                                                                            <div class="loc-group position-relative">
                                                                                <input type="file" class="form-control"
                                                                                    required name="image" id="image"
                                                                                    value="{{ old('image') }}"
                                                                                    placeholder=" Ajouter une image">
                                                                            </div>


                                                                        </div>
                                                                        <x-input-error :messages="$errors->get('image')" class="mt-2" />

                                                                    </div>
                                                                </div>
                                                                <div class="form-group border_bottom pb_30">
                                                                    <label for="pd_editor" class="form-label fs-16">Please
                                                                        describe your
                                                                        event.</label>
                                                                    <p class="mt-2 fs-14 d-block mb-3">Write a few words
                                                                        below to describe your event and provide any extra
                                                                        information such as schedules, itinerary or any
                                                                        special instructions required to attend your event.
                                                                    </p>
                                                                    <div class="text-editor mt-4">
                                                                        <textarea required id="pd_editor" name="description"> </textarea>
                                                                    </div>
                                                                    @error('description')
                                                                        <span
                                                                            class="text-danger d-flex justify-content-start"><small>{{ $message }}</small></span>
                                                                    @enderror
                                                                </div>


                                                                <div class="form-group border_bottom pt_30 pb_30">
                                                                    <label for="type" class="form-label fs-16">
                                                                        Choisissez un type
                                                                        pour votre évènement pour votre
                                                                        événement.*</label>
                                                                    <p class="mt-2 d-block fs-14 mb-3">Le choix de
                                                                        catégories pertinentes permet d'améliorer la
                                                                        visibilité de votre événement. votre événement.
                                                                    </p>
                                                                    <div class="row g-4">
                                                                        <div class="col-md-6 mr-4">
                                                                            <label class="form-label mt-3 fs-6"> le nombre
                                                                                de tickets </label>
                                                                            <div class="loc-group position-relative">
                                                                                <select name="type" id="type"
                                                                                    class=" selectpicker @error('type') is-invalid @enderror"
                                                                                    title="Selectionner le type d'Evènement"
                                                                                    data-live-search="true">
                                                                                    <option hidden>@lang('Select the job type')<b
                                                                                            class="text-danger">*</b>
                                                                                    </option>
                                                                                    {{-- @foreach ($types as $key => $type)
                                                                                    <option value="{{ $key }}">
                                                                                        {{ __($type) }}</option>
                                                                                @endforeach --}}
                                                                                    @foreach ($prices as $key => $price)
                                                                                        <option
                                                                                            value="{{ $key }}">
                                                                                            {{ __($price) }}</option>
                                                                                    @endforeach
                                                                                </select>


                                                                            </div>
                                                                            <span> @error('type')
                                                                                    <span
                                                                                        class="text-danger d-flex justify-content-start"><small>{{ $message }}</small></span>
                                                                                @enderror

                                                                        </div>

                                                                        <div class="col-md-3">
                                                                            <label class="form-label mt-3 fs-6"> Le nombre
                                                                                de Ticket</label>
                                                                            <div class="loc-group position-relative">
                                                                                <input type="number" min="5"
                                                                                    name="number"
                                                                                    value="{{ old('number') }}"
                                                                                    class="form-control h_50 "
                                                                                    id="date" data-language="fr"
                                                                                    placeholder="Ne rien saisir = Illimité">
                                                                            </div>
                                                                            <span><x-input-error :messages="$errors->get('number')"
                                                                                    class="mt-2" /></span>

                                                                        </div>
                                                                        <div class="col-md-2" id="price">
                                                                            <label class="form-label mt-3 fs-6"> Le Prix du
                                                                                ticket</label>
                                                                            <div class="loc-group position-relative">
                                                                                <input type="number" min="100"
                                                                                    name="price"
                                                                                    value="{{ old('price') }}"
                                                                                    class="form-control h_50 "
                                                                                    id="date" data-language="fr"
                                                                                    placeholder="5000">
                                                                            </div>
                                                                            <span><x-input-error :messages="$errors->get('price')"
                                                                                    class="mt-2" /></span>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="form-group pt_30 pb-2">
                                                                    <label class="form-label fs-16">Where is your event
                                                                        taking place? *</label>
                                                                    <p class="mt-2 fs-14 d-block mb-3">Add a venue to
                                                                        your
                                                                        event to tell your attendees where to join the
                                                                        event.</p>
                                                                    <input required
                                                                        class="form-control h_50 @error('place') is-invalid @enderror"
                                                                        id="place" type="text" name="place"
                                                                        placeholder="Entrez le lieu/lien de l'évènement ici ..."
                                                                        value="{{ old('place') }}">
                                                                    <span><x-input-error :messages="$errors->get('name')"
                                                                            class="mt-2" /></span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="step-footer step-tab-pager mt-4">

                                                            <button type="submit"
                                                                class="btn btn-default btn-hover steps_btn">Soumettre</button>

                                                        </div>
                                                </form>
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

@endsection
<!-- Body End-->
@push('css')
    <link href="{{ asset('css/datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-steps.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/ckeditor5/sample/css/sample.css') }}" rel="stylesheet">
@endpush
@push('js')
    <script src="{{ asset('vendor/ckeditor5/ckeditor.js') }}"></script>
    <script src="{{ asset('js/jquery-steps.min.js') }}"></script>
    <script src="{{ asset('js/datepicker.min.js') }}"></script>
    <script src="{{ asset('js/i18n/datepicker.en.js') }}"></script>
    <script>
        $('document').ready(function() {


            $('#type').change(function() {
                var data = $(this).val();
                if (data == "1") {
                    $('#price').hide();
                }
                if (data == "2") {
                    $('#price').show();
                }
            })
        })
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#pd_editor'), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });
    </script>
@endpush
