<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendee extends Model {

	protected $table = 'Attendees';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('FirstName', 'LastName', 'Attended', 'schedule_id');
	protected $visible = array('FirstName', 'LastName', 'Attended');

	public function Schedules()
	{
		return $this->belongsTo('Schedule');
	}

}
