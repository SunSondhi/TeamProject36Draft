<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Darryldecode\Cart;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{


    public function storePrevOrders(Request $request)
    {


        DB::table('prev_orders')->insert([
            'name' => $request->name,
            'customer_id' =>Auth::id(),
              'price' => $request->price,
            'description' => "item",
            'image' => $request->image,
            'quantity' => 1

        ]);
        session()->flash('success', 'Product is Added to Orders Successfully !');
        return redirect()->route('home');
    }
}
