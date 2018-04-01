<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTestRecordDucumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('test_record_ducuments', function(Blueprint $table)
		{
			$table->foreign('test_record_id', 'fk_test_record_ducuments')->references('id')->on('test_records')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('test_record_ducuments', function(Blueprint $table)
		{
			$table->dropForeign('fk_test_record_ducuments');
		});
	}

}
