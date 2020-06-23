<?php

namespace App\Http\Controllers;

use App\Feirante;
use App\Http\Requests;
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
        $feirantes = Feirante::paginate(6);
        return view('dashboard',compact('feirantes'));
    }

}
