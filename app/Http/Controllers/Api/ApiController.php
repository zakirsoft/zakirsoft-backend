<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Career;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\Team;
use App\Models\Testimonial;

class ApiController extends Controller
{
    // testimonial
    public function testimonials(){
        $testimonials = Testimonial::paginate(5);

        return response()->json([
            'success' => true,
            'testimonials' => $testimonials
        ]);
    }

    // team
    public function teams(){
        $teams = Team::all();

        return response()->json([
            'success' => true,
            'teams' => $teams
        ]);
    }

    // career
    public function careers(){
        $careers = Career::latest()->paginate(5);

        return response()->json([
            'success' => true,
            'careers' => $careers,
        ]);
    }

    // portfolio category
    public function portfolioCategories(){
        $portfolioCategories = PortfolioCategory::latest()->paginate(5);

        return response()->json([
            'success' => true,
            'categories' => $portfolioCategories,
        ]);
    }

    // portfolio
    public function portfolios(){
        $portfolio_list = Portfolio::paginate(5);

        return response()->json([
            'success' => true,
            'portfolios' => $portfolio_list,
        ]);
    }

    // aboutus
    public function aboutus(){
        $about = About::first();

        return response()->json([
            'success' => true,
            'about' => $about,
        ]);
    }
}
