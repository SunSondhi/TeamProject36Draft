<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Basket;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //

    public function index()
    {
        return view('products');
    }

    public function viewAll(){
       $items =  DB::table('basket')->get();

       foreach($items as $item){
        return view('Basket', compact('items'));
       }
    }


    public function cart()
    {
        return view('basket');
    }


    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        
     
        DB::table('basket')->insert([
                "name" => $product->name,
                "image" => $product->image,
                "price" => $product->price,
                "description" => $product->description
        ]);
        
        return view('basket');

        $cart = session()->get('basket');

        //if cart is empty then this is the first product
        if (!$cart) {
            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "image" => $product->image
                ]
                
            ];

            session()->put('basket', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

            //if cart not empty then check if this products exists, if yes then increment quantity
            if(isset($cart[$id])) {
                $cart[$id]['quantity']++;
                session()->put('basket', $cart);
                return redirect()->back()->with('success', 'Product added to cart successfully!');
            }
            // if item not exist in cart then add to cart with quantity = 1
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "photo" => $product->photo
            ];
            session()->put('basket', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('basket');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('basket', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('basket');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('basket', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
