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

Route::get('/', function () {
    return view('home');
});

Route::get('/register', 'App\Http\Controllers\RegistrationController@create');
Route::post('register', 'App\Http\Controllers\RegistrationController@store');


Route::get('/login', 'App\Http\Controllers\LoginController@create');
Route::post('/login', 'App\Http\Controllers\LoginController@login');

Route::get('/logout', 'App\Http\Controllers\LoginController@destroy');

Route::get('user/{id}', function ($id) {
	if( auth()->check() )
	{
		$users = DB::select('select * from users where id = :id', ['id' => $id]);
		if(!empty($users)){
			return view('profile', ['users' => $users]);
		}else{
			return "404 page!'";
		}
	}else{
		return "404 page!'";
	}
});

Route::get('/admin-dashboard', function () {
	
	if( auth()->check() ){
		if(auth()->user()->role == 1) {
			$users = DB::select('select * from users');
            return view('admindashboard', ['users' => $users]);
		}else{
			return "404 page!'";
		}
	}else{
		return "404 page!'";
	}
});

Route::get('/user-list', function () {
	if( auth()->check() ){
		if(auth()->user()->role == 1) {
            return view('userlist');
		}else{
			return "404 page!'";
		}
	}else{
		return "404 page!'";
	}
});

Route::post('updateuser', 'App\Http\Controllers\ApiController@UpdateUser');
Route::post('deleteuser', 'App\Http\Controllers\ApiController@DeleteUser');
Route::get('getuser', 'App\Http\Controllers\ApiController@GetUser');


Route::fallback(function () {
    return "404 page!'";
});