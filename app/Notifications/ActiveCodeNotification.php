<?php

namespace App\Notifications;

use App\Notifications\Channels\GhasedakChannel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;


class ActiveCodeNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $code;
    public $phone;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($code, $phone)
    {
        $this->code = $code;
        $this->phone = $phone;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [GhasedakChannel::class];
    }

    public function toGhasedakSms($notifiable)
    {
        return [
            'text' => "بازار\nکد: {$this->code} \nاین کد را در اختیار فردی دیگر قرار ندهید\n\ngithub: imalirezapy",
            'phone' => "0".$this->phone
        ];

    }


}
