<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{

    public function index()
    {

        return view('front-end.home');
    }
    public function showProduct($slug)
    {

        $data = [];
        $data['slug'] = $slug;

        return view('front-end.single', $data);
    }

    public function showCategoryListing($slug)
    {

        $data = [];
        $data['category'] = Category::select(['name'])->where('slug', $slug)->first();

        return view('front-end.category ', $data);
    }
}
