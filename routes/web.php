<?php

use App\Http\Controllers\AdminQuoteController;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\App;

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
        Route::get('/admin/quotes/create', [QuoteController::class, 'create'])->name('admin.quotes.create');
        Route::view('/admin/movies/create', 'admin.movies.create')->name('admin.movies.create');

        Route::controller(AdminQuoteController::class)->group(
            function () {
                Route::get('/admin/quotes', 'index')->name('admin.quotes.index');
                Route::get('/admin/edit/quote/{quote}', 'edit')->name('quote.edit');
                Route::patch('/admin/edit/quote/{quote}', 'update')->name('quote.update');
                Route::post('/admin/quotes/create', 'store')->name('quote.store');
                Route::delete('/admin/quotes/{quote}', 'destroy')->name('quote.destroy');
            }
        );

        Route::group(['prefix' => 'admin'], function () {
            Route::get('/movies', [AdminMovieController::class, 'index'])->name('admin.movies.index');
            Route::get('/edit/movie/{movie}', [AdminMovieController::class, 'edit'])->name("movie.edit");
            Route::patch('/edit/movie/{movie}', [AdminMovieController::class, 'update'])->name("movie.update");
            Route::post("/movies/create", [AdminMovieController::class, 'store'])->name('movie.store');
            Route::delete("/movies/{movie}", [AdminMovieController::class, 'destroy'])->name('movie.destroy');
        });
    });
});


Route::get('/setlocale/{locale}', function ($locale) {
    session(['locale' => $locale]);
    return redirect()->back();
})->name('setlocale');
