<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail\Sendmail;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function sendMail(){
        Mail:: to ('mengleang.hok@student.passerellesnumeriques.org')->send(new Sendmail());
        return "Email is already send";
    }
}
