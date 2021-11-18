<?php

namespace App\Http\Controllers;

use App\Skill;
use App\Project;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        // Skill
        $skills = Skill::paginate(5);

        // Project
        $projects = Project::all();
        return view('frontend/index',compact('skills','projects'));
    }
}
