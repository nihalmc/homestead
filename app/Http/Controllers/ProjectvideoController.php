<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Projectvideo;

class ProjectvideoController extends Controller
{
    public function index()
    {
        $project = Project::all();

        $projectvideo=Projectvideo::orderBy('id','desc')->paginate(5);


        return view('admin.projectvideo.index',compact('projectvideo','project'));
    }

    public function create()
    {
        $project = Project::all();


        return view('admin.projectvideo.create',compact('project'));
    }



    public function store(Request $request)
    {

        $request->validate([
            'project' => 'required', // Validate project ID
            'url' => 'required', // Validate specification ID


        ]);
        $projectvideo = new Projectvideo();
        $projectvideo->project_id = $request->input('project');
        $projectvideo->url= $request->input('url');
        $projectvideo->save();

        return redirect()->route('Projectvideo.index');

    }



    public function edit($id)
    {

        $projectvideo=Projectvideo::findOrFail($id);
            $project =Project::all();

        return view('admin.projectvideo.edit',compact('project', 'projectvideo'));
    }


    public function update(Request $request,$id)
    {

        $request->validate([
            'project' => 'required',
            'url' => 'required',


        ]);

        $projectvideo = Projectvideo::findOrFail($id);
        $projectvideo->project_id = $request->input('project');
        $projectvideo->url= $request->input('url');
        $projectvideo->save();



        return redirect()->route('Projectvideo.index');

     }


    public function destroy($id)
    {
        $projectvideo= Projectvideo::findOrFail($id);
        // Delete the image from the file system

   // Delete the destination record from the database
   $projectvideo->delete();

   return redirect()->route('Projectvideo.index');

}

public function listprojectbyProject(Request $request)
{
    $projectId = $request->input('project_id');

    // Retrieve projects based on the selected category ID
    $projectvideo = Projectvideo::where('project_id', $projectId)->get();

    // Retrieve all project categories
    $project =Project::all();


    return view('admin.projectvideo.index', compact('project','projectvideo'));
}
}
