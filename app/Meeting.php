<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meeting extends Model {

	protected $table = 'Meetings';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('Name', 'Status');
	protected $visible = array('Name', 'Status');

	public function schedules()
	{
		return $this->hasMany('Schedule');
	}

	public function Users()
	{
		return $this->belongsTo('User');
	}

}
