<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', action: function () {
    return redirect('/series');
});


Route::resource('/series', SeriesController::class);