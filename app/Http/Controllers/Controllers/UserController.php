<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    //
    public function getSignup()
    {
        return view('users.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = new User();
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('product.index');
    }

    public function getLogin()
    {
        return view('users.login');
    }

    public function postLogin()
    {
        return view('users.login');
    }
}
