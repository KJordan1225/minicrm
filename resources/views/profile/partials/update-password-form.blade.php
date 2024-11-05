<section>

<style>
    /* Centering the login form */
    .login-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 2rem;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        background-color: #ffffff;
    }
</style>

<div class="container">
<div class="login-container bg-white">
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
		
		<!-- Password Input -->
		<div class="mb-3">
			<label for="update_password_current_password" class="form-label">Current Password</label>
			<input type="password" class="form-control" id="update_password_current_password" name="current_password" />
			<x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
		</div>
		
		<div class="mb-3">
			<label for="update_password_password" class="form-label">New Password</label>
			<input type="password" class="form-control" id="update_password_password" name="password" />
			<x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
		</div>
		
		<div class="mb-3">
			<label for="update_password_password_confirmation" class="form-label">Confirm Password</label>
			<input type="password" class="form-control" id="update_password_password_confirmation" name="password_confirmation" />
			<x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
		</div>

        <!-- Submit Button -->
		<div class="d-flex justify-content-center mt-4">
			<button type="submit" class="btn btn-primary w-50 mt-3" style="background-color: #6D2077; color: #B7A57A;">Save</button>
		</div> 
    </form>
</div>
</div>
</section>