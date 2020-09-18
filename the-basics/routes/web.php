<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::put('/form', function () {
	$crout = Route::current();
	echo '<pre>';print_r($crout->uri);echo '</pre>';
	exit();
    return 'This is form data';
});

Route::view('/first', 'components.first',['name' => 'Bipin']);

Route::get('foo', function () {
    return 'Hello World';
});

Route::redirect('/foo', '/');

// http://127.0.0.1:8000/user/12/bipin
// Put Question mark at the end to set it optional and also set null to the function parameter
// Route::get('user/{id}/{name?}/', function ($id,$name = null) {
//     return 'User '.$id .' and name is '.$name ;
// });
// ->where(['id', '[0-9]+', 'name' => '[A-Za-z0-9]+']); instead of this 

// In RouteServiceProvider.php
// Route::pattern('id', '[0-9]+'); now id will accept only numeric value



// // http://127.0.0.1:8000/user/12/bipin
// Route::get('user/{id}/', function ($id) {
//     return 'User '.$id;
// });

// Route::get('user/{name?}', function ($name = null) {
//     return $name;
// });

Route::get('search/{search}/', function ($search) {
    return $search;
})->where('search', '.*');

Route::get('user/{id}/profile', function ($id) {
    //
    return $id;
})->name('profile');

// http://127.0.0.1:8000/admin/users
Route::prefix('admin')->group(function () {
    Route::get('users/{id?}', function ($id = null) {
        // Matches The "/admin/users" URL
        return 'User Id '. $id;
    });
});
use App\Http\Middleware\CheckAge;

Route::get('admin/profile/{age}', function ($age) {
    //
})->middleware(CheckAge::class);

Route::fallback(function () {
    //
    return 'This is fallback ';
});