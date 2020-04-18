<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Category;

use App\Payment;
use App\Side_dish;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function index()
    {
        $products = Menu::paginate(12);
        $sideDish = Side_dish::all();
        $payment_method = Payment::all();

        $active = 'All';

        return view('public.home')
            ->with('products', $products)
            ->with('side_dish', $sideDish)
            ->with('payment_method', $payment_method)
            ->with('active', $active);
    }

    public function cart()
    {
        $ids = [];
        $sessions = session()->get('cart');
        if ($sessions){
            $quantity = 0;
        foreach ($sessions as $keys=>$session){
            array_push($ids,$keys);
        }}
        $products = Menu::whereIn('id',$ids)->get();
        $sideDish = Side_dish::all();
        $payment_method = Payment::all();

        $active = '';
        return view('public.cart',compact('products','sessions'))
            ->with('active', $active)
            ->with('side_dish', $sideDish)
            ->with('payment_method', $payment_method);
    }

    public function category($id){
        $category = Category::findOrFail($id);
        $categories = Category::where('isActive', 1)->get();
        $products = Menu::where('category_id', $id)->paginate(8);
        $sideDish = Side_dish::all();
        $payment_method = Payment::all();


        $active = $category->name;

        return view('public.category')
            ->with('products', $products)
            ->with('category', $category)
            ->with('categories', $categories)
            ->with('side_dish', $sideDish)
            ->with('payment_method', $payment_method)
            ->with('active', $active);

    }

    public function checkout(){
        return view('public.checkout');
    }

    public function categories(){
        $categories = Category::where('isActive', 1)->get();
        $products = Menu::paginate(8);
        $sideDish = Side_dish::all();
        $payment_method = Payment::all();

        $active = 'all';

        return view('public.categories')
            ->with('categories', $categories)
            ->with('products', $products)
            ->with('side_dish', $sideDish)
            ->with('payment_method', $payment_method)
            ->with('active', $active);
    }
    public function addToCart($id, $quantity, $side_dish){
        $item = Menu::find($id);
        if ($item){
            $cart = session()->get('cart');
            if (!$cart){
                $newCart = [
                    $id =>[
                        "id" =>$item->id,
                        "name" => $item->name,
                        "quantity"=>$quantity,
                        "price"=>$item->price,
                        "side_dish"=>$side_dish,
                        "image" =>$item->image
            ]];
                session()->put('cart',$newCart);
                return "cart created";
            }
            if (isset($cart[$id]) && $cart[$id]['side_dish'] == $side_dish){
//                if (isset($cart[$id]) && $cart[$id]['side_dish'] == $side_dish)
                $cart[$id]['quantity'] = $cart[$id]['quantity'] + $quantity ;
                session()->put('cart',$cart);
                return json_encode("added to cart with success");
            }
            $cart[$id] = [
                "id" => $item->id,
                "name" => $item->name,
                "quantity"=>$quantity,
                "price"=>$item->price,
                "side_dish"=>$side_dish,
                "image" =>$item->image
            ];
            session()->put('cart',$cart);
            return "item added to cart";
        }
    }

    public function getCart(){
        $cart = session()->get('cart');
        if ($cart){
            return $cart;
        }else{
            return "cart is empty";
        }
    }

    public function getMenuInfo($id){
        $menu = Menu::findOrFail($id);
        return response()->json($menu);
    }

    public function checkoutSuccess(){
        $products = Menu::paginate(12);
        $sideDish = Side_dish::all();
        $payment_method = Payment::all();

        $active = 'None';

        return view('public.checkout-success')
            ->with('products', $products)
            ->with('side_dish', $sideDish)
            ->with('payment_method', $payment_method)
            ->with('active', $active);
    }


}
