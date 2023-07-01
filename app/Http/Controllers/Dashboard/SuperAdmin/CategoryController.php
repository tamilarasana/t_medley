<?php

namespace App\Http\Controllers\Dashboard\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index()
    {   
        $categories = Category::get();
        return view('dashboard.superadmin.category', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
        ]);

        $data = new Category;
        $data->title = $request->title;
        $data->save();

        return redirect()->back()->with('success', 'Category Added Successfullly');
    }

    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            ]);

        $category->title = $request->title;
        $category->save();

        return redirect()->back()->with('success', 'Category Updated Successfullly');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('success', 'Category Deleted Successfullly');
    }
}
