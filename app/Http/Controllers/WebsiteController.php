<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;

class WebsiteController extends Controller
{
    function home(){
        return view('frontend.index');
    }

    function about(){
        $team = Team::all();
        return view('frontend.Pages.about')->with('teams', $team);
    }

    function work(){
        $portfolio = Portfolio::latest()->get();
        $category_list = PortfolioCategory::where('status',1)->get();
        return view('frontend.Pages.work',compact('portfolio','category_list'));
    }

    function career(){
        $career = Career::get();
        return view('frontend.Pages.career',compact('career'));
    }

    function contact(){
        return view('frontend.Pages.contact');
    }

}
