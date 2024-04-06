<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register', ['roles' => Role::query()->latest()->get()]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'role_id' => ['required', 'exists:roles,id'],
            'birth_date' => 'nullable|date',
            'email' => [
                'required', 'string', 'lowercase',
                'email', 'max:255', 'unique:' . User::class
            ],
            'avatar' => 'nullable|image|mimes:jpeg,jpg,ico,png|max:512',
            'password' => ['required', Rules\Password::defaults()],
        ]);


        $user = User::create([
            'name' => $name = $request->name,
            'slug' => $slug = Str::slug($name) . uniqid(),
            'email' => $request->email,
            'role_id' => $request->role_id, //will be to edited
            'birth_date' => $request->birth_date ? $request->birth_date : null,
            'password' => Hash::make($request->password),
        ]);
        if (isset($request->avatar)) {
            $filename_chemin = 'avatars/' . $user->id . '.' . $request->avatar->getClientOriginalExtension();

            $filename = $user->id . '.' . $request->avatar->getClientOriginalExtension();
            $user->avatar = $filename_chemin;
            $user->save();

            $request->file('avatar')->storeAs('avatars', $filename, 'public');
        }

        // event(new Registered($user));

        Auth::login($user);

        if ($request->role_id === 1) //admin
        {
            // $redirect = 'admin/dashboard';
            $redirect = '/';
        } elseif ($request->role_id === 2) //organisator
        {
            $redirect = '/profile';
        } else {
            $redirect = '/';
        }

        return redirect()->intended($redirect);
    }
}
