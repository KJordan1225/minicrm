<x-app-layout>
    <style>
        /* Centering the login form */
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 8%;
            padding: 2rem;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            background-color: #ffffff;
        }

        .required:after {
            content: "*";
            color: red;
        }
    </style>
	
	<div class="container">
    <div class="login-container bg-white">

    <div class="d-flex items-center justify-content-center mb-3" id="top-users-create">
        <h2> 
            {{ __('Add New User') }}
        </h2>
    </div>
		
    <form method="POST" action="{{ route('users.store') }}">
        @csrf

		<!-- First Name -->
		<div class="mb-3">
			<label for="first_name" class="form-label required">First Name</label>
			<input type="text" class="form-control" id="first_name" name="first_name" required />
			<x-input-error :messages="$errors->get('first_name')" class="mt-2" />
			<div class="invalid-feedback">
				Please enter a first name.
			</div>
		</div>

		<!-- Last Name -->
		<div class="mb-3">
			<label for="last_name" class="form-label required">Last Name</label>
			<input type="text" class="form-control" id="last_name" name="last_name" required />
			<x-input-error :messages="$errors->get('last_name')" class="mt-2" />
		</div>
		<div class="invalid-feedback">
			Please enter a last name.
		</div>

		<!-- Email -->
		<div class="mb-3">
			<label for="email" class="form-label required">Email</label>
			<input type="email" class="form-control" id="email" name="email" required />
			<x-input-error :messages="$errors->get('email')" class="mt-2" />
		</div>
		<div class="invalid-feedback">
			Please enter a valid email address.
		</div>

        <!-- Password -->
        <div class="mt-4">
			<label for="password" class="form-label required">Password</label>

            <input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
			<label for="password_confirmation" class="form-label required">Confirm Password</label>
            <input 	id="password_confirmation" class="form-control"
					type="password"
                    name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="d-flex items-center justify-content-end mt-4">
            <button type="submit" 
					class="btn btn-primary w-100 mt-3" 
					style="background-color: #6D2077; color: #B7A57A;">
				Save 
			</button>
        </div>
    </form>
	
	</div>
	</div>

    <script>
        window.onload = function() {
        document.getElementById('top-users-create').scrollIntoView({ behavior: 'smooth' });
        };
    </script>
</x-app-layout>