<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
         if(auth()->user()->is_admin == 1){
            return $next($request);
           // echo auth()->user()->name;
        }
   
       return redirect('home')->with('error',"Only admin can access!");
       
        
    }
}
