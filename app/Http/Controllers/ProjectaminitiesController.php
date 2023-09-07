<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amenities;
use App\Models\Project;
use App\Models\Projectaminities;

class ProjectaminitiesController extends Controller
{
    public function index()
    {
        $project = Project::all();
        $aminities =Amenities::all();
        $projectaminities=Projectaminities::orderBy('id','desc')->paginate(5);


        return view('admin.Projectaminities.index',compact('aminities','projectaminities','project'));
    }

    public function create()
    {
        $project = Project::all();
        $aminities = Amenities::all();

        return view('admin.Projectaminities.create',compact('project', 'aminities'));
    }



    public function store(Request $request)
    {

        $request->validate([
            'project' => 'required', // Validate project ID
            'amin' => 'required', // Validate specification ID


        ]);
        $projectaminities = new Projectaminities();
        $projectaminities->project_id = $request->input('project');
        $projectaminities->aminities_id = $request->input('amin');
        $projectaminities->save();

        return redirect()->route('Projectaminities.index');

    }



    public function edit($id)
    {

        $projectaminities=Projectaminities::findOrFail($id);
            $project =Project::all();
            $aminities = Amenities::all();
        return view('admin.Projectaminities.edit',compact('project', 'aminities','projectaminities'));
    }


    public function update(Request $request,$id)
    {

        $request->validate([
            'project' => 'required',
            'amin' => 'required',


        ]);

        $projectaminities = Projectaminities::findOrFail($id);
        $projectaminities->project_id = $request->input('project');
        $projectaminities->aminities_id= $request->input('amin');
        $projectaminities->save();



        return redirect()->route('Projectaminities.index');

     }


    public function destroy($id)
    {
        $projectaminities = Projectaminities::findOrFail($id);
        // Delete the image from the file system

   // Delete the destination record from the database
   $projectaminities->delete();

   return redirect()->route('Projectaminities.index');

}

public function listprojectbyProject(Request $request)
{
    $projectId = $request->input('project_id');

    // Retrieve projects based on the selected category ID
    $projectaminities = Projectaminities::where('project_id', $projectId)->get();

    // Retrieve all project categories
    $project =Project::all();
    $aminities = Amenities::all();

    return view('admin.Projectaminities.index', compact('project','projectaminities'));
}
}
