<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Guard $auth){
        // $user = $auth->user();
        $projects = Project::all();
        return view('admin.index', compact('projects'));
    }
}
