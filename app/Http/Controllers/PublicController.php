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
        $categories =  Category::all();
        $products = Menu::where('category_id', $id)->get();

        $active = $category->name;

        return view('public.category')
            ->with('products', $products)
            ->with('category', $category)
            ->with('categories', $categories)
            ->with('active', $active);

    }

    public function checkout(){
        return view('public.checkout');
    }

    public function categories(){
        $categories =  Category::all();
        $products = Menu::all();

        $active = 'all';

        return view('public.categories')
            ->with('categories', $categories)
            ->with('products', $products)
            ->with('active', $active);
    }


}
