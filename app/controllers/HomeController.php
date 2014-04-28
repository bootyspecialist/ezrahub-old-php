<?php

class HomeController extends BaseController {

	public function showIndex() {
		$threads = Thread::orderBy('updated_at', 'desc')->take(25)->get();
		return View::make('layout', array('page_title' => 'a forum for Cornell University students.'))->nest('content', 'home', array('threads' => $threads));
	}

}
