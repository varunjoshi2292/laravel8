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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::any('/add-message', [App\Http\Controllers\TicketController::class, 'addMessage'])->name('add-message');

Route::any('/add-ticket', [App\Http\Controllers\TicketController::class, 'addTicket'])->name('add-ticket');
