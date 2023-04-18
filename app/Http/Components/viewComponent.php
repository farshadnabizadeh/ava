<?php

namespace App\Http\Components;

use Ixudra\Curl\Facades\Curl;

class viewComponent
{
    public function index()
    {
        echo (view('index'));
    }
    public function panel()
    {
        echo (view('viewsComponent.loginComponent'));
    }
    public function register()
    {
        echo (view('viewsComponent.registerComponent'));
    }
}
