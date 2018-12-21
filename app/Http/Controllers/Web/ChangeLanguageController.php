<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ChangeLanguageController extends Controller
{
    public function index($lang = '')
    {
        $locale = $lang;
        if (in_array($locale, ['en', 'fr', 'vi'])) {
            app()->setLocale($locale);
            session(['current_locale' => $locale]);
            $redirectUrl = '';
        }
        // FIXME: End 20/12/2018 Company
        // return dump(\URL::previous());
        // return route(app('router')->getRoutes()->match(app('request')->create(\URL::previous()))->getName());
        return redirect()->back();
    }
}
