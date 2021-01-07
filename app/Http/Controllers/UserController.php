<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function users() {
        $users = User::paginate(5);
        return view('users', compact('users'));
    }


    public function user_detail($id) {
        $user_detail = User::find($id);
        return view('user_detail')->with('user_detail', $user_detail);
    }

}
