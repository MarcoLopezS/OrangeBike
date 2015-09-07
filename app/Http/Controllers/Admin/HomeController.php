<?php namespace OrangeBike\Http\Controllers\Admin;

use Auth;

use OrangeBike\Http\Controllers\Controller;

class HomeController extends Controller{

	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
        return view('admin.home');
    }

} 