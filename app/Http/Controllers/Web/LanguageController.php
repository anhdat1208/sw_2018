<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function handle($lang = '')
    {
        $locale = $lang;
        if (in_array($locale, config('app.locales'))) {
            app()->setLocale($locale);
            session(['current_locale' => $locale]);
            $redirectUrl = '';
        }
        
        return redirect()->back();
    }
}
