<?php

namespace App\Http\Controllers;

use App\Models\PreviousOrders;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Darryldecode\Cart;
use Illuminate\Support\Facades\Auth;

class OrderController extends BaseController
{


    public function storePrevOrders(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);
        

        DB::table('prev_orders')->insert([
            'name' => $request->input('name'),
            'price' =>$request->input('price'),
            'description' => "item",
            'image' =>$request->input('image'),
            'quantity' => 1

        ]);
        session()->flash('success', 'Product is Added to Orders Successfully !');
        return redirect()->route('home');
    }


    public function showAllprevOrd(){

        $orders = DB::table('prev_orders')->get();
        return view('adminhome', ['orders' => $orders]);

    }

}
