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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware('role:superadministrator|administrator|manager')->group(function(){
  Route::get('/', 'ManageController@index')->name('admin_dash');
  Route::get('/posts/edit', 'PostController@edit');
  Route::get('/posts/create', 'PostController@create');
  Route::get('/posts/delete', 'PostController@delete');

  Route::post('/role/submit', 'ManageController@role_sumbmit')->name('add.role');
  Route::post('/permission/submit', 'ManageController@permission_submit')->name('add.permission');
  Route::post('/user/submit', 'ManageController@user_submit')->name('add.user');

  Route::get('/role/permissions/{id}', 'ManageController@assign_permissions');
  Route::post('/role/permissions/submit', 'ManageController@assign_permissions_submit')->name('assign_permissions');

});
