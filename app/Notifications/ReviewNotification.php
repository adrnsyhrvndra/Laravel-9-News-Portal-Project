<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ReviewNotification extends Notification
{
    use Queueable;

    public function __construct($request){

        $this->request = $request;

    }


    public function via($notifiable){

        // return ['mail'];

        return ['database'];

    }


    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }


    public function toArray($notifiable){

        return [

            'message'   => 'New Review Added In News',

        ];

    }
}
