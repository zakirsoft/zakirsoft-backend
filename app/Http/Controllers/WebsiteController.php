<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Team;
use Illuminate\Http\Request;

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
        return view('frontend.Pages.work');
    }

    function career(){
        $career = Career::all();
        return view('frontend.Pages.career');
    }

    function contact(){
        return view('frontend.Pages.contact');
    }

}
