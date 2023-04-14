<?php

namespace App\Http\Components;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

use App\Http\Components\desktopComponent;
use App\Http\Components\environmentVariable;


class Router
{
    public $SERVER__1 = null;
    public $SERVER__2 = null;
    public $SERVER__3 = null;
    public $viewRouting = null;
    public function __construct()
    {
        $enviromentVariable = new environmentVariable();
        $desktopComponent = new desktopComponent();
        $this->SERVER__1 = $enviromentVariable->SERVER__1();
        $this->SERVER__2 = $enviromentVariable->SERVER__2();
        $this->SERVER__3 = $enviromentVariable->SERVER__3();
        $this->viewRouting = $desktopComponent;
    }
    public function switch($__pathname, $__desktop, $__tablet, $__mobile)
    {
        if (env('CLOUD__PROCESS')) {
            if ($__desktop) {
                $this->viewRouting->index($__pathname);
            } else {
                if ($__tablet) {
                    echo (Curl::to($this->SERVER__2 . $__pathname)->get());
                } else {
                    echo (Curl::to($this->SERVER__3 . $__pathname)->get());
                }
            }
        } else {
            $this->viewRouting->index($__pathname);
        }
    }
}

// Curl::to('https://jsonplaceholder.typicode.com/posts')->get()
// Curl::to('https://example.com/posts')->withData(['title'=>'Test', 'body'=>'sdsd', 'userId'=>1])->post();
