<?php

namespace App\Http\Controllers\Events;

use App\Models\User;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\TicketRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Notification;

class EventsController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::latest()->with(['user'])->where('is_active', true)->paginate(12);

        return view('front.events.index', ['events' => $events,
                                                     'categories' => Category::query()->latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'front.events.add',[ 'categories' => Category::query()->latest()->get(),
                                            // 'types' => Event::TYPES
                                            'prices' => Event::PRICES,
                                        ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {

        // $event = Event::find($id);
        return view('front.events.details', ['event' => $event]);
    }

    /**
     * Show the form for search the specified resource.
     */
    public function search(Request $request)
    {
        $search = '%' . $request->search . '%';
        $categorie = $request->categorie;

        if (!$request->search && !$categorie) {
            $events = Event::query()->latest()
                            ->where('is_active', true)
                            ->with(['category'])
                            ->paginate(12);

            return view('front.events.index', [
                'events' => $events,
                'categories' => Category::query()->orderBy('name', 'asc')->get(),
            ]);
        } else {
            $events = Event::query()
                ->when(
                    $request->search,
                    fn (Builder $query) => $query->orWhere('name', 'LIKE', $search)
                    // ->orWhere('firstName', 'LIKE', $search)
                )
                ->when(
                    $request->category_id,
                    fn (Builder $query) => $query->where('category_id', $request->category_id)
                )

                ->orderByDesc('created_at')
                ->where('is_active', true);

            return view('front.events.index', [
                'events' => $events->paginate(12),
                'categories' => Category::query()->orderBy('name', 'asc')->get(),
            ]);
        }
    }

    /**
     * Store the specified resource in storage.
     */
    public function store(EventRequest $request, TicketRequest $request2)
    {
        // dd($request);
        $event = Event::create([
            'name' => $slug = $request->name,
            'slug' => Str::slug($slug),
            'place' => $request->place,
            'duration' => $request->duration,
            'type' => $request->type,
            'date' => $request->date,
            'user_id' => Auth::user()->id,
            'start_at' => $request->start_at,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);
        if (isset($request->image)) {
            $filename_chemin = 'events/' . $event->id . '.' . $request->image->getClientOriginalExtension();

            $filename = $event->id . '.' . $request->image->getClientOriginalExtension();
            $event->image = $filename_chemin;
            $event->save();

            $request->file('image')->storeAs('events', $filename, 'public');
        }

        $ticket = Ticket::create([
            'event_id' => $event->id,
            'price' => $request2->price ? $request2->price : 0,
            'number' => $request2->number ? $request2->number : 1,
        ]);

        // Notification::send(Auth::user(),);


        Toastr()->success("L'évènement   $event->name a bien été enregistré ! :)");

        return redirect()->route('front.event.create');
        // ->with('success', "L'évènement   $event->name a bien été enregistré ! ");

        // Toastr::success('You Have Successfully created your account :)', 'Success!!');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
