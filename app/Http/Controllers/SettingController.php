<?php

namespace AutomatedTimeTable\Http\Controllers;

use AutomatedTimeTable\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;

class SettingController extends Controller
{
    public function view()
    {
        $user = Auth::user();
        return view('student.setting', compact('user'));
    }

    public function changePassword(Request $request)
    {
        if (!(Hash::check($request->get('currentPassword'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('currentPassword'), $request->get('newPassword')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('newPassword'));
        $user->save();
        return redirect()->back()->with("success","Password changed successfully !");
    }

}
