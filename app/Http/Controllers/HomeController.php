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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $istanbul = file_get_contents(url('weather.php?command=location&woeid=2344116'));
        $json = json_decode($istanbul, true);
        // dd($json);
        return view('home')->with('istanbul', $json);
    }
    public function foo()
    {
        return view('foo');
    }
}
