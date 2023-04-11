<?php

namespace App\Http\Components;

use Illuminate\Http\Request;

class environmentVariable
{
    public function SERVER__1()
    {
        return env('DESKTOP__SERVER');
    }
    public function SERVER__2()
    {
        return env('TABLET__SERVER');
    }
    public function SERVER__3()
    {
        return env('MOBILE__SERVER');
    }
}
