<?php

namespace App\Notifications;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewContactNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public Contact $contact)
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
            ->when(
                $notifiable->role_id === 1,
                fn ($mail) => $mail->subject(trans('New Message')),
                fn ($mail) => $mail->subject(trans('Message Sent'))
            )
            ->lineIf(
                $notifiable->role_id === 1,
                trans('A new message for: ') . $this->contact->subject . trans(', has been sent by ') . $this->contact->name . '.'
            )
            ->lineIf(
                $notifiable->role_id === 1,
                trans('The content of the message: ') . $this->contact->message
            )
            ->lineIf(
                $notifiable->role_id !== 1,
                trans('Your message for: ') . $this->contact->subject . trans(' has been successfully sent to the administrator. You will receive a response as soon as possible.')
            )
            ->when(
                $notifiable->role_id === 1,

                fn ($mail) => $mail->action(trans('Go to website'), url('/')),
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
