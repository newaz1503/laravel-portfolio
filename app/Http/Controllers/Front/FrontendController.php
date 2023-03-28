<?php

namespace App\Http\Controllers\Front;

use App\Models\Hero;
use App\Models\About;
use App\Models\Skill;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;

class FrontendController extends Controller
{
    public function front_home(){
        $data['hero'] = Hero::first();
        $data['about'] = About::first();
        $data['categories'] = Category::all();
        $data['services'] = Service::take(6)->get();
        $data['skills'] = Skill::take(8)->get();
        $data['portfolios'] = Portfolio::all();
        return view('frontend.pages.home', $data);
    }
    public function portfolio_details($id){
        $portfolio = Portfolio::find($id);
        return view('frontend.pages.portfolio_details', compact('portfolio'));
    }
}
