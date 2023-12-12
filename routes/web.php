<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/homepage', function () {
   return view('home');
});

Auth::routes();

Route::get('/artist/{user}', [App\Http\Controllers\ArtistProfilesController::class, 'index'])->name('artist.show');
Route::get('/artist/{user}/edit', [App\Http\Controllers\ArtistProfilesController::class, 'edit'])->name('artist.edit');
Route::patch('/artist/{user}', [App\Http\Controllers\ArtistProfilesController::class, 'update'])->name('artist.update');

Auth::routes();

Route::get('/a/create', 'App\Http\Controllers\ArtsController@create');
Route::post('/a', 'App\Http\Controllers\ArtsController@store');
Route::get('/a/{art}', 'App\Http\Controllers\ArtsController@show');
