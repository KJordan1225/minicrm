<x-app-layout>

@include('partials.resourceContainerStyles')

    <div class="py-5">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Committee') }}
        </h2>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="{{ route('clients.update', $client) }}">
                        @method('PUT')
                        @csrf

                        <div class="divide-y-2 space-y-4">
                            <div>
                                <h3 class="text-xl font-semibold mb-4">Committee chair information</h3>
                                
								<!-- Name -->
								<div class="mb-3">
									<label for="contact_name" class="form-label">Name</label>
									<input type="text" class="form-control" id="contact_name" name="contact_name" value="{{ old('contact_name', $client->contact_name) }}" />
									<x-input-error :messages="$errors->get('contact_name')" class="mt-2" />
								</div>

								<!-- Email -->
								<div class="mb-3">
									<label for="email" class="form-label">Email</label>
									<input type="email" class="form-control" id="email" name="email" value="{{ old('contact_email', $client->contact_email) }}" />
									<x-input-error :messages="$errors->get('contact_email')" class="mt-2" />
								</div>

								<!-- Phone Number -->
								<div class="mb-3">
									<label for="contact_phone_number" class="form-label">Phone number</label>
									<input type="text" class="form-control" id="contact_phone_number" name="contact_phone_number" value="{{ old('contact_phone_number', $client->contact_phone_number) }}" />
									<x-input-error :messages="$errors->get('contact_phone_number')" class="mt-2" />
								</div>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold my-4 mt-4">Committee information</h3>
                                
								<!-- Company Name -->
								<div class="mb-3">
									<label for="company_name" class="form-label">Committee name</label>
									<input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('company_name', $client->company_name) }}" />
									<x-input-error :messages="$errors->get('company_name')" class="mt-2" />
								</div>

								<!-- Committee Term -->
								<div class="mb-3">
									<label for="company_vat" class="form-label">Term</label>
									<input type="text" class="form-control" id="company_vat" name="company_vat" value="{{ old('company_vat', $client->company_vat) }}" />
									<x-input-error :messages="$errors->get('company_vat')" class="mt-2" />
								</div>

								<!-- Company Address -->
								<div class="mb-3">
									<label for="company_address" class="form-label">Committee address</label>
									<input type="text" class="form-control" id="company_address" name="company_address" value="{{ old('company_address', $client->company_address) }}" />
									<x-input-error :messages="$errors->get('company_address')" class="mt-2" />
								</div>

								<!-- Company City -->
								<div class="mb-3">
									<label for="company_city" class="form-label">Committee city</label>
									<input type="text" class="form-control" id="company_city" name="company_city" value="{{ old('company_city', $client->company_city) }}" />
									<x-input-error :messages="$errors->get('company_city')" class="mt-2" />
								</div>

								<!-- Company ZIP -->
								<div class="mb-3">
									<label for="company_zip" class="form-label">Committee ZIP</label>
									<input type="text" class="form-control" id="company_zip" name="company_zip" value="{{ old('company_zip', $client->company_zip) }}" />
									<x-input-error :messages="$errors->get('company_zip')" class="mt-2" />
								</div>
                            </div>

                            <!-- Submit Button -->
							<div class="d-flex justify-content-center mt-4">
								<button type="submit" class="btn btn-primary w-50 mt-3" style="background-color: #6D2077; color: #B7A57A;">Save</button>
							</div> 
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

	</div>
	</div>
</x-app-layout>