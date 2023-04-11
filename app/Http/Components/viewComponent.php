<?php

namespace App\Http\Components;

use Ixudra\Curl\Facades\Curl;

class viewComponent
{
    public function index()
    {
        echo (view('welcome'));
    }
}
