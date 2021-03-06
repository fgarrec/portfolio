<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Guard $auth)
    {
        $user = $auth->user();
        return view('projects.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project();

        // if($request->hasFile('vignette') && $request->hasFile('img1')){
        //     $vignette = $request->file('vignette');
        //     $vignName = 'vignette' . '_' . time() . '.' . $vignette->getClientOriginalExtension();
        //     $locationV = public_path('img/vignettes/' . $vignName);
        //     Image::make($vignette)->fit(695,460)->save($locationV);
            
        //     $img1 = $request->file('img1');
        //     $img1Name = 'img1' . '_' . time() . '.' . $img1->getClientOriginalExtension();
        //     $locationI = public_path('img/' . $img1Name);
        //     Image::make($img1)->fit(695,460)->save($locationI);

        //     $project->vignettes = $vignName;
        //     $project->img1 = $img1Name;
        // }
        $project->name = $request->name;
        $project->type = $request->type;
        $project->time = $request->time;
        $project->vignettes = $request->vignette;
        $project->img1 = $request->img1;
        $project->img2 = $request->img2;
        $project->img3 = $request->img3;
        $project->img4 = $request->img4;
        $project->img5 = $request->img5;
        $project->img6 = $request->img6;
        $project->img7 = $request->img7;
        $project->img8 = $request->img8;
        $project->img9 = $request->img9;
        $project->description =  $request->description; //$request->description;
        $project->technos = $request->technos;
        
        $project->save();
        return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guard $auth, $id)
    {
        $user = $auth->user();
        $project = Project::destroy($id);
        return redirect()->route('index');
    }
}
