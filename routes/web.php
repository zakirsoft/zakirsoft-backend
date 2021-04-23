<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PortfolioCategoryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\JobpostController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubcompanyController;
use App\Http\Controllers\TechnologyCategoryController;
use App\Http\Controllers\TechnologyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*-------------------------------------------------------------------------
 Frontend Routes
--------------------------------------------------------------------------*/

Route::get('/', [WebsiteController::class, 'home'])->name('home_website');
Route::get('/about', [WebsiteController::class, 'about'])->name('about_website');
Route::get('/works', [WebsiteController::class, 'work'])->name('work_website');
Route::get('/works/{id}/details', [WebsiteController::class, 'workDetails'])->name('work_details_website');
Route::get('/career', [WebsiteController::class, 'career'])->name('career_website');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact_website');
Route::get('news/{slug}', [WebsiteController::class, 'news_details'])->name('news.details');
Route::get('job/{slug}', [WebsiteController::class, 'job_details'])->name('job.details');

/*-------------------------------------------------------------------------
 Backend Routes
--------------------------------------------------------------------------*/
Auth::routes(['verify' => true]);
// Route::redirect('home', 'dashboard', 302);

Route::middleware(['auth'])->prefix('panel')->group(function () {
    //Dashboard Route
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    // about
    Route::get('about', [AboutController::class, 'index'])->name('about.index');
    Route::put('about/update/{about}', [AboutController::class, 'update'])->name('about.update');

    // Portfolio & Portfolio Category Routes
    Route::resource('portfolio', PortfolioController::class);
    Route::prefix('portfolio')->group(function () {
        Route::get('category/index', [PortfolioCategoryController::class, 'index'])->name('portfolio.category.index');
        Route::post('category/create', [PortfolioCategoryController::class, 'create'])->name('portfolio.category.create');
        Route::get('category/inactive/{id}', [PortfolioCategoryController::class, 'inactive'])->name('portfolio.category.inactive');
        Route::get('category/active/{id}', [PortfolioCategoryController::class, 'active'])->name('portfolio.category.active');
        Route::delete('category/destroy/{id}', [PortfolioCategoryController::class, 'destroy'])->name('portfolio.category.destroy');
        Route::get('category/edit/{id}', [PortfolioCategoryController::class, 'edit'])->name('portfolio.category.edit');
        Route::put('category/update/{id}', [PortfolioCategoryController::class, 'update'])->name('portfolio.category.update');
    });

    // technology category and technology
    Route::prefix('technology')->group(function () {
        Route::get('category', [TechnologyCategoryController::class, 'index'])->name('technology.category.index');
        Route::get('category/create', [TechnologyCategoryController::class, 'create'])->name('technology.category.create');
        Route::post('category', [TechnologyCategoryController::class, 'store'])->name('technology.category.store');
        Route::get('category/edit/{category}', [TechnologyCategoryController::class, 'edit'])->name('technology.category.edit');
        Route::put('category/update/{category}', [TechnologyCategoryController::class, 'update'])->name('technology.category.update');
        Route::delete('category/destroy/{category}', [TechnologyCategoryController::class, 'destroy'])->name('technology.category.destroy');
    });
    Route::resource('technology', TechnologyController::class);

    // service Route
    Route::resource('services', ServiceController::class);

    //Career Route
    Route::post('jobpost/sorting', [JobpostController::class, 'sorting'])->name('jobpost.sorting');
    Route::get('jobpost/status', [JobpostController::class, 'statusChange'])->name('jobpost.status.change');
    Route::post('gallery/sorting', [GalleryController::class, 'sorting'])->name('gallery.sorting');
    Route::resource('job/post', JobpostController::class, ['names' => 'jobpost']);
    Route::resource('gallery', GalleryController::class);

    //Testimonail Route
    Route::resource('testimonial', TestimonialController::class);

    //Header & Footer
    // Route::resource('header', HeaderController::class);
    Route::resource('footer', FooterController::class);

    //Social Route
    Route::resource('social', SocialController::class);

    //Team Route
    Route::get('team/status', [TeamController::class, 'statusChange'])->name('team.status.change');
    Route::post('team/sorting', [TeamController::class, 'sorting'])->name('team.sorting');
    Route::resource('team', TeamController::class);

    //news Route
    Route::resource('news', NewsController::class);

    //subcompany Route
    Route::post('subcompany/sorting', [SubcompanyController::class, 'sorting'])->name('subcompany.sorting');
    Route::resource('subcompany', SubcompanyController::class);

    // Profile/Settings Route
    Route::resource('profile', ProfileController::class);

    // Role Permissions Routes
    Route::get('role/permission/{id}', [RoleController::class, 'permission_assign'])->name('PermissionAssign');
    Route::post('role/permission/{role}', [RoleController::class, 'permission_assign_post'])->name('PermissionAssignPost');
    Route::resource('role', RoleController::class);

    // Role Assign Routes
    Route::get('user/role-assign/{user}', [UserController::class, 'role_assign'])->name('RoleAssign');
    Route::post('user/role-assign/{user}', [UserController::class, 'role_assign_store'])->name('RoleAssignStore');
    Route::resource('user', UserController::class);

    // Contact Messages
    Route::get('contact/messages', [FooterController::class, 'contact_messages'])->name('contact.index');
});

