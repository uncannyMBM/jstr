<?php

Route::group(['namespace' => 'JsonStringfy\JsonStringfy\Activereq\Activemod'], function () {
    Route::group(['middleware' => ['docWeb']], function () {
        Route::get('install', 'PC@index')->name('installer');
        Route::group(['middleware' => 'pidWeb'], function () {
            Route::get('check-requirements', 'PC@checkRequirements')->name('check.requirements');
            Route::get('check-permissions', 'PC@checkPermissions')->name('check.permissions');
            Route::get('setup-product', 'PC@productCode')->name('product.code');
            Route::post('install-complete', 'PC@submitProductCode')->name('submit.product.code');
        });
    });
    Route::get('license', 'PC@license')->name('doc.there')->middleware('cap');
});
