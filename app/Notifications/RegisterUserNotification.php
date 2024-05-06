<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RegisterUserNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
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
            ->subject(trans('Bienvenue'))
            ->lineIf(
                $notifiable->role_id === 3,
                "Bienvenue sur BookingEvents ! Trouvez l'événement parfait pour vous et réservez votre place en quelques clics.
                Explorez un monde d'événements à ne pas manquer et vivez des expériences inoubliables.
                Rejoignez notre communauté de passionnés et découvrez de nouveaux horizons."
            )

            ->lineIf(
                $notifiable->role_id === 2,
                "Bienvenue sur BookingEvents ! La plateforme idéale pour promouvoir vos événements et toucher un large public.
                Créez et gérez vos événements en toute simplicité et vendez vos billets en ligne.
                Atteignez un public ciblé et augmentez la visibilité de vos événements."
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
