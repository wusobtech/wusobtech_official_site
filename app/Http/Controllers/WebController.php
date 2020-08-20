<?php

namespace App\Http\Controllers;

use App\Blog;
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

    public function blogsView(){
        $posts = Blog::orderby('created_at' , 'desc')->paginate(20);
        $mostpopular = Blog::where('status',1)->orderby('views','desc')->get();
        return view('web.blogs' , compact('posts','mostpopular'));
    }

    public function blog_info($id){
        $post = Blog::findorfail($id);
        return view('web.blog_info' , compact('post'));
    }
}
