<?php

class TestController extends BaseController {

	/*
	TEST controller
	*/

	public function showTest($id)
	{   
		return View::make('test', array('id' => $id));
	}

}