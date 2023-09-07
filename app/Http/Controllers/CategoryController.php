<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $projectcategory = Category::orderBy('id', 'desc')->paginate(5);
        return view('admin.category.create', compact('projectcategory'));
    }

    public function create()
    {
        $projectcategory =Category::all();
        return view('admin.category.create', compact('projectcategory'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        $projectcategory= new Category();
        $projectcategory->name = $request->name;
        $projectcategory->save();

        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        $projectcategory = Category::findOrFail($id);
        return view('admin.category.edit', compact('projectcategory'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'nullable|string',
        ]);
        $projectcategory=Category::findOrFail($id);
        $projectcategory->name = $request->name;
        $projectcategory->save();

        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $projectcategory =Category ::findOrFail($id);
        $projectcategory->delete();

        return redirect()->route('category.index');
    }
}
