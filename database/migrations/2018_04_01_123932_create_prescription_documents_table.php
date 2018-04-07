<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrescriptionDocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prescription_documents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('prescription_id')->unsigned()->nullable()->index('fk_prescription_documents');
			$table->text('document', 65535)->nullable();
			$table->text('type', 65535)->nullable();
			$table->boolean('is_active')->nullable()->default(1);
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
		Schema::drop('prescription_documents');
	}

}
