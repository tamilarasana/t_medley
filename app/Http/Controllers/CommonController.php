<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Blog;

class CommonController extends Controller
{
    public function index()
    {   
        $categories = Category::get();
        $related_data = Blog::all()->random(4);
        return view('welcome', ['categories' =>$categories,
                                'blogs' => $related_data]);
    }

    public function aboutUs()
    {
        $categories = Category::get();
        return view('about-us', ['categories' =>$categories]);
    }

    public function ourStory($value='')
    {
        $categories = Category::get();
        return view('our-story', ['categories' =>$categories]);
    }

    public function faq($value='')
    {
        $categories = Category::get();
        return view('faq.index', ['categories' =>$categories]);
    }

    public function suggestion($value='')
    {
        $categories = Category::get();
        return view('faq.suggestion', ['categories' =>$categories]);
    }

    public function purchasePolicy($value='')
    {
        $categories = Category::get();
        return view('faq.purchase-policy', ['categories' =>$categories]);
    }

    public function orderCancellation($value='')
    {
        $categories = Category::get();
        return view('faq.order', ['categories' =>$categories]);
    }

    public function shippingInfo($value='')
    {
        $categories = Category::get();
        return view('faq.shipping-info', ['categories' =>$categories]);
    }

    public function disclaimer($value='')
    {
        $categories = Category::get();
        return view('faq.disclaimer', ['categories' =>$categories]);
    }

    public function cookiesPolicy($value='')
    {
        $categories = Category::get();
        return view('faq.cookies-policy', ['categories' =>$categories]);
    }

    public function terms($value='')
    {
        $categories = Category::get();
        return view('faq.terms', ['categories' =>$categories]);
    }

    public function privacyPolicy($value='')
    {
        $categories = Category::get();
        return view('faq.privacy-policy', ['categories' =>$categories]);
    }

    public function contactUs($value='')
    {
        $categories = Category::get();
        return view('faq.contact-us', ['categories' =>$categories]);
    }

    public function sendSuggestion()
    {
        return redirect()->back()->with('success', 'Suggestion Sent Successfully');
    }

}
