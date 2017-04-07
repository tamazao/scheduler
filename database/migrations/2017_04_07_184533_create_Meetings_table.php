<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMeetingsTable extends Migration {

	public function up()
	{
		Schema::create('Meetings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('Name');
			$table->string('Status');
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Meetings');
	}
}