<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Login extends Controller
{
    function index (Request $req){
        $req->session()->put('data', $req->input());
        $data= $req->session()->get('data');

        $users = DB::table('userlogs')->get();

        foreach ($users as $user)
        {
            if ($user->name==$req->name &&$user->password==$req->password ){
                $req->session()->flash('LoginMessage',"Welcome".$user->name);
                return redirect('dashboard');
            }
        }


    // $fetchedData=  DB::select("select name password from userlogs")->where("name","=",$req->name)->get();
    //      dd(  $fetchedData);
        // $user = DB::table('userlogs')->where('name', $req->name);
        //  $fetchedData ? $req->session()->flash('LoginMessage','')
        // dd(  $user);
        // $req->session()->forget('name');
        // if (session()->has('name')){
        //     return redirect('profile');
        // }
        // return redirect('welcomeUser',["username"=>$req->input()['name']]);
        // return view('userform',["error"=>"Verify your Infos"]);
        return view("userform");
}
}
