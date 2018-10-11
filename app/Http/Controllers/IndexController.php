<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('welcome', compact('projects'));
    }
}
