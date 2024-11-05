<x-guest-layout>
    <div class="text-sm text-gray-600 dark:text-gray-400 d-flex justify-content-center">
        {{ __('Forgot your password?') }}
    </div>
    <div class="text-sm text-gray-600 dark:text-gray-400 d-flex justify-content-center">
        {{ __('No problem.') }}
    </div>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400 d-flex justify-content-center">
        {{ __('Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Username/Email Input -->
        <div class="mb-3 d-flex justify-content-center">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control w-75" id="email" name="email" placeholder="Enter email" required>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
       

        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-primary w-24 mt-3" 
                style="background-color: #6D2077; color: #B7A57A;">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </form>
</x-guest-layout>
