<?php

class HomeController extends BaseController {

	public function showIndex() {
		return View::make('layout')->nest('content', 'home');
	}

}
