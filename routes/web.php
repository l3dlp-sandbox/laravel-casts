<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/genealabs/laravel-casts/examples/bootstrap3', function () {
        return view('genealabs-laravel-casts::examples.bootstrap3');
    });

    Route::get('/genealabs/laravel-casts/examples/bootstrap4', function () {
        return view('genealabs-laravel-casts::examples.bootstrap4');
    });
});