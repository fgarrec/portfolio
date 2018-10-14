<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
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
        return view('welcome', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
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
        //     $locationV = url('/img/vignettes/' . $vignName);
        //     Image::make($vignette)->fit(695,460)->save($locationV);
            
        //     $img1 = $request->file('img1');
        //     $img1Name = 'img1' . '_' . time() . '.' . $img1->getClientOriginalExtension();
        //     $locationI = url('img/' . $img1Name);
        //     Image::make($img1)->fit(695,460)->save($locationI);

        //     $project->vignettes = $vignName;
        //     $project->img1 = $img1Name;
        // }
            // $project->vignettes = 'bedonnez-suivant.png';
        
            // $project->img1 = 'bedonnez-suivant.png';
        $project->name = $request->name;
        $project->type = $request->type;
        $project->time = $request->time;
        $project->time = $request->vignette;
        $project->time = $request->img1;
        $project->description =  'description'; //$request->description;
        $project->technos = $request->technos;
        
        $project->save();
        return redirect()->route('project.index');

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
    public function destroy($id)
    {
        //
    }
}
