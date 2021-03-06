<?php

Route::group(['namespace' => 'Web'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/services.html', 'OurServiceController@index')->name('services.index');
    Route::get('/contact.html', 'ContactController@index')->name('contact.index');
    Route::post('/contact/send', 'ContactController@send')->name('contact.send');
    Route::get('/about-us.html', 'AboutUsController@index')->name('about_us.index');
    Route::get('/expertises.html', 'ExpertiseController@index')->name('expertise.index');
    Route::get('/methodology.html', 'MethodologyController@index')->name('methodology.index');
    Route::get('/clients.html', 'ClientController@index')->name('clients.index');
    Route::get('/services/{slug}.html', 'OurServiceController@detail')->name('service.detail');
    Route::get('/handle-language/{lang}', 'LanguageController@handle')->name('language.handle');
});

$currentLocale = app()->getLocale();

foreach (\Config::get('app.locales') as $locale) {
    app()->setLocale($locale);
    Route::group(['namespace' => 'Web', 'prefix' => $locale, 'as' => $locale . '_'], function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::get(__('routes.url.service'), 'OurServiceController@index')->name('services.index');
        Route::get(__('routes.url.contact'), 'ContactController@index')->name('contact.index');
        Route::get(__('routes.url.about_us'), 'AboutUsController@index')->name('about_us.index');
        Route::get(__('routes.url.expertise'), 'ExpertiseController@index')->name('expertise.index');
        Route::get(__('routes.url.clients'), 'ClientController@index')->name('clients.index');
        Route::get(__('routes.url.methodology'), 'MethodologyController@index')->name('methodology.index');
        Route::get(__('urls.service_detail') . '/{slug}.html', 'OurServiceController@detail')->name('service.detail');
    });
}

app()->setLocale($currentLocale);
