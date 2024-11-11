<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
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

Route::get('/donotsellmydata', function () {
    return view('donotsellmydata');
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

Route::post('/send_mail', [MailController::class, 'sendEmail'])->name('sendemail');
