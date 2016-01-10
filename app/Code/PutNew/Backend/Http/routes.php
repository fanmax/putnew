<?php

Route::group(['middleware' => ['web','auth']], function () {
    Route::get('/',['as' => 'dashboard', 'uses' => 'DashboardController@index']);
    Route::group(['prefix' => 'settings'], function(){
        Route::get('/general',['as' => 'settings.general', 'uses' => 'SettingsGeneralController@index']);
        Route::post('/general',['as' => 'settings.general', 'uses' => 'SettingsGeneralController@store']);
    });
});
