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

        $data['products'] = Product::with(['category','images'])->select(['name','slug','price','id'])->get();
        return view('front-end.home', $data);
    }


    public function showProduct($slug)
    {

        $data = [];

        $data['product'] = Product::with(['category','images'])
        ->select(['category_id','name','description','price','quantity','id'])
        ->where('slug', $slug)
        ->first();

        return view('front-end.single', $data);
    }


    public function showCategoryListing($slug)
    {

        $data = [];

        $data['category'] = Category::select(['name','id'])->where('slug', $slug)->first();
        $data['products'] =  $data['category']->products;
        //$data['products'] = Product::where('category_id', $data['category']->id)->get();
        return view('front-end.category ', $data);
    }
}
