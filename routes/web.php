<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/', function () {
    return view('test');
});

Route::get('/users',"Users@index");

// Route::post('userPost',"HTTPRequests@index");

Route::get('/fetchdata',"testAPIFetch@index");
Route::view('profile',"Profile");

Route::view('auth',"userform");

// Route::view('login','userform');
Route::post('login','Login@index');
// Route::view('profile',"Profile");

Route::get('profile',function(){
    if(!session()->has('data')){
       return  redirect('auth');
    }
    return  view('profile');
});

Route::get('logout',function(){
    session()->forget('data');
    return redirect("auth");
});

Route::get('fetch',"Db@index");
Route::view('signup',"signup");
Route::post('SignUp','SignUp@index');
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Second App

Route::resource('blog','BlogController');
Route::view('dashboard',"dashboard");