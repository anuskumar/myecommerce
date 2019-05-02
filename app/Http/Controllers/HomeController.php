<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){

        return view('front-end.home');
    }
    public function showProduct($slug){

        $data = [];
        $data['slug'] = $slug;

        return view('front-end.single',$data);
    }

    public function showCategoryListing($slug){

        $data = [];

        return view('front-end.category ', $data);


    }


}
