<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Auth;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/', [EventController::class, 'index']);
Route::get('/home', [EventController::class, 'index'])->name('home');

//CRUD Events

Route::delete('/delete/{id}', [EventController::class, 'destroy'])->name('delete')->middleware('auth','isAdmin');
Route::get('/edit/{id}', [EventController::class, 'edit'])->name('edit')->middleware('auth','isAdmin');
Route::patch('/update/{id}', [EventController::class, 'update'])->name('update')->middleware('auth','isAdmin');
Route::post('/events', [EventController::class, 'store'])->name('store')->middleware('auth','isAdmin');
Route::get('/create', [EventController::class, 'create'])->name('create')->middleware('auth','isAdmin');
Route::get('/show/{id}', [EventController::class, 'show'])->name('show');
Route::get('/past_event', [EventController::class, 'past_event'])->name('past_event');

