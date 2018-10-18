<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getDownload(){
        $file= public_path("/download/cv.pdf");
        // var_dump($file);
        // die;

        $headers = [
            'Content-Type: application/pdf',
         ];

        return response()->download($file, 'cv.pdf', $headers);
    }

    public function home(){
        $projects = Project::all();
        return view('home', compact('projects'));
    }
}
