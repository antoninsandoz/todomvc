<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/test', function()
{
	echo "test";
});

Route::get('/test/{id}', function($id)
{
  echo $id;
 
});

Route::get('/test/view/{id}/{id2}', function($id,$id2)
{
  return View::make('test') ->with('id', $id) ->with('id2', $id2);
 
});

Route::get('/test/viewblade/{id}/{id2}', function($id,$id2)
{
  return View::make('testblade') ->with('id', $id) ->with('id2', $id2);
 
});

//Controller
Route::get('test/{id}', 'TestController@showTest');

//Formulaire creaton de taches
Route::get('tasks/create', array('as' => 'tasks_create', 'uses' => 'TasksController@create'));

//Formulaire creaton de taches
Route::post('tasks/store', array('as' => 'tasks_store', 'uses' => 'TasksController@store'));
 


