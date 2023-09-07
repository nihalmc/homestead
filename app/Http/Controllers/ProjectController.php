<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Project;
use App\Models\Category;
use App\Models\Projectaminities;
use App\Models\Projectfloorplan;
use App\Models\Projectgallery;
use App\Models\Projectspecification;
use App\Models\Projectvideo;
use App\Models\Projectslider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProjectRequestEmail;
use Illuminate\Support\Facades\Http;
class ProjectController extends Controller
{
    public function index(Request $request)
    {
         $projectslider = Projectslider::all();
        $projectcategory = Category::all();



        $project =Project::orderBy('id','desc')->paginate(5);
        return view('admin.project.index',compact('project','projectcategory','projectslider'));
    }

    public function create()
    {   $project =Category::all();
        return view('admin.project.create',compact('project'));
    }



    public function store(Request $request)
    {
        return $this->saveProject($request);

    }



    public function edit($id)
    {
         $project = Project::findOrFail($id);

         $projectslider = Projectslider::where('project_id', $id)->get(); // Filter project sliders by project ID


        $projectcategory = Category::all();
        return view('admin.project.edit',compact('project','projectcategory','projectslider'));
    }


    public function update(Request $request,$id)
    {

        return $this->saveProject($request, $id);


     }

 protected function saveProject(Request $request, $id = null)
    {
        $request->validate([
            'name' => 'required|string',
            'txtDescription' => 'required',
            'status' => 'image|mimes:jpeg,png,jpg,gif',
            'map' => 'image|mimes:jpeg,png,jpg,gif',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
            'logo' => 'image|mimes:jpeg,png,jpg,gif',
            'location' => 'required',
            'order_number' => 'required',
            'category_id' => 'required',

        ]);

        $project = $id ? Project::findOrFail($id) : new Project();

        $project->name = $request->name;
        $project->txtDescription= $request->txtDescription;
        $project->location = $request->location;
        $project->order_number = $request->order_number;
        $project->category_id= $request->category_id;

        // Handle image fields
        $imageFields = ['status', 'map', 'image', 'logo'];

        foreach ($imageFields as $imageField) {
            if ($request->hasFile($imageField)) {
                $filename = $request->file($imageField)->hashName();
                $imagePath = 'uploads/' . $imageField . '/' . $filename;
                $request->file($imageField)->storeAs('public/' . $imagePath);
                // Assign the image path to the corresponding attribute without '_image'
                $project->{$imageField} = $imagePath;
            }
        }

        $project->chkHomepage = $request->filled('chkHomepage')? 1 : 0;

        $project->save();

        return redirect()->route('project.index');
    }

    public function destroy($id)
    {
        $project = Project::find($id);

        if (!$project) {
            return redirect()->route('project.index');
        }

        // Delete the images from storage
        $imageFields = ['status', 'map', 'image', 'logo'];

        foreach ($imageFields as $imageField) {
            if ($project->{$imageField . '_image'}) {
                Storage::disk('public')->delete($project->{$imageField . '_image'});
            }
        }

        // Delete the project record from the database
        $project->delete();

        return redirect()->route('project.index');
    }
    public function listprojectbycategory(Request $request)
    {
        $categoryId = $request->input('category');

        // Retrieve projects based on the selected category ID
        $project = Project::where('category_id', $categoryId)->get();

        // Retrieve all project categories
        $projectcategory = Category::all();

        return view('admin.project.index', compact('project', 'projectcategory'));
    }

    public function show(){
        $projectslider = Projectslider::all();
        $project = Project::all();

        return view('admin.project.listaddprojectslider',compact('project','projectslider'));
    }
    public function saveAddProjectSlider(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

            $filename = $request->file('image')->hashName();
            $imagePath = 'uploads/projectslider/' . $filename;
            $request->file('image')->storeAs('public/' . $imagePath);

            $projectslider = new Projectslider();
            $projectslider->project_id= $request->id;
            $projectslider->image =$imagePath;
            $projectslider->save();

        return redirect()->route('project.display');
    }

    public function editProjectSlider($id)
    {
        $projectslider =Projectslider::find($id);

        $project = Project::all();

        return view('admin.project.editprojectslider', compact('projectslider','project'));
    }

    public function updateProjectSlider(Request $request, $id)
{


    $request->validate([

        'project_id' => 'required|integer',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',

    ]);
    $projectslider =Projectslider::find($id);
    $projectslider->project_id= $request->project_id;
    $projectslider->save();

    if ($request->hasFile('image')) {
        $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/projectslider/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);
        if ($projectslider->image) {
            Storage::disk('public')->delete($projectslider->image);
        }
        $projectslider->image = $imagePath;
    }

    $projectslider->save();

    return redirect()->route('project.display');
}
public function deleteProjectSlider($id)
{

    $projectslider =Projectslider::find($id);

    // Delete the image from the file system
if ($projectslider->image) {
   Storage::disk('public')->delete($projectslider->image);
}

// Delete the destination record from the database
$projectslider->delete();

return redirect()->route('project.display');
}

public function Project()
{
    // Fetch the list of projects from the database
    $projects = Project::all();

    // Pass the projects data to the view and render it
    return view('website.allproject', compact('projects'));
}

public function showpage($id)
{
    // Fetch the project along with its related data
    $project = Project::with([
        'projectsliders', // Assuming you've defined a relationship in the Project model
        'projectspecifications',
        'projectaminities',
        'projectfloorplans',
        'projectvideos',
        'projectgalleries',
    ])->findOrFail($id);

    // Now, you can access related data using Eloquent relationships
    $images = $project->projectsliders;
    $specifications = $project->projectspecifications;
    $aminities = $project->projectaminities;
    $floorplans = $project->projectfloorplans;
    $walkthroughs = $project->projectvideos;
    $galleries = $project->projectgalleries;
  
    // Pass the project data and related data to the view
    return view('website.detail', compact(
        'project',
        'images',
        'specifications',
        'aminities',
        'floorplans',
        'walkthroughs',
        'galleries'
    ));
}
public function upcoming()
{
    $upcomingProjects = Project::upcoming()->get();

    return view('website.upcoming', ['upcomingProjects' => $upcomingProjects]);
}



public function completed()
{
    $completedProjects = Project::completed()->get();

    return view('website.completed', ['completedProjects' => $completedProjects]);
}

public function ongoing()
{
    $ongoingProjects = Project::ongoing()->get();

    return view('website.ongoing', ['ongoingProjects' => $ongoingProjects]);
}
public function submitProjectRequest(Request $request)
{
     // Validate reCAPTCHA
     $recaptchaResponse = $request->input('g-recaptcha-response');
     $recaptchaSecret = '6Lc_gOsnAAAAAABHon_dEqW34DQ7ULkWhA3wP5-S';



     $recaptchaVerifyResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
         'secret' => $recaptchaSecret,
         'response' => $recaptchaResponse,
     ]);

     if (!$recaptchaVerifyResponse->json()['success']) {
         return response()->json([
             'statusCode' => 401,
             'status' => false,
             'message' => 'Please complete the reCAPTCHA challenge.'
         ], 401);
     }

    // Validate the form data
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'mobile' => 'required',
        'requirement' => 'required',

    ]);

    // Prepare data for email
    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'mobile' => $request->mobile,
        'requirement' => $request->requirement,
        'project' => $request->hiddenproject,
    ];

    // Send the email
    Mail::to('ofmailwork@gmail.com')->send(new ProjectRequestEmail($data));

    // Redirect or return a response
    return redirect()->route('projects.index');
}


}
