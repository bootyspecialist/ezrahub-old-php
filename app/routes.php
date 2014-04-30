<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Index
Route::get('/', 'HomeController@showIndex');

//Threads
Route::get('thread/new', 'ThreadController@newThreadForm');
Route::post('thread/new', 'ThreadController@processNewThread');
Route::get('thread/{id}/{slug}', 'ThreadController@showThread');

//Replies
Route::post('thread/{id}/reply', 'ReplyController@processNewReply');

//User and login
Route::get('login', 'UserController@showLoginPage');
