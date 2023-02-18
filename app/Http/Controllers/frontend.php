<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontend extends Controller
{
    public function home(){
        return view('frontend.home');
    }

    public function about(){
        return view('frontend.about');
    }

    public function service(){
        return view('frontend.service');
    }

    public function portfolio(){
        return view('frontend.portfolio');
    }

    public function contact(){
        return view('frontend.contact_us');
    }
}
