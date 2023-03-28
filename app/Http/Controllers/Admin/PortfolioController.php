<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::orderBy('id', 'desc')->get();
        return view('backend.pages.portfolio.index',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.pages.portfolio.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'url' => 'required|string',
            'image' => 'required',
            'category_id' => 'required',

        ]);
        $portfolio = new Portfolio();
        $portfolio->title = $request->title;
        $portfolio->category_id = $request->category_id;
        $portfolio->description = $request->description;
        $portfolio->url = $request->url;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/portfolio/'),$imageName);
            $portfolio->image = $imageName;
        }
        $portfolio->save();
        Toastr::success('Store Successfully', 'Success');
        return redirect()->route('admin.portfolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        $categories = Category::all();
        return view('backend.pages.portfolio.edit',compact('portfolio', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::find($id);
        $this->validate($request, [
            'title' => 'required|string',
            'url' => 'required|string',
            'category_id' => 'required',

        ]);

        $portfolio->title = $request->title;
        $portfolio->category_id = $request->category_id;
        $portfolio->description = $request->description;
        $portfolio->url = $request->url;
        if($request->hasFile('image')){
            $image = $request->file('image');
            if(file_exists(public_path('uploads/portfolio/'.$portfolio->image))){
                @unlink(public_path('uploads/portfolio/'.$portfolio->image));
            }
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/portfolio/'),$imageName);
            $portfolio->image = $imageName;
        }
        $portfolio->update();
        Toastr::success('Store Successfully', 'Success');
        return redirect()->route('admin.portfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        if(file_exists(public_path('uploads/portfolio/'.$portfolio->image))){
            File::delete(public_path('uploads/portfolio/'.$portfolio->image));
        }
        $portfolio->delete();
        Toastr::success('Delete Successfully', 'Success');
        return back();
    }

}
