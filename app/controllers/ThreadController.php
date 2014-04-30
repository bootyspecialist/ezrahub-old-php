<?php

class ThreadController extends BaseController {

	public function newThreadForm() {
		$user = Hubizen::word(Request::getClientIp());
		return View::make('layout', array('page_title' => 'New thread'))->nest('content', 'newthreadform', array('user' => $user));
	}

	public function processNewThread() {
		$input = Input::all();
		$location = GeoIP::getLocation(Request::getClientIp());
		$validator = Validator::make(
		    $input,
		    array(
		    	'title' => 'required|unique:threads|between:15,255',
		    	'body' => 'required|between:25,5000',
		    	'sckey' => 'sweetcaptcha'
		    )
		);
		if ($validator->fails()) {
			return $validator->messages();
		} else {
			$thread = Thread::create(array(
				'title' => $input['title'],
				'body' => $input['body'],
				'user' => Hubizen::word(Request::getClientIp()),
				'ip_addr' => Request::getClientIp(),
				'location' => $location['city']
			));
			return Redirect::to('thread/' . $thread->id . '/' . $thread->slug);
		}

	}

	public function viewThread($id, $slug) {
		$thread = Thread::where('id', $id)->first();
		$thread->timestamps = false;
		$thread->views = $thread->views + rand(1, 3);
		$thread->save();
		$user = Hubizen::word(Request::getClientIp());
		return View::make('layout', array('page_title' => '#' . $thread->id . ' - ' . $thread->title))->nest('content', 'thread', array('thread' => $thread, 'user' => $user));
	}

	public function deleteThread() {

	}

}
