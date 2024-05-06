@extends('layouts.authLayout')
@section('title', "S'enregistrer")
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
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label mt-3 fs-6"> Selectionnez le type de compte *</label>

                                <select class="l selectpicker" name="role_id" id="password">
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
                                    id="avatar" placeholder=" Ajouter une image" accept=".jpg,.png,.jpeg,.ico">
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

            <div class="new-sign-link">
                rAlready have an account?<a class="signup-link" href="{{ route('login') }}">Sign In</a>
            </div>
        </div>
    </div>
    </div>
@endsection
