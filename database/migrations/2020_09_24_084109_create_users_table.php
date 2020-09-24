<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('first_name');
			$table->string('last_name');
			$table->string('role')->default('user');
			$table->text('password');
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}