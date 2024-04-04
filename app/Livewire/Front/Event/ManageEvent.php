<?php

namespace App\Livewire\Front\Event;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class ManageEvent extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;

    public function render()
    {
        $events=Event::latest()->where('is_active',true)->paginate(10);
        return view('livewire.front.event.manage-event', ['events'=>$events]);
    }
}
