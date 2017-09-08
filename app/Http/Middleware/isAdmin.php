<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class isAdmin
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
       $user = $request->user();

        //If this user isn't logged in, they have no permissions
        if( ! $user ){
            return redirect('/');
        }

        if( !$user->isAdmin())
        {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
