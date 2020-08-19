<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminController extends Controller
{
    public function login(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();
            // dd($data);
            User::create(['password' => Hash::make($data['password']) , 'name' => 'Admin' , 'email' =>$data['email'],]);
            // User::where('email' , $data['email'])->update(['password' => Hash::make($data['password'])]);
            if (Auth::attempt(['email' =>$data['email'], 'password' => $data['password'], 'role' => 'Admin'])) {
                toastr()->success('Successful Login!.');
                return redirect()->route('admin');
            }else {
                toastr()->error('Wrong Email or Password! Try again');
                return redirect('/admin/login');
            }
        }
        return view('admin.admin_login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout(){
        Session::flush();
        return redirect()->route('Adminlogin');
    }
}
