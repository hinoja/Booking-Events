<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        if (Auth::user()->role_id == 2) {

            $events = Event::Where('user_id', Auth::user()->id)->get();
        } else {
            $events_id = DB::table('booking_event')->where('user_id', Auth::user()->id)->pluck('event_id');

            $events = collect();
            foreach ($events_id as  $id) {
                $events->push(Event::find($id));
            }
        }

        return view('profile.edit', [
            'user' => $request->user(),
            'events' => $events,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $user = Auth::user();

        $user->biographie = $request->biographie;
        $user->phone_number = $request->phone_number;
        $user->birthDate = $request->birthDate;

        $request->user()->save();

        Toastr()->success(trans('Information have been successfully updated.'));

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
