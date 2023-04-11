<?php

namespace App\Http\Components;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use App\Http\Components\environmentVariable;
use App\Http\Components\viewComponent;


class Router
{
    public $SERVER__1 = null;
    public $SERVER__2 = null;
    public $SERVER__3 = null;
    public $VIEW = null;
    public function __construct()
    {
        $enviromentVariable = new environmentVariable();
        $viewComponent = new viewComponent();
        $this->SERVER__1 = $enviromentVariable->SERVER__1();
        $this->SERVER__2 = $enviromentVariable->SERVER__2();
        $this->SERVER__3 = $enviromentVariable->SERVER__3();
        $this->VIEW = $viewComponent;
    }
    public function switch($__pathname, $__desktop, $__tablet, $__mobile)
    {
        if (env('CLOUD__PROCESS')) {
            if ($__desktop) {
                $this->VIEW->index();
            } else {
                if ($__tablet) {
                    echo (Curl::to($this->SERVER__2 . $__pathname)->get());
                } else {
                    echo (Curl::to($this->SERVER__3 . $__pathname)->get());
                }
            }
        } else {
            # Desktop view process
        }
    }
}

// Curl::to('https://jsonplaceholder.typicode.com/posts')->get()
// Curl::to('https://example.com/posts')->withData(['title'=>'Test', 'body'=>'sdsd', 'userId'=>1])->post();
