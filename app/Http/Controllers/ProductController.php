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
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function viewAll(){
       $items =  DB::table('basket')->get();

       foreach($items as $item){
        return view('Basket', compact('items'));
       }
    }


    public function cart()
    {
        return view('cart');
    }


    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        
     
        DB::table('basket')->insert([
                "name" => $product->name,
                "image" => $product->image,
                "price" => $product->price,
                "description" => $product->description
        ]);
        
        return view('basket');
    }




    public function update(Request $request)
    {
        if($request->id){
            $cart = Basket::all();
            $cart[$request->id]["quantity"] = $request->quantity;
            DB::table('basket')->put('cart', $cart);
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = DB::table('basket')->delete('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                DB::table('basket')->put('cart', $cart);
            }
        }
    }
}
