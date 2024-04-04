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
                <a href="index.html">
                    <div class="sign-logo" id="logo">
                        <img src="images/logo.svg" alt="">
                        <img class="logo-inverse" src="images/dark-logo.svg" alt="">
                    </div>
                </a>
                <div class="app-top-right-link">
                    @lang('Already registered?')<a class="sidebar-register-link" href="{{ route('login') }}">@lang('Sign In')</a>
                </div>
            </div>
        </div>
        <div class="col-xl-5 col-lg-6 col-md-7">
            <div class="registration">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h2 class="registration-title">S'enregister sur Barren</h2>
                    <div class="row mt-1">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">First Name <span class="text-success">*</span></label>
                                <input name="name" class="form-control h_50" type="text" placeholder="Konate"
                                    value="{{ old('name') }}">
                                <span><x-input-error :messages="$errors->get('name')" class="mt-2" /></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Birth Date </label>
                                <input name="birth_date" class="form-control h_50" type="date"
                                    value="{{ old('birth_date') }}">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Your Email <span class="text-success">*</span></label>
                                <input name="email" class="form-control h_50" type="email" placeholder="xyz@email.com"
                                    value="{{ old('email') }}">
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group mt-4">
                                <div class="field-password">
                                    <label class="form-label">Password <span class="text-success">*</span></label>
                                </div>
                                <div class="loc-group position-relative">
                                    <input name="password" class="form-control h_50" type="password" placeholder="password">
                                    {{-- <span  class="pass-show-eye"><i class="fas fa-eye-slash"></i></span> --}}
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <button class="main-btn btn-hover w-100 mt-4" type="submit">Sign
                                Up</button>
                        </div>
                    </div>
                </form>
                <div class="agree-text">
                    By clicking "Sign up", you agree to Barren <a href="#">Terms & Conditions</a>
                    and have read the <a href="#">Privacy Policy</a>.
                </div>
                <div class="divider">
                    <span>or</span>
                </div>
                <div class="social-btns-list mb-lg-5">
                    <button class="social-login-btn">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 26.488 27.029">
                            <g transform="translate(-0.126)">
                                <path
                                    d="M1258.806,1021.475a11.578,11.578,0,0,0-.285-2.763h-12.688v5.015h7.448a6.605,6.605,0,0,1-2.763,4.384l-.025.168,4.012,3.108.278.028a13.214,13.214,0,0,0,4.024-9.941"
                                    transform="translate(-1232.192 -1007.66)" fill="#4285f4"></path>
                                <path
                                    d="M145.071,1502.921a12.881,12.881,0,0,0,8.949-3.273l-4.265-3.3a8,8,0,0,1-4.685,1.352,8.136,8.136,0,0,1-7.688-5.616l-.158.013-4.172,3.229-.055.152a13.5,13.5,0,0,0,12.073,7.448"
                                    transform="translate(-131.431 -1475.893)" fill="#34a853"></path>
                                <path
                                    d="M5.952,689.263a8.32,8.32,0,0,1-.45-2.673,8.744,8.744,0,0,1,.435-2.673l-.008-.179-4.224-3.28-.138.066a13.486,13.486,0,0,0,0,12.133l4.385-3.393"
                                    transform="translate(0 -673.076)" fill="#fbbc05"></path>
                                <path
                                    d="M145.071,5.225A7.49,7.49,0,0,1,150.3,7.238l3.814-3.724A12.984,12.984,0,0,0,145.071,0,13.5,13.5,0,0,0,133,7.448l4.37,3.394a8.169,8.169,0,0,1,7.7-5.616"
                                    transform="translate(-131.431)" fill="#eb4335"></path>
                            </g>
                        </svg>
                        Sign in with Google
                    </button>
                </div>
                <div class="new-sign-link">
                    rAlready have an account?<a class="signup-link" href="{{ route('login') }}">Sign In</a>
                </div>
            </div>
        </div>
    </div>
@endsection
