<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Career;
use App\Models\Footer;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\PortfoiloImages;
use App\Models\Social;
use App\Models\Testimonial;

class WebsiteController extends Controller
{
    function home(){
        $portfolio = Portfolio::latest()->get();
        $testimonials = Testimonial::OrderBy('created_at', 'desc')->get();
        $content = Footer::get()->first();
        $socials = Social::all();
        return view('frontend.index',compact('portfolio', 'testimonials', 'content', 'socials'));
    }

    function about(){
        $team = Team::all();
        $content = Footer::get()->first();
        $socials = Social::all();
        $about = About::first();

        return view('frontend.about', compact('content', 'socials', 'about'))->with('teams', $team);
    }

    function work(){
        $portfolio = Portfolio::latest()->get();
        $category_list = PortfolioCategory::where('status',1)->get();
        $content = Footer::get()->first();
        $socials = Social::all();
        return view('frontend.work',compact('portfolio','category_list', 'content', 'socials'));
    }

    function workDetails($id){
       $work_details_content = Portfolio::findOrFail($id);
       $portfolio = Portfolio::where('id','!=',$id)->latest()->get();
       $content = Footer::get()->first();
       $socials = Social::all();
       $work_details_imgages = PortfoiloImages::where('portfolio_id',$id)->get();

        return view('frontend.work_details',compact('portfolio','work_details_content','work_details_imgages', 'content', 'socials'));
    }

    function career(){
        $career = Career::latest()->get();
        $content = Footer::get()->first();
        $socials = Social::all();
        return view('frontend.career',compact('career', 'content', 'socials'));
    }

    function contact(){
        $content = Footer::get()->first();
        $socials = Social::all();
        return view('frontend.contact', compact('content', 'socials'));
    }
}
