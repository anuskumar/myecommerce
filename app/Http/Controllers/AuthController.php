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

    public function createUser(Request $request)
    {

        // return $request->input('password');
        // return $request->all();
        // return $request->except(['password']);
        // return $request->only(['password']);

        $request->validate([
            'full_name' => 'required' ,
            'email' => 'required|email' ,
            'phn_number' => 'required|min:11' ,
            'password' => 'required|min:6'

        ]);
    }
}
