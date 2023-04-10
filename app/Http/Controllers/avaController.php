<?php

namespace App\Http\Controllers;

use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use App\Http\Components\Router;



class avaController extends Controller
{
    public $windows = null;
    public $linux = null;
    public $android = null;
    public $mobile = null;
    public $tablet = null;
    public $desktop = null;
    public $phone = null;
    public $mac = null;
    public $platform = null;
    public $routerComponent = null;
    public function __construct()
    {
        $agent = new Agent();
        $this->windows = $agent->is('Windows');
        $this->linux = $agent->is('Linux');
        $this->android = $agent->is('AndroidOS');
        $this->platform = $agent->device();
        $this->mobile = $agent->isMobile();
        $this->tablet = $agent->isTablet();
        $this->desktop = $agent->isDesktop();
        $this->phone = $agent->isPhone();
        $this->routerComponent = new Router();
    }
    public function index(Request $request)
    {
        $this->routerComponent->switch($request->getHttpHost(), $this->desktop, $this->tablet, $this->mobile);
    }
}
