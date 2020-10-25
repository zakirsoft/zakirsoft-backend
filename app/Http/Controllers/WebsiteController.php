<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Footer;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\PortfoiloImages;
use App\Models\Social;

class WebsiteController extends Controller
{
    function home(){
        $portfolio = Portfolio::latest()->get();
        $content = Footer::get()->first();
        $socials = Social::all();
        return view('frontend.index',compact('portfolio', 'content', 'socials'));
    }

    function about(){
        $team = Team::all();
        $content = Footer::get()->first();
        $socials = Social::all();
        return view('frontend.Pages.about', compact('content', 'socials'))->with('teams', $team);
    }

    function work(){
        $portfolio = Portfolio::latest()->get();
        $category_list = PortfolioCategory::where('status',1)->get();
        $content = Footer::get()->first();
        $socials = Social::all();
        return view('frontend.Pages.work',compact('portfolio','category_list', 'content', 'socials'));
    }

    function workDetails($id){
       $work_details_content = Portfolio::findOrFail($id);
       $portfolio = Portfolio::where('id','!=',$id)->latest()->get();
       $content = Footer::get()->first();
       $socials = Social::all();
       $work_details_imgages = PortfoiloImages::where('portfolio_id',$id)->get();

        return view('frontend.Pages.work_details',compact('portfolio','work_details_content','work_details_imgages', 'content', 'socials'));
    }

    function career(){
        $career = Career::latest()->get();
        $content = Footer::get()->first();
        $socials = Social::all();
        return view('frontend.Pages.career',compact('career', 'content', 'socials'));
    }

    function contact(){
        $content = Footer::get()->first();
        $socials = Social::all();
        return view('frontend.Pages.contact', compact('content', 'socials'));
    }
}
