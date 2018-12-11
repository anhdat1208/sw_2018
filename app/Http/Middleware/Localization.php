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
        $locale = $request->segment(1, '');
        if (in_array($locale, ['en', 'fr', 'vi'])) {
            app()->setLocale($locale);
        }

        // if (\Session::has('locale')) {
        //     $locale = \Session::get('locale');
        //     \App::setLocale($locale);
        //     Carbon::setLocale($locale);
        // }

        return $next($request);
    }
}
