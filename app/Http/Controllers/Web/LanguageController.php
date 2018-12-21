<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    // public function handle($lang = '', $route = '', $params = [])
    // {
    //     $oldLocale = app()->getLocale();
    //     // $routeName = $previousRouteName = app('router')->getRoutes()->match(app('request')->create(\URL::previous()))->getName();
    //     // if ($oldLocale != 'en' && $previousRouteName != 'home') {
    //     //     $routeName = substr($previousRouteName, strpos($previousRouteName, '_') + 1);
    //     // }
    //     $routeName = $route;
    //     if ($oldLocale != 'en' && $route != 'home') {
    //         $routeName = substr($route, strpos($route, '_') + 1);
    //     }dd($routeName);
    //     $nextLocale = $lang;
    //     if (in_array($nextLocale, config('app.locales'))) {
    //         app()->setLocale($nextLocale);
    //         session(['current_locale' => $nextLocale]);
    //         $redirectUrl = translate_route($routeName);
    //     }
        
    //     return redirect()->back();
    // }
    public function handle(Request $request)
    {
        $oldLocale = \App::getLocale();
        $oldRouteName = $request->get('route_name');
        $oldRouteParams = $request->get('params');
        $oldRouteAction = $request->get('current_action');
        var_dump($oldRouteAction);
    }
}
