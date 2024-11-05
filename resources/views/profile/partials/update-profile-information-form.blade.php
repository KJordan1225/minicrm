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
				{{ __('Profile Information') }}
			</h2>

			<p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
				{{ __("Update your account's profile information and email address.") }}
			</p>
		</header>

		<form id="send-verification" method="post" action="{{ route('verification.send') }}">
			@csrf
		</form>

		<form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
			@csrf
			@method('patch')

			<!-- First Name Input -->
			<div class="mb-3">
				<label for="first_name" class="form-label">First Name</label>
				<input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', $user->first_name) }}">
				<x-input-error :messages="$errors->get('first_name')" class="mt-2" />
			</div>
			
			<!-- Last Name Input -->
			<div class="mb-3">
				<label for="lasst_name" class="form-label">Last Name</label>
				<input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', $user->last_name) }}">
				<x-input-error :messages="$errors->get('last_name')" class="mt-2" />
			</div>
			
			<!-- Email Input -->
			<div class="mb-3">
				<label for="email" class="form-label">Email address</label>
				<input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
				<x-input-error :messages="$errors->get('email')" class="mt-2" />
			</div>

            <div class="d-flex justify-content-center">
                <button type="submit" 
                        class="btn btn-primary w-50 mt-3" 
                        style="background-color: #6D2077; 
                            color: #B7A57A;">
                    Save
                </button>
            </div>
		</form>
	</div>
</div>


</section>		
