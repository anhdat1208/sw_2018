<?php

namespace App\Http\Middleware;

use Closure;
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
    public function handle($request, Closure $next)
    {
        $locale = \Session::has('current_locale') ? \Session::get('current_locale') : $request->segment(1, '');
        if (in_array($locale, ['en', 'fr', 'vi'])) {
            app()->setLocale($locale);
        }

        return $next($request);
    }
}
