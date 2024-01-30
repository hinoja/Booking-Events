<?php

namespace App\Livewire\Event;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class ManageEvent extends Component
{
    use WithPagination;
    public function render()
    {
        $events=Event::latest()->paginate(10);
        return view('livewire.event.manage-event', ['events'=>$events]);
    }
}
