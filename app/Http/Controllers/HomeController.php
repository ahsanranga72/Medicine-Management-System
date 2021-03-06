<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Medicine;

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
        $user = auth()->user()->RegistrationAs;
        notify()->success('Laravel Notify is Breakfast!');
        return view('home', compact('user'));
    }

    
    
}
