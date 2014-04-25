<?php

class Post extends Eloquent {

	protected $fillable = array('thread_id', 'body', 'user', 'ip_addr');

    public function setBodyAttribute($value) {
        $this->attributes['body'] = htmlspecialchars(trim($value));
    }

}
