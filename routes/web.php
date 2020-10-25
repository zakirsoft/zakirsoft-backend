<?php

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PortfolioCategoryController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//  =====================Frontend Routes =====================
Route::get('/', [WebsiteController::class, 'home'])->name('home_website');
Route::get('/about', [WebsiteController::class, 'about'])->name('about_website');
Route::get('/works', [WebsiteController::class, 'work'])->name('work_website');
Route::get('/works/{id}/details', [WebsiteController::class, 'workDetails'])->name('work_details_website');
Route::get('/careers', [WebsiteController::class, 'career'])->name('career_website');
Route::get('/contacts', [WebsiteController::class, 'contact'])->name('contact_website');

//  =====================Backend Routes =====================

Auth::routes(['verify' => true]);
Route::redirect('home', 'dashboard', 302);


// =====================Dashboard =====================
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


// =====================Portfolio =====================
Route::resource('portfolio', PortfolioController::class);
Route::get('portfolio/category/index', [PortfolioCategoryController::class, 'index'])->name('portfolio.category.index');
Route::post('portfolio/category/create', [PortfolioCategoryController::class, 'create'])->name('portfolio.category.create');
Route::get('portfolio/category/inactive/{id}', [PortfolioCategoryController::class, 'inactive'])->name('portfolio.category.inactive');
Route::get('portfolio/category/active/{id}', [PortfolioCategoryController::class, 'active'])->name('portfolio.category.active');
Route::delete('portfolio/category/destroy/{id}', [PortfolioCategoryController::class, 'destroy'])->name('portfolio.category.destroy');
Route::get('portfolio/category/edit/{id}', [PortfolioCategoryController::class, 'edit'])->name('portfolio.category.edit');
Route::put('portfolio/category/update/{id}', [PortfolioCategoryController::class, 'update'])->name('portfolio.category.update');

// =====================Career =====================
Route::resource('career', CareerController::class);


// =====================Testimonail =====================
Route::resource('testimonial', TestimonialController::class);

// ===================== Footer =====================
Route::resource('footer', FooterController::class);
// ===================== Social =====================
Route::resource('social', SocialController::class);

// =====================Team Route =====================
Route::resource('team', TeamController::class );

// =====================Profile/Settings Route =====================
Route::resource('profile', ProfileController::class );

// =====================About Us Route =====================


// =====================Role =====================
Route::get('role/permission/{id}', [RoleController::class, 'permission_assign'])->name('PermissionAssign');
Route::post('role/permission/{role}', [RoleController::class, 'permission_assign_post'])->name('PermissionAssignPost');
Route::resource('role', RoleController::class );

Route::get('user/role-assign/{user}', [UserController::class, 'role_assign'])->name('RoleAssign');
Route::post('user/role-assign/{user}', [UserController::class, 'role_assign_store'])->name('RoleAssignStore');
Route::resource('user', UserController::class);
