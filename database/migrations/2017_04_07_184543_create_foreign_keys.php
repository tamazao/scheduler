<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Schedules', function(Blueprint $table) {
			$table->foreign('meeting_id')->references('id')->on('Meetings')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Attendees', function(Blueprint $table) {
			$table->foreign('schedule_id')->references('id')->on('Schedules')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('Schedules', function(Blueprint $table) {
			$table->dropForeign('Schedules_meeting_id_foreign');
		});
		Schema::table('Attendees', function(Blueprint $table) {
			$table->dropForeign('Attendees_schedule_id_foreign');
		});
	}
}