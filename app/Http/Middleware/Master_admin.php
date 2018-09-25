<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class Master_admin
{
    public function handle($request, Closure $next)
    {
        if (Session::get('user_master_data')[0] ['user_master_id']){
            return $next($request);
        }
        return redirect('/');
        
    }
}
