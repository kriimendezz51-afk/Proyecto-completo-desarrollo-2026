<?php

use App\Http\Controllers\FlightController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/interfaz', function () {
    return view('interfaz');
});
Route::get('/enlace', function () {
    return view('enlace');
});

Route::get('/enlace', function () {
    return view(view: 'enlace');
})-> name(name: 'enlace');

Route::get('/flights', [FlightController::class, 'index'])->name('flights.index');
Route::get('/posts', [PostController::class, 'index'])->name('post.index');