<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Project extends Model implements SluggableInterface
{
	use SluggableTrait;
	
	protected $sluggable = array(
		'build_from' => 'name',
		'save_to' => 'slug',
		'unique' => true,
	);
	
	protected $guarded = array();
	
    public function tasks() {
	return $this->hasMany('App\Task');
    }
}
