<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SignUp extends Controller
{
    function index (Request $req){
      

        
    DB::table('userlogs')->insert(
            ['name' => $req->name, 'password' => $req->password]      
        );
        $req->session()->flash('message',"User Added Successfully , Try to Log In");
        // $req->session()->forget('name');
        // if (session()->has('name')){
        //     return redirect('profile');
        // }
        // return redirect('welcomeUser',["username"=>$req->input()['name']]);
        // return view('signup',["msg","User Added Successfully"]);
        return redirect("auth");
        // return ($data);
}
}