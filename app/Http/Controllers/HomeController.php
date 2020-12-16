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

    public function login()
    {
        return view('register.login');
    }
    public function register()
    {
        return view('register.register');
    }

    public function register2()
    {
        return view('register.register2');
    }

    public function register3()
    {
        return view('register.register3');
    }

    public function register4()
    {
        return view('register.register4');
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
