<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('web.welcome');
    }

    public function aboutUs(){
        return view('web.aboutus');
    }

    public function contactUs(){
        return view('web.contactus');
    }

    public function services(){
        return view('web.services');
    }

    public function blogs(){
        return view('web.blogs');
    }
}
