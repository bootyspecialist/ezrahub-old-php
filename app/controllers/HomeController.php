<?php

class HomeController extends BaseController {

	public function showIndex() {
		$threads = Thread::orderBy('sticky', 'desc')->orderBy('updated_at', 'desc')->paginate(25);
		return View::make('layout', array('page_title' => 'a forum for Cornell University students.'))->nest('content', 'home', array('threads' => $threads));
	}

}
