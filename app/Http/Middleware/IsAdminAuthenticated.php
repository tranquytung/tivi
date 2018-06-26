<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdminAuthenticated
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

        if(!Auth::guard('admin')->check()){
            return redirect()->route('admin.login')->with(['login_admin'=>'Bạn phải đăng nhập !']);
        }
        return $next($request);
    }
}
