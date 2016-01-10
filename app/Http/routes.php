<?php

Route::group(['middleware' => 'web'], function () {
    Route::group(['prefix' => 'ap-admin'], function () {
        Route::get('login', ['as' => 'login', 'uses' => 'Auth\AuthController@showLoginForm']);
        Route::post('login', ['as' => 'login', 'uses' => 'Auth\AuthController@login']);
        Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);
    });
});
