<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $guarded = array();
	
    public function users() {
	return $this->hasMany('App\User');
    }
}
