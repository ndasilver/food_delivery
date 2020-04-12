<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('Admin.categories.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
        if ($request->hasFile('image')){
            $image2 = $request->file('image');
            $image_name = time().'.'.$image2->getClientOriginalExtension();
            $destinationPath = public_path('/public_assets/images/categories');
            $image2->move($destinationPath,$image_name);
        }

        $category = new Category();

        $category->name = $request['name'];
        $category->image = $image_name;
        $category->isActive = 0;

        $category->save();

        return redirect()->back()
            ->with('success', 'Category Successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }


    public function edit(category $category)
    {
        $category = Category::findorfail($category->id);

        return view('Admin.categories.edit')
            ->with('category', $category);
    }

    public function update(Request $request, category $category)
    {
        $category = Category::findorfail($category->id);

        if ($request->hasFile('image')){
            $this->validate($request,['image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
            $image2 = $request->file('image');
            $image_name = time().'.'.$image2->getClientOriginalExtension();
            $destinationPath = public_path('/public_assets/images/categories');
            $image2->move($destinationPath,$image_name);

            $category->image = $image_name;
        }

        $category->name = $request['name'];
        $category->isActive = $request['isActive'];

        $category->save();

        return redirect()->route('categories.index')
            ->with('success', $category->name.' Has successfully been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
    }
}
