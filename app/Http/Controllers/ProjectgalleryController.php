<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Projectgallery;
use App\Models\Project;
class ProjectgalleryController extends Controller
{
    public function index()
    {
        $project = Project::all();
        $gallery = Projectgallery::orderBy('id','desc')->paginate(5);
        return view('admin.projectgallery.index', compact('gallery','project'));
    }

    public function create()
    {
        $project = Project::all();
        return view('admin.projectgallery.create', compact('project'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'project' => 'required|exists:projects,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Add any other image validation rules here
        ]);

        $gallery = new Projectgallery();
        $gallery->project_id = $request->input('project');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')
            ->store('gallery_images', 'public');
            $gallery->image = $imagePath;
        }
        $gallery->save();


        return redirect()->route('Projectgallery.index');
    }



    public  function edit($id)
    {
        $gallery = Projectgallery::findOrFail($id);
        $project = Project::all();
        return view('admin.projectgallery.edit', compact('gallery', 'project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'project' => 'required|exists:projects,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Add any other image validation rules here
        ]);

        $gallery = Projectgallery::findOrFail($id);
        $gallery->project_id = $request->input('project');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')
            ->store('gallery_images', 'public');
            $gallery->image = $imagePath;
        }

        $gallery->save();


        return redirect()->route('Projectgallery.index');
    }


    public function destroy($id)
    {
        $gallery = Projectgallery::findOrFail($id);

        // Delete the image from the file system
        if ($gallery->image) {
            Storage::disk('public')->delete ($gallery->image);
        }

        // Delete the gallery record from the database
        $gallery->delete();

        return redirect()->route('Projectgallery.index');
 }


  public function listprojectbyProject(Request $request)
  {
    $projectId = $request->input('project_id');

    // Retrieve projects based on the selected category ID

    $gallery = Projectgallery::where('project_id', $projectId)->get();

    // Retrieve all project categories
    $project =Project::all();

    return view('admin.projectgallery.index', compact('project','gallery'));
}
public function Projectgallery()
{
    $gallery = Projectgallery::all();
    return view('website.gallery', compact('gallery'));
}

}
