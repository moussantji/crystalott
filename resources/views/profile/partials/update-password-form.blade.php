<div class="row">
    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
    <div class="col-lg-6">
            <div class="mb-3">
                <label for="store-name" class="form-label">Curent password</label>
                <input id="update_password_current_password" name="current_password" type="password" class="form-control"
                    placeholder="Current Password" autocomplete="current-password">
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>
    </div>
    <div class="col-lg-6">
            <div class="mb-3">
                <label for="update_password_password" class="form-label">New Password</label>
                <input id="update_password_password" name="password" type="password" class="form-control" autocomplete="off"
                    placeholder="New Password">
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-3">
            <label for="update_password_password_confirmation" class="form-label">Confirm Password</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                class="form-control" placeholder="Password Confirmation"  autocomplete="off">
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-3">
            <x-primary-button class="btn btn-success">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </div>
    </form>
</div>


