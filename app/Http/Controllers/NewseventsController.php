<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Newsevents;
class NewseventsController extends Controller
{
    public function index()
    {
        $homeslider =Newsevents::orderBy('id','desc')->paginate(5);
        return view('admin.Newsevents.index',compact('homeslider'));
    }

    public function create()
    {
        return view('admin.Newsevents.create');
    }



    public function store(Request $request)
    {
        $request->validate([  // image title order_number title2 link
            'title' => 'required|string',
            'image' => 'required|image',
            'txtDescription' => 'required',
            'ordernumber' => 'required',

        ]);

        $filename =$request->file('image')->hashName();
        $imagePath ='uploads/Newsevents' .$filename;
        $request->file('image')->storeAs('public/' .$imagePath);


        $homeslider = new Newsevents();
        $homeslider->title =$request->title;
        $homeslider->image =$imagePath;
        $homeslider->txtDescription =$request->txtDescription;
        $homeslider->ordernumber =$request->ordernumber;
        $homeslider->save();

        return redirect()->route('newsevents.index');

    }



    public function edit($id)
    { $homeslider = Newsevents::findOrFail($id);
        return view('admin.Newsevents.edit',compact('homeslider'));
    }


    public function update(Request $request,$id)
    {

        $request->validate([
            'title' => 'nullable|string',
            'image' => 'nullable|image',
            'txtDescription' => 'nullable',
            'ordernumber' => 'nullable',
        ]);

        $homeslider=Newsevents::findOrFail($id);

        $homeslider->title =$request->title;
        $homeslider->txtDescription =$request->txtDescription;
        $homeslider->ordernumber =$request->ordernumber;

      if ($request->hasFile('image')) {

        $filename =$request->file('image')->hashName();
        $imagePath ='uploads/Newsevents' .$filename;
        $request->file('image')->storeAs('public/' .$imagePath);
        if ($homeslider->image) {
            Storage::disk('public')->delete($homeslider->image);
        }
         // Update the image property with the new path
         $homeslider->image = $imagePath;
        }

        // Save the updated destination data to the database
        $homeslider->save();

        return redirect()->route('newsevents.index');

     }


    public function destroy($id)
    {
        $homeslider=Newsevents::find($id);
        // Delete the image from the file system
   if ($homeslider->image) {
       Storage::disk('public')->delete ($homeslider->image);
   }

   // Delete the destination record from the database
   $homeslider->delete();

   return redirect()->route('newsevents.index');

}


public function Newsevents(){

    $news=Newsevents::all();

    return view('website.news_events',compact('news'));
}

public function getnewsbyid($id){

    $news=Newsevents::findOrFail($id);
    return view('website.news',compact('news'));
}
}
