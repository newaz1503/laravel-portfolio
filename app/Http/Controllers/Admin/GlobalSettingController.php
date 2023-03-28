<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\GlobalSetting;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class GlobalSettingController extends Controller
{
    public function global(){
        $global = GlobalSetting::first();
        return view('backend.pages.global', compact('global'));
    }

    public function global_store(Request $request){
        $global = GlobalSetting::where('id', 1)->first();
        $this->validate($request, [
            'image' => 'required,image,'.$global->id,
            'cv' => 'required,cv,'.$global->id,
            'name' => 'required|string',
            'phone' => 'required',
            'email' => 'required|email|string',
            'location' => 'required|string',
            'facebook' => 'required|string',
            'twitter' => 'required|string',
            'linkedin' => 'required|string',
            'github' => 'required|string',

        ]);

       if($global){
            if($request->hasFile('image')){
                $image = $request->file('image');
                if(file_exists(public_path('uploads/profile/'.$global->profile_img))){
                    @unlink(public_path('uploads/profile/'.$global->profile_img));
                }
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/profile/'),$imageName);
                $global->profile_img = $imageName;
            }
            if($request->hasFile('cv')){
                $image = $request->file('cv');
                if(file_exists(public_path('uploads/cv/'.$global->cv))){
                    @unlink(public_path('uploads/cv/'.$global->cv));
                }
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/cv/'),$imageName);
                $global->cv = $imageName;
            }
            $global->update([
                'name' =>  $request->name,
                'facebook' =>  $request->facebook,
                'twitter' =>  $request->twitter,
                'instagram' =>  $request->instagram,
                'github' =>  $request->github,
                'skype' =>  $request->skype,
                'linkedin' =>  $request->linkedin,
                'phone' =>  $request->phone,
                'email' =>  $request->email,
                'location' =>  $request->location,
                'map' =>  $request->map,
                'copyright' =>  $request->copyright,

            ]);
            Toastr::success('Success', 'Updated Successfully');
            return redirect()->back();
       }else{
            $global = new GlobalSetting();
            $global->name =  $request->name;
            $global->facebook =  $request->facebook;
            $global->twitter =  $request->twitter;
            $global->instagram =  $request->instagram;
            $global->github =  $request->github;
            $global->skype =  $request->skype;
            $global->linkedin =  $request->linkedin;
            $global->phone =  $request->phone;
            $global->email =  $request->email;
            $global->location =  $request->location;
            $global->map =  $request->map;
            $global->copyright =  $request->copyright;
            if($request->hasFile('image')){
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/profile/'),$imageName);
                $global->profile_img = $imageName;
            }
            if($request->hasFile('cv')){
                $image = $request->file('cv');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/cv/'),$imageName);
                $global->cv = $imageName;
            }
            $global->save();
            Toastr::success('Success', 'Store Successfully');
            return redirect()->route('admin.global');
       }
    }

}
