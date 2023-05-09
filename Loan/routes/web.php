<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route for User
Route::get('/u', function() {
    return view('welcome');
});
Route::get('/u/request-loan', function() {
    return view('Frontend.requestLoan');
});

// Route for Admin
Route::get('/a', function() {
    return view('Backend.dashboard');
})->name('admin');
Route::get('/a/dashboard', function() {
    return view('Backend.dashboard');
});
Route::get('/a/order', function() {
    return view('Backend.dashboard');
});
Route::get('/a/product', function() {
    return view('Backend.dashboard');
});
Route::get('/a/customer', function() {
    return view('Backend.dashboard');
});

Route::get('/logins', function() {
    return view('FrontEnd.login');
});


require __DIR__.'/auth.php';
