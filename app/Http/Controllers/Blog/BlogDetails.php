<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogDetails extends Controller
{
    public function index(Blog $blog)
    {
        $categories = Category::get();
        $related_data = Blog::all()->random(3);
        return view('blog.details', ['categories' =>$categories,
                                    'blog' => $blog,
                                    'related_data' => $related_data]);
    }
}
