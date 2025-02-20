<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RssFeedController;
use App\Http\Controllers\TrackingPixelController;



Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/donotsellmydata', function () {
    return view('donotsellmydata');
})->name('donotsellmydata');

Route::get('/philantrophy', function () {
    return view('philantrophy');
})->name('philantrophy');

Route::get('/thank-you', function () {
    return view('thankyou');
})->name('thankyou');

/* Route::get('/resources', function () {
    return view('resources');
}); */
Route::get('/resources', [RssFeedController::class, 'resources'])->name('resources');


Route::get('/solutions&services', function () {
    return view('solutions&services');
})->name('solutions&services');

Route::post('/send_mail', [MailController::class, 'sendEmail'])->name('sendemail');
Route::get('/tracking/pixel', [TrackingPixelController::class, 'track']);
