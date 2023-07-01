<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogListing extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $blogs = Blog::get();
        return view('blog.listing', ['categories' =>$categories,
                                    'blogs' => $blogs]);
    }
}
