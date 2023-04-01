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

Route::get('/', [HomeController::class, 'index']);

Route::get('/movie/{id}', [MovieController::class, 'show']);

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
