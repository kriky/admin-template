<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');                 
                        $table->string('first_name');
                        $table->string('last_name');
                        $table->string('username')->unique();
                        $table->string('password');
                        $table->string('email');
                        $table->string('phone');
                        $table->string('per_hour');
                       	$table->timestamps();
                       	$table->string('remember_token');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
