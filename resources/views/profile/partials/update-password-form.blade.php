
<div class="tab-pane fade active" id="tab-02" role="tabpanel">
    <div class="bp-title">
        <h4>{{ __('Update Password') }}</h4>
    </div>
    <div class="password-setting p-4">
        <div class="password-des">
            <p> {{ __('Ensure your account is using a long, random password to stay secure.') }}
            </p>
        </div>
        <form method="post"
            action="{{ route('password.update') }}"
            class="mt-6 space-y-6">
            @csrf
            @method('put')
            <div class="change-password-form">
                <div class="form-group mt-4">
                    <label class="form-label"
                        for="update_password_current_password">{{ __('Current Password') }}*</label>
                    <div class="loc-group position-relative">
                        <input class="form-control h_50"
                            type="password"
                            name="current_password"
                            placeholder="Enter your password">
                        <x-input-error :messages="$errors->get(
                            'current_password',
                        )"
                            class="mt-2" />
                    </div>


                </div>
                <div class="form-group mt-4">
                    <label for="update_password_password"
                        class="form-label">{{ __('New Password') }}*</label>
                    <div class="loc-group position-relative">
                        <input name="password"
                            class="form-control h_50"
                            type="password"
                            placeholder="Enter your password">
                        <x-input-error :messages="$errors->get('password')"
                            class="mt-2" />
                    </div>

                </div>
                <div class="form-group mt-4">
                    <label class="form-label"
                        for="update_password_password_confirmation">
                        {{ __('Confirm Password') }}*</label>
                    <div class="loc-group position-relative">
                        <input class="form-control h_50"
                            type="password"
                            name="password_confirmation"
                            placeholder="Enter your password">
                        <x-input-error :messages="$errors->get(
                            'password_confirmation',
                        )"
                            class="mt-2" />
                    </div>
                </div>
                <button class="main-btn btn-hover w-100 mt-5"
                    type="submit">Update Password</button>
            </div>
        </form>
    </div>
</div>
