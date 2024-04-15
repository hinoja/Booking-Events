<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::query()
            ->with('role')
            ->with('events')
            ->latest()->get();
        $count = User::count();


        return view('admin.users', ['users'=>$users,'count'=>$count]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

     /**
     * Enable or disable user account
     */
    // public function updateStatus(UpdateUserStatus $updateUserStatus, User $user): RedirectResponse
    // {
    //     if (! $user->is_active && ($user->disabled_by !== auth()->id()) && $user->disabled_at) {
    //         toast(__('You cannot enable this account because it was disabled by its owner.'), 'info');
    //         return back();
    //     }

    //     $updateUserStatus->handle($user);

    //     $message = match (intval($user->is_active)) {
    //         1 => __('Account has been successfully unblocked.'),
    //         0 => __('Account has been successfully blocked.'),
    //     };

    //     toast($message, 'success');

    //     return back();
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', "L'utilisateur a bien été supprimé");
    }
}
