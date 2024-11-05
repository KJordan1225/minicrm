<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <style>
        /* Centering the login form */
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 10%;
            padding: 2rem;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background-color: #ffffff;
        }
    </style>

    <div class="container">
        <div class="login-container bg-white">
            <h2 class="text-center mb-4">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Username/Email Input -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
					<x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                
                <!-- Password Input -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
					<x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                
                <!-- Submit Button -->
				<div class="flex items-center justify-end mt-4">
					@if (Route::has('password.request'))
						<a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
							{{ __('Forgot your password?') }}
						</a>
					@endif

					<button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
				</div>                
            </form>
        </div>
    </div>
</x-guest-layout>
