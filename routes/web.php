<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookAppController;
use App\Http\Controllers\FeedbackController;


/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::get('/home', [HomeController::class,'index'])->middleware('auth')->name('home');

//Route::get('post',[HomeController::class,'post'])->middleware(['auth', 'admin']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


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

Route::get('/contact', [contactController::class, 'index']) ->name('contact.index');
Route::post('/contact', [contactController::class, 'store'])->name('contact.store');


Route::get('/about', [AboutController::class, 'index']) ->name('user.about');
Route::POST('/Join', [AboutController::class, 'Join']);

Route::get('/appointment', [BookAppController::class, 'index']) ->name('bookapp');
Route::post('/booking',[BookAppController::class, 'store']);

Route::get('/feedback', [FeedbackController::class, 'index']) ->name('feedback');

route::get('/redirect',[HomeController::class, 'redirect']);

route::get('/home',[HomeController::class, 'index']);

Route::POST('/Feedback', [FeedbackController::class, 'Feedback']);

Route::delete('delete-patient/{email}',[HomeController::class, 'destroy']);

//Route::get('/home', [HomeController::class, 'index']) ->name('home');

require __DIR__.'/auth.php';
