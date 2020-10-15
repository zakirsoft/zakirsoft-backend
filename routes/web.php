<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('main-admin.dashboard');
});
Route::get('/option', function () {
    return view('main-admin.option');
});

Route::resource('portfolio', PortfolioController::class);

Route::resource('contact', ContactController::class);

Route::resource('testimonial', TestimonialController::class);

