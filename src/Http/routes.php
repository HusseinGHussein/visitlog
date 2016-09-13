<?php

Route::group(
    [
        'namespace' => 'Sarfraznawaz2005\VisitLog\Http\Controllers',
        'prefix' => 'visitlog'
    ],
    function () {
        Route::get('/', 'VisitLogController@index')->name('__visitlog__');
        Route::delete('delete_visitlog/{id}', 'VisitLogController@destroy')->name('__delete_visitlog__');
    }
);

