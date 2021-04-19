<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Schema;
use Session;
use Carbon\Carbon;
class Localization
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
        if(Session::has('locale') == true){
            App::setlocale(Session::get('locale'));
        }
        Carbon::setLocale(Session::get('locale'));
        return $next($request);
    }
}
