<?php

namespace App\Http\Controllers\Dashboard\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\ProductImage;

class SubCategoryController extends Controller
{
    public function index(Request $request)
    {
        $sub_categories = SubCategory::where('category_id', $request->category)->get();
        return view('dashboard.superadmin.sub-category', ['sub_categories' => $sub_categories]);
    }

    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'sub_title' => 'required|max:255',
            'price_from' => 'required|max:255',
            'liquor' => 'required|max:255',
            'flavour' => 'required|max:255',
            'caffeine' => 'required|max:255',
            'ingredients' => 'required|max:255',
            'description' => 'required',
            'image' => 'required',
            ]);

            $data = new SubCategory;
            $data->sub_title = $request->sub_title;
            $data->price_from = $request->price_from;
            $data->price_to = $request->price_to;
            $data->liquor = $request->liquor;
            $data->flavour = $request->flavour;
            $data->caffeine = $request->caffeine;
            $data->ingredients = $request->ingredients;
            $data->category_id = $request->category_id;
            $data->description = $request->description;
            $data->save();

            if ($request->hasFile('image')) {

            $files = $request->file();
            $files = collect($files['image']);
            $imgCount = $files->count();
            $dbCount = ProductImage::where('sub_category_id', $data->id)->count();
            $totalCount = $imgCount + $dbCount;

            if ($dbCount < 4 && $totalCount < 4) {
                # code...
                foreach ($files as $key => $file) {
                    $filePath = $file->store('/sub-category', 'public');
                    $fileModel = new ProductImage;
                    $fileModel->sub_category_id = $data->id;
                    $fileModel->file_path = $filePath;
                    $fileModel->save();
                }
                return redirect()->back()->with('success', 'Image Added Successfullly');
            }else{
                return redirect()->back()->with('failure', 'Maximum images allowed - 4');
            }
        }

            return redirect()->back()->with('success', 'SubCategory Added Successfullly');
    }

    public function update(Request $request, SubCategory $subcategory)
    {
        // return $subcategory;
        $validatedData = $request->validate([
            'sub_title' => 'required|max:255',
            'description' => 'required',
            ]);

        $subcategory->sub_title = $request->sub_title;
        $subcategory->price_from = $request->price_from;
        $subcategory->price_to = $request->price_to;
        $subcategory->liquor = $request->liquor;
        $subcategory->flavour = $request->flavour;
        $subcategory->caffeine = $request->caffeine;
        $subcategory->ingredients = $request->ingredients;
        $subcategory->description = $request->description;
        $subcategory->save();

        if ($request->hasFile('image')) {

        $files = $request->file();
        $files = collect($files['image']);
        $imgCount = $files->count();
        $dbCount = ProductImage::where('sub_category_id', $subcategory->id)->count();
        $totalCount = $imgCount + $dbCount;

            if ($dbCount < 5 && $totalCount < 5) {
                # code...
                foreach ($files as $key => $file) {
                    $filePath = $file->store('/sub-category', 'public');
                    $fileModel = new ProductImage;
                    $fileModel->sub_category_id = $subcategory->id;
                    $fileModel->file_path = $filePath;
                    $fileModel->save();
                }
                return redirect()->back()->with('success', 'Image Added Successfullly');
            }else{
                return redirect()->back()->with('failure', 'Maximum images allowed - 4');
            }
        }

        return redirect()->back()->with('success', 'Sub-Category Updated Successfullly');
    }

    public function destroy(SubCategory $subcategory)
    {
        $subcategory->delete();
        return redirect()->back()->with('success', 'Sub-Category Deleted Successfullly');
    }
}
