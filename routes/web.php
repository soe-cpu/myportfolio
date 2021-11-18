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

//Frontend
Route::get('/','FrontendController@index');

//Backend
Route::group(['prefix' => 'admin','middleware' => ['auth','isAdmin']],function(){
    //Dashboard
    Route::get('/dashboard','Backend\BackendController@index');

    //User
    Route::get('/users','Backend\UserController@index');
    Route::get('/users/edit/{id}','Backend\UserController@edit');
    Route::post('/users/update/{id}','Backend\UserController@update');
    Route::post('/users/delete/{id}','Backend\UserController@delete');

    //Skill
    Route::resource('skills','Backend\SkillController');

    //Project
    Route::resource('projects','Backend\ProjectController');
});
// 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
