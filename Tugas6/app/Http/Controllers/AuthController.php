<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
     }
     public function welcome(Request $request){
        // dd($request);
        $fname = $request['fname'];        
        $lname = $request['lname'];        

        return view('welcome', ['fname'=> $fname, 'lname'=> $lname]);
     }
}
