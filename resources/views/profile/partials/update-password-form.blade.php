{{-- <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section> --}}
<div class="tab-pane fade" id="tab-02" role="tabpanel">
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
