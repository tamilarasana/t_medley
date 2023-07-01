<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use Auth;
use DB;

class CartController extends Controller
{
    public function fillCart(Request $request, SubCategory $subcategory)
    {
        // $user = Auth::user();
        // $user_id = $user->id;
        // $cart =DB::table('sub_category_user')->where('sub_category_id', $subcategory->id)->where('user_id', $user_id)->get();
        // $count = $cart->count();
        // if ($count == 0) {
        //     $subcategory->users()->attach($user_id);
        //     return redirect()->back()->with('success', 'Added to Cart Successfullly');
        // }else{
        //     return redirect()->back()->with('failure', 'Already Exist in Cart');
        // }

    }


    public function addToCart($id)
    {
        $subcategory = SubCategory::findOrFail($id);
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;

        } else {

            $cart[$id] = [

                "name" => $subcategory->name,
                "quantity" => 1,
                "price" => $subcategory->price,
                "image" => $subcategory->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}
