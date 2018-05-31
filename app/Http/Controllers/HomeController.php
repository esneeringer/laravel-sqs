<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Log;
use Mail;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view()->make("home.index");
    }

    public function send()
    {
        Log::info("Request Cycle with Queues Begins");
        $this->dispatch(new SendWelcomeEmail());
        Log::info("Request Cycle with Queues Ends");
    }
}
