<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    //controller for the user to see their info on home once they login
    public function search(Request $request)
    {
        $user = DB::table('users')->get();




        foreach ($user as $users) {
            if ($users !=  Auth::user()) {
                return view('adminhome', ['user' => $user]);

            } else {
                echo 'ther has been an error with the query';

            }
        }

        // 

        // $users = DB::table('users')->get('name');

        // foreach ($users as $user) {
        //     echo $user->name;
        //     if ($user == Auth::user()->name) {
        //         return view('aboutus', ['user' => $user]);
        //     }
        // }
    }


    public function listProducts(Request $request){
        $product = DB::table('products')->get();
        return view('Products', ['product' => $product]);
    }


    public function showAllprevOrd()
    {

        $orders = DB::table('prev_orders')->get();
        return view('allorders', ['orders' => $orders]);
    }

    public function getLastOrder()
    {
        $lastOrder = DB::table('prev_orders')->latest()->first();
        return view('lastorder', ['lastOrder' => $lastOrder]);
    }

   
}
