<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Front\FrontendController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GlobalSettingController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\SettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontendController::class,'front_home'])->name('front.home');
Route::get('portfolio-details/{id}', [FrontendController::class,'portfolio_details']);
Route::post('contact-mail', [ContactController::class, 'contact_mail'])->name('contact.store');
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
Route::group(['as' => 'admin.','prefix' => 'admin/','middleware' => 'auth'], function(){
    Route::get('dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
    //hero route
    Route::get('hero',[HeroController::class, 'index'])->name('hero');
    Route::get('hero/create',[HeroController::class, 'create'])->name('hero.create');
    Route::post('hero/store',[HeroController::class, 'store'])->name('hero.store');
    //about route
    Route::get('about',[AboutController::class, 'index'])->name('about');
    Route::get('about/create',[AboutController::class, 'create'])->name('about.create');
    Route::post('about/store',[AboutController::class, 'store'])->name('about.store');
    //service route
    Route::resource('service', ServiceController::class);
    //service route
    Route::resource('skill', SkillController::class);
    //category route
    Route::resource('category', CategoryController::class);
     //portfolio route
     Route::resource('portfolio', PortfolioController::class);
      //setting route
      Route::get('setting', [SettingController::class, 'setting'])->name('setting');
      Route::put('setting-update', [SettingController::class, 'setting_update'])->name('setting.update');
    //Global route
    Route::get('global',[GlobalSettingController::class, 'global'])->name('global');
    Route::post('global-store',[GlobalSettingController::class, 'global_store'])->name('global.store');

});


