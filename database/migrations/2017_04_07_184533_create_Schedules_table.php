<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchedulesTable extends Migration {

	public function up()
	{
		Schema::create('Schedules', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('Name')->nullable();
			$table->date('StartDate');
			$table->date('EndDate');
			$table->time('StartTime');
			$table->time('EndTime');
			$table->integer('MaxAttendies')->default('30');
			$table->integer('meeting_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Schedules');
	}
}