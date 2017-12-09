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

Route::get('/', function(){
    return view('home');
});

Route::get('/welcom', function () {
    return view('welcome');
});

Route::get('/test', function (){
    return "test nbo !!";
})->name('test_nbo');

/*TASKS*/
Route::get('/task/list', 'TaskController@listTask')->name('task_list');
Route::get('/task/add', function (){
    return view('task.addTask');
})->name('addTask');
Route::match(['get', 'post'], 'task/update/{id}',[
    "as" => 'storetask',
    "uses" => 'TaskController@storeTask'
]);
Route::post('validtask', 'TaskController@validTask')->name('validtask');