<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPrescriptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('prescriptions', function(Blueprint $table)
		{
			$table->foreign('doctor_id', 'fk_doctors_prescription')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
//			$table->foreign('patient_id', 'fk_patient_prescriptions')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('treatment_id', 'fk_treatment_prescription')->references('id')->on('treatments')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('prescriptions', function(Blueprint $table)
		{
			$table->dropForeign('fk_doctors_prescription');
			$table->dropForeign('fk_patient_prescriptions');
			$table->dropForeign('fk_treatment_prescription');
		});
	}

}
