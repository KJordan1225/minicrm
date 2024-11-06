<x-app-layout>
    <div class="py-5">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit User') }}
        </h2>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="{{ route('users.update', $user) }}">
                        @method('PUT')
                        @csrf

						<!-- FIRST NAME -->
						<div class="mb-3">
							<label for="first_name" class="form-label">First Name</label>
							<input type="text" class="form-control" id="first_name" name="first_name">
							<x-input-error :messages="$errors->get('first_name')" class="mt-2" />
						</div>
						
						<!-- last NAME -->
						<div class="mb-3">
							<label for="last_name" class="form-label">Last Name</label>
							<input type="text" class="form-control" id="last_name" name="last_name">
							<x-input-error :messages="$errors->get('last_name')" class="mt-2" />
						</div>
						
						<!-- email address -->
						<div class="mb-3">
							<label for="email" class="form-label">Email</label>
							<input type="email" class="form-control" id="email" name="email">
							<x-input-error :messages="$errors->get('email')" class="mt-2" />
						</div>

                        <!-- Submit Button -->
						<div class="d-flex justify-content-center mt-4">
							<button type="submit" class="btn btn-primary w-50 mt-3" style="background-color: #6D2077; color: #B7A57A;">Save</button>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>