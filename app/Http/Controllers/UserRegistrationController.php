<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserRegistrationController extends Controller
{
   public function index () {
        return view ('user.register');
   }
   public function register () {
       $this->validate(request(),[
           'username'       =>'required|max:120',
           'f_name'         =>'required|alpha_dash',
           'l_name'         =>'required|alpha_dash',
           'email'          =>'required|unique:users,email',
           'phone'          =>'required|min:11|numeric',
           'location'       =>'required',
           'gender'         =>'required'
       ]);



        User::create([
            'username'  =>  request('username'),
            'f_name'    =>  request('f_name'),
            'l_name'    =>  request('l_name'),
            'email'     =>  request('email'),
            'phone'     =>  request('phone'),
            'location'  =>  request('location'),
            'gender'    =>  request('gender'),
        ]);
        return "Registered";
        //return request()->all();
   }
}
