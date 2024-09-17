<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RssFeedController;



Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/philantrophy', function () {
    return view('philantrophy');
});

/* Route::get('/resources', function () {
    return view('resources');
}); */
Route::get('/resources', [RssFeedController::class, 'resources']);


Route::get('/solutions&services', function () {
    return view('solutions&services');
});
