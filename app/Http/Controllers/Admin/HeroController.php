<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class HeroController extends Controller
{
    public function index(){
        $hero = Hero::first();
        return view('backend.pages.hero.index', compact('hero'));
    }
    public function create(){
        $hero = Hero::first();
        return view('backend.pages.hero.create', compact('hero'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string',

        ]);
       $hero = Hero::first();
       if($hero){
            if($request->hasFile('image')){
                $image = $request->file('image');
                if(file_exists(public_path('uploads/hero/'.$hero->image))){
                    @unlink(public_path('uploads/hero/'.$hero->image));
                }
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/hero/'),$imageName);
                $hero->image = $imageName;
            }
            $hero->update([
                'title' =>  $request->name,
                'sub_title' =>  $request->type,
            ]);
            Toastr::success('Success', 'Updated Successfully');
            return redirect()->route('admin.hero');
       }else{
            $hero = new Hero();
            $hero->title = $request->name;
            $hero->sub_title = $request->type;
            if($request->hasFile('image')){
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/hero/'),$imageName);
                $hero->image = $imageName;
            }
            $hero->save();
            Toastr::success('Success', 'Store Successfully');
            return redirect()->route('admin.hero');
       }
    }

}
