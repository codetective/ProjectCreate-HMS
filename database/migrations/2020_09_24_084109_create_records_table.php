<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecordsTable extends Migration {

	public function up()
	{
		Schema::create('records', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('added_by')->unsigned();
			$table->string('patient_name');
			$table->string('patient_condition');
		});
	}

	public function down()
	{
		Schema::drop('records');
	}
}