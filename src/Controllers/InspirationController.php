<?php

namespace Sultan\Quotes\Controllers;

use Sultan\Quotes\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire){
        $quote = $inspire->justDoIt();
        return view('quotes::index', compact('quote'));
    }
}