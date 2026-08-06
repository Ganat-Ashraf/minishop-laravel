<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function home()
    {
        $products = Products::all();
        return view('pages.home', ['products' => $products]);
    }
    public function store(Request $request)
    {
        $cart = new Cart();
        $cart->name = $request->name;

        // Store both prices
        $cart->price = $request->offer_price > 0 ? $request->offer_price : $request->price;
        $cart->original_price = $request->price; // Always store original price

        $cart->image = $request->image;
        $cart->category = $request->category;
        $cart->description = $request->description ?? '';
        $cart->save();

        return redirect()->back()->with('success', 'Product added to cart!');
    }

    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();

        return redirect()->back()->with('success', 'Item removed from cart!');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function cart()
    {
        $carts = Cart::all();
        return view('pages.cart', ['cartItems' => $carts]);
    }
    
}