<?php

namespace App\Http\Controllers;

use App\menu;
use App\Category;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::paginate(15);
        $page_title = "Menu";
        return view('Admin.menu.menu',compact('page_title','menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            $destinationPath = public_path('/public_assets/images');
            $image2->move($destinationPath,$image_name);
        }
        Menu::create([
            'name'=> $request->name,
            'image'=> $image_name,
            'description' => $request->description,
            'price'=> $request->price,
            'category_id'=> $request->category,
        ]);

        // Set the category to be active if it was not Active
        /* By default categories that don't have  a menu associated with them
         are disabled */
        $category = Category::findOrFail($request->category);

        if($category->isActive == 0){
            $category->isActive = 1;
            $category->save();
        }

        return redirect()->back()->with('success','Item created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show($menu)
    {
        $menu2 = Menu::with(['category'])->where('id',$menu)->get();
        return $menu2;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(menu $menu)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, menu $menu)
    {
        $this->validate($request,['image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
        if ($request->hasFile('image')){
            $image2 = $request->file('image');
            $image_name = time().'.'.$image2->getClientOriginalExtension();
            $destinationPath = public_path('/public_assets/images');
            $image2->move($destinationPath,$image_name);
        }
        Menu::where('id',$menu->id)->update(['name'=>$request->name,'description'=>$request->description,'price'=>$request->price,'image'=>$image_name,'category_id'=>$request->category]);
        return redirect()->back()->with('success','Item upadated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(menu $menu)
    {
        //
    }
}
