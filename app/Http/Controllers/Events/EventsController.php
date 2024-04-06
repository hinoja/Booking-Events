<?php

namespace App\Http\Controllers\Events;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Controllers\Controller;
use App\Models\Category;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::latest()->with(['user'])->where('is_active', true)->paginate(12);

        return view('front.events.index', ['events' => $events, 'categories' => Category::query()->latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front.events.add');
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
    public function show($id)
    {
        // dd        ($event);
        $event = Event::find($id);
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
                    fn (Builder $query) => $query->where('category_id',  $request->category_id)
                )

                ->orderByDesc('created_at');
            return view('front.events.index', [
                'events' => $events->paginate(12),
                'categories' => Category::query()->orderBy('name', 'asc')->get(),
            ]);
        }
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
