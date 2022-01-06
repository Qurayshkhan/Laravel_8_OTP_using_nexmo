<?php

namespace App;
class SendCode{
    public static function sendcode($phone){
        $code=rand(111,9999);
        $nexmo=app('Nexmo\Client');
        $nexmo->message()->send([
            'to'   => '+92'.(int) $phone,
            'from' => 'HassanKhan',
            'text' => 'Verify code:'.$code,
        ]);
        return $code;
    }
}
