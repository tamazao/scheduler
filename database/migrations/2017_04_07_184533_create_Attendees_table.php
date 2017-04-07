<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttendeesTable extends Migration {

	public function up()
	{
		Schema::create('Attendees', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('FirstName');
			$table->string('LastName');
			$table->boolean('Attended');
			$table->integer('schedule_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Attendees');
	}
}