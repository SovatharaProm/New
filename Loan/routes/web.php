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
    return view('Frontend.user.homepage');
});
Route::get('/u/request-loan', function() {
    return view('Frontend.user.requestLoan');
});
Route::get('/u/loans', function() {
    return view('Frontend.user.loans');
});
Route::get('/u/history', function() {
    return view('Frontend.user.loanHistory');
});
Route::get('/', function () {
    return view('Frontend.main');
});



// Route for Bank
Route::get('/b/makeLoan', function() {
    return view('FrontEnd.bank.makeloan');
});
Route::get('/b/activeLoan', function() {
    return view('FrontEnd.bank.activeLoan');
});
Route::get('/b/borrowerList', function() {
    return view('FrontEnd.bank.borrowerList');
});



// Route for Admin
Route::get('/a', function() {
    return view('Backend.homepage');
})->name('admin');
Route::get('/a/user', function() {
    return view('Backend.newUser');
});
Route::get('/a/loan', function() {
    return view('Backend.loan');
});
Route::get('/a/bank', function() {
    return view('Backend.bank');
});
Route::get('/a/borrower', function() {
    return view('Backend.borrower');
});
Route::get('/a/status', function() {
    return view('Backend.status');
});
Route::get('/a/suspend', function() {
    return view('Backend.suspend');
});

require __DIR__.'/auth.php';
