<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Career;
use App\Models\Gallery;
use App\Models\Jobpost;
use App\Models\News;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\Service;
use App\Models\Subcompany;
use App\Models\Team;
use App\Models\Technology;
use App\Models\TechnologyCategory;
use App\Models\Testimonial;

class ApiController extends Controller
{
    // testimonial
    public function testimonials(){
        $testimonials = Testimonial::select('id','name','position','content')->paginate(5);

        return response()->json([
            'success' => true,
            'testimonials' => $testimonials
        ]);
    }

    // team
    public function teams(){
        $teams = Team::select('id','name','position','image','order','status')->get();

        return response()->json([
            'success' => true,
            'teams' => $teams
        ]);
    }

    // portfolio category
    public function portfolioCategories(){
        $portfolioCategories = PortfolioCategory::select('id','name','status')->latest()->paginate(5);

        return response()->json([
            'success' => true,
            'categories' => $portfolioCategories,
        ]);
    }

    // portfolio
    public function portfolios(){
        $portfolio_list = Portfolio::select('id','category_id','title','title_slug','image','description','live_link','bahance_link','project_length','our_role','tool_used','client_name','client_email')->paginate(5);

        return response()->json([
            'success' => true,
            'portfolios' => $portfolio_list,
        ]);
    }

    // aboutus
    public function aboutus(){
        $about = About::select('content')->first();

        return response()->json([
            'success' => true,
            'about' => $about,
        ]);
    }

    // services
    public function services(){
        $services = Service::select('id','title','image','description')->paginate(5);

        return response()->json([
            'success' => true,
            'services' => $services,
        ]);
    }

    // technologies categories
    public function technologyCategories(){
        $categories = TechnologyCategory::select('id','name')->paginate(5);

        return response()->json([
            'success' => true,
            'categories' => $categories,
        ]);
    }

    // technologies
    public function technologies(){
        $technologies = Technology::select('id','category_id','name','image')->latest()->get();

        return response()->json([
            'success' => true,
            'technologies' => $technologies,
        ]);
    }

    // jobposts
    public function jobposts(){
        $posts = Jobpost::select('id','title','slug','type','salary','short_description','long_description','link','deadline','status','order')->oldest('order')->get();

        return response()->json([
            'success' => true,
            'posts' => $posts,
        ]);
    }

    // news
    public function news(){
        $news = News::select('id','title','slug','image','short_description','description')->get();

        return response()->json([
            'success' => true,
            'news' => $news,
        ]);
    }

    // galleries
    public function galleries(){
        $galleries = Gallery::select('id','image','order')->oldest('order')->get();

        return response()->json([
            'success' => true,
            'galleries' => $galleries,
        ]);
    }

    // subcompanies
    public function subcompanies(){
        $subcompanies = Subcompany::select('id','title','description','link','logo','banner','stats1_text','stats1_value','stats2_text','stats2_value','order')->oldest('order')->get();

        return response()->json([
            'success' => true,
            'subcompanies' => $subcompanies,
        ]);
    }
}
