<?php

namespace App\Http\Controllers\Auth;

use App\Enums\RoleEnum;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Display the registration view.
     */
    public function profileCreate(): View
    {
        return view('auth.registerProfileCreate');
    }

    
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])->assignRole('user');

        $id = $user->id;

        return redirect()
            ->route('register-profile-show')
            ->with( ['id' => $id] ); 

        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(route('dashboard', absolute: false));
               
    }

    public function storeProfile(Request $request): RedirectResponse
    {  
        
        $request->validate([
            'address1' => ['required', 'string', 'max:255'],
            'address2' => ['nullable', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'zip_code' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'phone_type' => ['required', 'string', 'max:255'],
            'user_id' => ['required', 'string', 'max:255'],
            'image_path' => ['nullable','image', 'mimes:jpeg,jpg,png,gif'],
        ]);

        $id = $request->id;

        $regUser = User::find($id);       

        if ($regUser) {
            // User found
            $regUser->address1 = $request->address1;
            $regUser->address2 = $request->address2;
            $regUser->city = $request->city;
            $regUser->state = $request->state;
            $regUser->zip_code = $request->zip_code;
            $regUser->phone_number = $request->phone_number;
            $regUser->phone_type = $request->phone_type;
            // $regUser->image_path = $request->image_path;

            $file = $request->file('image_path');
            $name = $file->hashName();
            $filepath = $name;

            $regUser->image_path = $filepath;

            $file = Storage::disk('public')->putFileAs('/images', $file, $filepath, 'public');

            $regUser->save();

        } else {
            // User not found
            dd('User not found');
        } 

        event(new Registered($regUser));

        Auth::login($regUser);

        return redirect(route('dashboard', absolute: false));
    }
}
