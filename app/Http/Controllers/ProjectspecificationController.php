<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specification;
use App\Models\Project;
use App\Models\Projectspecification;

class ProjectspecificationController extends Controller
{
    public function index()
    {
        $project = Project::all();
        $specification = Specification::all();
        $projectSpecification = Projectspecification::orderBy('id', 'desc')->paginate(5);

        return view('admin.Projectspecification.index', compact('specification', 'projectSpecification', 'project'));
    }

    public function create()
    {
        $project = Project::all();
        $specification = Specification::all();

        return view('admin.Projectspecification.create',compact('project', 'specification'));
    }



    public function store(Request $request)
    {

        $request->validate([
            'project' => 'required|exists:projects,id', // Validate project ID
            'spec' => 'required|exists:specifications,id', // Validate specification ID
            'value' => 'required|string|max:255', // Validate value field

        ]);
        $projectSpecification = new ProjectSpecification();
        $projectSpecification->project_id = $request->input('project');
        $projectSpecification->specification_id = $request->input('spec');
        $projectSpecification->value = $request->input('value');
        $projectSpecification->save();

        return redirect()->route('Projectspecification.index');

    }



    public function edit($id)
    {

        $projectSpecification=Projectspecification::findOrFail($id);
            $project =Project::all();
        $specification = Specification::all();
        
        return view('admin.Projectspecification.edit',compact('project', 'specification','projectSpecification'));
    }


    public function update(Request $request,$id)
    {

        $request->validate([
            'project' => 'required|exists:projects,id',
            'spec' => 'required|exists:specifications,id',
            'value' => 'required|string|max:255',

        ]);

        $projectSpecification = ProjectSpecification::findOrFail($id);
        $projectSpecification->project_id = $request->input('project');
        $projectSpecification->specification_id = $request->input('spec');
        $projectSpecification->value = $request->input('value');
        $projectSpecification->save();



        return redirect()->route('Projectspecification.index');

     }


    public function destroy($id)
    {
        $projectSpecification = ProjectSpecification::findOrFail($id);
        // Delete the image from the file system

   // Delete the destination record from the database
   $projectSpecification->delete();

   return redirect()->route('Projectspecification.index');

}

public function listprojectbyProject(Request $request)
{
    $projectId = $request->input('project_id');

    // Retrieve projects based on the selected category ID
    $projectSpecification = ProjectSpecification::where('project_id', $projectId)->get();

    // Retrieve all project categories
    $project =Project::all();

    return view('admin.Projectspecification.index', compact('project','projectSpecification'));
}
}
