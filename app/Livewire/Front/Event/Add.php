<?php

namespace App\Livewire\Front\Event;

use App\Http\Requests\EventRequest;
use App\Models\Category;
use App\Models\Event;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Add extends Component
{
    use WithFileUploads;

    // #[Validate('required|min:3')]
    public $types;

    public $type;

    public $name;

    public $image;

    public $slug;

    public $place;

    public $description;

    public $category_id;

    public $date;

    public $start_at;

    public $duration;

    //public $name, $image, $types, $description,$slug;
    public $step = 0;

    // public function mount()
    // {
    //     $this->all_tags = Tag::query()->get([id, name]);
    //     $this->types = Job::TYPES;
    //     $this->sub_categories = collect();
    //     $this->categories = Category::query()
    //                                 ->with(subCategories:id,name,category_id)
    //                                 ->oldest(name)
    //                                 ->enabled()
    //                                 ->get(['id', 'name']);
    // }
    public function mount()
    {
        $this->step = 0;
        $this->types = Event::TYPES;
    }

    public function next()
    {

        // $data = $this->validate((new EventRequest())->rules());
        // dd($data);
        $this->step++;
    }

    public function previous()
    {
        $this->step--;
    }

    public function submit1()
    {

        $this->step++;
    }
    // public function submit2()
    // {
    //     $this->validate([
    //         'logo' => ['required', 'image', 'mimes:png,jpg,ico,jpeg', 'max:1024'],
    //         'website' => ['nullable', 'url'],
    //         'description_file' => ['nullable', 'image', 'file', 'max:1024']
    //     ]);
    //     $this->step++;
    // }
    // public function submit3()
    // {
    //     $this->validate([
    //         // 'services.0' => 'required|string|max:255',
    //         'services.*' => 'required|string|distinct:ignore_case|max:255'
    //         // 'description' => ['nullable', 'files', 'min:1024'],
    //     ]);
    //     // dd('test');
    //     $this->step++;
    // }
    /**
     * Validate first step form containing job general infromations
     */
    // public function validateGeneralInformations(): void
    // {
    //     $this->validate((new EventRequest())->rules());

    //    // $this->currentStep = 2;
    // }
    public function render()
    {
        return view('livewire.front.event.add', ['categories' => Category::query()->latest()->get()]);
    }
}
