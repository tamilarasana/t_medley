<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(Category $category)
    {
        $categories = Category::get();
        $subcategories = $category->subcategories; 
        return view('listing', ['categories' => $categories,
                                'subcategories' => $subcategories]);
    }
}
