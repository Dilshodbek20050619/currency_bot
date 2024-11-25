<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require 'src/Bot.pho';
require 'src/Currency.php';

$bot=new Bot();
$curreny=new Currency();

$update=json_decode(file_get_contents('php://input'));

if(isset($update)){
    $message=$update->message;
    $from_id=$message->from->id;
    $chat_id=$message->chat->id;
    $text=$message->text;
    $user_name=$message->from->username;
    if($text=='/start'){
        $bot->saveUser($from_id,$user_name);
        $reply_keyboard=[
            'keyboard'=>[
                ['text'=>'Ob havo'],
                ['text'=>'Valyuta Kursi']
            ],
            'resize_keyboard'=>true,
        ];
        $response=$bot->makeRequest('sendMessage',[
            'chat_id'=>$from_id,
            'text'=>"Assalomu alaykum Botimizga hush kelibsiz!",
            $parse_mode="html",
            $reply_markup=$reply_keyboard

        ]);

        if(!$response){
            $bot->makeRequest('sendMessage',[

                'chat_id'=>$from_id,
                'text'=>json_encode($response),
            ]);
        }
    }
    if($text=='Ob havo'){
//        $bot->saveUser($from_id,$user_name);
//        $reply_keyboard=[
//            'keyboard'=>[
//                ['text'=>'Ob havo'],
//                ['text'=>'Valyuta Kursi']
//
//            ]
//        ];
    }

    if($text=='Valyuta Kursi'){

    }
    if($text=='/currency'){
        $currencies=$curreny->getCurrencies();

        $currency_list="";
        foreach($currencies as $currency=>$rate){
            $currency_list.=$currency.":".$rate."\n";
        }
        $bot->makeRequest('sendMessage',[
            'chat_id'=>$from_id,
            'text'=>$currency_list,
        ]);
    }




}

echo 'true';
