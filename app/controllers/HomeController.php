<?php

class HomeController extends BaseController {

	public function showIndex() {
		$threads = Thread::orderBy('updated_at', 'desc')->take(25)->get();
		return View::make('layout')->nest('content', 'home', array('threads' => $threads));
	}

}
