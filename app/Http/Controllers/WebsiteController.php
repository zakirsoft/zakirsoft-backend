<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;

class WebsiteController extends Controller
{
    function home(){
        return view('frontend.index');
    }

    function about(){
        return view('frontend.Pages.about');
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
