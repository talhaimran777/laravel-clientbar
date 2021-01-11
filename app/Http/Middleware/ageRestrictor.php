<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ageRestrictor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // echo("Comming from age restrictor middleware!");

        if($request->age && $request->age < 18){
            //echo("Age is present!");
            return redirect("noaccess");
        }
        return $next($request);
    }
}