<?php

use Illuminate\Support\Facades\Route;
use Sultan\Quotes\Controllers\InspirationController;

Route::get('inspire', InspirationController::class);