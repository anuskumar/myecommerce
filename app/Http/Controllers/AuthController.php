<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        $data = [];
        $data['sidebar'] = false ;
        return view('front-end.register', $data);
    }

    public function createUser(){

    }
}
