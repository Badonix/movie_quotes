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
    return view('landing');
});

Route::get('/movie/{id}', function () {
    return view('movie');
});

Route::get('/login', function () {
    return view('sessions.create');
});

Route::get('/admin/quotes/create', function () {
    return view('admin.quotes.create');
});
Route::get('/admin/movies/create', function () {
    return view('admin.movies.create');
});
Route::get('/admin/quotes', function () {
    return view('admin.quotes.index');
});
Route::get('/admin/movies', function () {
    return view('admin.movies.index');
});
