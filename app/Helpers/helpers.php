<?php

function translate_route($name, $params = [])
{
    $currentLocale = app()->getLocale();

    if ($currentLocale != 'en') {
        return route(app()->getLocale() . '_' . $name, $params);
    }

    return route($name, $params);
}

function translate_route_2($name, $params = [], $nextLocale = '')
{
    $currentLocale = app()->getLocale();return $currentLocale;

    if (!empty($nextLocale)) {
        $nextRouteName = str_replace($currentLocale . '_', '', $name);
        return route($nextLocale . '_' . $nextRouteName, $params);
    }

    return route($name, $params);
}

