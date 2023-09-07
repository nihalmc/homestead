<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specification;
class SpecificationController extends Controller
{
    public function index()
    {
        $homeslider =Specification::orderBy('id','desc')->paginate(5);
        return view('admin.Specification.index',compact('homeslider'));
    }

    public function create()
    {
        return view('admin.Specification.create');
    }



    public function store(Request $request)
    {
        $request->validate([  // image title order_number title2 link
            'title' => 'required|string',

        ]);




        $homeslider = new Specification();
        $homeslider->title =$request->title;
        $homeslider->save();

        return redirect()->route('Specification.index');

    }



    public function edit($id)
    {
        $homeslider = Specification ::findOrFail($id);
        return view('admin.Specification.edit',compact('homeslider'));
    }


    public function update(Request $request,$id)
    {

        $request->validate([
            'title' => 'nullable|string',

        ]);

        $homeslider=Specification::findOrFail($id);

        $homeslider->title =$request->title;





        // Save the updated destination data to the database
        $homeslider->save();

        return redirect()->route('Specification.index');

     }


    public function destroy($id)
    {
        $homeslider=Specification::find($id);
        // Delete the image from the file system

   // Delete the destination record from the database
   $homeslider->delete();

   return redirect()->route('Specification.index');

}

}
