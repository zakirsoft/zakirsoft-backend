<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
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

// Route::resource('portfolio', PortfolioController::class);

Route::resource('dashboard', DashboardController::class);
// Route::resource('portfolio', PortfolioController::class);
Route::resource('contact', ContactController::class);

Route::resource('testimonial', TestimonialController::class);



Route::get('signin', function () {
    return view('access.signin');
});

Route::get('signup', function () {
    return view('access.signup');
});

Route::get('password/reset', function () {
    return view('access.forgot');
});



Route::get('management/user', function () {
    return view('admin.members.users.users');
});

Route::get('management/user/create', function () {
    return view('admin.members.users.user_create');
});

Route::get('management/role', function () {
    return view('admin.members.role.role');
});

Route::get('management/role/create', function () {
    return view('admin.members.role.role_create');
});

Route::get('management/role/permission-assign', function () {
    return view('admin.members.role.permission_assign');
});
