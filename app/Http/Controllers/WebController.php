<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function aboutUs(){
        return view('aboutus');
    }

    public function contactUs(){
        return view('contactus');
    }

    public function services(){
        return view('services');
    }

    public function blogs(){
        return view('blogs');
    }
}
