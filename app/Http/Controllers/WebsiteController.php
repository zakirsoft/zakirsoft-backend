<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    function home(){
        return view('frontend.index');
    }

    function about(){
        return view('frontend.Pages.about');
    }

    function work(){
        return view('frontend.Pages.work');
    }

    function career(){
        return view('frontend.Pages.career');
    }

    function contact(){
        return view('frontend.Pages.contact');
    }

}
