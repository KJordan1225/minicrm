<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Enums\RoleEnum;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Show the form for creating a new user profile.
     * [DEPRECATED-NOT USED]
     */
    public function profileCreate(): View
    {
        dd('profile create reached');
        return view('users.profileCreate');
    }

    /**
     * Show the form for creating a new user profile.
     */
    public function show(): View
    {
        return view('users.profileCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
            ->route('user-profile-show')
            ->with( ['id' => $id] ); 

        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(route('dashboard', absolute: false));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {       
        $user->delete();

        return redirect()->route('users.index');
    }

    public function userStoreProfile(Request $request): RedirectResponse
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
            //$regUser->image_path = $request->image_path;

            $file = null;
            $file = $request->file('image_path');

            if ($regUser->image_path != 'zbZaLhvhLTLztRSMBz5xFJY9GFvNvPyEkreZMrHB.jpg')
            {

                if (!is_null($file))
                {
                    $name = $file->hashName();
                    $filepath = $name;
                    $regUser->image_path = $filepath;
                    $file = Storage::disk('public')->putFileAs('/images', $file, $filepath, 'public');
                }

            } else {

                if (!is_null($file))
                {
                    $name = $file->hashName();
                    $filepath = $name;
                    $regUser->image_path = $filepath;
                    $file = Storage::disk('public')->putFileAs('/images', $file, $filepath, 'public');
                } else {
                    $regUser->image_path = 'zbZaLhvhLTLztRSMBz5xFJY9GFvNvPyEkreZMrHB.jpg';
                }

            }
            
                        
            $regUser->save();

        } else {
            // User not found
            dd('User not found');
        } 

        // event(new Registered($regUser));

        // Auth::login($regUser);

        return redirect('/users');
    }

    public function loggedInUserStoreProfile(Request $request): RedirectResponse
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

            $file = null;
            $file = $request->file('image_path');

            if ($regUser->image_path != 'zbZaLhvhLTLztRSMBz5xFJY9GFvNvPyEkreZMrHB.jpg')
            {

                if (!is_null($file))
                {
                    $name = $file->hashName();
                    $filepath = $name;
                    $regUser->image_path = $filepath;
                    $file = Storage::disk('public')->putFileAs('/images', $file, $filepath, 'public');
                }

            } else {

                if (!is_null($file))
                {
                    $name = $file->hashName();
                    $filepath = $name;
                    $regUser->image_path = $filepath;
                    $file = Storage::disk('public')->putFileAs('/images', $file, $filepath, 'public');
                } else {
                    $regUser->image_path = 'zbZaLhvhLTLztRSMBz5xFJY9GFvNvPyEkreZMrHB.jpg';
                }

            }
                        
            $regUser->save();

        } else {
            // User not found
            dd('User not found');
        } 

        // event(new Registered($regUser));

        // Auth::login($regUser);

        return back();
    }

    /**
     * Display the user's profile form.
     */
    public function userProfileEdit(Request $request): View
    {        
        
        $url_id = ($_SERVER["QUERY_STRING"]);
        $user = User::find($url_id);
        return view('users.profileEdit', [
            'user' => $user,
        ]);
    }

}