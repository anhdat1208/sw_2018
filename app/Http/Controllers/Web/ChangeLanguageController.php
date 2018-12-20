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
        }

        return redirect()->back();
    }
}
