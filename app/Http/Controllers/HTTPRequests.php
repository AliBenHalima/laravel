<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HTTPRequests extends Controller
{
    function index(Request $req){
        $req->session()->put('name', $req->input()['name']);
        $data= $req->session()->get('name');
        return $data;
        // $data=$req->session()->get('name');
        // if ($data->has('name')){
        //     return redirect(('auth'));
        // }else{
        //     return redirect(('Profile'));
        // }
        
    }
}
