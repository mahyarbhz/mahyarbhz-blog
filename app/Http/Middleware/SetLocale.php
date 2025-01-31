<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $locale = $request->route('locale');
        // if (in_array($locale, ['en', 'fa'])) {
        //     app()->setLocale($locale);
        // }

        if (Session::has('locale')) {
            app()->setLocale(Session::get('locale'));
        }
        return $next($request);
    }
}
