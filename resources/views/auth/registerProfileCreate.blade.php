<x-guest-layout>
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
    <div class="login-container bg-white"
            style="margin-top: 3%; max-width: 500px;
                    ">
        <div class="d-flex items-center justify-content-center mb-3">
            <h2>Create Profile</h2>
        </div>

        @php 
            $id = Session::get('id');
        @endphp

        <form method="POST" action="{{ route('register-profile', ['id'=>$id]) }}" enctype="multipart/form-data">
            @csrf

            <!-- user_id -->                            
            <input type="hidden" id="user_id" name="user_id" value="{{ $id }}" />
                

            <!-- Address 1 -->
            <div class="mb-3">
                <label for="address1" class="form-label required">Address Ln 1</label>
                <input type="text" class="form-control" id="address1" name="address1" required />
                <x-input-error :messages="$errors->get('address1')" class="mt-2" />
                <div class="invalid-feedback">
                    Please enter street address line 1
                </div>
            </div>

            <!-- Address2 -->
            <div class="mb-3">
                <label for="address2" class="form-label">Address Ln 2 (optional)</label>
                <input type="text" class="form-control" id="address2" name="address2" />
                <x-input-error :messages="$errors->get('address2')" class="mt-2" />
            </div>
            
            <!-- city -->
            <div class="mb-3">
                <label for="city" class="form-label required">City</label>
                <input type="text" class="form-control" id="city" name="city" required />
                <x-input-error :messages="$errors->get('city')" class="mt-2" />
            </div>
            
            <!-- state -->
            <div class="mb-3">
                <label for="state" class="form-label required">State</label>
                <input type="text" class="form-control" id="state" name="state" required />
                <x-input-error :messages="$errors->get('state')" class="mt-2" />
            </div>
            
            <!-- zip code -->
            <div class="mb-3">
                <label for="zip_code" class="form-label required">Zip Code</label>
                <input type="text" class="form-control" id="zip_code" name="zip_code" required />
                <x-input-error :messages="$errors->get('zip_code')" class="mt-2" />
            </div>
            
            <!-- phone number -->
            <div class="mb-3">
                <label for="phone_number" class="form-label required">Phone Number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" required/>
                <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
            </div>
            
            <!-- phone type -->
            <div class="mb-3">
                <label for="phone_type" class="form-label required">Phone Type</label>
                <select class="form-select" name="phone_type" id="phone_type" required>
                    <option selected>Select Phone Type</option>
                    <option value="Mobile">Mobile</option>
                    <option value="Landline">Landline</option>
                </select>
                <x-input-error :messages="$errors->get('phone_type')" class="mt-2" />
            </div>
            
            <!-- user photo -->
            <div class="mb-3">
                <label for="image_path" class="form-label">User Photo (optional)</label>
                <input type="file" class="form-control" id="image_path" name="image_path" />
                <x-input-error :messages="$errors->get('image_path')" class="mt-2" />
            </div>

            <div class="d-flex items-center justify-content-center mt-4">
                <button type="submit" 
                        class="btn btn-primary w-50 mt-3" 
                        style="background-color: #6D2077; color: #B7A57A;">
                    Save Profile 
                </button>
            </div>
        </form>

    </div>
	</div>
</x-guest-layout>