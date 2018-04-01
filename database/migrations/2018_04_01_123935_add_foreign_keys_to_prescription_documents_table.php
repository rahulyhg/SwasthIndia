<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPrescriptionDocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('prescription_documents', function(Blueprint $table)
		{
			$table->foreign('prescription_id', 'fk_prescription_documents')->references('id')->on('prescriptions')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('prescription_documents', function(Blueprint $table)
		{
			$table->dropForeign('fk_prescription_documents');
		});
	}

}
