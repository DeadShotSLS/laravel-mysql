<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/task','TaskController@task');
Route::get('/login','PagesController@indexlogin');
Route::get('/register','PagesController@indexregister');
Route::get('/add_product','PagesController@indexadd');
Route::get('/update_product','PagesController@indexupdate');
Route::get('/view_product','PagesController@indexview');
Route::get('/all_product','PagesController@indexall');
Route::get('/markCompleted/{id}','TaskController@taskCompleted');
Route::get('/markNotCompleted/{id}','TaskController@taskNotCompleted');
Route::get('/taskDelete/{id}','TaskController@taskDelete');
Route::get('/taskUpdate/{id}','TaskController@taskUpdate');
Route::get('/logout','UserController@LogOut');

Route::post('/addProduct','productController@productAdd');
Route::post('/addTask','TaskController@taskAdd');
Route::post('/taskUpdates','TaskController@taskUpdates');
Route::post('/registerUser','UserController@RegisterUser');
Route::post('/loginUser','UserController@LoginUser');
