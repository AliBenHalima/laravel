<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class testAPIFetch extends Controller
{
    function index(){
        $data = Http::get("https://jsonplaceholder.typicode.com/posts");
        return $data ;
    }
}
