<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class User_admin
{
    public function handle($request, Closure $next)
    {
        if (Session::get('user_admin_data')[0] ['user_admin_id']){
            return $next($request);
        }
        return redirect('/');
        
    }
}
