<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\avaController as Controller;


Route::get(\Request::getRequestUri(), [Controller::class, 'index']);
