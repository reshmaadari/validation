<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class noageAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(session('age')>=18){
            return redirect('access')->with('status',"your are over 18");
        }
        return $next($request);
    }
}
