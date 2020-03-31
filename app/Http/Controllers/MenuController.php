<?php

namespace App\Http\Controllers;

use App\menu;
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
        $menu = Menu::all();
        $page_title = "Menu";
//        return $menu;
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
        Menu::create([
            'name'=> $request->name,
            'image'=> '',
            'description' => $request->description,
            'price'=> $request->price,
            'category_id'=> $request->category,
        ]);
        return redirect()->back()->with('success','Item created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(menu $menu)
    {
        //
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
        //
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
