<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Projectfloorplan;

class ProjectfloorplanController extends Controller
{
    public function index()
    {
        $project = Project::all();

        $floorplan=Projectfloorplan::orderBy('id','desc')->paginate(5);

        return view('admin.projectfloorplan.index',compact('floorplan','project'));
    }

    public function create()
    {
        $project = Project::all();


        return view('admin.projectfloorplan.create',compact('project'));
    }



    public function store(Request $request)
    {

        $request->validate([
            'project' => 'required|exists:projects,id',
            'title' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        $floorplan = new Projectfloorplan();
        $floorplan->project_id = $request->input('project');
        $floorplan->title = $request->input('title');
        $floorplan->area = $request->input('area');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('floorplan_images', 'public');
            $floorplan->image = $imagePath;
        }
        $floorplan->save();

        return redirect()->route('Projectfloorplan.index');

    }



    public function edit($id)
    {

        $floorplan=Projectfloorplan::findOrFail($id);
            $project =Project::all();

        return view('admin.projectfloorplan.edit',compact('project','floorplan'));
    }


    public function update(Request $request,$id)
    {



        $request->validate([
            'project' => 'required|exists:projects,id',
            'title' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $floorplan = Projectfloorplan::findOrFail($id);
        $floorplan->project_id = $request->input('project');
        $floorplan->title = $request->input('title');
        $floorplan->area = $request->input('area');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('floorplan_images', 'public');
            $floorplan->image = $imagePath;
        }

        $floorplan->save();




        return redirect()->route('Projectfloorplan.index');

     }


    public function destroy($id)
    {
        $floorplan = Projectfloorplan::findOrFail($id);
        // Delete the image from the file system

   // Delete the destination record from the database
   $floorplan->delete();

   return redirect()->route('Projectfloorplan.index');

}

public function listprojectbyProject(Request $request)
{
    $projectId = $request->input('project_id');

    // Retrieve projects based on the selected category ID

$floorplan = Projectfloorplan::where('project_id', $projectId)->get();

    // Retrieve all project categories
    $project =Project::all();

    return view('admin.projectfloorplan.index', compact('project','floorplan'));
}
}
