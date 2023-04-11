<?php

namespace App\Http\Components;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use App\Http\Components\environmentVariable;

class Router
{
    public $SERVER__1 = null;
    public $SERVER__2 = null;
    public $SERVER__3 = null;
    public function __construct()
    {
        $enviromentVariable = new environmentVariable();
        $this->SERVER__1 = $enviromentVariable->SERVER__1();
        $this->SERVER__2 = $enviromentVariable->SERVER__2();
        $this->SERVER__3 = $enviromentVariable->SERVER__3();
    }
    public function switch($__pathname, $__desktop, $__tablet, $__mobile)
    {
        if ($__desktop) {
        } else {
            if ($__tablet) {
                echo (Curl::to($this->SERVER__2 . $__pathname)->get());
            } else {
                echo (Curl::to($this->SERVER__3 . $__pathname)->get());
            }
        }
    }
}

// Curl::to('https://jsonplaceholder.typicode.com/posts')->get()
// Curl::to('https://example.com/posts')->withData(['title'=>'Test', 'body'=>'sdsd', 'userId'=>1])->post();
