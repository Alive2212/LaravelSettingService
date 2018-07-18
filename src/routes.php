<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('api')->group(function () {
    Route::prefix('v1')->group(function () {
        Route::prefix('alive')->group(function () {
            Route::prefix('setting')->group(function () {
                    Route::get('', 'Alive2212\LaravelSettingService\Http\Controllers\SettingServiceMetaController@index')->name('setting_service.meta.index');
                    Route::get('create', 'Alive2212\LaravelSettingService\Http\Controllers\SettingServiceMetaController@create')->name('setting_service.meta.create');
                    Route::get('{id}/edit', 'Alive2212\LaravelSettingService\Http\Controllers\SettingServiceMetaController@edit')->name('setting_service.meta.edit');
                    Route::get('{id}', 'Alive2212\LaravelSettingService\Http\Controllers\SettingServiceMetaController@show')->name('setting_service.meta.show');
                    Route::post('', 'Alive2212\LaravelSettingService\Http\Controllers\SettingServiceMetaController@store')->name('setting_service.meta.store');
                    Route::put('{id}', 'Alive2212\LaravelSettingService\Http\Controllers\SettingServiceMetaController@update')->name('setting_service.meta.put');
                    Route::patch('{id}', 'Alive2212\LaravelSettingService\Http\Controllers\SettingServiceMetaController@update')->name('setting_service.meta.patch');
                    Route::delete('{id}', 'Alive2212\LaravelSettingService\Http\Controllers\SettingServiceMetaController@destroy')->name('setting_service.meta.destroy');
            });
        });
    });
});

