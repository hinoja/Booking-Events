<?php

namespace App\Livewire\Front\Event;

use Livewire\Component;

class Add extends Component
{
    public $step=0;
    public function mount()
    {
        $this->step = 0;
    }
    public function next(){
            $this->step++;
    }
    public function previous(){
        $this->step--;
    }
    public function submit1()
    {
        $this->validate([
            'hospital_name' => ['required', 'max:255', 'string', 'unique:hospitals,name'],
            'birth_date' => ['required', 'date', 'before_or_equal:now'],
            // 'urgency_number' => ['required', 'numeric', 'min:200000'],
            'urgency_number' => 'required|numeric|unique:hospitals,urgenceNumber|digits:9|starts_with:65,67,68,69,66,232',
            'email' => ['required', 'email', 'unique:hospitals,email'],
            // 'description' => ['required', 'string'],
        ]);

        $this->step++;
    }
    public function submit2()
    {
        $this->validate([
            'logo' => ['required', 'image', 'mimes:png,jpg,ico,jpeg', 'max:1024'],
            'website' => ['nullable', 'url'],
            'description_file' => ['nullable', 'image', 'file', 'max:1024']
        ]);
        $this->step++;
    }
    public function submit3()
    {
        $this->validate([
            // 'services.0' => 'required|string|max:255',
            'services.*' => 'required|string|distinct:ignore_case|max:255'
            // 'description' => ['nullable', 'files', 'min:1024'],
        ]);
        // dd('test');
        $this->step++;
    }
    public function render()
    {
        return view('livewire.front.event.add');
    }
}
