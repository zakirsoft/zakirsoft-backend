<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Team;
use App\Models\Testimonial;

class ApiController extends Controller
{
    public function testimonials(){
        $testimonials = Testimonial::paginate(5);

        return response()->json([
            'success' => true,
            'testimonials' => $testimonials
        ]);
    }

    public function teams(){
        $teams = Team::all();

        return response()->json([
            'success' => true,
            'teams' => $teams
        ]);
    }

    public function careers(){
        $careers = Career::latest()->paginate(5);

        return response()->json([
            'success' => true,
            'careers' => $careers,
        ]);
    }
}
