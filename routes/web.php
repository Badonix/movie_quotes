<?php

use App\Http\Controllers\AdminQuoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\QuoteController;

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



Route::middleware('localization')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('landing');
    Route::get('/movie/{id}', [MovieController::class, 'show'])->name('movie');

    Route::group(['middleware' => 'guest'], function () {
        Route::controller(SessionController::class)->group(function () {
            Route::get('/login', 'create')->name('login');
            Route::post('/login', 'store')->name('login.store');
        });
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/logout', [SessionController::class, 'destroy'])->name('logout');

        Route::group(['prefix' => "admin"], function () {
            Route::view('/movies/create', 'admin.movies.create')->name('admin.movies.create');

            Route::group(['controller' => AdminQuoteController::class, 'prefix'=>"quotes"], function () {
                Route::get('/', 'index')->name('admin.quotes.index');
                Route::get('/create', 'create')->name('admin.quotes.create');
                Route::post('/create', 'store')->name('quote.store');
                Route::get('/{quote}', 'edit')->name('quote.edit');
                Route::patch('/{quote}', 'update')->name('quote.update');
                Route::delete('/{quote}', 'destroy')->name('quote.destroy');
            });
            Route::group(['controller'=>AdminMovieController::class, 'prefix'=>"movies"], function () {
                Route::get('/', 'index')->name('admin.movies.index');
                Route::post("/create", 'store')->name('movie.store');
                Route::get('/{movie}', 'edit')->name("movie.edit");
                Route::patch('/{movie}', 'update')->name("movie.update");
                Route::delete("/{movie}", 'destroy')->name('movie.destroy');
            });
        });
    });
});


Route::get('/setlocale/{locale}', function ($locale) {
    session(['locale' => $locale]);
    return redirect()->back();
})->name('setlocale');
