<?php

namespace Sultan\Quotes;

use Illuminate\Support\Facades\Http;

class Inspire{
    function justDoIt() {
        $response = Http::get('https://api.adviceslip.com/advice');

        return "ID: " . $response['slip']['id'] . ' ' . "<br>Advice: " . $response['slip']['advice'];
    }
}