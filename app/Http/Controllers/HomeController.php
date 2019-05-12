<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class HomeController extends Controller
{

    public function index()
    {
        $data = [];
        $data['products'] = Product::select(['name','slug','price'])->get();
        return view('front-end.home', $data);
    }
    public function showProduct($slug)
    {

        $data = [];
       // $data['slug'] = $slug;
        $data['product'] = Product::select(['category_id','name','description','price','quantity'])
        ->where('slug', $slug)
        ->first();

        return view('front-end.single', $data);
    }

    public function showCategoryListing($slug)
    {

        $data = [];
        $data['category'] = Category::select(['name'])->where('slug', $slug)->first();

        return view('front-end.category ', $data);
    }
}
