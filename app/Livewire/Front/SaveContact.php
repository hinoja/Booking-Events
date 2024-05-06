<?php

namespace App\Livewire\Front;

use App\Models\User;
use App\Models\Contact;
use Livewire\Component;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewContactNotification;

class SaveContact extends Component
{
    public string $name;

    public string $email;

    public string $subject;

    public string $message;

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::query()
            ->create([
                'name' => $this->name,
                'email' => $this->email,
                'subject' => $this->subject,
                'message' => $this->message,
            ]);

        // Mail
        Notification::send([$contact, User::query()->firstWhere('role_id', 1)], new NewContactNotification($contact));

        Toastr()->success(trans('Your message has been successfully sent to the platform administrator. You will receive an email as soon as possible.'));


        $this->redirectRoute('contact');
    }

    public function render()
    {
        return view('livewire.front.save-contact');
    }
}
