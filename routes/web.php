<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Route::resource('portfolio', PortfolioController::class);
// =====================Portfolio =====================
Route::redirect('home', 'dashboard', 302);

// =====================Portfolio =====================
Route::resource('dashboard', DashboardController::class);

// =====================Portfolio =====================
Route::resource('portfolio', PortfolioController::class);

// =====================Career =====================
Route::resource('career', CareerController::class);

// =====================Contact =====================
Route::resource('contact', ContactController::class);

// =====================Testimonail =====================
Route::resource('testimonial', TestimonialController::class);

// =====================Role =====================
Route::get('role', [RoleController::class, 'index'])->name('RoleIndex');
Route::get('role/create', [RoleController::class, 'create'])->name('RoleCreate');
Route::post('role/create', [RoleController::class, 'role_create'])->name('RoleCreate');
Route::get('role/edit/{id}', [RoleController::class, 'role_edit'])->name('RoleEdit');
Route::post('role/update', [RoleController::class, 'role_update'])->name('RoleUpdate');
Route::get('role/delete/{id}', [RoleController::class, 'role_delete'])->name('RoleDelete');
Route::get('role/permission/{id}', [RoleController::class, 'permission_assign'])->name('PermissionAssign');
Route::post('role/permission/{role}', [RoleController::class, 'permission_assign_post'])->name('PermissionAssignPost');

// Route::resource('role', RoleController::class);
Route::get('user/role-assign/{user}', [UserController::class, 'role_assign'])->name('RoleAssign');
Route::post('user/role-assign/{user}', [UserController::class, 'role_assign_store'])->name('RoleAssignStore');
Route::resource('user', UserController::class);


Route::get('signin', function () {
    return view('access.signin');
});

Route::get('signup', function () {
    return view('access.signup');
});

Route::get('password/reset', function () {
    return view('access.forgot');
});


Route::get('test', [TestController::class, 'index']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
