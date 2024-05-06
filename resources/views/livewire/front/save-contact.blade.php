<div>
    <div class="col-lg-10">
        <div class="main-card mt-5">
            <div class="row">
                <div class="col-xl-7 col-lg-12 col-md-12 order-lg-2">
                    <div class="contact-form bp-form p-lg-5 ps-lg-4 pt-lg-4 pb-5 p-4">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">@lang('Name') <span class="a-link">*</span></label>
                                        <input class="form-control h_50" name="name" wire:model="name" type="text" placeholder="" value="">
                                    </div>
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Email<span class="a-link">*</span></label>
                                        <input class="form-control h_50" name="email" wire:model="email"
                                            type="Email" placeholder="" value="">
                                    </div>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mt-4">
                                        <label class="form-label"> Objet </span></label>
                                        <input class="form-control h_50" name="subject" wire:model="subject"
                                            type="text" placeholder="" value="">
                                    </div>
                                    <x-input-error :messages="$errors->get('subject')" class="mt-2" />

                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Message<span class="a-link">*</span></label>
                                        <textarea class="form-textarea" name="message" wire:model="message" placeholder="A propos"></textarea>
                                    </div>
                                    <x-input-error :messages="$errors->get('message')" class="mt-2" />

                                </div>
                                <div class="col-md-12">

                                    <div class="text-center mt-4">
                                        <button wire:click.prevent="save" wire:loading.remove class="main-btn btn-hover h_50 w-100" type="submit">@lang('Send Message')</button>
                                        <button wire:loading class="main-btn btn-hover h_50 w-100" type="button" disabled>
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            @lang('Loading')...
                                        </button>

                                        {{-- <button class="main-btn btn-hover h_50 w-100"
                                            type="submit">@lang('Submit')</button> --}}
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
                <div class="col-xl-5 col-lg-12 col-md-12 order-lg-1 d-none d-xl-block">
                    <div class="contact-banner-block">
                        <div class="contact-hero-banner">
                            <div class="contact-hero-banner-info">
                                <h3>Les Informations de contact</h3>
                                <p> Remplissez le formulaire et notre équipe vous repondra très bientôt.</p>
                                <ul>
                                    <li>
                                        <div class="contact-info d-flex align-items-center">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-square-phone fa-beat-fade"
                                                    style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;"></i>
                                            </div>
                                            <a href="#">(+237) 655 55 55 55</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-info d-flex align-items-center">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-envelope fa-beat-fade"
                                                    style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;"></i>
                                            </div>
                                            <a href="#">contact@barren.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-info d-flex align-items-center">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-life-ring fa-beat-fade"
                                                    style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;"></i>
                                            </div>

                                            <a href="#">Centrer d'aide</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
