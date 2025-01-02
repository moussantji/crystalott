<div class="row">
    <div class="col-lg-6">

        <form method="post" action="{{ route('profile.destroy') }}">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="password" class="form-label"> Password</label>
                        <input id="password" name="password" type="password" class="form-control" autocomplete="off"
                            placeholder="Password">
                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                    </div>
                </div>

                    <div class="mb-3">
                        <div class="button-list">
                        <x-primary-button class="btn btn-secondary">
                            {{ __('Cancel') }}
                        </x-primary-button>

                        <x-primary-button class="btn btn-danger">
                            {{ __('Delete Account') }}
                        </x-primary-button>
                        </div>
                    </div>
        </form>

    </div>
</div>
