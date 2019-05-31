<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;


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
            'full_name' => 'required|min:4|max:33' ,
            'email' => 'required|email|unique:users,email' ,
            'phn_number' => 'required|min:11|max:14' ,
            'password' => 'required|min:6'
        ]);


        $data = $request->except(['_token']);
        $data['password'] = bcrypt($data['password']);

        try {
        User::forceCreate($data);
        session()->flash('type','successfull');
        session()->flash('message','Registration Complete!');
        }

        catch(\Exception $eee){
        session()->flash('type','danger');
        session()->flash('message',$eee->getMessage());
        }


        return redirect()->back();
    }
}
