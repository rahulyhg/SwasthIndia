<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTreatmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('treatments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->nullable();
			$table->integer('patient_id')->unsigned()->nullable()->index('fk_treatments');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('treatments');
	}

}
