<?php

class ThreadController extends BaseController {

	public function newThreadForm() {
		//determine who the user will be
		$user = Hubizen::word(Request::getClientIp());
		return View::make('layout')->nest('content', 'newthreadform', array('user' => $user));
	}

	public function processNewThread() {
		$input = Input::all();
		$validator = Validator::make(
		    $input,
		    array(
		    	'title' => 'required|unique:threads|between:15,255',
		    	'body' => 'required|between:25,5000'
		    )
		);
		if ($validator->fails()) {
			return $validator->messages();
		} else {
			$thread = Thread::create(array(
				'title' => $input['title'],
				'body' => $input['body'],
				'user' => Hubizen::word(Request::getClientIp()),
				'ip_addr' => Request::getClientIp()
			));
			return Redirect::to('thread/' . $thread->id);
		}

	}

	public function viewThread($slug) {
		$thread = Thread::where('slug', $slug)->first();
		return View::make('layout')->nest('content', 'thread', array('thread' => $thread));
	}

	public function deleteThread() {

	}

}
