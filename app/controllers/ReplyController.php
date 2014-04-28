<?php

class ReplyController extends BaseController {

	public function processNewReply($id) {
		$input = Input::all();
		$thread = Thread::find($id);
		if (!$thread) {
			return Redirect::to('/');
		}
		$location = GeoIP::getLocation(Request::getClientIp());
		$validator = Validator::make(
		    $input,
		    array(
		    	'body' => 'required|between:3,2500'
		    )
		);
		if ($validator->fails()) {
			return $validator->messages();
		} else {
			$reply = Reply::create(array(
				'thread_id' => $id,
				'body' => $input['body'],
				'user' => Hubizen::word(Request::getClientIp()),
				'ip_addr' => Request::getClientIp(),
				'location' => $location['city']
			));
			$thread->touch();
			return Redirect::to('thread/' . $thread->id . '/' . $thread->slug);
		}

	}

}
