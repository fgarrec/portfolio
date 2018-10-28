<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $projects = Project::all();
        return view('home', compact('projects'));
    }

    public function getDownload(){
        $file= public_path("/download/cv.pdf");
        // var_dump($file);
        // die;

        $headers = [
            'Content-Type: application/pdf',
         ];

        return response()->download($file, 'cv.pdf', $headers);
    }

}
