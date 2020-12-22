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
Auth::routes([
	'reset' => false,
	'confirm' => false,
	'verify' => false,
]);
Route::post('/profile/upload_avatar', 'MainController@upload_avatar');
Route::get('/favorite_add/{slug}', 'MainController@favorite_add');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/', 'MainController@index');

Route::get('/profile', 'MainController@profile')->name('profile');
Route::get('/{jenre}/{movie}', 'MainController@movie_single');
Route::get('/{movie}', 'MainController@movie_single')->name('review');

Route::post('/review/check', 'MainController@review_check');

// Route::get('/movie/1', function () {
//     return view('movie_single');
// });

// Route::get('/profile', function () {
//     return view('profile');
// });



