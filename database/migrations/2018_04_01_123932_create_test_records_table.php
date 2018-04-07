<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTestRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('test_records', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('test_id')->unsigned()->nullable()->index('fk_test_records');
			$table->integer('prescription_id')->unsigned()->nullable()->index('fk_prescription_test_records');
			$table->integer('patient_id')->unsigned()->nullable()->index('fk_patient_test_records');
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
		Schema::drop('test_records');
	}

}
