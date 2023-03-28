<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class AboutController extends Controller
{
    public function index(){
        $about = About::first();
        return view('backend.pages.about.index', compact('about'));
    }
    public function create(){
        $about = About::first();
        return view('backend.pages.about.create', compact('about'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string',
            'birthday' => 'required|string',
            'age' => 'required',
            'website' => 'required|string',
            'degree' => 'required|string',
            'phone' => 'required',
            'email' => 'required|email|string',
            'city' => 'required|string',
            'freelance' => 'required|string',

        ]);
       $about = About::first();
       if($about){
            if($request->hasFile('image')){
                $image = $request->file('image');
                if(file_exists(public_path('uploads/about/'.$about->image))){
                    @unlink(public_path('uploads/about/'.$about->image));
                }
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/about/'),$imageName);
                $about->image = $imageName;
            }
            $about->update([
                'title' =>  $request->name,
                'description' =>  $request->description,
                'birthday' =>  Carbon::parse($request->birthday)->toFormattedDateString(),
                'age' =>  $request->age,
                'website' =>  $request->website,
                'degree' =>  $request->degree,
                'phone' =>  $request->phone,
                'email' =>  $request->email,
                'city' =>  $request->city,
                'freelance' =>  $request->freelance,
            ]);
            Toastr::success('Success', 'Updated Successfully');
            return redirect()->route('admin.about');
       }else{
            $about = new About();
            $about->title = $request->name;
            $about->description = $request->description;
            if($request->hasFile('image')){
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/about/'),$imageName);
                $about->image = $imageName;
            }
            $about->description = $request->description;
            $about->birthday = Carbon::parse($request->birthday)->toFormattedDateString();
            $about->age = $request->age;
            $about->website = $request->website;
            $about->degree = $request->degree;
            $about->phone = $request->phone;
            $about->email = $request->email;
            $about->city = $request->city;
            $about->freelance = $request->freelance;

            $about->save();
            Toastr::success('Success', 'Store Successfully');
            return redirect()->route('admin.about');
       }
    }
}
