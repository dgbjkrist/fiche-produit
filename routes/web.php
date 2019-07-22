<?php

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

// Route::post('/', 'ProductController@saveproduct');


// Route::get('/', function () {
//     return view('shop_layouts.index');
// });

Route::get('/signup', function() {
	return view('user_layouts.signup');
}
// [
//     'uses'  => 'UserController@getSignup',
//     'as'    => 'user_layouts.signup'
// ]
);

// Route::post('/signup', [
//     'uses'  => 'UserController@postSignup',
//     'as'    => 'user_layouts.signup'
// ]);

Route::post('/signup', 'UserController@postSignup');

Route::get('/test', function() {
	return view('test');
});

Route::post('/test', 'UserController@postSignup');