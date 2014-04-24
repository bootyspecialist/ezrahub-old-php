<?php

class ThreadController extends BaseController {

	public function newThreadForm() {
		return View::make('layout')->nest('content', 'newthreadform');
	}

	public function processNewThread() {

	}

	public function deleteThread() {

	}

}
