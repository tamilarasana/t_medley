<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::get();
        return view('dashboard.admin.blog' ,['blogs' => $blogs]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'blog_image' => 'required',
            ]);

        if($request->file()) {
                $image = $request->blog_image;
                $imageName = $image->getClientOriginalName();
                $imagePath = $image->store('/blog', 'public');
            }

            $data = new Blog;
            $data->title = $request->title;
            $data->description = $request->description;
            $data->blog_image = $imagePath;
            $data->save();

            return redirect()->back()->with('success', 'Blog Added Successfullly');
    }

    public function update(Request $request, Blog $blog)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            ]);

        if($request->file()) {
                $image = $request->blog_image;
                $imageName = $image->getClientOriginalName();
                $imagePath = $image->store('/blog', 'public');
            }

        $blog->title = $request->title;
        $blog->description = $request->description;
        if($request->file()) {
            $blog->blog_image = $imagePath;
        }
        $blog->save();

        return redirect()->back()->with('success', 'Blog Updated Successfullly');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->back()->with('success', 'Brand Deleted Successfullly');
    }
}
