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

/**
 * TASK 
 */
Route::get('/task_list',  'TaskController@listAll')->name('task_list');

Route::get('/task_form',  'TaskController@create')->name('task_add');
Route::post('/task_valid',  'TaskController@valid')->name('task_valid');
Route::post('/task_modify',  'TaskController@modify')->name('task_modify');
Route::get('/task_update/{id_task}',  'TaskController@update')->name('task_update');
Route::get('/task_delete/{id_task}',  'TaskController@delete')->name('task_delete');


/**
 * TEST
 */
Route::get('/test2', function(){
    return view('test_2_template');
});
Route::get('/test', function(){
    return view('test_template');
});