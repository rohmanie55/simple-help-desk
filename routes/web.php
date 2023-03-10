<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });

    Route::resource('user',UserController::class)->except('show');
    Route::resource('category',CategoryController::class)->except('show');
    Route::get('ticket/report', [TicketController::class, 'report'])->name('ticket.report');
    Route::resource('ticket', TicketController::class);
    Route::post('ticket/{ticket}/status', [TicketController::class, 'status'])->name('ticket.status');
    Route::post('ticket/{ticket}/comment', [TicketController::class, 'comment'])->name('ticket.comment');
});

require __DIR__.'/auth.php';
