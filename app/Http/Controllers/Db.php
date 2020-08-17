<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class Db extends Controller
{
    function index(){
        return FacadesDB::select("select * from users");
    }
}
