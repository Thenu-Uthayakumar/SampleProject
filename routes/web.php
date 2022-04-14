<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\memberlistcontroller;
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
//Table View Path
Route::get("memberlistview",[memberlistcontroller::class,'show']);

//Insert Page Path
Route::view("addmember","addmember");
Route::post("addmember",[memberlistcontroller::class,'addmember']);

//Delete Path
Route::get("deletemember/{id}",[memberlistcontroller::class,'deletemember']);

//Update Page Path
Route::view("memberedit","memberedit");
//Update Path
Route::get("memberedit/{id}",[memberlistcontroller::class,'updatemember']);
Route::post("memberedit",[memberlistcontroller::class,'memberedit']);

//Search Path
Route::post("search-record",[memberlistcontroller::class,'search']);