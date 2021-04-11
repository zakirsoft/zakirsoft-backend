<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// testimonials
Route::get('testimonials', [ApiController::class, 'testimonials']);

// team
Route::get('teams', [ApiController::class, 'teams']);

// careers
Route::get('careers', [ApiController::class, 'careers']);

// portfolio
Route::get('portfolio/categories', [ApiController::class, 'portfolioCategories']);
Route::get('portfolios', [ApiController::class, 'portfolios']);

// about
Route::get('about', [ApiController::class, 'aboutus']);

// service
Route::get('services', [ApiController::class, 'services']);

// technology
Route::get('technology/categories', [ApiController::class, 'technologyCategories']);
Route::get('technologies', [ApiController::class, 'technologies']);
