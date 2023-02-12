<?php

namespace App\Http\Middleware;

use Closure;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isLogin
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
        //mengecek apakah di auth ada data login, kalau ada bisa lanjut akses
        if(Auth::check()){
        return $next($request);
        }
        //klo gaada, bakal diarahin ke hal awal ditambah alert error
        return redirect('/')->with('errorLogin','please login first');
    }
}
