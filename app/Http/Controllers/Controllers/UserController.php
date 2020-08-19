<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Model\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function getSignup()
    {
        return view('users.signup');
    }

    public function postSignup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required|confirmed|min:6'
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->errors()->all()[0])->withInput();
        }

        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->fullname = $request->fullname;
        $profile->mobile_no = '';
        $profile->address = '';
        $profile->save();

        Auth::login($user);

        return redirect()->route('product.index');
    }

    public function getLogin()
    {
        return view('users.login');
    }

    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->errors()->all()[0])->withInput();
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('user.profile');
        }

        return redirect()->route('user.login')->with('toast_error', 'Invalid Email & Password');
    }

    public function getProfile()
    {
        $user = Auth::user();
        return view('users.profile', ['user' => $user]);
    }

    public function getLogout()
    {
        $user = Auth::logout();
        return redirect()->route('product.index');
    }
}
