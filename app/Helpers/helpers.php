<?php

function translate_route($name, $params = [], $nextLocale = '')
{
    $currentLocale = app()->getLocale();

    if (!empty($nextLocale)) {
        $nextRouteName = str_replace($currentLocale . '_', '', $name);
        return route($nextLocale . '_' . $nextRouteName, $params);
    }

    if ($currentLocale != \Config::get('app.fallback_locale')) {
        return route(app()->getLocale() . '_' . $name, $params);
    }

    return route($name, $params);
}
