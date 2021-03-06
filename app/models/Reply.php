<?php

class Reply extends Eloquent {

	protected $fillable = array('thread_id', 'body', 'user', 'ip_addr', 'location');

    public function setBodyAttribute($value) {
        $this->attributes['body'] = htmlspecialchars(trim($value));
    }

    public function getBodyAttribute($value) {
        return BBCoder::convert($value, 'ezrahub');
    }

    public function thread() {
        return $this->belongsTo('Thread');
    }

}
