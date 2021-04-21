<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Career;
use App\Models\Footer;
use App\Models\Gallery;
use App\Models\Jobpost;
use App\Models\News;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\PortfoiloImages;
use App\Models\Social;
use App\Models\Subcompany;
use App\Models\Testimonial;

class WebsiteController extends Controller
{
    function home()
    {
        $portfolio = Portfolio::latest()->get();
        $testimonials = Testimonial::OrderBy('created_at', 'desc')->get();
        $content = Footer::get()->first();
        $socials = Social::all();
        $subcompanies = Subcompany::oldest('order')->get();
        $news_list = News::latest()->limit(3)->get();

        return view('frontend.index', compact('portfolio', 'testimonials', 'content', 'socials','subcompanies','news_list'));
    }

    function about()
    {
        $team = Team::oldest('order')->get();
        $content = Footer::get()->first();
        $socials = Social::all();
        $about = About::first();

        return view('frontend.about', compact('content', 'socials', 'about'))->with('teams', $team);
    }

    function work()
    {
        $portfolio = Portfolio::latest()->get();
        $category_list = PortfolioCategory::where('status', 1)->get();
        $content = Footer::get()->first();
        $socials = Social::all();
        return view('frontend.work', compact('portfolio', 'category_list', 'content', 'socials'));
    }

    function workDetails($id)
    {
        $work_details_content = Portfolio::findOrFail($id);
        $portfolio = Portfolio::where('id', '!=', $id)->latest()->get();
        $content = Footer::get()->first();
        $socials = Social::all();
        $work_details_imgages = PortfoiloImages::where('portfolio_id', $id)->get();

        return view('frontend.work_details', compact('portfolio', 'work_details_content', 'work_details_imgages', 'content', 'socials'));
    }

    function career()
    {
        $career = Career::latest()->get();
        $content = Footer::get()->first();
        $socials = Social::all();
        $posts = Jobpost::whereStatus(true)->oldest('order')->get();
        $galleries = Gallery::oldest('order')->get();

        return view('frontend.career', compact('career', 'content', 'socials','posts','galleries'));
    }

    function contact()
    {
        $content = Footer::get()->first();
        $socials = Social::all();
        return view('frontend.contact', compact('content', 'socials'));
    }

    public function news_details($slug)
    {
        $news = News::whereSlug($slug)->first();
        $news_list = News::where('id','!=',$news->id)->get();
        $content = Footer::get()->first();
        $socials = Social::all();

        return view('frontend.news_details', compact('content', 'socials','news','news_list'));
    }

    public function job_details($slug)
    {
        $post = Jobpost::whereSlug($slug)->first();
        $content = Footer::get()->first();
        $socials = Social::all();

        return view('frontend.job_details', compact('content', 'socials','post'));
    }
}
