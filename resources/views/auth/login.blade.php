@extends('layouts.authLayout')
@section('title', __('Log in'))
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
                    Nouveau sur Barren?<a class="sidebar-register-link" href="{{ route('register') }}"> S'enregistrer </a>
                </div>
            </div>
        </div>
        <div class="col-xl-5 col-lg-6 col-md-7">
            <div class="registration">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <h2 class="registration-title">{{ __('Log in') }} sur Barren</h2>
                    <div class="form-group mt-5">
                        <label class="form-label">Votre Email <span class="text text-success"> *</span></label>
                        <input name="email" class="form-control h_50" type="email" placeholder="Enter your email"
                            value="{{ old('email') }}">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <br>
                    <div class="form-group mt-4">
                        <div class="field-password">
                            <label class="form-label">{{ __('Password') }} <span class="text text-success">*</span></label>
                            {{-- <a class="forgot-pass-link" href="forgot_password.html"> {{ __('Forgot your password?') }} </a> --}}
                        </div>
                        <div class="loc-group position-relative">
                            <input name="password" class="form-control h_50" type="password"
                                placeholder="Enter your password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            {{-- <span class="pass-show-eye"><i class="fas fa-eye-slash"></i></span> --}}
                        </div>
                    </div>
                    <button class="main-btn btn-hover w-100 mt-4" type="submit"
                        onclick="window.location.href='index.html'">Se Connecter <i
                            class="fas fa-sign-in-alt ms-2"></i></button>
                </form>
                <div class="divider">
                    <span>or</span>
                </div>
                <div class="social-btns-list">
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
                    New to Barren?<a class="signup-link" href="sign_up.html"> {{ __('Log in') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
