<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     /*
    public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function accueil()
    {
        return view('accueil');
    }

    public function register()
    {
        return view('register');
    }

    public function userlisting()
    {
        return view('userlisting');
    }

    public function usersingle()
    {
        return view('usersingle');
    }

    public function jobsingle()
    {
        return view('jobsingle');
    }

    public function joblisting()
    {
        return view('joblisting');
    }

    public function jobproposal()
    {
        return view('jobproposal');
    }
}
