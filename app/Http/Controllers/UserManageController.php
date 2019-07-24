<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserManageController extends Controller
{
    public function index () {
        $users = User::latest()->get();
        return view('user.showUsers',compact(['users']));
    }
    public function edit ($id) {
        $users = User::find($id);
        return view('user.edit',compact('users'));
    }
    public function update ($id) {
        $users = User::find($id);
        $users->update([
            'username'      =>request('username'),
            'f_name'        =>request('f_name'),
            'l_name'        =>request('l_name'),
            'email'         =>request('email'),
            'phone'         =>request('phone'),
            'location'      =>request('location'),
            'gender'        =>request('gender')
        ]);
        return "updated";
    }
}
