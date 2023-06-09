<?php

namespace App\Http\Components;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use App\Http\Components\viewComponent;

class desktopComponent
{
    public $viewComponent = null;
    public function __construct()
    {
        $this->viewComponent = new viewComponent();
    }
    public function index($__pathname)
    {
        switch ($__pathname) {
            case '/':
                $this->viewComponent->index();
                break;
            case '/login':
                $this->viewComponent->panel();
                break;
            case '/register':
                $this->viewComponent->register();
                break;
            default:
                dd('welcome');
                $this->viewComponent->index();
                break;
        }
    }
}
