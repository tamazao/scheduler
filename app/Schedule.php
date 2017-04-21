<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model {

	protected $table = 'Schedules';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('Name', 'StartDate', 'EndDate', 'StartTime', 'EndTime', 'MaxAttendies', 'meeting_id');
	protected $visible = array('Name', 'StartDate', 'EndDate', 'StartTime', 'EndTime', 'MaxAttendies', 'meeting_id');

	public function Meetings()
	{
		return $this->belongsToMany('Meeting');
	}

	public function Attendees()
	{
		return $this->hasMany('App\Attendee');
	}

}
