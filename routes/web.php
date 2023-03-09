<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});
Route::get('/browse', function () {
    return view('browse');
});

Route::get('/commission-view', function () {
    return view('commission-view');
});

Route::get('/contact-gamehelper', function () {
    return view('contact-gamehelper');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/create-commission', function () {
    return view('create-commission');
});

Route::get('/edit-commission', function () {
    return view('edit-commission');
});

Route::get('/edit-profile', function () {
    return view('edit-profile');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/profile', function () {
    return view('profile');
});

 /*Route::get('/reset-password', function () {
    return view('reset-password');
}); */

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/header-footer', function () {
    return view('app');
});
