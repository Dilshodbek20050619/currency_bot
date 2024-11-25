<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
class Currency{
    const API_URL = 'https://api.exchangeratesapi.io/';
    private $client;
    public array $currencies=[];

    public function __construct(){
        $this->client=new Client([
            'base_uri'=>self::API_URL,
            'timeout'=>2.0
        ]);

        $request=$this->client->request('GET','');
        $this->currencies=json_decode($request->getBody()->getContents());

    }
    public function getCurrencies():array{
        $separated_data=[];
        $currencies=$this->currencies;
        foreach($currencies_info as $currency){
            $separated_data[$currency->Ccy]=$currency->Rate;
        }
        return $separated_data;
    }
    public function exchange(string $from,string $to,int $amount):float|int|string
    {
        if($from==$to){
            return "Valyutalar har-xil bulishi kerak";
        }
        if($from=='UZS'){
            return $amount/(int)$this->getCurrencies()[$to];
        }elseif ($to=='UZS'){
            return $amount * (int)$this->getCurrencies()[$from];
        }
        return "Valyutalar har-xil bulishi kerak";

    }

}