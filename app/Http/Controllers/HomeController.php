<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\CartItem;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {if (Auth::check()) {
        $cartItems = CartItem::where('user_id', Auth::user()->id)->get();
        $productCount = $cartItems->count();

        $products = Product::all();
        $categories = Category::all();

        return view('home', [

       'products'               =>      $products,
       'categories'             =>      $categories,
       'productCount'           =>      $productCount
    ]);
    }
    else{
        return redirect()->route('login');
    }

}}
