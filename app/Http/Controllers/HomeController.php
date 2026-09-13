<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Support\str;

class HomeController extends Controller
{
    function index(){
        $projects = Project::select('projects.*', 's.name as technology_name')
            ->leftJoin('skills as s', 'projects.technologies', '=', 's.id')
            ->orderBy('sort_order')
            ->orderBy('id', 'desc')
            ->get();

        $skills = Skill::where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get()
            ->map(function ($skill) {
                $skill->slug = Str::slug($skill->name);
                return $skill;
            });

        

        return view('home', compact('projects', 'skills'));
    }
}
