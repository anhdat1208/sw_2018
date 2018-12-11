<?php

function translate_route($name, $params = [])
{
    $currentLocale = app()->getLocale();
    if ($currentLocale != config('fallback_locale')) {
        return route(app()->getLocale() . '_' . $name, $params);
    }
    return route($name, $params);
}
