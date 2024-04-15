<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use PhpParser\Node\Expr\Cast\String_;

class ManageEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::query()
            // ->with('ruole')
            // ->with('events')
            ->latest()->paginate(8);
        $count = Event::count();

        return view('admin.events', ['events' => $events, 'count' => $count]);
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
    public function updateStatus(Event $event)
    {

        if ($event->is_active) {
            $event->is_active = 0;
            $message = "L'Evènement a été désactivé avec succès ";
        } else {
            $event->is_active = 1;
            $message = "L'Evènement a été activé avec succès ";
        }


        $event->save();
        return back()->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::find($id);
        // dd($event);
        $event->delete();


        return redirect()->route('admin.events.index')->with('success', "L'évènement    . $event->name . a bien été supprimé");
    }
}
