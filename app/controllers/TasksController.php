<?php

class TasksController extends BaseController {

	/*
	TEST controller
	*/

	public function create()
	{   

    return View::make('tasks.create');
	}
  
  public function store()
	{   

    Task::create(Input::all());
    //return Redirect::route('tasks.create');
    return View::make('tasks.create');
	}

}