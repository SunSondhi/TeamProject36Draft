<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller

use Illuminate\Http\Request;


class ContactMessageController extends Controller
{
 
    public function create()
   {

return view('contact');

   }
   public function store(Request $request)
 {
    $this->validate($request , [
        'name' =>'required'
        'email'=>'required|email'
        'message'=>'required'
    ]);
 }  
}