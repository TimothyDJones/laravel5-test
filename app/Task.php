<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Task extends Model implements SluggableInterface
{
	use SluggableTrait;

	protected $sluggable = array(
		'build_from' => 'name',
		'save_to' => 'slug',
		'unique' => true,
	);
	
	protected $guarded = array();
	
    public function project() {
	return $this->belongsTo('App\Project');
    }
}
