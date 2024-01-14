<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookAppController;
use App\Http\Controllers\FeedbackController;


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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', [contactController::class, 'index']) ->name('contact');
Route::post('/contact', [contactController::class, 'store']);


Route::get('/about', [AboutController::class, 'index']) ->name('about');
Route::POST('/Join', [AboutController::class, 'Join']);

Route::get('/appointment', [BookAppController::class, 'index']) ->name('bookapp');
Route::post('/booking',[BookAppController::class, 'store']);

Route::get('/feedback', [FeedbackController::class, 'index']) ->name('feedback');
//Route::get('/hero', [HomeController::class, 'index']) ->name('home');
