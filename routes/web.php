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

Route::view('/', 'landing')->name('landing');

Route::view('/movie/{id}', 'movie')->name('movie');

Route::view('/login', 'sessions.create')->name('login');

Route::view('/admin/quotes/create', 'admin.quotes.create')->name('admin.quotes.create');

Route::view('/admin/movies/create', 'admin.movies.create')->name('admin.movies.create');

Route::view('/admin/quotes', 'admin.quotes.index')->name('admin.quotes.index');

Route::view('/admin/movies', 'admin.movies.index')->name('admin.movies.index');
