<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDiseasePrescriptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('disease_prescription', function(Blueprint $table)
		{
			$table->foreign('disease_id', 'fk_disease_prescription')->references('id')->on('disease')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('prescription_id', 'fk_disease_prescriptions')->references('id')->on('prescriptions')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('disease_prescription', function(Blueprint $table)
		{
			$table->dropForeign('fk_disease_prescription');
			$table->dropForeign('fk_disease_prescriptions');
		});
	}

}
