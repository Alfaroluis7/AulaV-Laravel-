<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if(Auth::guard($guard)->user()->tipoUsuario_id == 3){
            return $next($request);
            }
            else return redirect('/')->with('status', 'No Entres Aqui
            8343446
            0416-7867609
            ');
        }else return redirect('/')->with('NO', 'No Entres Aqui 8343446 0416-7867609');

    }
}
