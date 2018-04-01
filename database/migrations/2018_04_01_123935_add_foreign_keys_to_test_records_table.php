<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTestRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('test_records', function(Blueprint $table)
		{
			$table->foreign('patient_id', 'fk_patient_test_records')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('prescription_id', 'fk_prescription_test_records')->references('id')->on('prescriptions')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('test_id', 'fk_test_records')->references('id')->on('tests')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('test_records', function(Blueprint $table)
		{
			$table->dropForeign('fk_patient_test_records');
			$table->dropForeign('fk_prescription_test_records');
			$table->dropForeign('fk_test_records');
		});
	}

}
