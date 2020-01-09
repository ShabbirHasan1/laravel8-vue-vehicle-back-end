<?php
/*
|--------------------------------------------------------------------------
| Admin API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin Dashboard Config API routes for your application.
| Look in app/Providers/RouteServiceProvider for more info
|
*/


Route::prefix('admin')->group(function() {
    /*
     * DEVICE management routes
     */
    Route::get('devices', 'API\Admin\DeviceController@index');
    Route::get('device/{id}', 'API\Admin\DeviceController@show');
    Route::post('device/store', 'API\Admin\DeviceController@store');
    Route::put('device/update/{id}', 'API\Admin\DeviceController@update');
    Route::delete('device/delete/{id}', 'API\Admin\DeviceController@destroy');

    /*
     * DEVICE GROUPS management routes
     */
    Route::get('device_groups', 'API\Admin\DeviceGroupController@index');
    Route::get('device_group/{id}', 'API\Admin\DeviceGroupController@show');
    Route::post('device_group/store', 'API\Admin\DeviceGroupController@store');
    Route::put('device_group/update/{id}', 'API\Admin\DeviceGroupController@update');
    Route::delete('device_group/delete/{id}', 'API\Admin\DeviceGroupController@destroy');

    Route::get('logs', 'API\Admin\LogController@searchLogs');
});
