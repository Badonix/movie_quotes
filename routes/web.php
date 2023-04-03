<?php

use App\Models\Movie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;

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
// "quote" => Quote::inRandomOrder()->first()

Route::get('/', [HomeController::class, 'index'])->name('landing');

Route::get('/movie/{id}', [MovieController::class, 'show'])->name('movie');

Route::view('/login', 'sessions.create')->name('login');

Route::view('/admin/quotes/create', 'admin.quotes.create')->name('admin.quotes.create');

Route::view('/admin/movies/create', 'admin.movies.create')->name('admin.movies.create');

Route::view('/admin/quotes', 'admin.quotes.index')->name('admin.quotes.index');

Route::view('/admin/movies', 'admin.movies.index')->name('admin.movies.index');
