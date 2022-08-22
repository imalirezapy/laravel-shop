<?php

namespace App\Notifications\Channels;

use Illuminate\Notifications\Notification;

class GhasedakChannel
{
    public function send($notifiable, Notification $notification)
    {
        $data = $notification->toGhasedakSms($notifiable);


        try{
        $message = $data['text'];
        $lineNumber = config('services.ghasedak.line_number');
        $receptor = $data['phone'];
            $api = new \Ghasedak\GhasedakApi(config('services.ghasedak.key'));
            $api->SendSimple($receptor,$message,$lineNumber);
        }
        catch(\Ghasedak\Exceptions\ApiException $e){
            throw $e;
        }
        catch(\Ghasedak\Exceptions\HttpException $e){
            throw $e;
        }

    }
}
