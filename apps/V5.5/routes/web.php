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
Route::get('/task_add', function(){
    return view('task.task_form');
});

Route::get('/test2', function(){
    return view('test_2_template');
});
Route::get('/test', function(){
    return view('test_template');
});