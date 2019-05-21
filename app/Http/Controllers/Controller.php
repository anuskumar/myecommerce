<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Category;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function __construct()
    {
        //
        // $categories  = Category::all();
        $categories  = Category::select(['name', 'slug'])->get();

       //view()->share('sidebar', true);
       View::share('sidebar', true);
       view()->share('categories', $categories);
       // View::share('categories', $categories);
    }
}




// Code For Categories Entry. I Wann Show It in All Page
