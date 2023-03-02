<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $activeChefs = Chef::where('status', 1)->limit(3)->get();
        return view('frontend.index', compact('activeChefs'));
    }
    public function home()
    {        
        return view('backend.index');
    }

    public function chef(){
        $activeChefs = Chef::where('status', 1)->get();
        return view('frontend.chefs',compact('activeChefs'));
    }
}
