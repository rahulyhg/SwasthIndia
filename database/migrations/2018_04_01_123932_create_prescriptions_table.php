<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrescriptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prescriptions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('patient_id')->unsigned()->index('fk_patient_prescriptions');
			$table->integer('doctor_id')->unsigned()->nullable()->index('fk_doctors_prescription');
			$table->string('doctor_name')->nullable();
			$table->string('hospital_name')->nullable();
			$table->integer('treatment_id')->unsigned()->nullable()->index('fk_treatment_prescription');
			$table->text('description', 65535)->nullable();
			$table->dateTime('prescripted_at')->nullable();
			$table->boolean('is_active')->default(1);
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
		Schema::drop('prescriptions');
	}

}
