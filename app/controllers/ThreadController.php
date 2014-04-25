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
		    	'body' => 'required|between:5,5000'
		    )
		);
		if ($validator->fails()) {
			return $validator->messages();
		} else {
			$thread = Thread::create(array(
				'body' => $input['body'],
				'user' => Hubizen::word(Request::getClientIp()),
				'ip_addr' => Request::getClientIp()
			));
			return Redirect::to('thread/' . $thread->id);
		}

	}

	public function deleteThread() {

	}

}
