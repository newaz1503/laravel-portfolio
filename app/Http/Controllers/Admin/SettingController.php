<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function setting(){
        return view('backend.pages.setting.create');
    }
    public function setting_update(Request $request){
        $this->validate($request,[
            'current_password' => 'required',
            'password' => 'required|confirmed'
        ]);
        $auth_pass =Auth::user()->password;
        $request_pass = $request->current_password;
        if(Hash::check($request_pass, $auth_pass)){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->update();
            Toastr::info('Password Change successfully', 'Success');
            Auth::logout();
            return back();
        }else{
            Toastr::info('Current Password Does not match', 'Info');
            return back();
        }
    }
}
