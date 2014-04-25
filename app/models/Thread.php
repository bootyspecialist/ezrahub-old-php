<?php

class Thread extends Eloquent {

	protected $fillable = array('body', 'user', 'ip_addr');

    public function setBodyAttribute($value) {
        $this->attributes['body'] = htmlspecialchars(trim($value));
    }

}
