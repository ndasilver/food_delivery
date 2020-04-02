<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Category;

use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function index()
    {
        $products = Menu::all();
        $categories = Category::all();

        return view('public.home')->with('products', $products);
    }

    public function cart()
    {
        return view('public.cart');
    }

    public function category($id){
        $category = Category::findOrFail($id);

        $products = Menu::where('category_id', $id)->get();

        return view('public.category')
            ->with('products', $products)
            ->with('category', $category);

    }

}
