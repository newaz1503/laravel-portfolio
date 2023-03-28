<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $data['portfolio'] = Portfolio::count();
        $data['service'] = Service::count();
        $data['skill'] = Skill::count();
        $data['category'] = Category::count();
        return view('backend.pages.dashboard', $data);
    }
}
