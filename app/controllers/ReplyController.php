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
		    	'body' => 'required|between:3,2500',
		    	'sckey' => 'sweetcaptcha'
		    )
		);
		if ($validator->fails()) {
			return Redirect::to('thread/' . $thread->id . '/' . $thread->slug)->withInput()->withErrors($validator);
		} else {
			$reply = Reply::create(array(
				'thread_id' => $thread->id,
				'body' => $input['body'],
				'user' => Hubizen::word(Request::getClientIp()),
				'ip_addr' => Request::getClientIp(),
				'location' => $location['city']
			));
			Slotmachine::sloot($thread, $reply);
			Fratstar::butt_chug($thread, $reply);
			if ($input['nope'] != 'nope') {
				$thread->touch();
			}
			return Redirect::to('thread/' . $thread->id . '/' . $thread->slug);
		}

	}

}
