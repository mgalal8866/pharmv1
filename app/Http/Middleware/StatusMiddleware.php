<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class StatusMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        // dd( Auth::guard('brandaccount')->check() );
        // dd($this->auth->guard('brandaccount')->user());
        // if (auth()->user()->status == 'active') {
        //     return $next($request);
        // }
        // If agent belongs to a user
      //  if (auth('brandaccount')->user()->is_active == 0) {
       //     return $next($request);
       // }
       // Session::flush();
       // return back()->with('error', 'Your account is not active');
        return $next($request);
    }
}
