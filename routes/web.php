<?php

// Route::locales(function () {
//     Route::group(['namespace' => 'Web', 'as' => 'web.'], function () {
//         Route::get('/', 'HomeController@index')->name('home');
//         Route::get(__('urls.service'), 'OurServiceController@index')->name('service.index');
//         Route::get(__('urls.contact'), 'ContactController@index')->name('contact.index');
//     });
// });
// Route::get('/', 'Web\HomeController@index')->name('web.home');
// Route::post('contact/send', 'Web\ContactController@send')->name('web.contact.send');

$currentLocale = app()->getLocale();

foreach (['en', 'vi', 'fr'] as $locale) {
    app()->setLocale($locale);
    Route::group(['namespace' => 'Web', 'prefix' => $locale], function () {
        Route::get('/', 'HomeController@index')->name(__('routes.name.home'));
        Route::get(__('routes.url.service'), 'OurServiceController@index')->name(__('routes.name.service'));
    });
}

app()->setLocale($currentLocale);
