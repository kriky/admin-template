<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkHoursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('work_hours', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->dateTime('date');
			$table->time('start');
			$table->time('end');
			$table->time('sum');
			$table->text('desc');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('work_hours');
	}

}
