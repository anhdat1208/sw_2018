<?php

Route::group(['namespace' => 'Web'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/' . \Config::get('app.locale'), 'HomeController@index')->name('home');
    Route::get('/services.html', 'OurServiceController@index')->name('services.index');
    Route::get('/contact.html', 'ContactController@index')->name('contact.index');
    Route::post('/contact/send', 'ContactController@send')->name('contact.send');
    Route::get('/services/{slug}.html', 'OurServiceController@detail')->name('service.detail');
    // Route::get('/handle-language/{lang}/{route}', 'LanguageController@handle')->name('language.handle');
    Route::post('/handle-language', 'LanguageController@handle')->name('language.handle');
});

$currentLocale = app()->getLocale();

foreach (\Config::get('app.alt_locales') as $locale) {
    app()->setLocale($locale);
    Route::group(['namespace' => 'Web', 'prefix' => $locale, 'as' => $locale . '_'], function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::get(__('routes.url.service'), 'OurServiceController@index')->name('services.index');
        Route::get(__('routes.url.contact'), 'ContactController@index')->name('contact.index');
        Route::get(__('urls.service_detail') . '/{slug}.html', 'OurServiceController@detail')->name('service.detail');
    });
}

app()->setLocale($currentLocale);
