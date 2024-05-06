<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Notifications\BookingNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class BookingController extends Controller
{
    public function index(Event $event)
    {
        $number = 2;

        DB::table('booking_event')->insert([
            'user_id' => Auth::user()->id,
            'event_id' => $event->id,
            'number' => $number,
        ]);
        Notification::send(Auth::user(), new BookingNotification($event));

        Toastr()->success("Votre réservation pour l'évènement :  $event->name a bien été pris en compte ! :)");
        return view('front.events.bookingConfirmed', ['event' => $event]);
    }
}
