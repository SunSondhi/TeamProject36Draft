<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    //controller for the user to see their info on home once they login
    public function search(Request $request)
    {
        $user = DB::table('users')->get();




        foreach ($user as $users) {
            if ($users !=  Auth::user()) {
                return view('aboutus', ['user' => $user]);

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
}
