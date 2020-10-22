<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\PortfoiloImages;

class WebsiteController extends Controller
{
    function home(){
        $portfolio = Portfolio::latest()->get();
        return view('frontend.index',compact('portfolio'));
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

    function workDetails($id){
       $work_details_content = Portfolio::findOrFail($id);
       $portfolio = Portfolio::where('id','!=',$id)->latest()->get();
       $work_details_imgages = PortfoiloImages::where('portfolio_id',$id)->get();
    //    return $work_details_imgages;

        return view('frontend.Pages.work_details',compact('portfolio','work_details_content','work_details_imgages'));
    }

    function career(){
        $career = Career::get();
        return view('frontend.Pages.career',compact('career'));
    }

    function contact(){
        return view('frontend.Pages.contact');
    }

}
