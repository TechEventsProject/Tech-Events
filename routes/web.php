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


Route::get('/', [App\Http\Controllers\EventController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\EventController::class, 'index'])->name('home');

/* ->middleware('auth') */
Auth::routes();

//CRUD Events

Route::delete('/delete/{id}', [EventController::class, 'destroy'])->name('delete');
Route::get('/edit/{id}', [EventController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [EventController::class, 'update'])->name('update');
Route::post('/events', [EventController::class, 'store'])->name('store');
Route::get('/create', [EventController::class, 'create'])->name('create')->middleware('auth','isAdmin');

Route::get('/show/{id}', [EventController::class, 'show'])->name('show');
