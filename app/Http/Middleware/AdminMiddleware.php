<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Support\Facades\Session;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            $user = Auth::User();
            if($user->role != 'Admin'){
                Session::flash('error_msg','Acess Denied!...Admins only!');
                return redirect('/home');
            }
        } else{
            return redirect('/admin/login');
        }
        return $next($request);
    }
}
