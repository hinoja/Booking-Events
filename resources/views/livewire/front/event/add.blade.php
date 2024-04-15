<div>
    <div class="event-dt-block p-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="main-title text-center">
                        <h3>Création d'un lieu d'évènement <span class="ml-2" style="color: #7ad254">Etape
                                :{{ $step + 1 }} sur 3</span></h3>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-9 col-md-12">
                    <div class="wizard-steps-block">
                        <div id="add-event-tab" class="step-app">
                            <ul class="step-steps">
                                <li class="@if ($step == 0) active @endif">
                                    <a href="#tab_step1">
                                        <span class="number"></span>
                                        <span class="step-name">Détails</span>
                                    </a>
                                </li>
                                <li class="@if ($step == 1) active @endif">
                                    <a href="#tab_step2" @if ($step == 1) active @endif>
                                        <span class="number"></span>
                                        <span class="step-name">Tickets</span>
                                    </a>
                                </li>
                                <li class="@if ($step == 2) active @endif">
                                    <a href="#tab_step3">
                                        <span class="number"></span>
                                        <span class="step-name">Setting</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="step-content">
                                @if ($step == 0)
                                    <div class=" step-tab-info active" id="tab_step1">
                                        <div class="tab-from-content">
                                            <div class="main-card">
                                                <div class="bp-title">
                                                    <h4><i class="fa-solid fa-circle-info step_icon me-3"></i>Détails
                                                    </h4>
                                                </div>
                                                <form enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="p-4 bp-form main-form">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group border_bottom pb_30">
                                                                    <label class="form-label fs-16">Donnez un nom à
                                                                        votre
                                                                        événement<span class="text text-success">
                                                                            *</span></label>
                                                                    <p class="mt-2 d-block fs-14 mb-3">Voyez comment
                                                                        votre
                                                                        nom apparaitra sur la page de l'événement et la
                                                                        liste de tous les endroits où le nom de votre
                                                                        événement sera utilisé. </p>
                                                                    <input
                                                                        class="form-control h_50  @error('name') is-invalid @enderror"
                                                                        id="name" type="text" wire:model="name"
                                                                        name="name"
                                                                        placeholder="Entrez le nom de l'évènement ici ...">
                                                                    @error('name')
                                                                        <span
                                                                            class="text-danger d-flex justify-content-start"><small>{{ $message }}</small></span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group border_bottom pt_30 pb_30">
                                                                    <label class="form-label fs-16"> Choisissez une
                                                                        catégorie pour votre événement.*</label>
                                                                    <p class="mt-2 d-block fs-14 mb-3">Le choix de
                                                                        catégories pertinentes permet d'améliorer la
                                                                        visibilité de votre événement. votre événement.

                                                                    </p>
                                                                    <select name="category_id" wire:model="category_id"
                                                                        class="form-control  @error('category_id') is-invalid @enderror"
                                                                        id="category_id" data-size="5"
                                                                        title="Select category" data-live-search="true">
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
                                                                    <label class="form-label fs-16">When is your
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
                                                                                <input type="date" wire:model="date"
                                                                                    name="date"
                                                                                    class="form-control h_50 "
                                                                                    id="date" data-language="fr"
                                                                                    placeholder="MM/DD/YYYY"
                                                                                    value="">
                                                                                <span class="absolute-icon"><i
                                                                                        class="fa-solid fa-calendar-days"></i></span>
                                                                            </div>
                                                                            @error('date')
                                                                                <span
                                                                                    class="text-danger d-flex justify-content-start"><small>{{ $message }}</small></span>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="row g-2">
                                                                                <div class="col-md-6">
                                                                                    <div class="clock-icon">
                                                                                        <label
                                                                                            class="form-label mt-3 fs-6">Time</label>
                                                                                        <div
                                                                                            class="loc-group position-relative">
                                                                                            <input type="time"
                                                                                                wire:model="start_at"
                                                                                                name="start_at"
                                                                                                class="form-control h_50"
                                                                                                data-language="fr"
                                                                                                placeholder="H:m:s">
                                                                                            <span
                                                                                                class="absolute-icon"><i
                                                                                                    class="fa-solid fa-colk"></i></span>
                                                                                        </div>
                                                                                        @error('time')
                                                                                            <span
                                                                                                class="text-danger d-flex justify-content-start"><small>{{ $message }}</small></span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <label
                                                                                        class="form-label mt-3 fs-6">Duration</label>
                                                                                    <div
                                                                                        class="loc-group position-relative">
                                                                                        <input type="number"
                                                                                            wire:model="duration"
                                                                                            name="duration"
                                                                                            min="0.1"
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
                                                                    <label class="form-label fs-16">Add a few images to
                                                                        your
                                                                        event banner.</label>
                                                                    <p class="mt-2 fs-14 d-block mb-3 pe_right">Upload
                                                                        colorful and vibrant images as the banner for
                                                                        your
                                                                        event! See how beautiful images help your event
                                                                        details page.
                                                                    <div class="content-holder mt-4">
                                                                        <div class="">
                                                                            <input type="file" name="image"
                                                                                class="form-floatting @error('image') is-invalid @enderror"
                                                                                id="image" wire:model="image"
                                                                                accept=".jpg,.png,.jpeg,.ico">
                                                                            {{-- @if ($image)
                                                                                        <img
                                                                                            src="{{ $image->temporaryUrl() }}">
                                                                                        {{-- @else
                                                                                    <img src="{{ asset('images/banners/custom-img.jpg') }}"
                                                                                        alt="">
                                                                                    @endif --}}
                                                                            {{-- <label for="thumb-img">Uploader une
                                                                                    Image</label>  --}}


                                                                        </div>
                                                                        @error('image')
                                                                            <span
                                                                                class="text-danger d-flex justify-content-start"><small>{{ $message }}</small></span>
                                                                        @enderror

                                                                    </div>
                                                                </div>


                                                                <div class="form-group border_bottom pb_30">
                                                                    <label class="form-label fs-16">Please describe
                                                                        your
                                                                        event.</label>
                                                                    <p class="mt-2 fs-14 d-block mb-3">Write a few
                                                                        words
                                                                        below to describe your event and provide any
                                                                        extra
                                                                        information such as schedules, itinerary or any
                                                                        special instructions required to attend your
                                                                        event.
                                                                    </p>
                                                                    <div class="col-12">
                                                                        <textarea wire:model="description"
                                                                        id="summernote" class="card-body summernote"
                                                                        class="form-control col-12" cols="7" rows="10">{{ $description }}</textarea>
                                                                    </div>
                                                                    @error('description')
                                                                        <span
                                                                            class="text-danger d-flex justify-content-start"><small>{{ $message }}</small></span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group border_bottom pt_30 pb_30">
                                                                    <label class="form-label fs-16"> Choisissez un type
                                                                        pour votre évènement pour votre
                                                                        événement.*</label>
                                                                    <p class="mt-2 d-block fs-14 mb-3">Le choix de
                                                                        catégories pertinentes permet d'améliorer la
                                                                        visibilité de votre événement. votre événement.

                                                                    </p>
                                                                    <select
                                                                        class="form-control @error('type') is-invalid @enderror"
                                                                        wire:model.defer="type"
                                                                        title="Select category"
                                                                        data-live-search="true">
                                                                        <option hidden>@lang('Select the job type')<b
                                                                                class="text-danger">*</b></option>
                                                                        @foreach ($types as $key => $type)
                                                                            <option value="{{ $key }}">
                                                                                {{ __($type) }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('type')
                                                                        <span
                                                                            class="text-danger d-flex justify-content-start"><small>{{ $message }}</small></span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group pt_30 pb-2">
                                                                    <label class="form-label fs-16">Where is your event
                                                                        taking place? *</label>
                                                                    <p class="mt-2 fs-14 d-block mb-3">Add a venue to
                                                                        your
                                                                        event to tell your attendees where to join the
                                                                        event.</p>
                                                                    <input
                                                                        class="form-control h_50 @error('place') is-invalid @enderror"
                                                                        id="place" type="text"
                                                                        wire:model="place" name="place"
                                                                        placeholder="Entrez le lieu/lien de l'évènement ici ..."
                                                                        value="">
                                                                </div>


                                                            </div>
                                                        </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            @endif
                         

                        </div>
                        <div class="step-footer step-tab-pager mt-4">
                            @if ($step > 0)
                                <button data-direction="prev" wire:click="previous()"
                                    class="btn btn-default btn-hover steps_btn">Previous</button>
                            @endif
                            @if ($step === 0 || $step === 1)
                                <button data-direction="next" wire:click="next()"
                                    class="btn btn-default btn-hover steps_btn">Next</button>
                            @endif
                            @if ($step == 2)
                                <button data-direction="finish"
                                    class="btn btn-default btn-hover steps_btn">Create</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
