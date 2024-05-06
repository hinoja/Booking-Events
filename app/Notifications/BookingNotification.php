<?php

namespace App\Notifications;

use Carbon\Carbon;
use App\Models\Event;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class BookingNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public Event $event)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $hour = date('H');
        $info = $hour > 17 ? trans('Good evening ') : (($hour > 12 && $hour <= 18) ? trans('Good afternoon ') : trans('Good morning '));

        return (new MailMessage)
            ->greeting($info . $notifiable->name)
            ->subject("🎉✨" .  'Réservation Activée' . "🎉✨")
            ->line(
                "Votre Réservation pour l'évènement intitulé :" .  $this->event->name . " a été éffectuée  avec succès "
            )

            ->line(
                'Cet Evenement debutera le ' .
                 $this->event->FormatDate
                ($this->event->date) . trans(' at ') . $this->event->start_at . '.'
            )

            // ->line(
            //     'Cet Evenement debutera le ' .
            //      $this->event->FormatDate($this->event->date) . trans(' at ') . $this->event->start_at->format('H:i') . '.'
            // )
            ->line(
                'Cette réservation vous a coutée la somme de :  ' . $this->event->tickets->last()->price . 'Xaf' . '.'
            )

            ->when(
                auth()->user()->role_id === 2,
                fn ($mail) => $mail->action(trans('Go to website'), url('/')),
                fn ($mail) => $mail->action(trans('Go to Dashboard'), route('admin.events.index'))
            );
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
