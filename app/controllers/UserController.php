<?php

class UserController extends BaseController {

	public function showLoginPage() {
		return View::make('layout', array('page_title' => 'Log in'))->nest('content', 'login');
	}

	public function loginWithFacebook() {
	    $code = Input::get('code');
	    $fb = OAuth::consumer('Facebook');
	    if (!empty($code)) {
	        $token = $fb->requestAccessToken($code);
	        $result = json_decode($fb->request('/me'), true);
	        $message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
	        echo $message;
	        dd($result);
	    } else {
	        $url = $fb->getAuthorizationUri();
	         return Redirect::to((string)$url);
	    }
	}

}
