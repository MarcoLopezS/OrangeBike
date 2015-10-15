<?php namespace OrangeBike\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use OrangeBike\Http\Controllers\Controller;

class HomeController extends Controller{



    public function index()
    {
        return view('frontend.home');
    }

}