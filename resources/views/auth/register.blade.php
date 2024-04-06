{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



@extends('layouts.authLayout')
@section('title', 'Register')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10">
            <div class="app-top-items">
                <div class="app-top-right-link">
                    @lang('Already registered?')<a class="sidebar-register-link" href="{{ route('login') }}">@lang('Sign In')</a>
                </div>
            </div>
        </div>
        <div class="col-xl-7 col-lg-7 col-md-7">
            <div class="registration">
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <h2 class="registration-title">S'enregister sur Barren</h2>
                    <div class="row mt-1">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">@lang('Name') <span class="text-success">*</span></label>
                                <input name="name" class="form-control h_50" type="text" placeholder="Konate"
                                    value="{{ old('name') }}">
                                <span><x-input-error :messages="$errors->get('name')" class="mt-2" /></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">@lang('Birth Date') </label>
                                <input name="birth_date" class="form-control h_50" type="date"
                                    value="{{ old('birth_date') }}">
                                <span><x-input-error :messages="$errors->get('birth_date')" class="mt-2" /></span>

                            </div>

                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label"> Email <span class="text-success">*</span></label>
                                <input name="email" class="form-control h_50" type="email" placeholder="xyz@email.com"
                                    value="{{ old('email') }}">

                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        {{-- <div class="col-md-3">
                            <label class="form-label mt-3 fs-6">Price*</label>
                            <select class="selectpicker">
                                <option value="Percentage" selected="">Percent(%)</option>
                                <option value="Fixed">Fixed($)</option>
                            </select>
                        </div> --}}




                        <div class="col-lg-12 col-md-12">
                            <div class="form-group mt-4">
                                 <label class="form-label mt-3 fs-6"> Selectionnez le type de compte *</label>

                                <select class=" form-control selectpicker" name="role_id" id="password">
                                    {{-- <option hidden> Selectionnez le type de compte<b class="text-danger">*</b></option> --}}
                                    @foreach ($roles as $role)
                                        @if ($role->id != 1)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <x-input-error :messages="$errors->get('role_id')" class="mt-2" />

                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group mt-4">
                            <div class="field-password">
                                <label class="form-label">{{ __('Password') }} <span class="text-success">*</span></label>
                            </div>
                            <div class="loc-group position-relative">
                                <input name="password" class="form-control h_50" type="password" placeholder="password">
                                {{-- <span  class="pass-show-eye"><i class="fas fa-eye-slash"></i></span> --}}
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group mt-4">
                            <div class="field-password">
                                <label class="form-label">Avatar </label>
                            </div>
                            <div class="loc-group position-relative">
                                <input type="file" class="form-control" name="avatar" value="{{ old('avatar') }}"
                                    id="avatar"  placeholder=" Ajouter une image"
                                    accept=".jpg,.png,.jpeg,.ico">
                                {{-- <span  class="pass-show-eye"><i class="fas fa-eye-slash"></i></span> --}}
                                <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button class="main-btn btn-hover w-100 mt-4" type="submit"> Soumettre</button>
                    </div>
            </div>
            </form>
            {{-- <div class="agree-text">
                En cliquent sur le bouton  "Soumettre", Vous etes d'accord to Barren <a href="#">Terms & Conditions</a>
                and have read the <a href="#">Privacy Policy</a>.
            </div> --}}


            <div class="new-sign-link">
                rAlready have an account?<a class="signup-link" href="{{ route('login') }}">Sign In</a>
            </div>
        </div>
    </div>
    </div>
@endsection
