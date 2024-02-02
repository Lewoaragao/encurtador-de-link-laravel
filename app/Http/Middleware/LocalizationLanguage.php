<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class LocalizationLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $languages = explode(',', $request->server('HTTP_ACCEPT_LANGUAGE'));

        if ($languages != null) {
        App::setLocale($languages[0]);
        } else {
            App::setLocale('en');
        }

        return $next($request);
    }
}