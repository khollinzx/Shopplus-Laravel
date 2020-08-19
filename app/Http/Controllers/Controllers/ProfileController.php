<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function getUserProfile()
    {
        $user_id = Auth::user()->id;
        $profile = Profile::where('user_id', "=", $user_id)->get();
        // dd($profile);
        return view('users.profile', ['profile' => $profile]);
    }

    public function postUserProfile(Request $request, $id)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'mobile_no' => 'required',
            'address' => 'required',
        ]);

        $profile = Profile::find($id);
        $profile->fullname = $request->fullname;
        $profile->mobile_no = $request->mobile_no;
        $profile->address = $request->address;
        $profile->save();

        return redirect()->route('user.profile');
    }
}
