<?php

class PostController extends BaseController {

	public function showWelcome() {
		return View::make('hello');
	}

}
