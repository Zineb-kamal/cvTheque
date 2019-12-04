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
Route::get('/getExps','CvController@getExps');
Auth::routes();
//Route::group(['middleware'=>['auth']],function(){
//Route::get('cvs','CvController@index')->name('cvs')->middleware('auth');
Route::get('cvs/create','CvController@create')->name('cvs/create')->middleware('auth');

});
//les route de crud
/*Route::post('cvs','CvController@store');
Route::get('cvs/{id}/edit','CvController@edit');
Route::put('cvs/{id}/update','CvController@update');
Route::delete('cvs/{id}/destory','CvController@destory');*/
Route::resource('cvs','CvController');

//-------
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Acceuil',function(){
	return view('acceuil');
});