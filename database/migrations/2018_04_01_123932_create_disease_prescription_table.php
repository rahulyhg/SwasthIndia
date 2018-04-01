<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiseasePrescriptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('disease_prescription', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('disease_id')->unsigned()->index('fk_disease_prescription');
			$table->integer('prescription_id')->unsigned()->index('fk_disease_prescriptions');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('disease_prescription');
	}

}
