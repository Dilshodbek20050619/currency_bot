<?php
class Weather {
    const WEATHER_API_URL = 'https://api.openweathermap.org/data/2.5/weather?q=Toshkent&appid=27255ec8e0734575cbaf6d8c7136afcd';
    public $weather_data = [];
    public function __construct () {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, self::WEATHER_API_URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        $this->weather_data = json_decode($response);
    }
    public function getWeather () {
        return $this->weather_data;
    }
}