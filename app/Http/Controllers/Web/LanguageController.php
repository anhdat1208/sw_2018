<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function handle($lang = '')
    {
        // $oldLocale = app()->getLocale();
        // $previousRouteName = app('router')->getRoutes()->match(app('request')->create(\URL::previous()))->getName();
        // if ($oldLocale != 'en') {
            
        // }
        $locale = $lang;
        if (in_array($locale, config('app.locales'))) {
            app()->setLocale($locale);
            session(['current_locale' => $locale]);
            $redirectUrl = '';
        }
        
        return redirect()->back();
    }
}
