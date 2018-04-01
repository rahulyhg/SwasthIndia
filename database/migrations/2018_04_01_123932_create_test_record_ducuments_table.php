<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTestRecordDucumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('test_record_ducuments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('test_record_id')->unsigned()->index('fk_test_record_ducuments');
			$table->text('document', 65535)->nullable();
			$table->string('type', 100)->nullable();
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
		Schema::drop('test_record_ducuments');
	}

}
