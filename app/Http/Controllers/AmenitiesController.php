<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amenities;

class AmenitiesController extends Controller
{

    public function index()
    {
        $aminities = Amenities::orderBy('id', 'desc')->paginate(5);
        return view('admin.amenities.index', compact('aminities'));
    }

    public function create()
    {
        return view('admin.amenities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
        ]);

        $amenities = new Amenities();
        $amenities->title = $request->title;
        $amenities->save();

        return redirect()->route('aminities.index');
    }

    public function edit($id)
    {
        $aminities = Amenities::findOrFail($id);
        return view('admin.amenities.edit', compact('aminities'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'nullable|string',
        ]);
        $aminities=Amenities::findOrFail($id);
        $aminities->title = $request->title;
        $aminities->save();

        return redirect()->route('aminities.index');
    }

    public function destroy($id)
    {
        $aminities =Amenities ::findOrFail($id);
        $aminities->delete();

        return redirect()->route('aminities.index');
    }
}
