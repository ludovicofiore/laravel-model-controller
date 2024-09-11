<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

// Route::get('/', function () {

//     return view('home');
// })->name('home');

// Route::get('/chi-siamo', function () {
//     return view('about');
// })->name('about');

// Route::get('/contatti', function () {
//     return view('contacts');
// })->name('contacts');


Route::get('/',[PageController::class, 'index'])->name('home');
Route::get('/chi-siamo',[PageController::class, 'about'])->name('about');
Route::get('/contatti',[PageController::class, 'contacts'])->name('contacts');
Route::get('/ordinati',[PageController::class, 'orderMovies'])->name('orderMovies');
