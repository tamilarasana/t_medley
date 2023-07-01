<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index(SubCategory $subcategory)
    {
        $categories = Category::get();
        $image_data = $subcategory->images;
        $related_data = SubCategory::all()->random(3);
        return view('details', ['categories' =>$categories,
                                'subcategory' => $subcategory,
                                'images' => $image_data,
                                'related_data' => $related_data]);
    }
}
