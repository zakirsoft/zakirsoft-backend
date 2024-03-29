<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Portfolio;
use App\Models\Social;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\User;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }

    public function index()
    {
        return view('admin.dashboard', [
            'user' => User::count(),
            'role' => Role::count(),
            'portfolio' => Portfolio::count(),
            'testimonial' => Testimonial::count(),
            'career' => Career::count(),
            'social' => Social::count(),
            'team' => Team::count()
        ]);
    }
}
