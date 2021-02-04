<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/test', 'test', ['name' => '<b>Taylor<b>','lname'=>'Jonas']);
Route::view('/condition', 'if-con', ['name' => '<b>Taylor<b>','lname'=>'Jonas']);
Route::view('/switch-case', 'switch-case', ['name' => '<b>Taylor<b>','lname'=>'Jonas']);
Route::view('/form', 'form', ['name' => 'Taylor']);
Route::get('blade', function () {
    return view('child',['name' => 'Bipin']);
});
